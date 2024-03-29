<?php
namespace Omnipay\Alipay;
use Omnipay\Alipay\Requests\AopStandardRequest;
/**
 * Class AopJsGateway
 * @package Omnipay\Alipay
 * @link    https://docs.open.alipay.com/api_1/alipay.trade.create
 * @link    https://myjsapi.alipay.com/jsapi/native/trade-pay.html
 */
class AopStandardGateway extends AbstractAopGateway
{
    /**
     * Get gateway display name
     *
     * This can be used by carts to get the display name for each gateway.
     */
    public function getName()
    {
        return 'Alipay Standard Gateway';
    }
    /**
     * @param array $parameters
     *
     * @return \Omnipay\Common\Message\AbstractRequest
     */
    public function init(array $parameters = [])
    {
        return $this->createRequest(AopStandardRequest::class, $parameters);
    }
}