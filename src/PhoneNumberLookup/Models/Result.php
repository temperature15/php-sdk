<?php
/*
 * BandwidthLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace BandwidthLib\PhoneNumberLookup\Models;

/**
 * @todo Write general description for this model
 */
class Result implements \JsonSerializable
{
    /**
     * Our vendor's response code.
     * @maps Response Code
     * @var integer|null $responseCode public property
     */
    public $responseCode;

    /**
     * Message associated with the response code.
     * @maps Message
     * @var string|null $message public property
     */
    public $message;

    /**
     * The telephone number in E.164 format.
     * @maps E.164 Format
     * @var string|null $e164Format public property
     */
    public $e164Format;

    /**
     * The formatted version of the telephone number.
     * @maps Formatted
     * @var string|null $formatted public property
     */
    public $formatted;

    /**
     * The country of the telephone number.
     * @maps Country
     * @var string|null $country public property
     */
    public $country;

    /**
     * The line type of the telephone number.
     * @maps Line Type
     * @var string|null $lineType public property
     */
    public $lineType;

    /**
     * The service provider of the telephone number.
     * @maps Line Provider
     * @var string|null $lineProvider public property
     */
    public $lineProvider;

    /**
     * The first half of the Home Network Identity (HNI).
     * @maps Mobile Country Code
     * @var string|null $mobileCountryCode public property
     */
    public $mobileCountryCode;

    /**
     * The second half of the HNI.
     * @maps Mobile Network Code
     * @var string|null $mobileNetworkCode public property
     */
    public $mobileNetworkCode;

    /**
     * Constructor to set initial or default values of member properties
     */
    public function __construct()
    {
        if (9 == func_num_args()) {
            $this->responseCode      = func_get_arg(0);
            $this->message           = func_get_arg(1);
            $this->e164Format        = func_get_arg(2);
            $this->formatted         = func_get_arg(3);
            $this->country           = func_get_arg(4);
            $this->lineType          = func_get_arg(5);
            $this->lineProvider      = func_get_arg(6);
            $this->mobileCountryCode = func_get_arg(7);
            $this->mobileNetworkCode = func_get_arg(8);
        }
    }

    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['Response Code']       = $this->responseCode;
        $json['Message']             = $this->message;
        $json['E.164 Format']        = $this->e164Format;
        $json['Formatted']           = $this->formatted;
        $json['Country']             = $this->country;
        $json['Line Type']           = $this->lineType;
        $json['Line Provider']       = $this->lineProvider;
        $json['Mobile Country Code'] = $this->mobileCountryCode;
        $json['Mobile Network Code'] = $this->mobileNetworkCode;

        return array_filter($json);
    }
}
