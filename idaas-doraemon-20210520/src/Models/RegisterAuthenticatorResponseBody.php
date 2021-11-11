<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Idaasdoraemon\V20210520\Models;

use AlibabaCloud\Tea\Model;

class RegisterAuthenticatorResponseBody extends Model
{
    /**
     * @description 认证器UUID
     *
     * @var string
     */
    public $authenticatorUuid;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'authenticatorUuid' => 'AuthenticatorUuid',
        'requestId'         => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->authenticatorUuid) {
            $res['AuthenticatorUuid'] = $this->authenticatorUuid;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RegisterAuthenticatorResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AuthenticatorUuid'])) {
            $model->authenticatorUuid = $map['AuthenticatorUuid'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
