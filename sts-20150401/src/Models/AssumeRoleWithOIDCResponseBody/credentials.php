<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sts\V20150401\Models\AssumeRoleWithOIDCResponseBody;

use AlibabaCloud\Tea\Model;

class credentials extends Model
{
    /**
     * @var string
     */
    public $securityToken;

    /**
     * @var string
     */
    public $expiration;

    /**
     * @var string
     */
    public $accessKeySecret;

    /**
     * @var string
     */
    public $accessKeyId;
    protected $_name = [
        'securityToken'   => 'SecurityToken',
        'expiration'      => 'Expiration',
        'accessKeySecret' => 'AccessKeySecret',
        'accessKeyId'     => 'AccessKeyId',
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
        if (null !== $this->expiration) {
            $res['Expiration'] = $this->expiration;
        }
        if (null !== $this->accessKeySecret) {
            $res['AccessKeySecret'] = $this->accessKeySecret;
        }
        if (null !== $this->accessKeyId) {
            $res['AccessKeyId'] = $this->accessKeyId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return credentials
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SecurityToken'])) {
            $model->securityToken = $map['SecurityToken'];
        }
        if (isset($map['Expiration'])) {
            $model->expiration = $map['Expiration'];
        }
        if (isset($map['AccessKeySecret'])) {
            $model->accessKeySecret = $map['AccessKeySecret'];
        }
        if (isset($map['AccessKeyId'])) {
            $model->accessKeyId = $map['AccessKeyId'];
        }

        return $model;
    }
}
