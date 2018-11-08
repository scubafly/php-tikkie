<?php
namespace PHPTikkie\Requests;

use PHPTikkie\Entities\User;

class CreateUserRequest extends AbstractRequest
{
    /**
     * @var User
     */
    protected $user;

    public function __construct(User $user)
    {
        $this->user = $user;
    }

    public function getMethod()
    {
        return 'POST';
    }

    public function getUri()
    {
        return "v1/tikkie/platforms/{$this->user->platformToken}/users";
    }

    public function getPayload()
    {
        $user = $this->user;

        return [
            'name' => $user->name,
            'phoneNumber' => $user->phoneNumber,
            'iban' => $user->iban,
            'bankAccountLabel' => $user->bankAccountLabel
        ];
    }
}
