<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pds\V20220301\Models;

use AlibabaCloud\Dara\Model;

class UserExtraItem extends Model
{
    /**
     * @var AccountLinkInfo[]
     */
    public $account;

    /**
     * @var string
     */
    public $avatar;

    /**
     * @var string
     */
    public $createdAt;

    /**
     * @var string
     */
    public $creator;

    /**
     * @var BaseDriveResponse
     */
    public $defaultDrive;

    /**
     * @var string
     */
    public $defaultDriveId;

    /**
     * @var string
     */
    public $defaultLocation;

    /**
     * @var bool
     */
    public $denyChangePasswordBySelf;

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
     * @var int
     */
    public $expiredAt;

    /**
     * @var bool
     */
    public $isSync;

    /**
     * @var int
     */
    public $lastLoginTime;

    /**
     * @var bool
     */
    public $needChangePasswordNextLogin;

    /**
     * @var string
     */
    public $nickName;

    /**
     * @var BaseDriveResponse[]
     */
    public $parentGroup;

    /**
     * @var string
     */
    public $pathStatus;

    /**
     * @var IDPermission[]
     */
    public $permission;

    /**
     * @var string
     */
    public $phone;

    /**
     * @var string
     */
    public $phoneRegion;

    /**
     * @var string
     */
    public $role;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
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
        'account' => 'account',
        'avatar' => 'avatar',
        'createdAt' => 'created_at',
        'creator' => 'creator',
        'defaultDrive' => 'default_drive',
        'defaultDriveId' => 'default_drive_id',
        'defaultLocation' => 'default_location',
        'denyChangePasswordBySelf' => 'deny_change_password_by_self',
        'description' => 'description',
        'domainId' => 'domain_id',
        'email' => 'email',
        'expiredAt' => 'expired_at',
        'isSync' => 'is_sync',
        'lastLoginTime' => 'last_login_time',
        'needChangePasswordNextLogin' => 'need_change_password_next_login',
        'nickName' => 'nick_name',
        'parentGroup' => 'parent_group',
        'pathStatus' => 'path_status',
        'permission' => 'permission',
        'phone' => 'phone',
        'phoneRegion' => 'phone_region',
        'role' => 'role',
        'status' => 'status',
        'updatedAt' => 'updated_at',
        'userData' => 'user_data',
        'userId' => 'user_id',
        'userName' => 'user_name',
    ];

    public function validate()
    {
        if (\is_array($this->account)) {
            Model::validateArray($this->account);
        }
        if (null !== $this->defaultDrive) {
            $this->defaultDrive->validate();
        }
        if (\is_array($this->parentGroup)) {
            Model::validateArray($this->parentGroup);
        }
        if (\is_array($this->permission)) {
            Model::validateArray($this->permission);
        }
        if (\is_array($this->userData)) {
            Model::validateArray($this->userData);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->account) {
            if (\is_array($this->account)) {
                $res['account'] = [];
                $n1 = 0;
                foreach ($this->account as $item1) {
                    $res['account'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->avatar) {
            $res['avatar'] = $this->avatar;
        }

        if (null !== $this->createdAt) {
            $res['created_at'] = $this->createdAt;
        }

        if (null !== $this->creator) {
            $res['creator'] = $this->creator;
        }

        if (null !== $this->defaultDrive) {
            $res['default_drive'] = null !== $this->defaultDrive ? $this->defaultDrive->toArray($noStream) : $this->defaultDrive;
        }

        if (null !== $this->defaultDriveId) {
            $res['default_drive_id'] = $this->defaultDriveId;
        }

        if (null !== $this->defaultLocation) {
            $res['default_location'] = $this->defaultLocation;
        }

        if (null !== $this->denyChangePasswordBySelf) {
            $res['deny_change_password_by_self'] = $this->denyChangePasswordBySelf;
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

        if (null !== $this->expiredAt) {
            $res['expired_at'] = $this->expiredAt;
        }

        if (null !== $this->isSync) {
            $res['is_sync'] = $this->isSync;
        }

        if (null !== $this->lastLoginTime) {
            $res['last_login_time'] = $this->lastLoginTime;
        }

        if (null !== $this->needChangePasswordNextLogin) {
            $res['need_change_password_next_login'] = $this->needChangePasswordNextLogin;
        }

        if (null !== $this->nickName) {
            $res['nick_name'] = $this->nickName;
        }

        if (null !== $this->parentGroup) {
            if (\is_array($this->parentGroup)) {
                $res['parent_group'] = [];
                $n1 = 0;
                foreach ($this->parentGroup as $item1) {
                    $res['parent_group'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->pathStatus) {
            $res['path_status'] = $this->pathStatus;
        }

        if (null !== $this->permission) {
            if (\is_array($this->permission)) {
                $res['permission'] = [];
                foreach ($this->permission as $key1 => $value1) {
                    $res['permission'][$key1] = null !== $value1 ? $value1->toArray($noStream) : $value1;
                }
            }
        }

        if (null !== $this->phone) {
            $res['phone'] = $this->phone;
        }

        if (null !== $this->phoneRegion) {
            $res['phone_region'] = $this->phoneRegion;
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
        if (isset($map['account'])) {
            if (!empty($map['account'])) {
                $model->account = [];
                $n1 = 0;
                foreach ($map['account'] as $item1) {
                    $model->account[$n1++] = AccountLinkInfo::fromMap($item1);
                }
            }
        }

        if (isset($map['avatar'])) {
            $model->avatar = $map['avatar'];
        }

        if (isset($map['created_at'])) {
            $model->createdAt = $map['created_at'];
        }

        if (isset($map['creator'])) {
            $model->creator = $map['creator'];
        }

        if (isset($map['default_drive'])) {
            $model->defaultDrive = BaseDriveResponse::fromMap($map['default_drive']);
        }

        if (isset($map['default_drive_id'])) {
            $model->defaultDriveId = $map['default_drive_id'];
        }

        if (isset($map['default_location'])) {
            $model->defaultLocation = $map['default_location'];
        }

        if (isset($map['deny_change_password_by_self'])) {
            $model->denyChangePasswordBySelf = $map['deny_change_password_by_self'];
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

        if (isset($map['expired_at'])) {
            $model->expiredAt = $map['expired_at'];
        }

        if (isset($map['is_sync'])) {
            $model->isSync = $map['is_sync'];
        }

        if (isset($map['last_login_time'])) {
            $model->lastLoginTime = $map['last_login_time'];
        }

        if (isset($map['need_change_password_next_login'])) {
            $model->needChangePasswordNextLogin = $map['need_change_password_next_login'];
        }

        if (isset($map['nick_name'])) {
            $model->nickName = $map['nick_name'];
        }

        if (isset($map['parent_group'])) {
            if (!empty($map['parent_group'])) {
                $model->parentGroup = [];
                $n1 = 0;
                foreach ($map['parent_group'] as $item1) {
                    $model->parentGroup[$n1++] = BaseDriveResponse::fromMap($item1);
                }
            }
        }

        if (isset($map['path_status'])) {
            $model->pathStatus = $map['path_status'];
        }

        if (isset($map['permission'])) {
            if (!empty($map['permission'])) {
                $model->permission = [];
                foreach ($map['permission'] as $key1 => $value1) {
                    $model->permission[$key1] = IDPermission::fromMap($value1);
                }
            }
        }

        if (isset($map['phone'])) {
            $model->phone = $map['phone'];
        }

        if (isset($map['phone_region'])) {
            $model->phoneRegion = $map['phone_region'];
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
