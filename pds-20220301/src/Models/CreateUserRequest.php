<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pds\V20220301\Models;

use AlibabaCloud\SDK\Pds\V20220301\Models\CreateUserRequest\groupInfoList;
use AlibabaCloud\Tea\Model;

class CreateUserRequest extends Model
{
    /**
     * @description The URL of the profile picture.
     *
     * If you specify the parameter in the data URL format, the URL must start with data:// and be encoded in Base64. The URL can be up to 300 KB in size.
     * @example http://a.b.c/pds.jpg
     *
     * @var string
     */
    public $avatar;

    /**
     * @description The description of the user. The description can be up to 1,024 characters in length.
     *
     * @example The VIP user
     *
     * @var string
     */
    public $description;

    /**
     * @description The email address.
     *
     * @example 123@pds.com
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
     * @description The phone number.
     *
     * @example 13900001111
     *
     * @var string
     */
    public $phone;

    /**
     * @description The role of the user. Default value: user. Valid values:
     *
     *   superadmin
     *   admin
     *   user
     *
     * Valid values:
     *
     *   subdomain_super_admin
     *
     * <!-- -->
     *
     *   subdomain_admin
     *
     * <!-- -->
     *
     *   superadmin
     *
     * <!-- -->
     *
     *   admin
     *
     * <!-- -->
     *
     *   user
     *
     * <!-- -->
     * @example user
     *
     * @var string
     */
    public $role;

    /**
     * @description The state of the user. Default value: enabled. Valid values:
     *
     *   enabled: The user is in a normal state.
     *   disabled: The user is prohibited from logon.
     *
     * @example enabled
     *
     * @var string
     */
    public $status;

    /**
     * @description The custom data. The data can be up to 1,024 characters in length.
     *
     * @example md
     *
     * @var mixed[]
     */
    public $userData;

    /**
     * @description The user ID. The ID can be up to 64 characters in length and cannot contain number signs (#).
     *
     * This parameter is required.
     * @example pdsuserid1
     *
     * @var string
     */
    public $userId;

    /**
     * @description The username. The username can be up to 128 characters in length.
     *
     * @example pdsusername
     *
     * @var string
     */
    public $userName;
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
        'userName'      => 'user_name',
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
        if (null !== $this->userName) {
            $res['user_name'] = $this->userName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateUserRequest
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
        if (isset($map['user_name'])) {
            $model->userName = $map['user_name'];
        }

        return $model;
    }
}
