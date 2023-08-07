<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudauthintl\V20220809\Models;

use AlibabaCloud\Tea\Model;

class FraudResultCallBackRequest extends Model
{
    /**
     * @example shs2b27333914876c01de4cb22f5841f
     *
     * @var string
     */
    public $certifyId;

    /**
     * @var string
     */
    public $extParams;

    /**
     * @example PASS
     *
     * @var string
     */
    public $resultCode;

    /**
     * @example production
     *
     * @var string
     */
    public $verifyDeployEnv;
    protected $_name = [
        'certifyId'       => 'CertifyId',
        'extParams'       => 'ExtParams',
        'resultCode'      => 'ResultCode',
        'verifyDeployEnv' => 'VerifyDeployEnv',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return FraudResultCallBackRequest
     */
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
