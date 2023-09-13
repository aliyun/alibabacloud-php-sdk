<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eventbridge\V20200401\Models\UpdateConnectionRequest\authParameters;

use AlibabaCloud\Tea\Model;

class basicAuthParameters extends Model
{
    /**
     * @description The password for basic authentication.
     *
     * @example admin
     *
     * @var string
     */
    public $password;

    /**
     * @description The username for basic authentication.
     *
     * @example admin
     *
     * @var string
     */
    public $username;
    protected $_name = [
        'password' => 'Password',
        'username' => 'Username',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->password) {
            $res['Password'] = $this->password;
        }
        if (null !== $this->username) {
            $res['Username'] = $this->username;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return basicAuthParameters
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Password'])) {
            $model->password = $map['Password'];
        }
        if (isset($map['Username'])) {
            $model->username = $map['Username'];
        }

        return $model;
    }
}
