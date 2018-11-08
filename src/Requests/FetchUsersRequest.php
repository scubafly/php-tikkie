<?php
namespace PHPTikkie\Requests;

class FetchUsersRequest extends AbstractRequest
{
    /**
     * @var string
     */
    protected $platformToken;

    public function __construct(string $platformToken)
    {
        $this->platformToken = $platformToken;
    }

    public function getMethod()
    {
        return 'GET';
    }

    public function getUri()
    {
        return "v1/tikkie/platforms/{$this->platformToken}/users";
    }
}
