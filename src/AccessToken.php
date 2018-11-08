<?php
namespace PHPTikkie;

class AccessToken
{
    /**
     * Time in seconds after which this token expires.
     *
     * @var int
     */
    private $lifetime;

    /**
     * @var int
     */
    private $expiryTime;

    /**
     * @var string
     */
    private $token;

    public function __construct(string $token, int $lifetime)
    {
        $this->token = $token;
        $this->lifetime = $lifetime;
        $this->expiryTime = time() + $lifetime;
    }

    public function getLifetime()
    {
        return $this->lifetime;
    }

    public function getToken()
    {
        return $this->token;
    }

    public function isValid()
    {
        return time() < $this->expiryTime;
    }

    public function __toString()
    {
        return $this->token;
    }
}
