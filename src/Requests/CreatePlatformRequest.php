<?php
namespace PHPTikkie\Requests;

use PHPTikkie\Entities\Platform;

class CreatePlatformRequest extends AbstractRequest
{
    /**
     * @var Platform
     */
    protected $platform;

    public function __construct(Platform $platform)
    {
        $this->platform = $platform;
    }

    public function getMethod()
    {
        return 'POST';
    }

    public function getUri()
    {
        return 'v1/tikkie/platforms';
    }

    public function getPayload()
    {
        $platform = $this->platform;

        return [
            'email' => $platform->email,
            'name' => $platform->name,
            'notificationUrl' => $platform->notificationUrl,
            'phoneNumber' => $platform->phoneNumber,
            'platformUsage' => $platform->platformUsage
        ];
    }
}
