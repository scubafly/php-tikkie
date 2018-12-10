<?php
namespace PHPTikkie\Requests;

abstract class AbstractRequest
{
    /**
     * @var array|null
     */
    protected $parameters;

    /**
     * @var array|null
     */
    protected $payload;

    /**
     * Extra request options that are used by Guzzle when sending the request.
     *
     * @var array|null
     */
    protected $requestOptions;

    public function getParameters()
    {
        return $this->parameters;
    }

    public function getPayload()
    {
        return $this->payload;
    }

    public function getRequestOptions()
    {
        return [];
    }

    abstract public function getMethod();
    abstract public function getUri();
}
