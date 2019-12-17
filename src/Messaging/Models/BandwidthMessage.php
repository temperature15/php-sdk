<?php
/*
 * BandwidthLib
 *
 * This file was automatically generated by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace BandwidthLib\Messaging\Models;

/**
 * @todo Write general description for this model
 */
class BandwidthMessage implements \JsonSerializable
{
    /**
     * @todo Write general description for this property
     * @var string|null $id public property
     */
    public $id;

    /**
     * @todo Write general description for this property
     * @var string|null $owner public property
     */
    public $owner;

    /**
     * @todo Write general description for this property
     * @var string|null $applicationId public property
     */
    public $applicationId;

    /**
     * @todo Write general description for this property
     * @var string|null $time public property
     */
    public $time;

    /**
     * @todo Write general description for this property
     * @var string|null $segmentCount public property
     */
    public $segmentCount;

    /**
     * @todo Write general description for this property
     * @var string|null $direction public property
     */
    public $direction;

    /**
     * @todo Write general description for this property
     * @var array|null $to public property
     */
    public $to;

    /**
     * @todo Write general description for this property
     * @var string|null $from public property
     */
    public $from;

    /**
     * @todo Write general description for this property
     * @var array|null $media public property
     */
    public $media;

    /**
     * @todo Write general description for this property
     * @var string|null $text public property
     */
    public $text;

    /**
     * @todo Write general description for this property
     * @var string|null $tag public property
     */
    public $tag;

    /**
     * Constructor to set initial or default values of member properties
     */
    public function __construct()
    {
        if (11 == func_num_args()) {
            $this->id            = func_get_arg(0);
            $this->owner         = func_get_arg(1);
            $this->applicationId = func_get_arg(2);
            $this->time          = func_get_arg(3);
            $this->segmentCount  = func_get_arg(4);
            $this->direction     = func_get_arg(5);
            $this->to            = func_get_arg(6);
            $this->from          = func_get_arg(7);
            $this->media         = func_get_arg(8);
            $this->text          = func_get_arg(9);
            $this->tag           = func_get_arg(10);
        }
    }

    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['id']            = $this->id;
        $json['owner']         = $this->owner;
        $json['applicationId'] = $this->applicationId;
        $json['time']          = $this->time;
        $json['segmentCount']  = $this->segmentCount;
        $json['direction']     = $this->direction;
        $json['to']            = $this->to;
        $json['from']          = $this->from;
        $json['media']         = $this->media;
        $json['text']          = $this->text;
        $json['tag']           = $this->tag;

        return array_filter($json);
    }
}
