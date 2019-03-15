<?php
namespace Omnipay\Alipay\Responses;
use Omnipay\Alipay\Requests\AbstractAopRequest;
class AopStandardResponse extends AbstractAopResponse
{
    protected $key = 'alipay_standard_response';
    /**
     * @var AbstractAopRequest
     */
    protected $request;
    public function getTradeNo()
    {
        return $this->getAlipayResponse('trade_no');
    }
    public function getOutTradeNo()
    {
        return $this->getAlipayResponse('out_trade_no');
    }
}