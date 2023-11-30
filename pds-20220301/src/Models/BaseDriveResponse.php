<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pds\V20220301\Models;

use AlibabaCloud\Tea\Model;

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
     * @example ccp
     *
     * @var string
     */
    public $creator;

    /**
     * @var bool
     */
    public $deltaEnabled;

    /**
     * @example ccp team drive
     *
     * @var string
     */
    public $description;

    /**
     * @example hz999
     *
     * @var string
     */
    public $domainId;

    /**
     * @example 123
     *
     * @var string
     */
    public $driveId;

    /**
     * @example ccpdrive
     *
     * @var string
     */
    public $driveName;

    /**
     * @example normal
     *
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
     * @example ccp
     *
     * @var string
     */
    public $owner;

    /**
     * @example user
     *
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
     * @example enabled
     *
     * @var string
     */
    public $status;

    /**
     * @example 123
     *
     * @var string
     */
    public $storeId;

    /**
     * @example 102400
     *
     * @var int
     */
    public $totalSize;

    /**
     * @var string
     */
    public $updatedAt;

    /**
     * @example 1024
     *
     * @var int
     */
    public $usedSize;
    protected $_name = [
        'actionList'        => 'action_list',
        'category'          => 'category',
        'createdAt'         => 'created_at',
        'creator'           => 'creator',
        'deltaEnabled'      => 'delta_enabled',
        'description'       => 'description',
        'domainId'          => 'domain_id',
        'driveId'           => 'drive_id',
        'driveName'         => 'drive_name',
        'driveType'         => 'drive_type',
        'encryptDataAccess' => 'encrypt_data_access',
        'encryptMode'       => 'encrypt_mode',
        'isHandover'        => 'is_handover',
        'owner'             => 'owner',
        'ownerType'         => 'owner_type',
        'pathStatus'        => 'path_status',
        'permission'        => 'permission',
        'relativePath'      => 'relative_path',
        'status'            => 'status',
        'storeId'           => 'store_id',
        'totalSize'         => 'total_size',
        'updatedAt'         => 'updated_at',
        'usedSize'          => 'used_size',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->actionList) {
            $res['action_list'] = $this->actionList;
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
            $res['permission'] = [];
            if (null !== $this->permission && \is_array($this->permission)) {
                foreach ($this->permission as $key => $val) {
                    $res['permission'][$key] = null !== $val ? $val->toMap() : $val;
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

    /**
     * @param array $map
     *
     * @return BaseDriveResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['action_list'])) {
            if (!empty($map['action_list'])) {
                $model->actionList = $map['action_list'];
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
            $model->permission = $map['permission'];
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
