<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsuser\V20210308\Models;

use AlibabaCloud\SDK\Edsuser\V20210308\Models\CreateUsersRequest\users;
use AlibabaCloud\Tea\Model;

class CreateUsersRequest extends Model
{
    /**
     * @var string
     */
    public $autoLockTime;

    /**
     * @description The initial password. If this parameter is left empty, an email for password reset is sent to the specified email address.
     *
     * @example Test123****
     *
     * @var string
     */
    public $password;

    /**
     * @description Details of the convenience users.
     *
     * @example CreateUsers
     *
     * @var users[]
     */
    public $users;
    protected $_name = [
        'autoLockTime' => 'AutoLockTime',
        'password'     => 'Password',
        'users'        => 'Users',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->autoLockTime) {
            $res['AutoLockTime'] = $this->autoLockTime;
        }
        if (null !== $this->password) {
            $res['Password'] = $this->password;
        }
        if (null !== $this->users) {
            $res['Users'] = [];
            if (null !== $this->users && \is_array($this->users)) {
                $n = 0;
                foreach ($this->users as $item) {
                    $res['Users'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateUsersRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AutoLockTime'])) {
            $model->autoLockTime = $map['AutoLockTime'];
        }
        if (isset($map['Password'])) {
            $model->password = $map['Password'];
        }
        if (isset($map['Users'])) {
            if (!empty($map['Users'])) {
                $model->users = [];
                $n            = 0;
                foreach ($map['Users'] as $item) {
                    $model->users[$n++] = null !== $item ? users::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
