<?php
declare(strict_types=1);

namespace Plaisio\FlashMessage;

/**
 * Interface for a collection of flash messages.
 */
interface FlashMessageCollection
{
  //--------------------------------------------------------------------------------------------------------------------
  /**
   * Adds assets to the asset helper object for web assets.
   */
  public function addAssets(): void;

  //--------------------------------------------------------------------------------------------------------------------
  /**
   * Adds a flash message.
   *
   * @param FlashMessage $flashMessage rge flash message.
   *
   * @return static
   */
  public function addFlashMessage(FlashMessage $flashMessage): self;

  //--------------------------------------------------------------------------------------------------------------------
  /**
   * Creates a flash messages and adds it to this collection of flash massages.
   *
   * @param string $type    The type of the flash message. At least the following types are available:
   *                        <ul>
   *                        <li>success
   *                        <li>error
   *                        <li>warning
   *                        <li>info
   *                        </ul>
   *                        Or the name of a class that implements the FlashMessage interface.
   * @param string $message The payload of the flash message.
   * @param bool   $isHtml  Whether the message is an HTML snippet or plain text.
   *
   * @return FlashMessage
   */
  public function create(string $type, string $message, bool $isHtml = false): FlashMessage;

  //--------------------------------------------------------------------------------------------------------------------
  /**
   * Returns the HTML code of all flash messages.
   *
   * @return string
   */
  public function htmlFlashMessages(): string;

  //--------------------------------------------------------------------------------------------------------------------
  /**
   * Removes a flash message from this collection of flash messages given the ID of the flash message.
   *
   * @param string $id The ID of the flash message.
   */
  public function removeFlashMessage(string $id): void;

  //--------------------------------------------------------------------------------------------------------------------
}

//----------------------------------------------------------------------------------------------------------------------
