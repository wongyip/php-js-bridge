<?php namespace Wongyip\PhpJavascriptBridge\WebAPI\Notification;

class Notification
{
    /**
     * @var string
     */
    public $title;
    
    /**
     * @var NotificationOptions
     */
    public $options;
    
    /**
     * Javascipt Notification object representation.
     *
     * @see https://developer.mozilla.org/en-US/docs/Web/API/Notification/Notification
     * @see NotificationOptions for available oppions.
     * 
     * @param string $title
     * @param array|object $options
     */
    public function __construct($title, $options = null)
    {
        $this->options = new NotificationOptions($options);
    }
    
    /**
     * @return \Wongyip\PhpJavascriptBridge\WebAPI\Notification\NotificationOptionsReference
     */
    static function optionsRefeerence()
    {
        return new NotificationOptionsReference();
    }
}