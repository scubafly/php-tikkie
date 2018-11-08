<?php
namespace PHPTikkie\Requests;

class FetchPlatformsRequest extends AbstractRequest
{
    public function getMethod()
    {
        return 'GET';
    }

    public function getUri()
    {
        return 'v1/tikkie/platforms';
    }
}
