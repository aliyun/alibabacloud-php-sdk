<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20240730\Models\CreateUsersRequest;

use AlibabaCloud\Tea\Model;

class user extends Model
{
    /**
     * @description The public key of the user.
     *
     * Specify one of the Password and AuthKey parameters. The AuthKey parameter takes effect only when the cluster authentication method is set to Key. Key authentication is not recommended.
     * @example Abc****
     *
     * @var string
     */
    public $authKey;

    /**
     * @description The permission group to which the user belongs. Valid values:
     *
     * users: ordinary permissions, which are suitable for ordinary users that need only to submit and debug jobs. wheel: sudo permissions, which are suitable for administrators who need to manage clusters. In addition to submitting and debugging jobs, you can also run sudo commands to install software and restart nodes. You can add up to 20 users in a call.
     * @example users
     *
     * @var string
     */
    public $group;

    /**
     * @description The password of the user. The password must be 6 to 30 characters in length and must contain three of the following character types:
     *
     *   Uppercase letters
     *   Lowercase letters
     *   Digits
     *   Special characters ()~!@#$%^&\\*-_+=|{}[]:;\\"/<>,.?/
     *
     * Specify one of the Password and AuthKey parameters. The Password parameter takes effect only when the cluster authentication method is set to Password. Password authentication is recommended.
     * @example 1@a2****
     *
     * @var string
     */
    public $password;

    /**
     * @description The username. The username must be 1 to 30 characters in length. It must start with a letter and can contain digits, letters, and periods (.).
     *
     * You can add up to 20 users in a call.
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
