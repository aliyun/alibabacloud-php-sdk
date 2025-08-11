<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Quickbipublic\V20220101\Models;

use AlibabaCloud\Dara\Model;

class AddUserRequest extends Model
{
    /**
     * @var string
     */
    public $accountId;

    /**
     * @var string
     */
    public $accountName;

    /**
     * @var bool
     */
    public $adminUser;

    /**
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
     * @var int
     */
    public $userType;
    protected $_name = [
        'accountId' => 'AccountId',
        'accountName' => 'AccountName',
        'adminUser' => 'AdminUser',
        'authAdminUser' => 'AuthAdminUser',
        'nickName' => 'NickName',
        'roleIds' => 'RoleIds',
        'userType' => 'UserType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
