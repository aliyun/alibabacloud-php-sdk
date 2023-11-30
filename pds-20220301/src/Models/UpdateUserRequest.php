<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pds\V20220301\Models;

use AlibabaCloud\SDK\Pds\V20220301\Models\UpdateUserRequest\groupInfoList;
use AlibabaCloud\Tea\Model;

class UpdateUserRequest extends Model
{
    /**
     * @description The URL of the profile picture.
     *
     * If you specify the parameter in the DATA URL format, the URL must start with data:// and be encoded in Base64. The URL can be up to 300 KB in size.
     * @example http://a.b.c/pds.jpg
     *
     * @var string
     */
    public $avatar;

    /**
     * @description The description of the user. The description can be up to 1,024 characters in length.
     *
     * @var string
     */
    public $description;

    /**
     * @description The email address of the user.
     *
     * @example a@aliyunpds.com
     *
     * @var string
     */
    public $email;

    /**
     * @description The information about the group.
     *
     * @var groupInfoList[]
     */
    public $groupInfoList;

    /**
     * @description The nickname of the user. The nickname can be up to 128 characters in length.
     *
     * @example pdsuer
     *
     * @var string
     */
    public $nickName;

    /**
     * @description The mobile number of the user.
     *
     * @example 13900001111
     *
     * @var string
     */
    public $phone;

    /**
     * @description The role of the user. Valid values:
     *
     *   superadmin
     *   admin
     *   user
     *
     * @example user
     *
     * @var string
     */
    public $role;

    /**
     * @description The state of the user. Valid values:
     *
     *   disabled: The user is prohibited from logon.
     *   enabled: The user is in a normal state.
     *
     * @example enabled
     *
     * @var string
     */
    public $status;

    /**
     * @description The custom data. The data can be up to 1,024 characters in length.
     *
     * @var string[]
     */
    public $userData;

    /**
     * @description The user ID. The ID can be up to 64 characters in length and cannot contain a number sign (#).
     *
     * @example c9b7a5aa04d14ae3867fdc886fa01da4
     *
     * @var string
     */
    public $userId;
    protected $_name = [
        'avatar'        => 'avatar',
        'description'   => 'description',
        'email'         => 'email',
        'groupInfoList' => 'group_info_list',
        'nickName'      => 'nick_name',
        'phone'         => 'phone',
        'role'          => 'role',
        'status'        => 'status',
        'userData'      => 'user_data',
        'userId'        => 'user_id',
    ];

    public function validate()
    {
    }

    public function toMap()
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
            $res['group_info_list'] = [];
            if (null !== $this->groupInfoList && \is_array($this->groupInfoList)) {
                $n = 0;
                foreach ($this->groupInfoList as $item) {
                    $res['group_info_list'][$n++] = null !== $item ? $item->toMap() : $item;
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
            $res['user_data'] = $this->userData;
        }
        if (null !== $this->userId) {
            $res['user_id'] = $this->userId;
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
                $n                    = 0;
                foreach ($map['group_info_list'] as $item) {
                    $model->groupInfoList[$n++] = null !== $item ? groupInfoList::fromMap($item) : $item;
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
            $model->userData = $map['user_data'];
        }
        if (isset($map['user_id'])) {
            $model->userId = $map['user_id'];
        }

        return $model;
    }
}
