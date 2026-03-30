<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiamdeveloperapi\V20220225\Models\ObtainCloudAccountRoleAccessCredentialResponseBody\cloudAccountRoleAccessCredential;

use AlibabaCloud\Dara\Model;

class awsStsToken extends Model
{
    /**
     * @var string
     */
    public $accessKeyId;

    /**
     * @var string
     */
    public $expiration;

    /**
     * @var string
     */
    public $secretAccessKey;

    /**
     * @var string
     */
    public $sessionToken;
    protected $_name = [
        'accessKeyId' => 'accessKeyId',
        'expiration' => 'expiration',
        'secretAccessKey' => 'secretAccessKey',
        'sessionToken' => 'sessionToken',
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

        if (null !== $this->expiration) {
            $res['expiration'] = $this->expiration;
        }

        if (null !== $this->secretAccessKey) {
            $res['secretAccessKey'] = $this->secretAccessKey;
        }

        if (null !== $this->sessionToken) {
            $res['sessionToken'] = $this->sessionToken;
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

        if (isset($map['expiration'])) {
            $model->expiration = $map['expiration'];
        }

        if (isset($map['secretAccessKey'])) {
            $model->secretAccessKey = $map['secretAccessKey'];
        }

        if (isset($map['sessionToken'])) {
            $model->sessionToken = $map['sessionToken'];
        }

        return $model;
    }
}
