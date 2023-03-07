<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models\AddUsersRequest;

use AlibabaCloud\Tea\Model;

class user extends Model
{
    /**
     * @description The permission group to which the user belongs. Valid values:
     *
     *   users: an ordinary permission group. It is applicable to ordinary users that need only to submit and debug jobs.
     *   wheel: a sudo permission group. It is applicable to the administrator who needs to manage the cluster. In addition to submitting and debugging jobs, users who have sudo permissions can run sudo commands to install software and restart nodes.
     *
     * Valid values of N: 1 to 100
     * @example users
     *
     * @var string
     */
    public $group;

    /**
     * @description The name of the user that you want to add. The name must be 6 to 30 characters in length and can contain letters, digits, and periods (.). It must start with a letter.
     *
     * Valid values of N: 1 to 100
     * @example user1
     *
     * @var string
     */
    public $name;

    /**
     * @description The password of the user. The password must be 8 to 30 characters in length and contain three of the following items:
     *
     *   Uppercase letter
     *   Lowercase letter
     *   Digit
     *   Special character: `()~!@#$%^&*-_+=|{}[]:;\"/<>,.?/`
     *
     * >  We recommend that you use HTTPS to call the AddUsers operation to ensure that the password remains confidential.
     * @example 1@a2****
     *
     * @var string
     */
    public $password;
    protected $_name = [
        'group'    => 'Group',
        'name'     => 'Name',
        'password' => 'Password',
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
        if (isset($map['Group'])) {
            $model->group = $map['Group'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Password'])) {
            $model->password = $map['Password'];
        }

        return $model;
    }
}
