<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20210320\Models;

use AlibabaCloud\Tea\Model;

class OSUser extends Model
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
     * @example 12345****
     *
     * @var string
     */
    public $password;

    /**
     * @description 用户名称。
     *
     * @example 王五
     *
     * @var string
     */
    public $user;
    protected $_name = [
        'group'    => 'Group',
        'password' => 'Password',
        'user'     => 'User',
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
        if (null !== $this->user) {
            $res['User'] = $this->user;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return OSUser
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
        if (isset($map['User'])) {
            $model->user = $map['User'];
        }

        return $model;
    }
}
