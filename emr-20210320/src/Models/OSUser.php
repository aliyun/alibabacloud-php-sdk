<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20210320\Models;

use AlibabaCloud\Dara\Model;

class OSUser extends Model
{
    /**
     * @var string
     */
    public $group;
    /**
     * @var string
     */
    public $password;
    /**
     * @var string
     */
    public $user;
    protected $_name = [
        'group'    => 'Group',
        'password' => 'Password',
        'user'     => 'User',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->group) {
            $res['Group'] = $this->group;
        }

        if (null !== $this->password) {
            $res['Password'] = $this->password;
        }

        if (null !== $this->user) {
            $res['User'] = $this->user;
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
        if (isset($map['Group'])) {
            $model->group = $map['Group'];
        }

        if (isset($map['Password'])) {
            $model->password = $map['Password'];
        }

        if (isset($map['User'])) {
            $model->user = $map['User'];
        }

        return $model;
    }
}
