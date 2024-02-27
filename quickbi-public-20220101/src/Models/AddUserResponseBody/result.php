<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Quickbipublic\V20220101\Models\AddUserResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @example xxxxxx@163.com
     *
     * @var string
     */
    public $accountName;

    /**
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
     * @var int[]
     */
    public $roleIdList;

    /**
     * @example b5d8fd9348cc4327****afb604
     *
     * @var string
     */
    public $userId;

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
        'roleIdList'    => 'RoleIdList',
        'userId'        => 'UserId',
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
