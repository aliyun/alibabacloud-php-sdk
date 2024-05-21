<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Quickbipublic\V20220101\Models;

use AlibabaCloud\Tea\Model;

class UpdateUserRequest extends Model
{
    /**
     * @description Indicates whether the organization administrator. Valid values:
     *
     *   true
     *   false
     *
     * @example true
     *
     * @var bool
     */
    public $adminUser;

    /**
     * @description Indicate whether the RAM user is a permission administrator. Valid values:
     *
     *   true
     *   false
     *
     * @example true
     *
     * @var bool
     */
    public $authAdminUser;

    /**
     * @description The nickname of the account.
     *
     *   Format check: The value can be up to 50 characters in length.
     *   Special format verification: Chinese and English digits_ \\ / | () ] [
     *
     * @example Xiao Zhang
     *
     * @var string
     */
    public $nickName;

    /**
     * @var string
     */
    public $roleIds;

    /**
     * @description The ID of the user to be updated. The user ID is the UserID of the Quick BI, not the UID of Alibaba Cloud.
     *
     * This parameter is required.
     * @example fe67f61a35a94b7da1a34ba174a7****
     *
     * @var string
     */
    public $userId;

    /**
     * @description The role type of the organization member. Valid values:
     *
     *   1 : developer
     *   2 : visitors
     *   3 : Analyst
     *
     * @example 1
     *
     * @var int
     */
    public $userType;
    protected $_name = [
        'adminUser'     => 'AdminUser',
        'authAdminUser' => 'AuthAdminUser',
        'nickName'      => 'NickName',
        'roleIds'       => 'RoleIds',
        'userId'        => 'UserId',
        'userType'      => 'UserType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
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
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }
        if (null !== $this->userType) {
            $res['UserType'] = $this->userType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateUserRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
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
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }
        if (isset($map['UserType'])) {
            $model->userType = $map['UserType'];
        }

        return $model;
    }
}
