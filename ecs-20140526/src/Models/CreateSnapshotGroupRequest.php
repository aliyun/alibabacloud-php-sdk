<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\SDK\Ecs\V20140526\Models\CreateSnapshotGroupRequest\tag;
use AlibabaCloud\Tea\Model;

class CreateSnapshotGroupRequest extends Model
{
    /**
     * @description The description of the snapshot-consistent group. The description must be 2 to 256 characters in length and cannot start with `http://` or `https://`.
     *
     * @example This is description.
     *
     * @var string
     */
    public $description;

    /**
     * @description The ID of disk N for which you want to create snapshots. You can specify multiple disk IDs across instances with the same zone. Valid values of N: 1 to 16. A single snapshot-consistent group can contain snapshots of up to 16 disks and cannot exceed 32 TiB in size.
     *
     * When you call this operation, take note of the following items:
     *
     *   You cannot specify both DiskId.N and `ExcludeDiskId.N`.
     *   If `InstanceId` is specified, DiskId.N is only used to specify the disks that are attached to the instance specified by InstanceId.
     *
     * @var string[]
     */
    public $diskId;

    /**
     * @description The ID of disk N for which you do not need to create snapshots. After this parameter is specified, the created snapshot-consistent group does not contain snapshots of the disk. Valid values of N: 1 to 16.
     *
     * > You cannot specify both ExcludeDiskId.N and `DiskId.N`.
     * @example d-j6cf7l0ewidb78lq****
     *
     * @var string[]
     */
    public $excludeDiskId;

    /**
     * @description The ID of the instance.
     *
     * @example i-j6ca469urv8ei629****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description Specifies whether to enable the instant access feature. Valid values:
     *
     *   true: enables the instant access feature.
     *   false: disables the instant access feature.
     *
     * Default value: false.
     * @example false
     *
     * @var bool
     */
    public $instantAccess;

    /**
     * @description Specify the number of days for which the instant access feature is available. Unit: days. Valid values: 1 to 65535.
     *
     * This parameter is empty by default, which indicates that the expiration time of the instant access feature is determined by the time when the snapshots are released.
     * @example 1
     *
     * @var int
     */
    public $instantAccessRetentionDays;

    /**
     * @description The name of the snapshot-consistent group. The name must be 2 to 128 characters in length, and contain letters, digits, periods (.), underscores (\_), hyphens (-), and colons (:). It must start with a letter and cannot start with `http://` or `https://`.
     *
     * @example testName
     *
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $ownerAccount;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description The region ID of the instance. You can call the [DescribeRegions](~~25609~~) operation to query the most recent region list.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The ID of the resource group to which the snapshot-consistent group belongs.
     *
     * @example rg-bp67acfmxazb4p****
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @description > This parameter is unavailable.
     *
     * @example null
     *
     * @var string
     */
    public $storageLocationArn;

    /**
     * @description The tags to add to the snapshot-consistent group.
     *
     * @var tag[]
     */
    public $tag;
    protected $_name = [
        'description'                => 'Description',
        'diskId'                     => 'DiskId',
        'excludeDiskId'              => 'ExcludeDiskId',
        'instanceId'                 => 'InstanceId',
        'instantAccess'              => 'InstantAccess',
        'instantAccessRetentionDays' => 'InstantAccessRetentionDays',
        'name'                       => 'Name',
        'ownerAccount'               => 'OwnerAccount',
        'ownerId'                    => 'OwnerId',
        'regionId'                   => 'RegionId',
        'resourceGroupId'            => 'ResourceGroupId',
        'resourceOwnerAccount'       => 'ResourceOwnerAccount',
        'resourceOwnerId'            => 'ResourceOwnerId',
        'storageLocationArn'         => 'StorageLocationArn',
        'tag'                        => 'Tag',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->diskId) {
            $res['DiskId'] = $this->diskId;
        }
        if (null !== $this->excludeDiskId) {
            $res['ExcludeDiskId'] = $this->excludeDiskId;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->instantAccess) {
            $res['InstantAccess'] = $this->instantAccess;
        }
        if (null !== $this->instantAccessRetentionDays) {
            $res['InstantAccessRetentionDays'] = $this->instantAccessRetentionDays;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->ownerAccount) {
            $res['OwnerAccount'] = $this->ownerAccount;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->storageLocationArn) {
            $res['StorageLocationArn'] = $this->storageLocationArn;
        }
        if (null !== $this->tag) {
            $res['Tag'] = [];
            if (null !== $this->tag && \is_array($this->tag)) {
                $n = 0;
                foreach ($this->tag as $item) {
                    $res['Tag'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateSnapshotGroupRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['DiskId'])) {
            if (!empty($map['DiskId'])) {
                $model->diskId = $map['DiskId'];
            }
        }
        if (isset($map['ExcludeDiskId'])) {
            if (!empty($map['ExcludeDiskId'])) {
                $model->excludeDiskId = $map['ExcludeDiskId'];
            }
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['InstantAccess'])) {
            $model->instantAccess = $map['InstantAccess'];
        }
        if (isset($map['InstantAccessRetentionDays'])) {
            $model->instantAccessRetentionDays = $map['InstantAccessRetentionDays'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['OwnerAccount'])) {
            $model->ownerAccount = $map['OwnerAccount'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['StorageLocationArn'])) {
            $model->storageLocationArn = $map['StorageLocationArn'];
        }
        if (isset($map['Tag'])) {
            if (!empty($map['Tag'])) {
                $model->tag = [];
                $n          = 0;
                foreach ($map['Tag'] as $item) {
                    $model->tag[$n++] = null !== $item ? tag::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
