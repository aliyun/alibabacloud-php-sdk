<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\Tea\Model;

class ModifyDiskAttributeRequest extends Model
{
    /**
     * @description Specifies whether to enable performance burst for the disk if the disk supports performance burst. Valid values:
     *
     *   true
     *   false
     *
     * >  An error is reported if you specify this parameter for a disk that does not support performance burst.
     *
     * @example false
     *
     * @var bool
     */
    public $burstingEnabled;

    /**
     * @description Specifies whether to delete the automatic snapshots of the disk when the disk is released. Valid values:
     *
     *   true
     *   false
     *
     * This parameter is empty by default, which indicates that the current value remains unchanged.
     *
     * @example false
     *
     * @var bool
     */
    public $deleteAutoSnapshot;

    /**
     * @description Specifies whether to release the disk together with the associated instance. This parameter is empty by default, which indicates that the current value remains unchanged.
     *
     * An error is returned if you set `DeleteWithInstance` to `false` in one of the following cases:
     *
     *   The disk is a local disk.
     *   The disk is a basic disk and is not removable. If the Portable attribute of a disk is set to false, the disk is not removable.
     **Warning** If you set DeleteWithInstance to false and the instance to which the disk is attached is locked for security reasons, the DeleteWithInstance attribute of the disk is ignored and the disk is released together with the instance. If "LockReason" : "security" is displayed in the response when you query information about an instance, the instance is locked for security reasons.
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
     * @description The ID of the disk whose attributes you want to modify.
     *
     * >  You can specify `DiskId` or `DiskIds.N`, but not both.
     *
     * @example d-bp1famypsnar20bv****
     *
     * @var string
     */
    public $diskId;

    /**
     * @description The IDs of the disks whose attributes you want to modify. Valid values of N: 0 to 100.
     *
     * >  You can specify `DiskId` or `DiskIds.N`, but not both.
     *
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
     * @description Specifies whether to enable the automatic snapshot policy feature. Valid values:
     *
     *   true: enables the automatic snapshot policy feature for the cloud disk.
     *   false: disables the automatic snapshot policy feature for the cloud disk.
     *
     * This parameter is empty by default, which indicates that the current value remains unchanged.
     *
     * >  This parameter is deprecated. By default, the automatic snapshot policy feature is enabled for cloud disks. You only need to apply an automatic snapshot policy to a cloud disk before you can use the automatic snapshot policy.
     *
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
        'burstingEnabled' => 'BurstingEnabled',
        'deleteAutoSnapshot' => 'DeleteAutoSnapshot',
        'deleteWithInstance' => 'DeleteWithInstance',
        'description' => 'Description',
        'diskId' => 'DiskId',
        'diskIds' => 'DiskIds',
        'diskName' => 'DiskName',
        'enableAutoSnapshot' => 'EnableAutoSnapshot',
        'ownerAccount' => 'OwnerAccount',
        'ownerId' => 'OwnerId',
        'regionId' => 'RegionId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId' => 'ResourceOwnerId',
    ];

    public function validate() {}

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
