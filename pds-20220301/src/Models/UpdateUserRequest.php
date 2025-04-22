<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pds\V20220301\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Pds\V20220301\Models\UpdateUserRequest\groupInfoList;

class UpdateUserRequest extends Model
{
    /**
     * @var string
     */
    public $avatar;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $email;

    /**
     * @var groupInfoList[]
     */
    public $groupInfoList;

    /**
     * @var string
     */
    public $nickName;

    /**
     * @var string
     */
    public $phone;

    /**
     * @var string
     */
    public $role;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string[]
     */
    public $userData;

    /**
     * @var string
     */
    public $userId;
    protected $_name = [
        'avatar' => 'avatar',
        'description' => 'description',
        'email' => 'email',
        'groupInfoList' => 'group_info_list',
        'nickName' => 'nick_name',
        'phone' => 'phone',
        'role' => 'role',
        'status' => 'status',
        'userData' => 'user_data',
        'userId' => 'user_id',
    ];

    public function validate()
    {
        if (\is_array($this->groupInfoList)) {
            Model::validateArray($this->groupInfoList);
        }
        if (\is_array($this->userData)) {
            Model::validateArray($this->userData);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->avatar) {
            $res['avatar'] = $this->avatar;
        }

        if (null !== $this->description) {
            $res['description'] = $this->description;
        }

        if (null !== $this->email) {
            $res['email'] = $this->email;
        }

        if (null !== $this->groupInfoList) {
            if (\is_array($this->groupInfoList)) {
                $res['group_info_list'] = [];
                $n1 = 0;
                foreach ($this->groupInfoList as $item1) {
                    $res['group_info_list'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->nickName) {
            $res['nick_name'] = $this->nickName;
        }

        if (null !== $this->phone) {
            $res['phone'] = $this->phone;
        }

        if (null !== $this->role) {
            $res['role'] = $this->role;
        }

        if (null !== $this->status) {
            $res['status'] = $this->status;
        }

        if (null !== $this->userData) {
            if (\is_array($this->userData)) {
                $res['user_data'] = [];
                foreach ($this->userData as $key1 => $value1) {
                    $res['user_data'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->userId) {
            $res['user_id'] = $this->userId;
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
        if (isset($map['avatar'])) {
            $model->avatar = $map['avatar'];
        }

        if (isset($map['description'])) {
            $model->description = $map['description'];
        }

        if (isset($map['email'])) {
            $model->email = $map['email'];
        }

        if (isset($map['group_info_list'])) {
            if (!empty($map['group_info_list'])) {
                $model->groupInfoList = [];
                $n1 = 0;
                foreach ($map['group_info_list'] as $item1) {
                    $model->groupInfoList[$n1++] = groupInfoList::fromMap($item1);
                }
            }
        }

        if (isset($map['nick_name'])) {
            $model->nickName = $map['nick_name'];
        }

        if (isset($map['phone'])) {
            $model->phone = $map['phone'];
        }

        if (isset($map['role'])) {
            $model->role = $map['role'];
        }

        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        if (isset($map['user_data'])) {
            if (!empty($map['user_data'])) {
                $model->userData = [];
                foreach ($map['user_data'] as $key1 => $value1) {
                    $model->userData[$key1] = $value1;
                }
            }
        }

        if (isset($map['user_id'])) {
            $model->userId = $map['user_id'];
        }

        return $model;
    }
}
