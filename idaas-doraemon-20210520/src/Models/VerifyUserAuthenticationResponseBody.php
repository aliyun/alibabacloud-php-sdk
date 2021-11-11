<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Idaasdoraemon\V20210520\Models;

use AlibabaCloud\SDK\Idaasdoraemon\V20210520\Models\VerifyUserAuthenticationResponseBody\authenticateResultInfo;
use AlibabaCloud\Tea\Model;

class VerifyUserAuthenticationResponseBody extends Model
{
    /**
     * @description 认证结果
     *
     * @var authenticateResultInfo
     */
    public $authenticateResultInfo;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @description 认证结果，true or false
     *
     * @var bool
     */
    public $verifyResult;
    protected $_name = [
        'authenticateResultInfo' => 'AuthenticateResultInfo',
        'requestId'              => 'RequestId',
        'verifyResult'           => 'VerifyResult',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->authenticateResultInfo) {
            $res['AuthenticateResultInfo'] = null !== $this->authenticateResultInfo ? $this->authenticateResultInfo->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->verifyResult) {
            $res['VerifyResult'] = $this->verifyResult;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return VerifyUserAuthenticationResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AuthenticateResultInfo'])) {
            $model->authenticateResultInfo = authenticateResultInfo::fromMap($map['AuthenticateResultInfo']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['VerifyResult'])) {
            $model->verifyResult = $map['VerifyResult'];
        }

        return $model;
    }
}
