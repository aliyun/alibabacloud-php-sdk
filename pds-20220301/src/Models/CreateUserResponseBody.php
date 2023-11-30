<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pds\V20220301\Models;

use AlibabaCloud\Tea\Model;

class CreateUserResponseBody extends Model
{
    /**
     * @description The URL of the profile picture.
     *
     * @example http://aa.com/1.jpg
     *
     * @var string
     */
    public $avatar;

    /**
     * @description The time when the user was created. This value is a UNIX timestamp representing the number of milliseconds that have elapsed since January 1, 1970, 00:00:00 UTC.
     *
     * @example 1639762579768
     *
     * @var int
     */
    public $createdAt;

    /**
     * @description The user who created the user.
     *
     * @example user1
     *
     * @var string
     */
    public $creator;

    /**
     * @description The ID of the default drive.
     *
     * @example 1
     *
     * @var string
     */
    public $defaultDriveId;

    /**
     * @description The description of the user.
     *
     * @example vipuser
     *
     * @var string
     */
    public $description;

    /**
     * @description The domain ID.
     *
     * @example bj1
     *
     * @var string
     */
    public $domainId;

    /**
     * @description The email address.
     *
     * @example a@a.com
     *
     * @var string
     */
    public $email;

    /**
     * @description The nickname of the user.
     *
     * @example 001
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
     * @description The role of the user. Valid values:
     *
     *   superadmin
     *   admin
     *   user
     *
     * @example admin
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
     * @description The time when the user was modified. This value is a UNIX timestamp representing the number of milliseconds that have elapsed since January 1, 1970, 00:00:00 UTC.
     *
     * @example 1639762579768
     *
     * @var int
     */
    public $updatedAt;

    /**
     * @description The custom data.
     *
     * @var mixed[]
     */
    public $userData;

    /**
     * @description The user ID.
     *
     * @example dingding_abc001
     *
     * @var string
     */
    public $userId;

    /**
     * @description The username.
     *
     * @example pds
     *
     * @var string
     */
    public $userName;
    protected $_name = [
        'avatar'         => 'avatar',
        'createdAt'      => 'created_at',
        'creator'        => 'creator',
        'defaultDriveId' => 'default_drive_id',
        'description'    => 'description',
        'domainId'       => 'domain_id',
        'email'          => 'email',
        'nickName'       => 'nick_name',
        'phone'          => 'phone',
        'role'           => 'role',
        'status'         => 'status',
        'updatedAt'      => 'updated_at',
        'userData'       => 'user_data',
        'userId'         => 'user_id',
        'userName'       => 'user_name',
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
        if (null !== $this->createdAt) {
            $res['created_at'] = $this->createdAt;
        }
        if (null !== $this->creator) {
            $res['creator'] = $this->creator;
        }
        if (null !== $this->defaultDriveId) {
            $res['default_drive_id'] = $this->defaultDriveId;
        }
        if (null !== $this->description) {
            $res['description'] = $this->description;
        }
        if (null !== $this->domainId) {
            $res['domain_id'] = $this->domainId;
        }
        if (null !== $this->email) {
            $res['email'] = $this->email;
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
        if (null !== $this->updatedAt) {
            $res['updated_at'] = $this->updatedAt;
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
     * @return CreateUserResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['avatar'])) {
            $model->avatar = $map['avatar'];
        }
        if (isset($map['created_at'])) {
            $model->createdAt = $map['created_at'];
        }
        if (isset($map['creator'])) {
            $model->creator = $map['creator'];
        }
        if (isset($map['default_drive_id'])) {
            $model->defaultDriveId = $map['default_drive_id'];
        }
        if (isset($map['description'])) {
            $model->description = $map['description'];
        }
        if (isset($map['domain_id'])) {
            $model->domainId = $map['domain_id'];
        }
        if (isset($map['email'])) {
            $model->email = $map['email'];
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
        if (isset($map['updated_at'])) {
            $model->updatedAt = $map['updated_at'];
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
