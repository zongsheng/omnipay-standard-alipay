<?php
namespace Omnipay\Alipay;
use Omnipay\Common\AbstractGateway;
use Omnipay\Common\Exception\InvalidRequestException;
abstract class AbstractAopGateway extends AbstractGateway
{
    protected $endpoints = [
        'production' => 'https://openapi.alipay.com/gateway.do',
        'sandbox'    => 'https://openapi.alipaydev.com/gateway.do',
    ];
    public function getDefaultParameters()
    {
        return [
            'format'    => 'JSON',
            'charset'   => 'UTF-8',
            'signType'  => 'RSA',
            'version'   => '1.0',
            'timestamp' => date('Y-m-d H:i:s'),
        ];
    }
    /**
     * @return mixed
     */
    public function getAppId()
    {
        return $this->getParameter('app_id');
    }
    /**
     * @param $value
     *
     * @return $this
     */
    public function setAppId($value)
    {
        return $this->setParameter('app_id', $value);
    }
    /**
     * @return mixed
     */
    public function getFormat()
    {
        return $this->getParameter('format');
    }
    /**
     * @param $value
     *
     * @return $this
     */
    public function setFormat($value)
    {
        return $this->setParameter('format', $value);
    }
    /**
     * @return mixed
     */
    public function getCharset()
    {
        return $this->getParameter('charset');
    }
    /**
     * @param $value
     *
     * @return $this
     */
    public function setCharset($value)
    {
        return $this->setParameter('charset', $value);
    }
    /**
     * @return mixed
     */
    public function getSignType()
    {
        return $this->getParameter('sign_type');
    }
    /**
     * @param $value
     *
     * @return $this
     */
    public function setSignType($value)
    {
        return $this->setParameter('sign_type', $value);
    }
    /**
     * @return mixed
     */
    public function getVersion()
    {
        return $this->getParameter('version');
    }
    /**
     * @param $value
     *
     * @return $this
     */
    public function setVersion($value)
    {
        return $this->setParameter('version', $value);
    }
    /**
     * @return mixed
     */
    public function getPrivateKey()
    {
        return $this->getParameter('private_key');
    }
    /**
     * @param $value
     *
     * @return $this
     */
    public function setPrivateKey($value)
    {
        return $this->setParameter('private_key', $value);
    }
    /**
     * @return mixed
     */
    public function getMethod()
    {
        return $this->getParameter('method');
    }
    /**
     * @param $value
     *
     * @return $this
     */
    public function setMethod($value)
    {
        return $this->setParameter('method', $value);
    }
    /**
     * @return mixed
     */
    public function getEncryptKey()
    {
        return $this->getParameter('encrypt_key');
    }
    /**
     * @param $value
     *
     * @return $this
     */
    public function setEncryptKey($value)
    {
        return $this->setParameter('encrypt_key', $value);
    }
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
    public function getTimestamp()
    {
        return $this->getParameter('timestamp');
    }
    /**
     * @param $value
     *
     * @return $this
     */
    public function setTimestamp($value)
    {
        return $this->setParameter('timestamp', $value);
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
    public function getGrantType()
    {
        return $this->getParameter('grant_type');
    }
    /**
     * @param $value
     *
     * @return $this
     */
    public function setGrantType($value)
    {
        return $this->setParameter('grant_type', $value);
    }
    /**
     * @return mixed
     */
    public function getCode()
    {
        return $this->getParameter('code');
    }
    /**
     * @param $value
     *
     * @return $this
     */
    public function setCode($value)
    {
        return $this->setParameter('code', $value);
    }
    /**
     * @return mixed
     */
    public function getAuthToken()
    {
        return $this->getParameter('auth_token');
    }
    /**
     * @param $value
     *
     * @return $this
     */
    public function setAuthToken($value)
    {
        return $this->setParameter('auth_token', $value);
    }
    /**
     * @return mixed
     */
    public function getSysServiceProviderId()
    {
        return $this->getParameter('sys_service_provider_id');
    }
    /**
     * @param $value
     *
     * @return $this
     */
    public function setSysServiceProviderId($value)
    {
        return $this->setParameter('sys_service_provider_id', $value);
    }
    /**
     * @return mixed
     */
    public function getAlipayPublicKey()
    {
        return $this->getParameter('alipay_public_key');
    }
    /**
     * @param $value
     *
     * @return $this
     */
    public function setAlipayPublicKey($value)
    {
        return $this->setParameter('alipay_public_key', $value);
    }
    /**
     * @return mixed
     */
    public function getEndpoint()
    {
        return $this->getParameter('endpoint');
    }
    /**
     * @return mixed
     */
    public function getAlipaySdk()
    {
        return $this->getParameter('alipay_sdk');
    }
    /**
     * @param $value
     *
     * @return $this
     */
    public function setAlipaySdk($value)
    {
        return $this->setParameter('alipay_sdk', $value);
    }
    public function production()
    {
        return $this->setEnvironment('production');
    }
    /**
     * @param $value
     *
     * @return $this
     * @throws InvalidRequestException
     */
    public function setEnvironment($value)
    {
        $env = strtolower($value);
        if (! isset($this->endpoints[$env])) {
            throw new InvalidRequestException('The environment is invalid');
        }
        $this->setEndpoint($this->endpoints[$env]);
        return $this;
    }
    /**
     * @param $value
     *
     * @return $this
     */
    public function setEndpoint($value)
    {
        return $this->setParameter('endpoint', $value);
    }
    public function sandbox()
    {
        return $this->setEnvironment('sandbox');
    }
    /**
     * @return mixed
     */
    public function getImageType()
    {
        return $this->getParameter('image_type');
    }
    /**
     * @param $value
     *
     * @return $this
     */
    public function setImageType($value)
    {
        return $this->setParameter('image_type', $value);
    }
    /**
     * @return mixed
     */
    public function getImageContent()
    {
        return $this->getParameter('image_content');
    }
    /**
     * @param $value
     *
     * @return $this
     */
    public function setImageContent($value)
    {
        return $this->setParameter('image_content', $value);
    }
}