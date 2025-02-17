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
class BandwidthMessagesList implements \JsonSerializable
{
    /**
     * Total number of messages matched by the search
     * @var integer|null $totalCount public property
     */
    public $totalCount;

    /**
     * @todo Write general description for this property
     * @var \BandwidthLib\Messaging\Models\PageInfo|null $pageInfo public property
     */
    public $pageInfo;

    /**
     * @todo Write general description for this property
     * @var \BandwidthLib\Messaging\Models\BandwidthMessageItem[]|null $messages public property
     */
    public $messages;

    /**
     * Constructor to set initial or default values of member properties
     */
    public function __construct()
    {
        if (3 == func_num_args()) {
            $this->totalCount = func_get_arg(0);
            $this->pageInfo   = func_get_arg(1);
            $this->messages   = func_get_arg(2);
        }
    }

    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['totalCount'] = $this->totalCount;
        $json['pageInfo']   = $this->pageInfo;
        $json['messages']   = isset($this->messages) ?
            array_values($this->messages) : null;

        return array_filter($json);
    }
}
