<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20200701\Models;

use AlibabaCloud\Tea\Model;

class ModifyUserRequest extends Model
{
    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $userId;

    /**
     * @var string
     */
    public $mobile;

    /**
     * @var string
     */
    public $workMode;

    /**
     * @var string
     */
    public $roleId;
    protected $_name = [
        'instanceId' => 'InstanceId',
        'userId'     => 'UserId',
        'mobile'     => 'Mobile',
        'workMode'   => 'WorkMode',
        'roleId'     => 'RoleId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }
        if (null !== $this->mobile) {
            $res['Mobile'] = $this->mobile;
        }
        if (null !== $this->workMode) {
            $res['WorkMode'] = $this->workMode;
        }
        if (null !== $this->roleId) {
            $res['RoleId'] = $this->roleId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyUserRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }
        if (isset($map['Mobile'])) {
            $model->mobile = $map['Mobile'];
        }
        if (isset($map['WorkMode'])) {
            $model->workMode = $map['WorkMode'];
        }
        if (isset($map['RoleId'])) {
            $model->roleId = $map['RoleId'];
        }

        return $model;
    }
}
