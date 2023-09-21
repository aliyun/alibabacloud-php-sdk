<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dypnsapi\V20170525\Models\SendSmsVerifyCodeResponseBody;

use AlibabaCloud\Tea\Model;

class model_ extends Model
{
    /**
     * @example 112231421412414124123^4
     *
     * @var string
     */
    public $bizId;

    /**
     * @example 1231231313
     *
     * @var string
     */
    public $outId;

    /**
     * @example API-reqelekrqkllkkewrlwrjlsdfsdf
     *
     * @var string
     */
    public $requestId;

    /**
     * @example 42324
     *
     * @var string
     */
    public $verifyCode;
    protected $_name = [
        'bizId'      => 'BizId',
        'outId'      => 'OutId',
        'requestId'  => 'RequestId',
        'verifyCode' => 'VerifyCode',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bizId) {
            $res['BizId'] = $this->bizId;
        }
        if (null !== $this->outId) {
            $res['OutId'] = $this->outId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->verifyCode) {
            $res['VerifyCode'] = $this->verifyCode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return model_
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BizId'])) {
            $model->bizId = $map['BizId'];
        }
        if (isset($map['OutId'])) {
            $model->outId = $map['OutId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['VerifyCode'])) {
            $model->verifyCode = $map['VerifyCode'];
        }

        return $model;
    }
}
