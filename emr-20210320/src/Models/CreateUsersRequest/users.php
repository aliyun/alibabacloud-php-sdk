<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20210320\Models\CreateUsersRequest;

use AlibabaCloud\Tea\Model;

class users extends Model
{
    /**
     * @description 用户密码。
     *
     * This parameter is required.
     *
     * @example *Ab123
     *
     * @var string
     */
    public $password;

    /**
     * @description 用户名。
     *
     * This parameter is required.
     *
     * @example xi
     *
     * @var string
     */
    public $userName;
    protected $_name = [
        'password' => 'Password',
        'userName' => 'UserName',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
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
     * @return users
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Password'])) {
            $model->password = $map['Password'];
        }
        if (isset($map['UserName'])) {
            $model->userName = $map['UserName'];
        }

        return $model;
    }
}
