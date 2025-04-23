<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsuser\V20210308\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Edsuser\V20210308\Models\CreateUsersRequest\users;

class CreateUsersRequest extends Model
{
    /**
     * @var string
     */
    public $autoLockTime;

    /**
     * @var bool
     */
    public $isLocalAdmin;

    /**
     * @var string
     */
    public $password;

    /**
     * @var string
     */
    public $passwordExpireDays;

    /**
     * @var users[]
     */
    public $users;
    protected $_name = [
        'autoLockTime' => 'AutoLockTime',
        'isLocalAdmin' => 'IsLocalAdmin',
        'password' => 'Password',
        'passwordExpireDays' => 'PasswordExpireDays',
        'users' => 'Users',
    ];

    public function validate()
    {
        if (\is_array($this->users)) {
            Model::validateArray($this->users);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->autoLockTime) {
            $res['AutoLockTime'] = $this->autoLockTime;
        }

        if (null !== $this->isLocalAdmin) {
            $res['IsLocalAdmin'] = $this->isLocalAdmin;
        }

        if (null !== $this->password) {
            $res['Password'] = $this->password;
        }

        if (null !== $this->passwordExpireDays) {
            $res['PasswordExpireDays'] = $this->passwordExpireDays;
        }

        if (null !== $this->users) {
            if (\is_array($this->users)) {
                $res['Users'] = [];
                $n1 = 0;
                foreach ($this->users as $item1) {
                    $res['Users'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AutoLockTime'])) {
            $model->autoLockTime = $map['AutoLockTime'];
        }

        if (isset($map['IsLocalAdmin'])) {
            $model->isLocalAdmin = $map['IsLocalAdmin'];
        }

        if (isset($map['Password'])) {
            $model->password = $map['Password'];
        }

        if (isset($map['PasswordExpireDays'])) {
            $model->passwordExpireDays = $map['PasswordExpireDays'];
        }

        if (isset($map['Users'])) {
            if (!empty($map['Users'])) {
                $model->users = [];
                $n1 = 0;
                foreach ($map['Users'] as $item1) {
                    $model->users[$n1++] = users::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
