<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Quickbipublic\V20220101\Models;

use AlibabaCloud\Dara\Model;

class UpdateUserRequest extends Model
{
    /**
     * @var bool
     */
    public $adminUser;

    /**
     * @var bool
     */
    public $authAdminUser;

    /**
     * @var bool
     */
    public $isDeleted;

    /**
     * @var string
     */
    public $nickName;

    /**
     * @var string
     */
    public $roleIds;

    /**
     * @var string
     */
    public $userId;

    /**
     * @var int
     */
    public $userType;
    protected $_name = [
        'adminUser' => 'AdminUser',
        'authAdminUser' => 'AuthAdminUser',
        'isDeleted' => 'IsDeleted',
        'nickName' => 'NickName',
        'roleIds' => 'RoleIds',
        'userId' => 'UserId',
        'userType' => 'UserType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->adminUser) {
            $res['AdminUser'] = $this->adminUser;
        }

        if (null !== $this->authAdminUser) {
            $res['AuthAdminUser'] = $this->authAdminUser;
        }

        if (null !== $this->isDeleted) {
            $res['IsDeleted'] = $this->isDeleted;
        }

        if (null !== $this->nickName) {
            $res['NickName'] = $this->nickName;
        }

        if (null !== $this->roleIds) {
            $res['RoleIds'] = $this->roleIds;
        }

        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }

        if (null !== $this->userType) {
            $res['UserType'] = $this->userType;
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
        if (isset($map['AdminUser'])) {
            $model->adminUser = $map['AdminUser'];
        }

        if (isset($map['AuthAdminUser'])) {
            $model->authAdminUser = $map['AuthAdminUser'];
        }

        if (isset($map['IsDeleted'])) {
            $model->isDeleted = $map['IsDeleted'];
        }

        if (isset($map['NickName'])) {
            $model->nickName = $map['NickName'];
        }

        if (isset($map['RoleIds'])) {
            $model->roleIds = $map['RoleIds'];
        }

        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        if (isset($map['UserType'])) {
            $model->userType = $map['UserType'];
        }

        return $model;
    }
}
