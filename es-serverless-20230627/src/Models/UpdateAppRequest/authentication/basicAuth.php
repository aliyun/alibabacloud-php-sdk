<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Esserverless\V20230627\Models\UpdateAppRequest\authentication;

use AlibabaCloud\Tea\Model;

class basicAuth extends Model
{
    /**
     * @example Admin@123
     *
     * @var string
     */
    public $password;

    /**
     * @example test-abc
     *
     * @var string
     */
    public $username;
    protected $_name = [
        'password' => 'password',
        'username' => 'username',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->password) {
            $res['password'] = $this->password;
        }
        if (null !== $this->username) {
            $res['username'] = $this->username;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return basicAuth
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['password'])) {
            $model->password = $map['password'];
        }
        if (isset($map['username'])) {
            $model->username = $map['username'];
        }

        return $model;
    }
}
