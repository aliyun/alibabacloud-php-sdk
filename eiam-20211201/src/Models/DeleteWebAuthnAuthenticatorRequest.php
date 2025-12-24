<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models;

use AlibabaCloud\Dara\Model;

class DeleteWebAuthnAuthenticatorRequest extends Model
{
    /**
     * @var string
     */
    public $authenticatorId;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $userId;
    protected $_name = [
        'authenticatorId' => 'AuthenticatorId',
        'instanceId' => 'InstanceId',
        'userId' => 'UserId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->authenticatorId) {
            $res['AuthenticatorId'] = $this->authenticatorId;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
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
        if (isset($map['AuthenticatorId'])) {
            $model->authenticatorId = $map['AuthenticatorId'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        return $model;
    }
}
