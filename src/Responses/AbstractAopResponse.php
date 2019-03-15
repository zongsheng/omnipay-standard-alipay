<?php
namespace Omnipay\Alipay\Responses;
abstract class AbstractAopResponse extends AbstractResponse
{
    /**
     * Is the response successful?
     *
     * @return boolean
     */
    public function isSuccessful()
    {
        return $this->getCode() == '10000';
    }
    public function getCode()
    {
        return $this->getAlipayResponse('code');
    }
    public function getAlipayResponse($key = null, $response_key = null)
    {
        if ($key) {
            return array_get($this->data, "{$response_key}.{$key}");
        } else {
            return array_get($this->data, $response_key);
        }
    }
    public function getMessage()
    {
        return $this->getAlipayResponse('msg');
    }
    public function getSubCode()
    {
        return $this->getAlipayResponse('sub_code');
    }
    public function getSubMessage()
    {
        return $this->getAlipayResponse('sub_msg');
    }
}