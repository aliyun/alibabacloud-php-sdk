<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ebs\V20210730\Models\DescribeDedicatedBlockStorageClusterDisksResponseBody\disks;

use AlibabaCloud\SDK\Ebs\V20210730\Models\DescribeDedicatedBlockStorageClusterDisksResponseBody\disks\disk\tags;
use AlibabaCloud\Tea\Model;

class disk extends Model
{
    /**
     * @description The time when the cloud disk was last attached. The time follows the ISO 8601 standard in the yyyy-MM-ddThh:mmZ format. The time is displayed in UTC.
     *
     * @example 2021-06-07T06:08:56Z
     *
     * @var string
     */
    public $attachedTime;

    /**
     * @description This parameter is currently in invitational preview and unavailable for general users.
     *
     * @example null
     *
     * @var string
     */
    public $bdfId;

    /**
     * @var bool
     */
    public $burstingEnabled;

    /**
     * @description The category of the disk. A value of cloud_essd indicates that the disk is an ESSD.
     *
     * @example cloud_essd
     *
     * @var string
     */
    public $category;

    /**
     * @description Indicates whether the automatic snapshots of the cloud disk are deleted when the disk is released. Valid values:
     *
     *   true: The automatic snapshots of the cloud disk are deleted when the disk is released.
     *   false: The automatic snapshots of the cloud disk are retained when the disk is released.
     *
     * Snapshots that are created by calling the [CreateSnapshot](~~25524~~) operation or by using the Elastic Compute Service (ECS) console are retained and not affected by this parameter.
     * @example false
     *
     * @var bool
     */
    public $deleteAutoSnapshot;

    /**
     * @description Indicates whether the cloud disk is released when its associated instance is released. Valid values:
     *
     *   true: The cloud disk is released when its associated instance is released.
     *   false: The cloud disk is retained when its associated instance is released.
     *
     * @example true
     *
     * @var bool
     */
    public $deleteWithInstance;

    /**
     * @description The description of the cloud disk.
     *
     * @example testDescription
     *
     * @var string
     */
    public $description;

    /**
     * @description The time when the cloud disk was last detached.
     *
     * @example 2021-06-07T21:01:22Z
     *
     * @var string
     */
    public $detachedTime;

    /**
     * @description The device name of the cloud disk on its associated instance. Example: /dev/xvdb. Take note of the following items:
     *
     *   This parameter has a value only when the `Status` value is `In_use`.
     *   This parameter is empty for cloud disks that have the multi-attach feature enabled. You can query the attachment information of the cloud disk based on the `Attachment` values.
     *
     * >  This parameter will be removed in the future. We recommend that you use other parameters to ensure future compatibility.
     * @example /dev/xvdb
     *
     * @var string
     */
    public $device;

    /**
     * @description The billing method of the cloud disk. Valid values:
     *
     *   PrePaid: subscription
     *   PostPaid: pay-as-you-go
     *
     * @example PrePaid
     *
     * @var string
     */
    public $diskChargeType;

    /**
     * @description The ID of the cloud disk.
     *
     * @example d-bp67acfmxazb4p****
     *
     * @var string
     */
    public $diskId;

    /**
     * @description The name of the cloud disk.
     *
     * @example testDiskName
     *
     * @var string
     */
    public $diskName;

    /**
     * @description Indicates whether the automatic snapshot policy feature is enabled for the cloud disk.
     *
     * @example false
     *
     * @var bool
     */
    public $enableAutoSnapshot;

    /**
     * @description Indicates whether the cloud disk is encrypted.
     *
     * @example false
     *
     * @var bool
     */
    public $encrypted;

    /**
     * @description The maximum number of IOPS.
     *
     * @example 4000
     *
     * @var int
     */
    public $IOPS;

    /**
     * @description The ID of the image that was used to create the instance. This parameter is empty unless the cloud disk was created from an image. The value of this parameter remains unchanged throughout the lifecycle of the cloud disk.
     *
     * @example m-bp13aqm171qynt3u***
     *
     * @var string
     */
    public $imageId;

    /**
     * @description The ID of the instance to which the cloud disk is attached. Take note of the following items:
     *
     *   This parameter has a value only when the `Status` value is `In_use`.
     *   This parameter is empty for cloud disks that have the multi-attach feature enabled. You can query the attachment information of the cloud disk based on the `Attachment` values.
     *
     * @example i-bp67acfmxazb4q****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The ID of the Key Management Service (KMS) key used by the cloud disk.
     *
     * @example 0e478b7a-4262-4802-b8cb-00d3fb40****
     *
     * @var string
     */
    public $KMSKeyId;

    /**
     * @description The number of instances to which the Shared Block Storage device is attached.
     *
     * @example 1
     *
     * @var int
     */
    public $mountInstanceNum;

