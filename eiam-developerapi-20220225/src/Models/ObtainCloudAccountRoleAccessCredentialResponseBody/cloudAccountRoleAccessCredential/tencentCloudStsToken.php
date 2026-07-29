<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiamdeveloperapi\V20220225\Models\ObtainCloudAccountRoleAccessCredentialResponseBody\cloudAccountRoleAccessCredential;

use AlibabaCloud\Dara\Model;

class tencentCloudStsToken extends Model
{
    /**
     * @var string
     */
    public $expiration;

    /**
     * @var string
     */
    public $tmpSecretId;

    /**
     * @var string
     */
    public $tmpSecretKey;

    /**
     * @var string
     */
    public $token;
    protected $_name = [
        'expiration' => 'expiration',
        'tmpSecretId' => 'tmpSecretId',
        'tmpSecretKey' => 'tmpSecretKey',
        'token' => 'token',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->expiration) {
            $res['expiration'] = $this->expiration;
        }

        if (null !== $this->tmpSecretId) {
            $res['tmpSecretId'] = $this->tmpSecretId;
        }

        if (null !== $this->tmpSecretKey) {
            $res['tmpSecretKey'] = $this->tmpSecretKey;
        }

        if (null !== $this->token) {
            $res['token'] = $this->token;
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
        if (isset($map['expiration'])) {
            $model->expiration = $map['expiration'];
        }

        if (isset($map['tmpSecretId'])) {
            $model->tmpSecretId = $map['tmpSecretId'];
        }

        if (isset($map['tmpSecretKey'])) {
            $model->tmpSecretKey = $map['tmpSecretKey'];
        }

        if (isset($map['token'])) {
            $model->token = $map['token'];
        }

        return $model;
    }
}
