<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Quickbipublic\V20220101\Models\QueryUserInfoByUserIdResponseBody;

use AlibabaCloud\Dara\Model;

class result extends Model
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
    public $email;

    /**
     * @var string
     */
    public $nickName;

    /**
     * @var string
     */
    public $phone;

    /**
     * @var int[]
     */
    public $roleIdList;

    /**
     * @var string
     */
    public $userId;

    /**
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

    public function validate()
    {
        if (\is_array($this->roleIdList)) {
            Model::validateArray($this->roleIdList);
        }
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
            if (\is_array($this->roleIdList)) {
                $res['RoleIdList'] = [];
                $n1 = 0;
                foreach ($this->roleIdList as $item1) {
                    $res['RoleIdList'][$n1] = $item1;
                    ++$n1;
                }
            }
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
                $model->roleIdList = [];
                $n1 = 0;
                foreach ($map['RoleIdList'] as $item1) {
                    $model->roleIdList[$n1] = $item1;
                    ++$n1;
                }
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
