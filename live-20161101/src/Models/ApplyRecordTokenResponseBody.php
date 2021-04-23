<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\Tea\Model;

class ApplyRecordTokenResponseBody extends Model
{
    /**
     * @var string
     */
    public $securityToken;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $accessKeyId;

    /**
     * @var string
     */
    public $accessKeySecret;

    /**
     * @var string
     */
    public $expiration;
    protected $_name = [
        'securityToken'   => 'SecurityToken',
        'requestId'       => 'RequestId',
        'accessKeyId'     => 'AccessKeyId',
        'accessKeySecret' => 'AccessKeySecret',
        'expiration'      => 'Expiration',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->securityToken) {
            $res['SecurityToken'] = $this->securityToken;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->accessKeyId) {
            $res['AccessKeyId'] = $this->accessKeyId;
        }
        if (null !== $this->accessKeySecret) {
            $res['AccessKeySecret'] = $this->accessKeySecret;
        }
        if (null !== $this->expiration) {
            $res['Expiration'] = $this->expiration;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ApplyRecordTokenResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SecurityToken'])) {
            $model->securityToken = $map['SecurityToken'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['AccessKeyId'])) {
            $model->accessKeyId = $map['AccessKeyId'];
        }
        if (isset($map['AccessKeySecret'])) {
            $model->accessKeySecret = $map['AccessKeySecret'];
        }
        if (isset($map['Expiration'])) {
            $model->expiration = $map['Expiration'];
        }

        return $model;
    }
}
