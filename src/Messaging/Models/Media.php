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
class Media implements \JsonSerializable
{
    /**
     * @todo Write general description for this property
     * @var string|null $content public property
     */
    public $content;

    /**
     * @todo Write general description for this property
     * @var integer|null $contentLength public property
     */
    public $contentLength;

    /**
     * @todo Write general description for this property
     * @var string|null $mediaName public property
     */
    public $mediaName;

    /**
     * Constructor to set initial or default values of member properties
     */
    public function __construct()
    {
        if (3 == func_num_args()) {
            $this->content       = func_get_arg(0);
            $this->contentLength = func_get_arg(1);
            $this->mediaName     = func_get_arg(2);
        }
    }

    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['content']       = $this->content;
        $json['contentLength'] = $this->contentLength;
        $json['mediaName']     = $this->mediaName;

        return array_filter($json);
    }
}
