<?php namespace Wongyip\PhpJavascriptBridge\WebAPI\Notification;

/**
 * Options for Javascipt Notification object representation.
 * 
 * N.B. this is made available here for easy of references only.
 * 
 * @see https://developer.mozilla.org/en-US/docs/Web/API/Notification/Notification
 * @author wongyip
 *
 */
class NotificationOptionsReference
{
    /**
     * The direction in which to display the notification. It defaults to auto, which just adopts the browser's language setting behavior, but you can override that behavior by setting values of ltr and rtl (although most browsers seem to ignore these settings.)
     * 
     * @var string
     */
	public $dir = 'auto';
    /**
     * The notification's language, as specified using a DOMString representing a BCP 47 language tag. See the Sitepoint ISO 2 letter language codes page for a simple reference.
     * 
     * @see https://www.sitepoint.com/iso-2-letter-language-codes/
     * 
     * @var string
     */
	public $lang;
	/**
	 * A USVString containing the URL of the image used to represent the notification when there isn't enough space to display the notification itself.
     * 
     * @see https://developer.mozilla.org/en-US/docs/Web/API/USVString
     * 
     * @var USVString
	 */
	public $badge;
    /**
     * A DOMString representing the body text of the notification, which is displayed below the title.
     * 
     * @see https://developer.mozilla.org/en-US/docs/Web/API/DOMString
     * 
     * @var DOMString
     */
	public $body;
    /**
     * A DOMString representing an identifying tag for the notification.
     * 
     * @see https://developer.mozilla.org/en-US/docs/Web/API/DOMString
     * 
     * @var DOMString
     */
	public $tag;
    /**
     * A USVString containing the URL of an icon to be displayed in the notification.
     * 
     * @see https://developer.mozilla.org/en-US/docs/Web/API/USVString
     * 
     * @var USVString
     */
	public $icon;
    /**
     * a USVString containing the URL of an image to be displayed in the notification.
     * 
     * @see https://developer.mozilla.org/en-US/docs/Web/API/USVString
     * 
     * @var USVString
     */
	public $image;
    /**
     * Arbitrary data that you want associated with the notification. This can be of any data type.
     * @var mixed
     */
	public $data;
    /**
     * A vibration pattern for the device's vibration hardware to emit with the notification.
     * 
     * @see https://developer.mozilla.org/en-US/docs/Web/API/Vibration_API#vibration_patterns
     * 
     * @var integer|integer[]
     */
	public $vibrate;
    /**
     * A boolean value specifying whether the user should be notified after a new notification replaces an old one. The default is false, which means they won't be notified.
     * @var boolean
     */
	public $renotify = false;
    /**
     * Indicates that a notification should remain active until the user clicks or dismisses it, rather than closing automatically. The default value is false.
     * @var boolean
     */
	public $requireInteraction = false;
    /**
     * An array of NotificationActions representing the actions available to the user when the notification is presented. These are options the user can choose among in order to act on the action within the context of the notification itself. The action's name is sent to the service worker notification handler to let it know the action was selected by the user.
     * @var NotificationAction[]
     */
	public $actions;
    /**
     * A boolean value specifying whether the notification is silent (no sounds or vibrations issued), regardless of the device settings. The default is false, which means it won't be silent.
     * @var boolean
     */
	public $silent;
}