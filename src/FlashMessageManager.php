<?php
declare(strict_types=1);

namespace Plaisio\FlashMessage;

/**
 * Interface for flash message mangers.
 */
interface FlashMessageManager
{
  //--------------------------------------------------------------------------------------------------------------------
  /**
   * Adds assets to the assets helper object for web assets.
   */
  public function addAssets(): void;

  //--------------------------------------------------------------------------------------------------------------------
  /**
   * Adds a flash message.
   *
   * @param FlashMessage $flashMessage rge flash message.
   *
   * @return $this
   */
  public function addFlashMessage(FlashMessage $flashMessage);

  //--------------------------------------------------------------------------------------------------------------------
  /**
   * Creates a flash messages and adds it to the list of flash massages.
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
   * @param bool   $isHtml  If set the message is a HTML snippet, otherwise special characters in the inner text will be
   *                        replaced with HTML entities.
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
  public function getHtml(): string;

  //--------------------------------------------------------------------------------------------------------------------
}

//----------------------------------------------------------------------------------------------------------------------
