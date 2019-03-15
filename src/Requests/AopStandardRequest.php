<?php
namespace Omnipay\Alipay\Requests;
use Omnipay\Alipay\Responses\AopStandardResponse;
/**
 * Class AopTradeCreateRequest
 * @package Omnipay\Alipay\Requests
 * @link    https://docs.open.alipay.com/api_1/alipay.trade.create
 */
class AopTradeCreateRequest extends AbstractAopRequest
{
    /**
     * @return mixed
     */
    public function getNotifyUrl()
    {
        return $this->getParameter('notify_url');
    }
    /**
     * @param $value
     *
     * @return $this
     */
    public function setNotifyUrl($value)
    {
        return $this->setParameter('notify_url', $value);
    }
    /**
     * @return mixed
     */
    public function getAppAuthToken()
    {
        return $this->getParameter('app_auth_token');
    }
    /**
     * @param $value
     *
     * @return $this
     */
    public function setAppAuthToken($value)
    {
        return $this->setParameter('app_auth_token', $value);
    }
    /**
     * @return mixed
     */
    public function getMethod()
    {
        return $this->method;
    }
    /**
     * @param $value
     *
     * @return $this
     */
    public function setMethod($value)
    {
        $this->method = $value;
        return $this;
    }
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