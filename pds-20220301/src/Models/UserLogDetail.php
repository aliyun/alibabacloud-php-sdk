<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pds\V20220301\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Pds\V20220301\Models\UserLogDetail\updateTo;

class UserLogDetail extends Model
{
    /**
     * @var string
     */
    public $email;

    /**
     * @var int
     */
    public $expiredAt;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $phone;

    /**
     * @var string
     */
    public $roleId;

    /**
     * @var updateTo
     */
    public $updateTo;
    protected $_name = [
        'email' => 'email',
        'expiredAt' => 'expired_at',
        'name' => 'name',
        'phone' => 'phone',
        'roleId' => 'role_id',
        'updateTo' => 'update_to',
    ];

    public function validate()
    {
        if (null !== $this->updateTo) {
            $this->updateTo->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->email) {
            $res['email'] = $this->email;
        }

        if (null !== $this->expiredAt) {
            $res['expired_at'] = $this->expiredAt;
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->phone) {
            $res['phone'] = $this->phone;
        }

        if (null !== $this->roleId) {
            $res['role_id'] = $this->roleId;
        }

        if (null !== $this->updateTo) {
            $res['update_to'] = null !== $this->updateTo ? $this->updateTo->toArray($noStream) : $this->updateTo;
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
        if (isset($map['email'])) {
            $model->email = $map['email'];
        }

        if (isset($map['expired_at'])) {
            $model->expiredAt = $map['expired_at'];
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['phone'])) {
            $model->phone = $map['phone'];
        }

        if (isset($map['role_id'])) {
            $model->roleId = $map['role_id'];
        }

        if (isset($map['update_to'])) {
            $model->updateTo = updateTo::fromMap($map['update_to']);
        }

        return $model;
    }
}
