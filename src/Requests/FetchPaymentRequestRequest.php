<?php
namespace PHPTikkie\Requests;

class FetchPaymentRequestRequest extends AbstractRequest
{
    /**
     * @var string
     */
    protected $platformToken;

    /**
     * @var string
     */
    protected $userToken;

    /**
     * @var string
     */
    protected $paymentRequestToken;

    public function __construct(string $platformToken, string $userToken, string $paymentRequestToken)
    {
        $this->platformToken = $platformToken;
        $this->userToken = $userToken;
        $this->paymentRequestToken = $paymentRequestToken;
    }

    public function getMethod()
    {
        return 'GET';
    }

    public function getUri()
    {
        return "v1/tikkie/platforms/{$this->platformToken}/users/{$this->userToken}/paymentrequests/{$this->paymentRequestToken}";
    }
}
