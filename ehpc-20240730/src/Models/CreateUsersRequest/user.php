<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20240730\Models\CreateUsersRequest;

use AlibabaCloud\Tea\Model;

class user extends Model
{
    /**
     * @example Abc****
     *
     * @var string
     */
    public $authKey;

    /**
     * @example users
     *
     * @var string
     */
    public $group;

    /**
     * @example 1@a2****
     *
     * @var string
     */
    public $password;

    /**
     * @example testuser
     *
     * @var string
     */
    public $userName;
    protected $_name = [
        'authKey'  => 'AuthKey',
        'group'    => 'Group',
        'password' => 'Password',
        'userName' => 'UserName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->authKey) {
            $res['AuthKey'] = $this->authKey;
        }
        if (null !== $this->group) {
            $res['Group'] = $this->group;
        }
        if (null !== $this->password) {
            $res['Password'] = $this->password;
        }
        if (null !== $this->userName) {
            $res['UserName'] = $this->userName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return user
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AuthKey'])) {
            $model->authKey = $map['AuthKey'];
        }
        if (isset($map['Group'])) {
            $model->group = $map['Group'];
        }
        if (isset($map['Password'])) {
            $model->password = $map['Password'];
        }
        if (isset($map['UserName'])) {
            $model->userName = $map['UserName'];
        }

        return $model;
    }
}
