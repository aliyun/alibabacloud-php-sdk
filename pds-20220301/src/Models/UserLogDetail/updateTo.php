<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pds\V20220301\Models\UserLogDetail;

use AlibabaCloud\Tea\Model;

class updateTo extends Model
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
    protected $_name = [
        'email'     => 'email',
        'expiredAt' => 'expired_at',
        'name'      => 'name',
        'phone'     => 'phone',
        'roleId'    => 'role_id',
    ];

    public function validate()
    {
    }

    public function toMap()
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return updateTo
     */
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

        return $model;
    }
}
