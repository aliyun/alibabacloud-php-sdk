<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\Tea\Model;

class ModifyDiskAttributeRequest extends Model
{
    /**
     * @description 是否开启Burst（性能突发）。取值范围：
     *
     * - false：否。
     * @example false
     *
     * @var bool
     */
    public $burstingEnabled;

    /**
     * @description Specifies whether to delete the automatic snapshots of the disk when the disk is released. This parameter is empty by default, which indicates that the current value remains unchanged.
     *
     * @example false
     *
     * @var bool
     */
    public $deleteAutoSnapshot;

    /**
     * @description Specifies whether to release the disk along with its associated instance. This parameter is empty by default, which indicates that the current value remains unchanged.
     *
     * An error is returned if you set this parameter to false in the following cases:
     *
     *   Category is set to ephemeral.
     *   Category is set to cloud and Portable is set to false.
     *
     * @example false
     *
     * @var bool
     */
    public $deleteWithInstance;

    /**
     * @description The description of the disk. It must be 2 to 256 characters in length and cannot start with http:// or https://.
     *
     * @example TestDescription
     *
     * @var string
     */
    public $description;

    /**
     * @description The ID of the disk.
     *
     * >  You can specify `DiskId` or `DiskIds.N`, but you cannot specify both of them.
     * @example d-bp1famypsnar20bv****
     *
     * @var string
     */
    public $diskId;

    /**
     * @description 待修改明细的多个磁盘ID。N的取值范围为0 ~ 100。
     * > `DiskId`和`DiskIds.N`两个参数不能同时被调用，请您根据需求任选其一传值。
     * @example d-bp1famypsnar20bv****
     *
     * @var string[]
     */
    public $diskIds;

    /**
     * @description The name of the disk. The name must be 2 to 128 characters in length. It must start with a letter and cannot start with http:// or https://. It can contain letters, digits, colons (:), underscores (\_), and hyphens (-).
     *
     * @example MyDiskName
     *
     * @var string
     */
    public $diskName;

    /**
     * @description Specifies whether to enable the automatic snapshot policy feature for the disk.
     *
     *   true: enables the automatic snapshot policy feature for the disk.
     *   false: disables the automatic snapshot policy feature for the disk.
     *
     * >  By default, the automatic snapshot policy feature is enabled for created disks. You need only to apply an automatic snapshot policy to a disk before you can use the policy.
     * @example true
     *
     * @var bool
     */
    public $enableAutoSnapshot;

    /**
     * @var string
     */
    public $ownerAccount;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description The region ID of the disk. You can call the [DescribeRegions](~~25609~~) operation to query the most recent region list.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @var int
     */
    public $resourceOwnerId;
    protected $_name = [
        'burstingEnabled'      => 'BurstingEnabled',
        'deleteAutoSnapshot'   => 'DeleteAutoSnapshot',
        'deleteWithInstance'   => 'DeleteWithInstance',
        'description'          => 'Description',
        'diskId'               => 'DiskId',
        'diskIds'              => 'DiskIds',
        'diskName'             => 'DiskName',
        'enableAutoSnapshot'   => 'EnableAutoSnapshot',
        'ownerAccount'         => 'OwnerAccount',
        'ownerId'              => 'OwnerId',
        'regionId'             => 'RegionId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->burstingEnabled) {
            $res['BurstingEnabled'] = $this->burstingEnabled;
        }
        if (null !== $this->deleteAutoSnapshot) {
            $res['DeleteAutoSnapshot'] = $this->deleteAutoSnapshot;
        }
        if (null !== $this->deleteWithInstance) {
            $res['DeleteWithInstance'] = $this->deleteWithInstance;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->diskId) {
            $res['DiskId'] = $this->diskId;
        }
        if (null !== $this->diskIds) {
            $res['DiskIds'] = $this->diskIds;
        }
        if (null !== $this->diskName) {
            $res['DiskName'] = $this->diskName;
        }
        if (null !== $this->enableAutoSnapshot) {
            $res['EnableAutoSnapshot'] = $this->enableAutoSnapshot;
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
        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyDiskAttributeRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BurstingEnabled'])) {
            $model->burstingEnabled = $map['BurstingEnabled'];
        }
        if (isset($map['DeleteAutoSnapshot'])) {
            $model->deleteAutoSnapshot = $map['DeleteAutoSnapshot'];
        }
        if (isset($map['DeleteWithInstance'])) {
            $model->deleteWithInstance = $map['DeleteWithInstance'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['DiskId'])) {
            $model->diskId = $map['DiskId'];
        }
        if (isset($map['DiskIds'])) {
            if (!empty($map['DiskIds'])) {
                $model->diskIds = $map['DiskIds'];
            }
        }
        if (isset($map['DiskName'])) {
            $model->diskName = $map['DiskName'];
        }
        if (isset($map['EnableAutoSnapshot'])) {
            $model->enableAutoSnapshot = $map['EnableAutoSnapshot'];
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
        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }

        return $model;
    }
}