    /**
     * @description Indicates whether the multi-attach feature was enabled for the cloud disk.
     *
     * @example Disabled
     *
     * @var string
     */
    public $multiAttach;

    /**
     * @description The performance level of the enhanced SSD (ESSD). Valid values:
     *
     *   PL0: A single ESSD can deliver up to 10,000 random read/write IOPS.
     *   PL1: A single ESSD can deliver up to 50,000 random read/write IOPS.
     *   PL2: A single ESSD can deliver up to 100,000 random read/write IOPS.
     *   PL3: A single ESSD can deliver up to 1,000,000 random read/write IOPS.
     *
     * @example PL0
     *
     * @var string
     */
    public $performanceLevel;

    /**
     * @description Indicates whether the cloud disk is removable.
     *
     * @example false
     *
     * @var bool
     */
    public $portable;

    /**
     * @var int
     */
    public $provisionedIops;

    /**
     * @description The region ID of cloud disk.
     *
     * @example cn-heyuan
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The size of the disk. Unit: GiB.
     *
     * @example 60
     *
     * @var int
     */
    public $size;

    /**
     * @description The ID of the snapshot that was used to create the cloud disk.
     *
     * This parameter is empty unless the cloud disk was created from a snapshot. The value of this parameter remains unchanged throughout the lifecycle of the cloud disk.
     * @example s-bp67acfmxazb4p****
     *
     * @var string
     */
    public $sourceSnapshotId;

    /**
     * @description The state of the cloud disk. For more information, see [Disk states](~~25689~~). Valid values:
     *
     *   In_use
     *   Available
     *   Attaching
     *   Detaching
     *   Creating
     *   ReIniting
     *
     * @example In_use
     *
     * @var string
     */
    public $status;

    /**
     * @description The ID of the dedicated block storage cluster to which the cloud disk belongs. If your cloud disk belongs to the public block storage cluster, an empty value is returned.
     *
     * @example dbsc-j5e1sf2vaf5he8m2****
     *
     * @var string
     */
    public $storageClusterId;

    /**
     * @description The ID of the storage set.
     *
     * @example ss-i-bp1j4i2jdf3owlhe****
     *
     * @var string
     */
    public $storageSetId;

    /**
     * @description The maximum number of partitions in the storage set.
     *
     * @example 11
     *
     * @var int
     */
    public $storageSetPartitionNumber;

    /**
     * @description The tags of the cloud disk.
     *
     * @var tags[]
     */
    public $tags;

    /**
     * @var int
     */
    public $throughput;

    /**
     * @description The type of the disk. Valid values:
     *
     *   system: system disk
     *   data: data disk
     *
     * @example all
     *
     * @var string
     */
    public $type;

