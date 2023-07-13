<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models\ModifyUserPasswordsRequest;

use AlibabaCloud\Tea\Model;

class user extends Model
{
    /**
     * @description The name of the user N whose password you want to modify. Valid values of N: 1 to 100.
     *
     * You can call the [ListUsers](~~188572~~) operation to query the users of the cluster.
     * @example user1
     *
     * @var string
     */
    public $name;

    /**
     * @description The password of the Nth user. The password must be 8 to 30 characters in length and contain three of the following items:
     *
     *   Uppercase letter
     *   Lowercase letter
     *   Digit
     *   Special character: `()~!@#$%^&*-_+=|{}[]:;\"/<>,.?/`
     *
     * >  We recommend that you use HTTPS to call API operations to avoid password leaks.
     * @example 1@a****
     *
     * @var string
     */
    public $password;
    protected $_name = [
        'name'     => 'Name',
        'password' => 'Password',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->password) {
            $res['Password'] = $this->password;
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
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Password'])) {
            $model->password = $map['Password'];
        }

        return $model;
    }
}
