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
class NotificationOptions
{
    /**
     * @param array|object $properties
     */
    public function __construct($properties = null)
    {
        $properties = is_object($properties) ? $properties : (is_array($properties) ? (object) $properties: null);
        if (is_object($properties)) {
            foreach (get_object_vars($properties) as $property => $value) {
                $this->$property = $value;
            }
        }
    }
}