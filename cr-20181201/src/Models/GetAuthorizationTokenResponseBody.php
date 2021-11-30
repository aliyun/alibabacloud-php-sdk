<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cr\V20181201\Models;

use AlibabaCloud\Tea\Model;

class GetAuthorizationTokenResponseBody extends Model
{
    /**
     * @var string
     */
    public $authorizationToken;

    /**
     * @var string
     */
    public $code;

    /**
     * @var int
     */
    public $expireTime;

    /**
     * @var bool
     */
    public $isSuccess;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $tempUsername;
    protected $_name = [
        'authorizationToken' => 'AuthorizationToken',
        'code'               => 'Code',
        'expireTime'         => 'ExpireTime',
        'isSuccess'          => 'IsSuccess',
        'requestId'          => 'RequestId',
        'tempUsername'       => 'TempUsername',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->authorizationToken) {
            $res['AuthorizationToken'] = $this->authorizationToken;
        }
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->expireTime) {
            $res['ExpireTime'] = $this->expireTime;
        }
        if (null !== $this->isSuccess) {
            $res['IsSuccess'] = $this->isSuccess;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->tempUsername) {
            $res['TempUsername'] = $this->tempUsername;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetAuthorizationTokenResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AuthorizationToken'])) {
            $model->authorizationToken = $map['AuthorizationToken'];
        }
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['ExpireTime'])) {
            $model->expireTime = $map['ExpireTime'];
        }
        if (isset($map['IsSuccess'])) {
            $model->isSuccess = $map['IsSuccess'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TempUsername'])) {
            $model->tempUsername = $map['TempUsername'];
        }

        return $model;
    }
}
