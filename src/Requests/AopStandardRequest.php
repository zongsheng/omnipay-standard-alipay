<?php
namespace Omnipay\Alipay\Requests;
use Omnipay\Alipay\Responses\AopStandardResponse;
/**
 * Class AopTradeCreateRequest
 * @package Omnipay\Alipay\Requests
 * @link    https://docs.open.alipay.com/api_1/alipay.trade.create
 */
class AopStandardRequest extends AbstractAopRequest
{
    /**
     * @param mixed $data
     *
     * @return mixed|AopTradeCreateResponse|\Omnipay\Common\Message\ResponseInterface|\Psr\Http\Message\StreamInterface
     * @throws \Psr\Http\Client\Exception\NetworkException
     * @throws \Psr\Http\Client\Exception\RequestException
     */
    public function sendData($data)
    {
        $data = parent::sendData($data);
        return $this->response = new AopStandardResponse($this, $data);
    }
}