<?php
/*
 * BandwidthLib
 *
 * This file was automatically generated by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace BandwidthLib\Voice\Models;

/**
 * @todo Write general description for this model
 */
class ApiTranscribeRecordingRequest implements \JsonSerializable
{
    /**
     * @todo Write general description for this property
     * @var string|null $callbackUrl public property
     */
    public $callbackUrl;

    /**
     * @todo Write general description for this property
     * @var string|null $callbackMethod public property
     */
    public $callbackMethod;

    /**
     * @todo Write general description for this property
     * @var string|null $username public property
     */
    public $username;

    /**
     * @todo Write general description for this property
     * @var string|null $password public property
     */
    public $password;

    /**
     * @todo Write general description for this property
     * @var string|null $tag public property
     */
    public $tag;

    /**
     * @todo Write general description for this property
     * @var double|null $callbackTimeout public property
     */
    public $callbackTimeout;

    /**
     * Constructor to set initial or default values of member properties
     */
    public function __construct()
    {
        if (6 == func_num_args()) {
            $this->callbackUrl     = func_get_arg(0);
            $this->callbackMethod  = func_get_arg(1);
            $this->username        = func_get_arg(2);
            $this->password        = func_get_arg(3);
            $this->tag             = func_get_arg(4);
            $this->callbackTimeout = func_get_arg(5);
        }
    }

    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['callbackUrl']     = $this->callbackUrl;
        $json['callbackMethod']  = $this->callbackMethod;
        $json['username']        = $this->username;
        $json['password']        = $this->password;
        $json['tag']             = $this->tag;
        $json['callbackTimeout'] = $this->callbackTimeout;

        return array_filter($json);
    }
}
