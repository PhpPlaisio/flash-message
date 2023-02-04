<?php
declare(strict_types=1);

namespace Plaisio\FlashMessage;

/**
 * Interface for flash messages.
 */
interface FlashMessage
{
  //--------------------------------------------------------------------------------------------------------------------
  /**
   * Object constructor.
   *
   * @param string $message The payload of the flash message.
   * @param bool   $isHtml  Whether the message is an HTML snippet or plain text.
   */
  public function __construct(string $message, bool $isHtml = false);

  //--------------------------------------------------------------------------------------------------------------------
  /**
   * Adds a class to the list of classes.
   *
   * @param string|null $class The class.
   *
   * @return static
   */
  public function addClass(?string $class): self;

  //--------------------------------------------------------------------------------------------------------------------
  /**
   * Returns the first weight for sorting.
   *
   * @return int
   */
  public function getWeight1(): int;

  //--------------------------------------------------------------------------------------------------------------------
  /**
   * Returns the second weight for sorting.
   *
   * @return int
   */
  public function getWeight2(): int;

  //--------------------------------------------------------------------------------------------------------------------
  /**
   * Returns the HTML code of this flash message.
   *
   * @return string
   */
  public function htmlFlashMessage(): string;

  //--------------------------------------------------------------------------------------------------------------------
  /**
   * Returns true if and only if this flash message must be dismissed automatically.
   *
   * @return bool
   */
  public function isAutoDismiss(): bool;

  //--------------------------------------------------------------------------------------------------------------------
  /**
   * Returns true if and only if this flash message must be shown one and hence removed automatically from the
   * collection of flash messages when shown.
   *
   * @return bool
   */
  public function isOnce(): bool;

  //--------------------------------------------------------------------------------------------------------------------
  /**
   * Sets a [data](http://www.w3schools.com/tags/att_global_data.asp) attribute.
   *
   * @param string      $name  The name of the attribute (without 'data-').
   * @param string|null $value The attribute value.
   *
   * @return static
   */
  public function setAttrData(string $name, ?string $value): self;

  //--------------------------------------------------------------------------------------------------------------------
  /**
   * Sets the attribute [id](http://www.w3schools.com/tags/att_global_id.asp).
   *
   * @param string|null $value The attribute value.
   *
   * @return static
   */
  public function setAttrId(?string $value): self;

  //--------------------------------------------------------------------------------------------------------------------
  /**
   * Sets the first weight for sorting.
   *
   * @param int $weight1 The first weight for sorting.
   *
   * @return static
   */
  public function setWeight1(int $weight1): self;

  //--------------------------------------------------------------------------------------------------------------------
  /**
   * Sets the second weight for sorting.
   *
   * @param int $weight2 The second weight for sorting.
   *
   * @return static
   */
  public function setWeight2(int $weight2): self;

  //--------------------------------------------------------------------------------------------------------------------
}

//----------------------------------------------------------------------------------------------------------------------
