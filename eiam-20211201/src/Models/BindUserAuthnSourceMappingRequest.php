<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models;

use AlibabaCloud\Dara\Model;

class BindUserAuthnSourceMappingRequest extends Model
{
    /**
     * @var string
     */
    public $identityProviderId;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $userExternalId;

    /**
     * @var string
     */
    public $userId;
    protected $_name = [
        'identityProviderId' => 'IdentityProviderId',
        'instanceId' => 'InstanceId',
        'userExternalId' => 'UserExternalId',
        'userId' => 'UserId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->identityProviderId) {
            $res['IdentityProviderId'] = $this->identityProviderId;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->userExternalId) {
            $res['UserExternalId'] = $this->userExternalId;
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
        if (isset($map['IdentityProviderId'])) {
            $model->identityProviderId = $map['IdentityProviderId'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['UserExternalId'])) {
            $model->userExternalId = $map['UserExternalId'];
        }

        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        return $model;
    }
}
