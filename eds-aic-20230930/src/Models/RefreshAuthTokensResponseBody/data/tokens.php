<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsaic\V20230930\Models\RefreshAuthTokensResponseBody\data;

use AlibabaCloud\Dara\Model;

class tokens extends Model
{
    /**
     * @var string
     */
    public $authToken;

    /**
     * @var int
     */
    public $expireAt;

    /**
     * @var int
     */
    public $expireSeconds;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var int
     */
    public $issuedAt;

    /**
     * @var string
     */
    public $licenseKey;
    protected $_name = [
        'authToken' => 'AuthToken',
        'expireAt' => 'ExpireAt',
        'expireSeconds' => 'ExpireSeconds',
        'instanceId' => 'InstanceId',
        'issuedAt' => 'IssuedAt',
        'licenseKey' => 'LicenseKey',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->authToken) {
            $res['AuthToken'] = $this->authToken;
        }

        if (null !== $this->expireAt) {
            $res['ExpireAt'] = $this->expireAt;
        }

        if (null !== $this->expireSeconds) {
            $res['ExpireSeconds'] = $this->expireSeconds;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->issuedAt) {
            $res['IssuedAt'] = $this->issuedAt;
        }

        if (null !== $this->licenseKey) {
            $res['LicenseKey'] = $this->licenseKey;
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
        if (isset($map['AuthToken'])) {
            $model->authToken = $map['AuthToken'];
        }

        if (isset($map['ExpireAt'])) {
            $model->expireAt = $map['ExpireAt'];
        }

        if (isset($map['ExpireSeconds'])) {
            $model->expireSeconds = $map['ExpireSeconds'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['IssuedAt'])) {
            $model->issuedAt = $map['IssuedAt'];
        }

        if (isset($map['LicenseKey'])) {
            $model->licenseKey = $map['LicenseKey'];
        }

        return $model;
    }
}
