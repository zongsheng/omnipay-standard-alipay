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
}