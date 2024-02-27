<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Quickbipublic\V20220101\Models;

use AlibabaCloud\Tea\Model;

class AddUserRequest extends Model
{
    /**
     * @example xxxxxx@163.com
     *
     * @var string
     */
    public $accountName;

    /**
     * @description Add organization members.
     *
     * @example true
     *
     * @var bool
     */
    public $adminUser;

    /**
     * @example true
     *
     * @var bool
     */
    public $authAdminUser;

    /**
     * @var string
     */
    public $nickName;

    /**
     * @var string
     */
    public $roleIds;

    /**
     * @example 1
     *
     * @var int
     */
    public $userType;
    protected $_name = [
        'accountName'   => 'AccountName',
        'adminUser'     => 'AdminUser',
        'authAdminUser' => 'AuthAdminUser',
        'nickName'      => 'NickName',
        'roleIds'       => 'RoleIds',
        'userType'      => 'UserType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accountName) {
            $res['AccountName'] = $this->accountName;
        }
        if (null !== $this->adminUser) {
            $res['AdminUser'] = $this->adminUser;
        }
        if (null !== $this->authAdminUser) {
            $res['AuthAdminUser'] = $this->authAdminUser;
        }
        if (null !== $this->nickName) {
            $res['NickName'] = $this->nickName;
        }
        if (null !== $this->roleIds) {
            $res['RoleIds'] = $this->roleIds;
        }
        if (null !== $this->userType) {
            $res['UserType'] = $this->userType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AddUserRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccountName'])) {
            $model->accountName = $map['AccountName'];
        }
        if (isset($map['AdminUser'])) {
            $model->adminUser = $map['AdminUser'];
        }
        if (isset($map['AuthAdminUser'])) {
            $model->authAdminUser = $map['AuthAdminUser'];
        }
        if (isset($map['NickName'])) {
            $model->nickName = $map['NickName'];
        }
        if (isset($map['RoleIds'])) {
            $model->roleIds = $map['RoleIds'];
        }
        if (isset($map['UserType'])) {
            $model->userType = $map['UserType'];
        }

        return $model;
    }
}
