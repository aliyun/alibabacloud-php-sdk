<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\SDK\Ecs\V20140526\Models\CreateDiskRequest\arn;
use AlibabaCloud\SDK\Ecs\V20140526\Models\CreateDiskRequest\tag;
use AlibabaCloud\Tea\Model;

class CreateDiskRequest extends Model
{
    /**
     * @description This parameter is not publicly available.
     *
     * @example hide
     *
     * @var string
     */
    public $advancedFeatures;

    /**
     * @description This parameter is not publicly available.
     *
     * @var arn[]
     */
    public $arn;

    /**
     * @description This parameter is not publicly available.
     *
     * @example false
     *
     * @var bool
     */
    public $burstingEnabled;

    /**
     * @description The client token that is used to ensure the idempotence of the request. You can use the client to generate the token, but you must make sure that the token is unique among different requests. The **token** can contain only ASCII characters and cannot exceed 64 characters in length. For more information, see [How to ensure idempotence](https://help.aliyun.com/document_detail/25693.html).
     *
     * @example 123e4567-e89b-12d3-a456-426655440000
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description The description of the disk. The description must be 2 to 256 characters in length and cannot start with `http://` or `https://`.
     *
     * This parameter is empty by default.
     * @example testDescription
     *
     * @var string
     */
    public $description;

    /**
     * @description The category of the disk. Valid values:
     *
     *   cloud: basic disk.
     *   cloud_efficiency: ultra disk.
     *   cloud_ssd: standard SSD.
     *   cloud_essd: ESSD.
     *
     * Default value: cloud.
     * @example cloud_ssd
     *
     * @var string
     */
    public $diskCategory;

    /**
     * @description The name of the disk. The name must be 2 to 128 characters in length. It must start with a letter but cannot start with `http://` or `https://`. It can contain letters, digits, colons (:), underscores (_), and hyphens (-).
     *
     * This parameter is empty by default.
     * @example testDiskName
     *
     * @var string
     */
    public $diskName;

    /**
     * @description This parameter is not publicly available.
     *
     * @example hide
     *
     * @var string
     */
    public $encryptAlgorithm;

    /**
     * @description Specifies whether to encrypt the disk. Valid values:
     *
     *   true
     *   false
     *
     * Default value: false.
     * @example false
     *
     * @var bool
     */
    public $encrypted;

    /**
     * @description The ID of the instance to which the created subscription disk is automatically attached.
     *
     *   After you specify the instance ID, ResourceGroupId, Tag.N.Key, Tag.N.Value, ClientToken, and KMSKeyId are ignored.
     *   You cannot specify ZoneId and InstanceId at the same time.
     *
     * This parameter is empty by default. This indicates that a pay-as-you-go disk is created. RegionId and ZoneId specify where the disk resides.
     * @example i-bp18pnlg1ds9rky4****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The ID of the Key Management Service (KMS) key that you want to use for the disk.
     *
     * @example 0e478b7a-4262-4802-b8cb-00d3fb40826X
     *
     * @var string
     */
    public $KMSKeyId;

    /**
     * @description Specifies whether to enable the multi-attach feature for the disk. Valid values:
     *
     *   Disabled.
     *   Enabled. Set the value to `Enabled` only for ESSDs.
     *
     * > Disks for which the multi-attach feature is enabled support only the pay-as-you-go billing method. When `MultiAttach` is set to Enabled, you cannot specify `InstanceId`. You can call the [AttachDisk](https://help.aliyun.com/document_detail/25515.html) operation to attach disks to instances after the disks are created. Disks for which the multi-attach feature is enabled can be attached only as data disks.
     * @example Disabled
     *
     * @var string
     */
    public $multiAttach;

