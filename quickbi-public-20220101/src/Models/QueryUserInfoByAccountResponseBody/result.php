<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Quickbipublic\V20220101\Models\QueryUserInfoByAccountResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @description The ID of the Alibaba Cloud account.
     *
     * @example 135****5848
     *
     * @var string
     */
    public $accountId;

    /**
     * @description The name of the Alibaba Cloud account that corresponds to the member. (If you use a RAM user, the domain name information that follows @ is removed. For example, if you use a <test@test.com>, test is returned.)
     *
     * @example 1386587****@163.com
     *
     * @var string
     */
    public $accountName;

    /**
     * @description Whether you are an administrator of the organization. Valid values:
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
     * @description Whether you are a permission administrator. Valid values:
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
     * @description The email address of the user.
     *
     * @example 1386587****@163.com
     *
     * @var string
     */
    public $email;

    /**
     * @description The nickname of the account.
     *
     * @example Test user
     *
     * @var string
     */
    public $nickName;

    /**
     * @description The phone number of the alert contact.
     *
     * @example 1386587****
     *
     * @var string
     */
    public $phone;

    /**
     * @description 用户绑定的组织角色ID列表。
     *
     * @var int[]
     */
    public $roleIdList;

    /**
     * @description The UserID in the Quick BI.
     *
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
        'accountId' => 'AccountId',
        'accountName' => 'AccountName',
        'adminUser' => 'AdminUser',
        'authAdminUser' => 'AuthAdminUser',
        'email' => 'Email',
        'nickName' => 'NickName',
        'phone' => 'Phone',
        'roleIdList' => 'RoleIdList',
        'userId' => 'UserId',
        'userType' => 'UserType',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->accountId) {
            $res['AccountId'] = $this->accountId;
        }
        if (null !== $this->accountName) {
            $res['AccountName'] = $this->accountName;
        }
        if (null !== $this->adminUser) {
            $res['AdminUser'] = $this->adminUser;
        }
        if (null !== $this->authAdminUser) {
            $res['AuthAdminUser'] = $this->authAdminUser;
        }
        if (null !== $this->email) {
            $res['Email'] = $this->email;
        }
        if (null !== $this->nickName) {
            $res['NickName'] = $this->nickName;
        }
        if (null !== $this->phone) {
            $res['Phone'] = $this->phone;
        }
        if (null !== $this->roleIdList) {
            $res['RoleIdList'] = $this->roleIdList;
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
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccountId'])) {
            $model->accountId = $map['AccountId'];
        }
        if (isset($map['AccountName'])) {
            $model->accountName = $map['AccountName'];
        }
        if (isset($map['AdminUser'])) {
            $model->adminUser = $map['AdminUser'];
        }
        if (isset($map['AuthAdminUser'])) {
            $model->authAdminUser = $map['AuthAdminUser'];
        }
        if (isset($map['Email'])) {
            $model->email = $map['Email'];
        }
        if (isset($map['NickName'])) {
            $model->nickName = $map['NickName'];
        }
        if (isset($map['Phone'])) {
            $model->phone = $map['Phone'];
        }
        if (isset($map['RoleIdList'])) {
            if (!empty($map['RoleIdList'])) {
                $model->roleIdList = $map['RoleIdList'];
            }
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