    /**
     * @description The zone ID of cloud disk.
     *
     * @example cn-heyuan-i
     *
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'attachedTime'              => 'AttachedTime',
        'bdfId'                     => 'BdfId',
        'burstingEnabled'           => 'BurstingEnabled',
        'category'                  => 'Category',
        'deleteAutoSnapshot'        => 'DeleteAutoSnapshot',
        'deleteWithInstance'        => 'DeleteWithInstance',
        'description'               => 'Description',
        'detachedTime'              => 'DetachedTime',
        'device'                    => 'Device',
        'diskChargeType'            => 'DiskChargeType',
        'diskId'                    => 'DiskId',
        'diskName'                  => 'DiskName',
        'enableAutoSnapshot'        => 'EnableAutoSnapshot',
        'encrypted'                 => 'Encrypted',
        'IOPS'                      => 'IOPS',
        'imageId'                   => 'ImageId',
        'instanceId'                => 'InstanceId',
        'KMSKeyId'                  => 'KMSKeyId',
        'mountInstanceNum'          => 'MountInstanceNum',
        'multiAttach'               => 'MultiAttach',
        'performanceLevel'          => 'PerformanceLevel',
        'portable'                  => 'Portable',
        'provisionedIops'           => 'ProvisionedIops',
        'regionId'                  => 'RegionId',
        'size'                      => 'Size',
        'sourceSnapshotId'          => 'SourceSnapshotId',
        'status'                    => 'Status',
        'storageClusterId'          => 'StorageClusterId',
        'storageSetId'              => 'StorageSetId',
        'storageSetPartitionNumber' => 'StorageSetPartitionNumber',
        'tags'                      => 'Tags',
        'throughput'                => 'Throughput',
        'type'                      => 'Type',
        'zoneId'                    => 'ZoneId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->attachedTime) {
            $res['AttachedTime'] = $this->attachedTime;
        }
        if (null !== $this->bdfId) {
            $res['BdfId'] = $this->bdfId;
        }
        if (null !== $this->burstingEnabled) {
            $res['BurstingEnabled'] = $this->burstingEnabled;
        }
        if (null !== $this->category) {
            $res['Category'] = $this->category;
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
        if (null !== $this->detachedTime) {
            $res['DetachedTime'] = $this->detachedTime;
        }
        if (null !== $this->device) {
            $res['Device'] = $this->device;
        }
        if (null !== $this->diskChargeType) {
            $res['DiskChargeType'] = $this->diskChargeType;
        }
        if (null !== $this->diskId) {
            $res['DiskId'] = $this->diskId;
        }
        if (null !== $this->diskName) {
            $res['DiskName'] = $this->diskName;
        }
        if (null !== $this->enableAutoSnapshot) {
            $res['EnableAutoSnapshot'] = $this->enableAutoSnapshot;
        }
        if (null !== $this->encrypted) {
            $res['Encrypted'] = $this->encrypted;
        }
        if (null !== $this->IOPS) {
            $res['IOPS'] = $this->IOPS;
        }
        if (null !== $this->imageId) {
            $res['ImageId'] = $this->imageId;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->KMSKeyId) {
            $res['KMSKeyId'] = $this->KMSKeyId;
        }
        if (null !== $this->mountInstanceNum) {
            $res['MountInstanceNum'] = $this->mountInstanceNum;
        }
        if (null !== $this->multiAttach) {
            $res['MultiAttach'] = $this->multiAttach;
        }
        if (null !== $this->performanceLevel) {
            $res['PerformanceLevel'] = $this->performanceLevel;
        }
        if (null !== $this->portable) {
            $res['Portable'] = $this->portable;
        }
        if (null !== $this->provisionedIops) {
            $res['ProvisionedIops'] = $this->provisionedIops;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->size) {
            $res['Size'] = $this->size;
        }
        if (null !== $this->sourceSnapshotId) {
            $res['SourceSnapshotId'] = $this->sourceSnapshotId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
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
        if (null !== $this->tags) {
            $res['Tags'] = [];
            if (null !== $this->tags && \is_array($this->tags)) {
                $n = 0;
                foreach ($this->tags as $item) {
                    $res['Tags'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->throughput) {
            $res['Throughput'] = $this->throughput;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return disk
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AttachedTime'])) {
            $model->attachedTime = $map['AttachedTime'];
        }
        if (isset($map['BdfId'])) {
            $model->bdfId = $map['BdfId'];
        }
        if (isset($map['BurstingEnabled'])) {
            $model->burstingEnabled = $map['BurstingEnabled'];
        }
        if (isset($map['Category'])) {
            $model->category = $map['Category'];
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
        if (isset($map['DetachedTime'])) {
            $model->detachedTime = $map['DetachedTime'];
        }
        if (isset($map['Device'])) {
            $model->device = $map['Device'];
        }
        if (isset($map['DiskChargeType'])) {
            $model->diskChargeType = $map['DiskChargeType'];
        }
        if (isset($map['DiskId'])) {
            $model->diskId = $map['DiskId'];
        }
        if (isset($map['DiskName'])) {
            $model->diskName = $map['DiskName'];
        }
        if (isset($map['EnableAutoSnapshot'])) {
            $model->enableAutoSnapshot = $map['EnableAutoSnapshot'];
        }
        if (isset($map['Encrypted'])) {
            $model->encrypted = $map['Encrypted'];
        }
        if (isset($map['IOPS'])) {
            $model->IOPS = $map['IOPS'];
        }
        if (isset($map['ImageId'])) {
            $model->imageId = $map['ImageId'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['KMSKeyId'])) {
            $model->KMSKeyId = $map['KMSKeyId'];
        }
        if (isset($map['MountInstanceNum'])) {
            $model->mountInstanceNum = $map['MountInstanceNum'];
        }
        if (isset($map['MultiAttach'])) {
            $model->multiAttach = $map['MultiAttach'];
        }
        if (isset($map['PerformanceLevel'])) {
            $model->performanceLevel = $map['PerformanceLevel'];
        }
        if (isset($map['Portable'])) {
            $model->portable = $map['Portable'];
        }
        if (isset($map['ProvisionedIops'])) {
            $model->provisionedIops = $map['ProvisionedIops'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['Size'])) {
            $model->size = $map['Size'];
        }
        if (isset($map['SourceSnapshotId'])) {
            $model->sourceSnapshotId = $map['SourceSnapshotId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
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
        if (isset($map['Tags'])) {
            if (!empty($map['Tags'])) {
                $model->tags = [];
                $n           = 0;
                foreach ($map['Tags'] as $item) {
                    $model->tags[$n++] = null !== $item ? tags::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Throughput'])) {
            $model->throughput = $map['Throughput'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }

        return $model;
    }
}
