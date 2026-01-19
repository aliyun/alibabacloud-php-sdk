<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiamdeveloperapi\V20220225\Models\ObtainCloudAccountRoleAccessCredentialResponseBody\cloudAccountRoleAccessCredential;

use AlibabaCloud\Dara\Model;

class alibabaCloudStsToken extends Model
{
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

    /**
     * @var string
     */
    public $securityToken;
    protected $_name = [
        'accessKeyId' => 'accessKeyId',
        'accessKeySecret' => 'accessKeySecret',
        'expiration' => 'expiration',
        'securityToken' => 'securityToken',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accessKeyId) {
            $res['accessKeyId'] = $this->accessKeyId;
        }

        if (null !== $this->accessKeySecret) {
            $res['accessKeySecret'] = $this->accessKeySecret;
        }

        if (null !== $this->expiration) {
            $res['expiration'] = $this->expiration;
        }

        if (null !== $this->securityToken) {
            $res['securityToken'] = $this->securityToken;
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
        if (isset($map['accessKeyId'])) {
            $model->accessKeyId = $map['accessKeyId'];
        }

        if (isset($map['accessKeySecret'])) {
            $model->accessKeySecret = $map['accessKeySecret'];
        }

        if (isset($map['expiration'])) {
            $model->expiration = $map['expiration'];
        }

        if (isset($map['securityToken'])) {
            $model->securityToken = $map['securityToken'];
        }

        return $model;
    }
}
