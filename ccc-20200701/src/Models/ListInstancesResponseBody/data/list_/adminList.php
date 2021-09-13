<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20200701\Models\ListInstancesResponseBody\data\list_;

use AlibabaCloud\Tea\Model;

class adminList extends Model
{
    /**
     * @var string
     */
    public $displayName;

    /**
     * @var string
     */
    public $extension;

    /**
     * @var string
     */
    public $loginName;

    /**
     * @var string
     */
    public $email;

    /**
     * @var string
     */
    public $workMode;

    /**
     * @var string
     */
    public $mobile;

    /**
     * @var string
     */
    public $userId;

    /**
     * @var string
     */
    public $roleName;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $roleId;
    protected $_name = [
        'displayName' => 'DisplayName',
        'extension'   => 'Extension',
        'loginName'   => 'LoginName',
        'email'       => 'Email',
        'workMode'    => 'WorkMode',
        'mobile'      => 'Mobile',
        'userId'      => 'UserId',
        'roleName'    => 'RoleName',
        'instanceId'  => 'InstanceId',
        'roleId'      => 'RoleId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->displayName) {
            $res['DisplayName'] = $this->displayName;
        }
        if (null !== $this->extension) {
            $res['Extension'] = $this->extension;
        }
        if (null !== $this->loginName) {
            $res['LoginName'] = $this->loginName;
        }
        if (null !== $this->email) {
            $res['Email'] = $this->email;
        }
        if (null !== $this->workMode) {
            $res['WorkMode'] = $this->workMode;
        }
        if (null !== $this->mobile) {
            $res['Mobile'] = $this->mobile;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }
        if (null !== $this->roleName) {
            $res['RoleName'] = $this->roleName;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->roleId) {
            $res['RoleId'] = $this->roleId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return adminList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DisplayName'])) {
            $model->displayName = $map['DisplayName'];
        }
        if (isset($map['Extension'])) {
            $model->extension = $map['Extension'];
        }
        if (isset($map['LoginName'])) {
            $model->loginName = $map['LoginName'];
        }
        if (isset($map['Email'])) {
            $model->email = $map['Email'];
        }
        if (isset($map['WorkMode'])) {
            $model->workMode = $map['WorkMode'];
        }
        if (isset($map['Mobile'])) {
            $model->mobile = $map['Mobile'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }
        if (isset($map['RoleName'])) {
            $model->roleName = $map['RoleName'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['RoleId'])) {
            $model->roleId = $map['RoleId'];
        }

        return $model;
    }
}
