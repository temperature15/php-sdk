<?php
/*
 * BandwidthLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace BandwidthLib\Http;

/**
 * Holds the result of one API call.
 */
class ApiResponse
{
    /**
     * Response status code
     * @var int
     */
    private $statusCode = null;

    /**
     * Response headers
     * @var array
     */
    private $headers = null;

    /**
     * Response body
     * @var mixed
     */
    private $result = null;

    /**
     * Create a new instance of a HttpResponse
     * @param int    $statusCode Response code
     * @param array  $headers    Map of headers
     * @param mixed  $result     The deserialized response
     */
    public function __construct($statusCode, array $headers, $result)
    {
        $this->statusCode = $statusCode;
        $this->headers = $headers;
        $this->result = $result;
    }

    /**
     * Get status code
     * @return int Status code
     */
    public function getStatusCode()
    {
        return $this->statusCode;
    }

    /**
     * Get headers
     * @return array Map of headers
     */
    public function getHeaders()
    {
        return $this->headers;
    }

    /**
     * Get API call result or body
     * @return mixed Deserialized response body
     */
    public function getResult()
    {
        return $this->result;
    }
}