    /**
     * @var string
     */
    public $ownerAccount;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description The performance level of the ESSD. Valid values:
     *
     *   PL0: A single ESSD can deliver up to 10,000 random read/write IOPS.
     *   PL1: A single ESSD can deliver up to 50,000 random read/write IOPS.
     *   PL2: A single ESSD can deliver up to 100,000 random read/write IOPS.
     *   PL3: A single ESSD can deliver up to 1,000,000 random read/write IOPS.
     *
     * For more information about ESSD performance levels, see [ESSDs](https://help.aliyun.com/document_detail/122389.html).
     * @example PL1
     *
     * @var string
     */
    public $performanceLevel;

    /**
     * @description This parameter is not publicly available.
     *
     * @example 40000
     *
     * @var int
     */
    public $provisionedIops;

    /**
     * @description The ID of the region in which to create the disk. You can call the [DescribeRegions](https://help.aliyun.com/document_detail/25609.html) operation to query the most recent region list.
     *
     * This parameter is required.
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The ID of the resource group to which to assign the disk.
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
     * @description The size of the disk. Unit: GiB. This parameter is required. Valid values:
     *
     *   Valid values when DiskCategory is set to cloud: 5 to 2,000.
     *
     *   Valid values when DiskCategory is set to cloud_efficiency: 20 to 32,768.
     *
     *   Valid values when DiskCategory is set to cloud_ssd: 20 to 32,768.
     *
     *   Valid values when DiskCategory is set to cloud_essd: depends on the `PerformanceLevel` value.
     *
     *   Valid values when PerformanceLevel is set to PL0: 1 to 32,768.
     *   Valid values when PerformanceLevel is set to PL1: 20 to 32,768.
     *   Valid values when PerformanceLevel is set to PL2: 461 to 32,768.
     *   Valid values when PerformanceLevel is set to PL3: 1,261 to 32,768.
     *
     * If `SnapshotId` is specified, the following limits apply to `SnapshotId` and `Size`:
     *
     *   If the size of the snapshot specified by `SnapshotId` is greater than the specified `Size` value, the size of the created disk is equal to the specified snapshot size.
     *   If the size of the snapshot specified by `SnapshotId` is smaller than the specified `Size` value, the size of the created disk is equal to the specified `Size` value.
     *
     * @example 2000
     *
     * @var int
     */
    public $size;

    /**
     * @description The ID of the snapshot used to create the disk. Snapshots that were created on or before July 15, 2013 cannot be used to create disks.
     *
     * The following limits apply to `SnapshotId` and `Size`:
     *
     *   If the size of the snapshot specified by `SnapshotId` is greater than the specified `Size` value, the size of the created disk is equal to the specified snapshot size.
     *   If the size of the snapshot specified by `SnapshotId` is smaller than the specified `Size` value, the size of the created disk is equal to the specified `Size` value.
     *
     * @example s-bp67acfmxazb4p****
     *
     * @var string
     */
    public $snapshotId;

    /**
     * @description The ID of the dedicated block storage cluster. To create a disk in a specific dedicated block storage cluster, specify this parameter.
     *
     * > You cannot specify storage set-related parameters (`StorageSetId` and `StorageSetPartitionNumber`) and the dedicated block storage cluster-related parameter (`StorageClusterId`) at the same time. Otherwise, the operation cannot be called.
     * @example dbsc-j5e1sf2vaf5he8m2****
     *
     * @var string
     */
    public $storageClusterId;

    /**
     * @description The ID of the storage set.
     *
     * > You cannot specify storage set-related parameters (`StorageSetId` and `StorageSetPartitionNumber`) and the dedicated block storage cluster-related parameter (`StorageClusterId`) at the same time. Otherwise, the operation cannot be called.
     * @example ss-bp67acfmxazb4p****
     *
     * @var string
     */
    public $storageSetId;

    /**
     * @description The number of partitions in the storage set. The value must be greater than or equal to 2 but cannot exceed the quota obtained by calling the [DescribeAccountAttributes](https://help.aliyun.com/document_detail/73772.html)operation.
     *
     * Default value: 2.
     * @example 3
     *
     * @var int
     */
    public $storageSetPartitionNumber;

    /**
     * @description The tags to add to the disk.
     *
     * @var tag[]
     */
    public $tag;

    /**
     * @description The ID of the zone in which to create the pay-as-you-go disk.
     *
     *   If InstanceId is not specified, ZoneId is required.
     *   You cannot specify ZoneId and InstanceId at the same time.
     *
     * @example cn-hangzhou-g
     *
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'advancedFeatures'          => 'AdvancedFeatures',
        'arn'                       => 'Arn',
        'burstingEnabled'           => 'BurstingEnabled',
        'clientToken'               => 'ClientToken',
        'description'               => 'Description',
        'diskCategory'              => 'DiskCategory',
        'diskName'                  => 'DiskName',
        'encryptAlgorithm'          => 'EncryptAlgorithm',
        'encrypted'                 => 'Encrypted',
        'instanceId'                => 'InstanceId',
        'KMSKeyId'                  => 'KMSKeyId',
        'multiAttach'               => 'MultiAttach',
        'ownerAccount'              => 'OwnerAccount',
        'ownerId'                   => 'OwnerId',
        'performanceLevel'          => 'PerformanceLevel',
        'provisionedIops'           => 'ProvisionedIops',
        'regionId'                  => 'RegionId',
        'resourceGroupId'           => 'ResourceGroupId',
        'resourceOwnerAccount'      => 'ResourceOwnerAccount',
        'resourceOwnerId'           => 'ResourceOwnerId',
        'size'                      => 'Size',
        'snapshotId'                => 'SnapshotId',
        'storageClusterId'          => 'StorageClusterId',
        'storageSetId'              => 'StorageSetId',
        'storageSetPartitionNumber' => 'StorageSetPartitionNumber',
        'tag'                       => 'Tag',
        'zoneId'                    => 'ZoneId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->advancedFeatures) {
            $res['AdvancedFeatures'] = $this->advancedFeatures;
        }
        if (null !== $this->arn) {
            $res['Arn'] = [];
            if (null !== $this->arn && \is_array($this->arn)) {
                $n = 0;
                foreach ($this->arn as $item) {
                    $res['Arn'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->burstingEnabled) {
            $res['BurstingEnabled'] = $this->burstingEnabled;
        }
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->diskCategory) {
            $res['DiskCategory'] = $this->diskCategory;
        }
        if (null !== $this->diskName) {
            $res['DiskName'] = $this->diskName;
        }
        if (null !== $this->encryptAlgorithm) {
            $res['EncryptAlgorithm'] = $this->encryptAlgorithm;
        }
        if (null !== $this->encrypted) {
            $res['Encrypted'] = $this->encrypted;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->KMSKeyId) {
            $res['KMSKeyId'] = $this->KMSKeyId;
        }
        if (null !== $this->multiAttach) {
            $res['MultiAttach'] = $this->multiAttach;
        }
        if (null !== $this->ownerAccount) {
            $res['OwnerAccount'] = $this->ownerAccount;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->performanceLevel) {
            $res['PerformanceLevel'] = $this->performanceLevel;
        }
        if (null !== $this->provisionedIops) {
            $res['ProvisionedIops'] = $this->provisionedIops;
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
        if (null !== $this->size) {
            $res['Size'] = $this->size;
        }
        if (null !== $this->snapshotId) {
            $res['SnapshotId'] = $this->snapshotId;
        }
        if (null !== $this->storageClusterId) {
            $res['StorageClusterId'] = $this->storageClusterId;
        }
        if (null !== $this->storageSetId) {
            $res['StorageSetId'] = $this->storageSetId;
        }
        if (null !== $this->storageSetPartitionNumber) {
            $res['StorageSetPartitionNumber'] = $this->storageSetPartitionNumber;
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
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateDiskRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AdvancedFeatures'])) {
            $model->advancedFeatures = $map['AdvancedFeatures'];
        }
        if (isset($map['Arn'])) {
            if (!empty($map['Arn'])) {
                $model->arn = [];
                $n          = 0;
                foreach ($map['Arn'] as $item) {
                    $model->arn[$n++] = null !== $item ? arn::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['BurstingEnabled'])) {
            $model->burstingEnabled = $map['BurstingEnabled'];
        }
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['DiskCategory'])) {
            $model->diskCategory = $map['DiskCategory'];
        }
        if (isset($map['DiskName'])) {
            $model->diskName = $map['DiskName'];
        }
        if (isset($map['EncryptAlgorithm'])) {
            $model->encryptAlgorithm = $map['EncryptAlgorithm'];
        }
        if (isset($map['Encrypted'])) {
            $model->encrypted = $map['Encrypted'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['KMSKeyId'])) {
            $model->KMSKeyId = $map['KMSKeyId'];
        }
        if (isset($map['MultiAttach'])) {
            $model->multiAttach = $map['MultiAttach'];
        }
        if (isset($map['OwnerAccount'])) {
            $model->ownerAccount = $map['OwnerAccount'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['PerformanceLevel'])) {
            $model->performanceLevel = $map['PerformanceLevel'];
        }
        if (isset($map['ProvisionedIops'])) {
            $model->provisionedIops = $map['ProvisionedIops'];
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
        if (isset($map['Size'])) {
            $model->size = $map['Size'];
        }
        if (isset($map['SnapshotId'])) {
            $model->snapshotId = $map['SnapshotId'];
        }
        if (isset($map['StorageClusterId'])) {
            $model->storageClusterId = $map['StorageClusterId'];
        }
        if (isset($map['StorageSetId'])) {
            $model->storageSetId = $map['StorageSetId'];
        }
        if (isset($map['StorageSetPartitionNumber'])) {
            $model->storageSetPartitionNumber = $map['StorageSetPartitionNumber'];
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
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }

        return $model;
    }
}
