<?php
/*
 * BandwidthLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace BandwidthLib\Messaging\Models;

/**
 * @todo Write general description for this model
 */
class MessageRequest implements \JsonSerializable
{
    /**
     * The ID of the Application your from number is associated with in the Bandwidth Phone Number
     * Dashboard.
     * @required
     * @var string $applicationId public property
     */
    public $applicationId;

    /**
     * The phone number(s) the message should be sent to in E164 format
     * @required
     * @var array $to public property
     */
    public $to;

    /**
     * One of your telephone numbers the message should come from in E164 format
     * @required
     * @var string $from public property
     */
    public $from;

    /**
     * The contents of the text message. Must be 2048 characters or less.
     * @var string|null $text public property
     */
    public $text;

    /**
     * A list of URLs to include as media attachments as part of the message.
     * @var array|null $media public property
     */
    public $media;

    /**
     * A custom string that will be included in callback events of the message. Max 1024 characters
     * @var string|null $tag public property
     */
    public $tag;

    /**
     * The message's priority, currently for toll-free or short code SMS only. Messages with a priority
     * value of `"high"` are given preference over your other traffic.
     * @var string|null $priority public property
     */
    public $priority;

    /**
     * Constructor to set initial or default values of member properties
     */
    public function __construct()
    {
        if (7 == func_num_args()) {
            $this->applicationId = func_get_arg(0);
            $this->to            = func_get_arg(1);
            $this->from          = func_get_arg(2);
            $this->text          = func_get_arg(3);
            $this->media         = func_get_arg(4);
            $this->tag           = func_get_arg(5);
            $this->priority      = func_get_arg(6);
        }
    }

    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['applicationId'] = $this->applicationId;
        $json['to']            = array_values($this->to);
        $json['from']          = $this->from;
        $json['text']          = $this->text;
        $json['media']         = isset($this->media) ?
            array_values($this->media) : null;
        $json['tag']           = $this->tag;
        $json['priority']      = $this->priority;

        return array_filter($json);
    }
}
