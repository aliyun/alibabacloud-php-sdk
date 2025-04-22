<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pds\V20220301\Models;

use AlibabaCloud\Dara\Model;

class CreateUserResponseBody extends Model
{
    /**
     * @var string
     */
    public $avatar;

    /**
     * @var int
     */
    public $createdAt;

    /**
     * @var string
     */
    public $creator;

    /**
     * @var string
     */
    public $defaultDriveId;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $domainId;

    /**
     * @var string
     */
    public $email;

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
     * @var int
     */
    public $updatedAt;

    /**
     * @var mixed[]
     */
    public $userData;

    /**
     * @var string
     */
    public $userId;

    /**
     * @var string
     */
    public $userName;
    protected $_name = [
        'avatar' => 'avatar',
        'createdAt' => 'created_at',
        'creator' => 'creator',
        'defaultDriveId' => 'default_drive_id',
        'description' => 'description',
        'domainId' => 'domain_id',
        'email' => 'email',
        'nickName' => 'nick_name',
        'phone' => 'phone',
        'role' => 'role',
        'status' => 'status',
        'updatedAt' => 'updated_at',
        'userData' => 'user_data',
        'userId' => 'user_id',
        'userName' => 'user_name',
    ];

    public function validate()
    {
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

        if (null !== $this->userName) {
            $res['user_name'] = $this->userName;
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

        if (isset($map['user_name'])) {
            $model->userName = $map['user_name'];
        }

        return $model;
    }
}
