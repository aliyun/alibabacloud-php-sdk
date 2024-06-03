<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20210320\Models;

use AlibabaCloud\Tea\Model;

class User extends Model
{
    /**
     * @description 用户组。
     *
     * @example hadoop
     *
     * @var string
     */
    public $group;

    /**
     * @description 用户密码。
     *
     * This parameter is required.
     * @example 12345****
     *
     * @var string
     */
    public $password;

    /**
     * @description 用户ID。
     *
     * This parameter is required.
     * @example 1238539****
     *
     * @var string
     */
    public $userId;

    /**
     * @description 用户名称。
     *
     * This parameter is required.
     * @example 王五
     *
     * @var string
     */
    public $userName;

    /**
     * @description 用户类型。
     *
     * @example LDAP
     *
     * @var string
     */
    public $userType;
    protected $_name = [
        'group'    => 'Group',
        'password' => 'Password',
        'userId'   => 'UserId',
        'userName' => 'UserName',
        'userType' => 'UserType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->group) {
            $res['Group'] = $this->group;
        }
        if (null !== $this->password) {
            $res['Password'] = $this->password;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }
        if (null !== $this->userName) {
            $res['UserName'] = $this->userName;
        }
        if (null !== $this->userType) {
            $res['UserType'] = $this->userType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return User
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Group'])) {
            $model->group = $map['Group'];
        }
        if (isset($map['Password'])) {
            $model->password = $map['Password'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }
        if (isset($map['UserName'])) {
            $model->userName = $map['UserName'];
        }
        if (isset($map['UserType'])) {
            $model->userType = $map['UserType'];
        }

        return $model;
    }
}
