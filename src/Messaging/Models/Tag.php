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
class Tag implements \JsonSerializable
{
    /**
     * @todo Write general description for this property
     * @var string|null $key public property
     */
    public $key;

    /**
     * @todo Write general description for this property
     * @var string|null $value public property
     */
    public $value;

    /**
     * Constructor to set initial or default values of member properties
     */
    public function __construct()
    {
        if (2 == func_num_args()) {
            $this->key   = func_get_arg(0);
            $this->value = func_get_arg(1);
        }
    }

    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['key']   = $this->key;
        $json['value'] = $this->value;

        return array_filter($json);
    }
}
