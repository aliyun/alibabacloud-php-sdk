<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20240730\Models;

use AlibabaCloud\Tea\Model;

class UpdateUserRequest extends Model
{
    /**
     * @description The cluster ID.
     *
     * This parameter is required.
     * @example ehpc-hz-FYUr32****
     *
     * @var string
     */
    public $clusterId;

    /**
     * @description The user group attribute of the user that you want to update. Valid values:
     *
     *   users: ordinary permissions, which are suitable for ordinary users that need only to submit and debug jobs.
     *   wheel: sudo permissions, which are suitable for administrators who need to manage clusters. In addition to submitting and debugging jobs, you can also run sudo commands to install software and restart nodes.
     *
     * @example users
     *
     * @var string
     */
    public $group;

    /**
     * @description The password attribute of the user that you want to update. The password must be 6 to 30 characters in length and must contain three of the following four character types:
     *
     *   Uppercase letters
     *   Lowercase letters
     *   Digits
     *   Special characters ()~!@#$%^&\\*-_+=|{}[]:;\\"/<>,.?/
     *
     * @example 123****
     *
     * @var string
     */
    public $password;

    /**
     * @description The username.
     *
     * This parameter is required.
     * @example testuser
     *
     * @var string
     */
    public $userName;
    protected $_name = [
        'clusterId' => 'ClusterId',
        'group'     => 'Group',
        'password'  => 'Password',
        'userName'  => 'UserName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
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
     * @return UpdateUserRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
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
