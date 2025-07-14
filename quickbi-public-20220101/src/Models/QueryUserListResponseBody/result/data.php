<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Quickbipublic\V20220101\Models\QueryUserListResponseBody\result;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The ID of the Alibaba Cloud account.
     *
     * @example 1355********
     *
     * @var string
     */
    public $accountId;

    /**
     * @description The name of the Alibaba Cloud account that corresponds to the member.
     *
     * @example Test user
     *
     * @var string
     */
    public $accountName;

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
     * @description User status:
     * - Active - false
     * - Inactive - true
     *
     * @example false
     *
     * @var bool
     */
    public $isDeleted;

    /**
     * @description Join Date
     *
     * @example 1718691704000
     *
     * @var int
     */
    public $joinedDate;

    /**
     * @description Last login time.
     *
     * @example 1718761320681
     *
     * @var int
     */
    public $lastLoginTime;

    /**
     * @description The nickname of the organization member.
     *
     * @example Test user
     *
     * @var string
     */
    public $nickName;

    /**
     * @description List of organization role IDs bound to the user.
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
        'isDeleted' => 'IsDeleted',
        'joinedDate' => 'JoinedDate',
        'lastLoginTime' => 'LastLoginTime',
        'nickName' => 'NickName',
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
        if (null !== $this->isDeleted) {
            $res['IsDeleted'] = $this->isDeleted;
        }
        if (null !== $this->joinedDate) {
            $res['JoinedDate'] = $this->joinedDate;
        }
        if (null !== $this->lastLoginTime) {
            $res['LastLoginTime'] = $this->lastLoginTime;
        }
        if (null !== $this->nickName) {
            $res['NickName'] = $this->nickName;
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
     * @return data
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
        if (isset($map['IsDeleted'])) {
            $model->isDeleted = $map['IsDeleted'];
        }
        if (isset($map['JoinedDate'])) {
            $model->joinedDate = $map['JoinedDate'];
        }
        if (isset($map['LastLoginTime'])) {
            $model->lastLoginTime = $map['LastLoginTime'];
        }
        if (isset($map['NickName'])) {
            $model->nickName = $map['NickName'];
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
