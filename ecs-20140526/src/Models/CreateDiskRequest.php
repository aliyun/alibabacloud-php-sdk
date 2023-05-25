<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\SDK\Ecs\V20140526\Models\CreateDiskRequest\arn;
use AlibabaCloud\SDK\Ecs\V20140526\Models\CreateDiskRequest\tag;
use AlibabaCloud\Tea\Model;

class CreateDiskRequest extends Model
{
    /**
     * @description This parameter is not available for public use.
     *
     * @example hide
     *
     * @var string
     */
    public $advancedFeatures;

    /**
     * @description This parameter is not available for public use.
     *
     * @var arn[]
     */
    public $arn;

    /**
     * @description This parameter is not available for public use.
     *
     * @example false
     *
     * @var bool
     */
    public $burstingEnabled;

    /**
     * @description The client token that is used to ensure the idempotence of the request. You can use the client to generate the token, but you must make sure that the token is unique among different requests. The **token** can contain only ASCII characters and cannot exceed 64 characters in length. For more information, see [How to ensure idempotence](~~25693~~).
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
     * @description The disk category. Valid values:
     *
     *   cloud: basic disk
     *   cloud_efficiency: ultra disk
     *   cloud_ssd: SSD
     *   cloud_essd: ESSD
     *
     * Default value: cloud.
     * @example cloud_ssd
     *
     * @var string
     */
    public $diskCategory;

    /**
     * @description The disk name. The name must be 2 to 128 characters in length. It must start with a letter and cannot start with `http://` or `https://`. It can contain letters, digits, colons (:), underscores (\_), and hyphens (-).
     *
     * This parameter is empty by default.
     * @example testDiskName
     *
     * @var string
     */
    public $diskName;

    /**
     * @description This parameter is not available for public use.
     *
     * @example hide
     *
     * @var string
     */
    public $encryptAlgorithm;

    /**
     * @description Specifies whether to encrypt the disk. Valid values:
     *
     *   true: encrypts the disk.
     *   false: does not encrypt the disk.
     *
     * Default value: false
     * @example false
     *
     * @var bool
     */
    public $encrypted;

    /**
     * @description The ID of the subscription instance to which you want to automatically attach the created subscription disk.
     *
     *   After you specify the instance ID, the specified ResourceGroupId, Tag.N.Key, Tag.N.Value, ClientToken, and KMSKeyId parameters are ignored.
     *   You cannot specify the ZoneId and InstanceId parameters at the same time.
     *
     * By default, this parameter is empty. This specifies that a pay-as-you-go disk is created. The RegionId and ZoneId parameters specify where the disk resides.
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
     *   Disabled
     *   Enabled Set the value to `Enabled` only for ESSDs.
     *
     **
     *
     **Disks for which the multi-attach feature is enabled only support the pay-as-you-go billing method.** If you set the `MultiAttach` parameter to Enabled, you cannot specify the `InstanceId` parameter. After you create disks, you can call the [AttachDisk](~~25515~~) operation to attach the disks to instances. You can attach disks for which the multi-attach feature is enabled only as data disks.
     *
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
     * @description The performance level of the ESSD. Default value: PL1. Valid values:
     *
     *   PL0: An ESSD can deliver up to 10,000 random read/write IOPS.
     *   PL1: An ESSD can deliver up to 50,000 random read/write IOPS.
     *   PL2: An ESSD can deliver up to 100,000 random read/write IOPS.
     *   PL3: An ESSD can deliver up to 1,000,000 random read/write IOPS.
     *
     * For more information about ESSD performance levels, see [ESSDs](~~122389~~).
     * @example PL1
     *
     * @var string
     */
    public $performanceLevel;

    /**
     * @description This parameter is not available for public use.
     *
     * @example 40000
     *
     * @var int
     */
    public $provisionedIops;

    /**
     * @description The ID of the region in which to create the disk. You can call the [DescribeRegions](~~25609~~) operation to query the most recent region list.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The ID of the resource group to which you want to assign the disk.
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
     * @description The disk size. Unit: GiB. You must specify this parameter. Valid values:
     *
     *   Valid values when DiskCategory is set to cloud: 5 to 2,000
     *
     *   Valid values when DiskCategory is set to cloud_efficiency: 20 to 32,768
     *
     *   Valid values when DiskCategory is set to cloud_ssd: 20 to 32,768
     *
     *   Valid values when DiskCategory is set to cloud_essd: based on the value of the `PerformanceLevel` parameter
     *
     *   Valid values when PerformanceLevel is set to PL0: 40 to 32,768
     *   Valid values when PerformanceLevel is set to PL1: 20 to 32,768
     *   Valid values when PerformanceLevel is set to PL2: 461 to 32,768
     *   Valid values when PerformanceLevel is set to PL3: 1,261 to 32,768
     *
     * If you specify the `SnapshotId` parameter, the following limits apply to the `SnapshotId` and `Size` parameters:
     *
     *   If the size of the snapshot that is specified by the `SnapshotId` parameter is greater than the value of the `Size` parameter, the disk is created based on the size of the specified snapshot.
     *   If the size of the snapshot that is specified by the `SnapshotId` parameter is less than the value of the `Size` parameter, the disk is created based on the value of the `Size` parameter.
     *
     * @example 2000
     *
     * @var int
     */
    public $size;

    /**
     * @description The ID of the snapshot that you want to use to create the disk. You cannot use snapshots that are created on or before July 15, 2013 to create disks.
     *
     * The following limits apply to the `SnapshotId` and `Size` parameters:
     *
     *   If the size of the snapshot that is specified by the `SnapshotId` parameter is greater than the value of the `Size` parameter, the disk is created based on the size of the specified snapshot.
     *   If the size of the snapshot that is specified by the `SnapshotId` parameter is less than the value of the `Size` parameter, the disk is created based on the value of the `Size` parameter.
     *
     * @example s-bp67acfmxazb4p****
     *
     * @var string
     */
    public $snapshotId;

    /**
     * @description The ID of the dedicated block storage cluster. If you want to create a disk in a specific dedicated block storage cluster, specify this parameter. For more information about dedicated block storage clusters, see [What is Dedicated Block Storage Cluster?](~~208883~~)
     *
     * > Storage set-related parameters include `StorageSetId` as well as `StorageSetPartitionNumber`, and the dedicated block storage cluster-related parameter is `StorageClusterId`. You cannot specify a storage set-related parameter and a dedicated block storage cluster-related parameter at the same time.
     * @example dbsc-j5e1sf2vaf5he8m2****
     *
     * @var string
     */
    public $storageClusterId;

    /**
     * @description The storage set ID.
     *
     * > Storage set-related parameters include `StorageSetId` as well as `StorageSetPartitionNumber`, and the dedicated block storage cluster-related parameter is `StorageClusterId`. You cannot specify a storage set-related parameter and a dedicated block storage cluster-related parameter at the same time.
     * @example ss-bp67acfmxazb4p****
     *
     * @var string
     */
    public $storageSetId;

    /**
     * @description The number of partitions in the storage set. The value must be greater than or equal to 2 but cannot exceed the quota that you obtained by calling the [DescribeAccountAttributes](~~73772~~) operation.
     *
     * Default value: 2.
     * @example 3
     *
     * @var int
     */
    public $storageSetPartitionNumber;

    /**
     * @description The tags that you want to add to the disk.
     *
     * @var tag[]
     */
    public $tag;

    /**
     * @description The disk zone ID.
     *
     *   If you do not specify the InstanceId parameter, you must specify the ZoneId parameter.
     *   You cannot specify the ZoneId and InstanceId parameters at the same time.
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
