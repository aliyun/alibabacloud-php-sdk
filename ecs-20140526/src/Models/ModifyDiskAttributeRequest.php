<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\Tea\Model;

class ModifyDiskAttributeRequest extends Model
{
    /**
     * @description Specifies whether to enable the performance burst feature for data disk N. Valid values:
     *
     *   true: encrypts the disk.
     *   false: does not encrypt the disk.
     *
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
     * An error is returned if you set `DeleteWithInstance` to `false` in one of the following cases:
     *
     *   The disk is a local disk.
     *   The disk is a basic disk and is not removable. If the Portable attribute of a disk is set to false, the disk is not removable.
     *
     * @example false
     *
     * @var bool
     */
    public $deleteWithInstance;

    /**
     * @description The description of the disk. The description must be 2 to 256 characters in length. It cannot start with `http://` or `https://`.
     *
     * @example TestDescription
     *
     * @var string
     */
    public $description;

    /**
     * @description The ID of the disk.
     *
     * > You can specify the `DiskId` parameter or the `DiskIds.N` parameter, but you cannot specify both parameters at the same time.
     * @example d-bp1famypsnar20bv****
     *
     * @var string
     */
    public $diskId;

    /**
     * @description The ID of disk N. Valid values of N: 0 to 100.
     *
     * > You can specify the `DiskId` parameter or the `DiskIds.N` parameter, but you cannot specify both parameters at the same time.
     * @example d-bp1famypsnar20bv****
     *
     * @var string[]
     */
    public $diskIds;

    /**
     * @description The name of the disk. The name must be 2 to 128 characters in length and can contain Unicode characters under the Decimal Number category and the categories whose names contain Letter. The name can also contain colons (:), underscores (_), periods (.), and hyphens (-).
     *
     * @example MyDiskName
     *
     * @var string
     */
    public $diskName;

    /**
     * @description Specifies whether to enable the automatic snapshot policy feature for the cloud disk. Valid values:
     *
     *   true
     *   false
     *
     * >  By default, the automatic snapshot policy feature is enabled for cloud disks. You only need to associate an automatic snapshot policy with a cloud disk before you can use the policy.
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
     * @description The region ID of the command. You can call the [DescribeRegions](https://help.aliyun.com/document_detail/25609.html) operation to query the most recent list of regions.
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
