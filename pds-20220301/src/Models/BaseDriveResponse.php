<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pds\V20220301\Models;

use AlibabaCloud\Dara\Model;

class BaseDriveResponse extends Model
{
    /**
     * @var string[]
     */
    public $actionList;

    /**
     * @var string
     */
    public $category;

    /**
     * @var string
     */
    public $createdAt;

    /**
     * @var string
     */
    public $creator;

    /**
     * @var bool
     */
    public $deltaEnabled;

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
    public $driveId;

    /**
     * @var string
     */
    public $driveName;

    /**
     * @var string
     */
    public $driveType;

    /**
     * @var bool
     */
    public $encryptDataAccess;

    /**
     * @var string
     */
    public $encryptMode;

    /**
     * @var bool
     */
    public $isHandover;

    /**
     * @var string
     */
    public $owner;

    /**
     * @var string
     */
    public $ownerType;

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
    public $relativePath;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $storeId;

    /**
     * @var int
     */
    public $totalSize;

    /**
     * @var string
     */
    public $updatedAt;

    /**
     * @var int
     */
    public $usedSize;
    protected $_name = [
        'actionList' => 'action_list',
        'category' => 'category',
        'createdAt' => 'created_at',
        'creator' => 'creator',
        'deltaEnabled' => 'delta_enabled',
        'description' => 'description',
        'domainId' => 'domain_id',
        'driveId' => 'drive_id',
        'driveName' => 'drive_name',
        'driveType' => 'drive_type',
        'encryptDataAccess' => 'encrypt_data_access',
        'encryptMode' => 'encrypt_mode',
        'isHandover' => 'is_handover',
        'owner' => 'owner',
        'ownerType' => 'owner_type',
        'pathStatus' => 'path_status',
        'permission' => 'permission',
        'relativePath' => 'relative_path',
        'status' => 'status',
        'storeId' => 'store_id',
        'totalSize' => 'total_size',
        'updatedAt' => 'updated_at',
        'usedSize' => 'used_size',
    ];

    public function validate()
    {
        if (\is_array($this->actionList)) {
            Model::validateArray($this->actionList);
        }
        if (\is_array($this->permission)) {
            Model::validateArray($this->permission);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->actionList) {
            if (\is_array($this->actionList)) {
                $res['action_list'] = [];
                $n1 = 0;
                foreach ($this->actionList as $item1) {
                    $res['action_list'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->category) {
            $res['category'] = $this->category;
        }

        if (null !== $this->createdAt) {
            $res['created_at'] = $this->createdAt;
        }

        if (null !== $this->creator) {
            $res['creator'] = $this->creator;
        }

        if (null !== $this->deltaEnabled) {
            $res['delta_enabled'] = $this->deltaEnabled;
        }

        if (null !== $this->description) {
            $res['description'] = $this->description;
        }

        if (null !== $this->domainId) {
            $res['domain_id'] = $this->domainId;
        }

        if (null !== $this->driveId) {
            $res['drive_id'] = $this->driveId;
        }

        if (null !== $this->driveName) {
            $res['drive_name'] = $this->driveName;
        }

        if (null !== $this->driveType) {
            $res['drive_type'] = $this->driveType;
        }

        if (null !== $this->encryptDataAccess) {
            $res['encrypt_data_access'] = $this->encryptDataAccess;
        }

        if (null !== $this->encryptMode) {
            $res['encrypt_mode'] = $this->encryptMode;
        }

        if (null !== $this->isHandover) {
            $res['is_handover'] = $this->isHandover;
        }

        if (null !== $this->owner) {
            $res['owner'] = $this->owner;
        }

        if (null !== $this->ownerType) {
            $res['owner_type'] = $this->ownerType;
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

        if (null !== $this->relativePath) {
            $res['relative_path'] = $this->relativePath;
        }

        if (null !== $this->status) {
            $res['status'] = $this->status;
        }

        if (null !== $this->storeId) {
            $res['store_id'] = $this->storeId;
        }

        if (null !== $this->totalSize) {
            $res['total_size'] = $this->totalSize;
        }

        if (null !== $this->updatedAt) {
            $res['updated_at'] = $this->updatedAt;
        }

        if (null !== $this->usedSize) {
            $res['used_size'] = $this->usedSize;
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
        if (isset($map['action_list'])) {
            if (!empty($map['action_list'])) {
                $model->actionList = [];
                $n1 = 0;
                foreach ($map['action_list'] as $item1) {
                    $model->actionList[$n1++] = $item1;
                }
            }
        }

        if (isset($map['category'])) {
            $model->category = $map['category'];
        }

        if (isset($map['created_at'])) {
            $model->createdAt = $map['created_at'];
        }

        if (isset($map['creator'])) {
            $model->creator = $map['creator'];
        }

        if (isset($map['delta_enabled'])) {
            $model->deltaEnabled = $map['delta_enabled'];
        }

        if (isset($map['description'])) {
            $model->description = $map['description'];
        }

        if (isset($map['domain_id'])) {
            $model->domainId = $map['domain_id'];
        }

        if (isset($map['drive_id'])) {
            $model->driveId = $map['drive_id'];
        }

        if (isset($map['drive_name'])) {
            $model->driveName = $map['drive_name'];
        }

        if (isset($map['drive_type'])) {
            $model->driveType = $map['drive_type'];
        }

        if (isset($map['encrypt_data_access'])) {
            $model->encryptDataAccess = $map['encrypt_data_access'];
        }

        if (isset($map['encrypt_mode'])) {
            $model->encryptMode = $map['encrypt_mode'];
        }

        if (isset($map['is_handover'])) {
            $model->isHandover = $map['is_handover'];
        }

        if (isset($map['owner'])) {
            $model->owner = $map['owner'];
        }

        if (isset($map['owner_type'])) {
            $model->ownerType = $map['owner_type'];
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

        if (isset($map['relative_path'])) {
            $model->relativePath = $map['relative_path'];
        }

        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        if (isset($map['store_id'])) {
            $model->storeId = $map['store_id'];
        }

        if (isset($map['total_size'])) {
            $model->totalSize = $map['total_size'];
        }

        if (isset($map['updated_at'])) {
            $model->updatedAt = $map['updated_at'];
        }

        if (isset($map['used_size'])) {
            $model->usedSize = $map['used_size'];
        }

        return $model;
    }
}
