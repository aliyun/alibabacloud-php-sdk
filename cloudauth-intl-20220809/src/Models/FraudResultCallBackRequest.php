<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudauthintl\V20220809\Models;

use AlibabaCloud\Dara\Model;

class FraudResultCallBackRequest extends Model
{
    /**
     * @var string
     */
    public $certifyId;

    /**
     * @var string
     */
    public $extParams;

    /**
     * @var string
     */
    public $resultCode;

    /**
     * @var string
     */
    public $verifyDeployEnv;
    protected $_name = [
        'certifyId' => 'CertifyId',
        'extParams' => 'ExtParams',
        'resultCode' => 'ResultCode',
        'verifyDeployEnv' => 'VerifyDeployEnv',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->certifyId) {
            $res['CertifyId'] = $this->certifyId;
        }

        if (null !== $this->extParams) {
            $res['ExtParams'] = $this->extParams;
        }

        if (null !== $this->resultCode) {
            $res['ResultCode'] = $this->resultCode;
        }

        if (null !== $this->verifyDeployEnv) {
            $res['VerifyDeployEnv'] = $this->verifyDeployEnv;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CertifyId'])) {
            $model->certifyId = $map['CertifyId'];
        }

        if (isset($map['ExtParams'])) {
            $model->extParams = $map['ExtParams'];
        }

        if (isset($map['ResultCode'])) {
            $model->resultCode = $map['ResultCode'];
        }

        if (isset($map['VerifyDeployEnv'])) {
            $model->verifyDeployEnv = $map['VerifyDeployEnv'];
        }

        return $model;
    }
}
