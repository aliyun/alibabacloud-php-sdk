<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models;

use AlibabaCloud\Tea\Model;

class RegistryAuthConfig extends Model
{
    /**
     * @example abc***
     *
     * @var string
     */
    public $password;

    /**
     * @example acs:ram::142xxxx:role/xxxxxx
     *
     * @var string
     */
    public $role;

    /**
     * @example admin
     *
     * @var string
     */
    public $userName;
    protected $_name = [
        'password' => 'password',
        'role' => 'role',
        'userName' => 'userName',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->password) {
            $res['password'] = $this->password;
        }
        if (null !== $this->role) {
            $res['role'] = $this->role;
        }
        if (null !== $this->userName) {
            $res['userName'] = $this->userName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RegistryAuthConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['password'])) {
            $model->password = $map['password'];
        }
        if (isset($map['role'])) {
            $model->role = $map['role'];
        }
        if (isset($map['userName'])) {
            $model->userName = $map['userName'];
        }

        return $model;
    }
}
