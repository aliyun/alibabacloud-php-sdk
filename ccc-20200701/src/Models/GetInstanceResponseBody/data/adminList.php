<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20200701\Models\GetInstanceResponseBody\data;

use AlibabaCloud\Tea\Model;

class adminList extends Model
{
    /**
     * @var string
     */
    public $displayName;

    /**
     * @example username@example.com
     *
     * @var string
     */
    public $email;

    /**
     * @example 8032****
     *
     * @var string
     */
    public $extension;

    /**
     * @example ccc-test
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example agent
     *
     * @var string
     */
    public $loginName;

    /**
     * @example 1382114****
     *
     * @var string
     */
    public $mobile;

    /**
     * @example Admin@ccc-test
     *
     * @var string
     */
    public $roleId;

    /**
     * @example Admin
     *
     * @var string
     */
    public $roleName;

    /**
     * @example agent@ccc-test
     *
     * @var string
     */
    public $userId;

    /**
     * @example ON_SITE
     *
     * @var string
     */
    public $workMode;
    protected $_name = [
        'displayName' => 'DisplayName',
        'email'       => 'Email',
        'extension'   => 'Extension',
        'instanceId'  => 'InstanceId',
        'loginName'   => 'LoginName',
        'mobile'      => 'Mobile',
        'roleId'      => 'RoleId',
        'roleName'    => 'RoleName',
        'userId'      => 'UserId',
        'workMode'    => 'WorkMode',
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
        if (null !== $this->email) {
            $res['Email'] = $this->email;
        }
        if (null !== $this->extension) {
            $res['Extension'] = $this->extension;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->loginName) {
            $res['LoginName'] = $this->loginName;
        }
        if (null !== $this->mobile) {
            $res['Mobile'] = $this->mobile;
        }
        if (null !== $this->roleId) {
            $res['RoleId'] = $this->roleId;
        }
        if (null !== $this->roleName) {
            $res['RoleName'] = $this->roleName;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }
        if (null !== $this->workMode) {
            $res['WorkMode'] = $this->workMode;
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
        if (isset($map['Email'])) {
            $model->email = $map['Email'];
        }
        if (isset($map['Extension'])) {
            $model->extension = $map['Extension'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['LoginName'])) {
            $model->loginName = $map['LoginName'];
        }
        if (isset($map['Mobile'])) {
            $model->mobile = $map['Mobile'];
        }
        if (isset($map['RoleId'])) {
            $model->roleId = $map['RoleId'];
        }
        if (isset($map['RoleName'])) {
            $model->roleName = $map['RoleName'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }
        if (isset($map['WorkMode'])) {
            $model->workMode = $map['WorkMode'];
        }

        return $model;
    }
}
