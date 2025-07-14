<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeDisksResponseBody\disks;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeDisksResponseBody\disks\disk\attachments;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeDisksResponseBody\disks\disk\mountInstances;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeDisksResponseBody\disks\disk\operationLocks;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeDisksResponseBody\disks\disk\placement;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeDisksResponseBody\disks\disk\tags;
use AlibabaCloud\Tea\Model;

class disk extends Model
{
    /**
     * @description The time when the disk was last attached. The time follows the ISO 8601 standard in the yyyy-MM-ddThh:mmZ format. The time is displayed in UTC.
     *
     * @example 2021-06-07T06:08:56Z
     *
     * @var string
     */
    public $attachedTime;

    /**
     * @description The attachment information of the disk. The value is an array that consists of the `Attachment` values. This value is not returned when you query Shared Block Storage devices.
     *
     * @var attachments
     */
    public $attachments;

    /**
     * @description The ID of the automatic snapshot policy that is applied to the cloud disk.
     *
     * @example sp-bp67acfmxazb4p****
     *
     * @var string
     */
    public $autoSnapshotPolicyId;

    /**
     * @description This parameter is in invitational preview and is not publicly available.
     *
     * @example null
     *
     * @var string
     */
    public $bdfId;

    /**
     * @description Indicates whether the performance burst feature is enabled. Valid values:
     *
     *   true
     *   false
     *
     * This parameter is available only if you set `Category` to `cloud_auto`. For more information, see [ESSD AutoPL disks](https://help.aliyun.com/document_detail/368372.html).
     *
     * @example false
     *
     * @var bool
     */
    public $burstingEnabled;

    /**
     * @description The category of the disk. Valid values:
     *
     *   cloud: basic disk
     *   cloud_efficiency: ultra disk
     *   cloud_ssd: standard SSD
     *   cloud_essd: ESSD
     *   cloud_auto: ESSD AutoPL disk
     *   local_ssd_pro: I/O-intensive local disk
     *   local_hdd_pro: throughput-intensive local disk
     *   cloud_essd_entry: ESSD Entry disk
     *   elastic_ephemeral_disk_standard: standard elastic ephemeral disk
     *   elastic_ephemeral_disk_premium: premium static ephemeral disk
     *   ephemeral: retired local disk
     *   ephemeral_ssd: retired local SSD
     *
     * @example cloud_ssd
     *
     * @var string
     */
    public $category;

    /**
     * @description The time when the disk was created.
     *
     * @example 2021-06-07T06:08:54Z
     *
     * @var string
     */
    public $creationTime;

    /**
     * @description Indicates whether the automatic snapshots of the cloud disk are deleted when the cloud disk is released. Valid values:
     *
     *   true: The automatic snapshots of the cloud disk are deleted when the disk is released.
     *   false: The automatic snapshots of the cloud disk are retained when the disk is released.
     *
     * Snapshots that were created in the ECS console or by calling the [CreateSnapshot](https://help.aliyun.com/document_detail/25524.html) operation are retained and not affected by this parameter.
     *
     * @example false
     *
     * @var bool
     */
    public $deleteAutoSnapshot;

    /**
     * @description Indicates whether the disk is released when the instance to which the disk is attached is released. Valid values:
     *
     *   true: The disk is released when the associated instance is released.
     *   false: The disk is retained when the associated instance is released.
     *
     * @example true
     *
     * @var bool
     */
    public $deleteWithInstance;

    /**
     * @description The description of the disk.
     *
     * @example testDescription
     *
     * @var string
     */
    public $description;

    /**
     * @description The time when the disk was last detached.
     *
     * @example 2021-06-07T21:01:22Z
     *
     * @var string
     */
    public $detachedTime;

    /**
     * @description The device name of the disk on the instance to which the disk is attached. Example: /dev/xvdb. Take note of the following items:
     *
     *   This parameter has a value only when the `Status` value is `In_use` or `Detaching`.
     *   This parameter is empty for cloud disks for which the multi-attach feature is enabled. You can query the attachment information of the cloud disk based on the returned list of `Attachment` objects.
     *
     * >  This parameter will be removed in the future. We recommend that you use other parameters to ensure future compatibility.
     *
     * @example /dev/xvdb
     *
     * @var string
     */
    public $device;

    /**
     * @description The billing method of the disk. Valid values:
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
     * @description The ID of the disk.
     *
     * @example d-bp18um4r4f2fve24****
     *
     * @var string
     */
    public $diskId;

    /**
     * @description The name of the disk.
     *
     * @example testDiskName
     *
     * @var string
     */
    public $diskName;

    /**
     * @description Indicates whether the automatic snapshot policy feature is enabled for the cloud disk.
     *
     * >  This parameter is deprecated. By default, the automatic snapshot policy feature is enabled for cloud disks. You need to only apply an automatic snapshot policy to a cloud disk before you can use the automatic snapshot policy.
     *
     * @example false
     *
     * @var bool
     */
    public $enableAutoSnapshot;

    /**
     * @description Indicates whether an automatic snapshot policy is applied to the cloud disk.
     *
     * @example false
     *
     * @var bool
     */
    public $enableAutomatedSnapshotPolicy;

    /**
     * @description Indicates whether the cloud disk is encrypted.
     *
     * @example false
     *
     * @var bool
     */
    public $encrypted;

    /**
     * @description The time when the subscription disk expires.
     *
     * @example 2021-07-07T16:00Z
     *
     * @var string
     */
    public $expiredTime;

    /**
     * @description The maximum number of read and write operations per second.
     *
     * @example 4000
     *
     * @var int
     */
    public $IOPS;

    /**
     * @description The maximum number of read operations per second.
     *
     * @example 2000
     *
     * @var int
     */
    public $IOPSRead;

    /**
     * @description The maximum number of write operations per second.
     *
     * @example 2000
     *
     * @var int
     */
    public $IOPSWrite;

    /**
     * @description The ID of the image that was used to create the instance. This parameter is empty unless the cloud disk was created from an image. The value of this parameter remains unchanged throughout the lifecycle of the cloud disk.
     *
     * @example m-bp13aqm171qynt3u***
     *
     * @var string
     */
    public $imageId;

    /**
     * @description The ID of the instance to which the disk is attached. Take note of the following items:
     *
     *   This parameter has a value only when the `Status` value is `In_use` or `Detaching`.
     *   This parameter is empty for cloud disks for which the multi-attach feature is enabled. You can query the attachment information of the cloud disk based on the returned `Attachment` objects.
     *
     * @example i-bp67acfmxazb4q****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The ID of the KMS key that is used for the cloud disk.
     *
     * @example 0e478b7a-4262-4802-b8cb-00d3fb408***
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
     * @description The attachment information of the Shared Block Storage device.
     *
     * @var mountInstances
     */
    public $mountInstances;

    /**
     * @description Indicates whether the multi-attach feature is enabled for the cloud disk.
     *
     * @example Disabled
     *
     * @var string
     */
    public $multiAttach;

    /**
     * @description The reasons why the disk was locked.
     *
     * @var operationLocks
     */
    public $operationLocks;

    /**
     * @description The performance level of the ESSD. Valid values:
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
     * @description The locations in which data is stored.
     *
     * This parameter is returned only if you specify `Placement` in the AdditionalAttributes.N request parameter.
     *
     * >  This parameter is valid only for Regional ESSDs (cloud_regional_disk_auto).
     *
     * @var placement
     */
    public $placement;

    /**
     * @description Indicates whether the disk is removable.
     *
     * @example false
     *
     * @var bool
     */
    public $portable;

    /**
     * @description The product code of the disk in Alibaba Cloud Marketplace.
     *
     * @example jxsc000204
     *
     * @var string
     */
    public $productCode;

    /**
     * @description The provisioned read/write IOPS of the ESSD AutoPL disk. Valid values: 0 to min{50,000, 1,000 × *Capacity - Baseline IOPS}. Baseline IOPS = min{1,800 + 50 × *Capacity, 50,000}
     *
     * This parameter is available only if you set `Category` to `cloud_auto`. For more information, see [ESSD AutoPL disks](https://help.aliyun.com/document_detail/368372.html).
     *
     * @example 40000
     *
     * @var int
     */
    public $provisionedIops;

    /**
     * @description The ID of the region to which the disk belongs.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The ID of the resource group to which the disk belongs.
     *
     * @example rg-bp67acfmxazb4p****
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description The serial number of the disk.
     *
     * @example bp18um4r4f2fve2****
     *
     * @var string
     */
    public $serialNumber;

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
     *
     * @example s-bp67acfmxazb4p****
     *
     * @var string
     */
    public $sourceSnapshotId;

    /**
     * @description The status of the disk. Valid values:
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
     * @description The tags of the disk.
     *
     * @var tags
     */
    public $tags;

    /**
     * @description The amount of data that can be transferred per second. Unit: MB/s.
     *
     * @example 100
     *
     * @var int
     */
    public $throughput;

    /**
     * @description The amount of data that can be read per second. Unit: MB/s.
     *
     * @example 100
     *
     * @var int
     */
    public $throughputRead;

    /**
     * @description The amount of data that can be written per second. Unit: MB/s.
     *
     * @example 100
     *
     * @var int
     */
    public $throughputWrite;

    /**
     * @description The type of the disk. Valid values:
     *
     *   system: system disk
     *   data: data disk
     *
     * @example system
     *
     * @var string
     */
    public $type;

    /**
     * @description The ID of the zone to which the disk belongs.
     *
     * @example cn-hangzhou-i
     *
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'attachedTime' => 'AttachedTime',
        'attachments' => 'Attachments',
        'autoSnapshotPolicyId' => 'AutoSnapshotPolicyId',
        'bdfId' => 'BdfId',
        'burstingEnabled' => 'BurstingEnabled',
        'category' => 'Category',
        'creationTime' => 'CreationTime',
        'deleteAutoSnapshot' => 'DeleteAutoSnapshot',
        'deleteWithInstance' => 'DeleteWithInstance',
        'description' => 'Description',
        'detachedTime' => 'DetachedTime',
        'device' => 'Device',
        'diskChargeType' => 'DiskChargeType',
        'diskId' => 'DiskId',
        'diskName' => 'DiskName',
        'enableAutoSnapshot' => 'EnableAutoSnapshot',
        'enableAutomatedSnapshotPolicy' => 'EnableAutomatedSnapshotPolicy',
        'encrypted' => 'Encrypted',
        'expiredTime' => 'ExpiredTime',
        'IOPS' => 'IOPS',
        'IOPSRead' => 'IOPSRead',
        'IOPSWrite' => 'IOPSWrite',
        'imageId' => 'ImageId',
        'instanceId' => 'InstanceId',
        'KMSKeyId' => 'KMSKeyId',
        'mountInstanceNum' => 'MountInstanceNum',
        'mountInstances' => 'MountInstances',
        'multiAttach' => 'MultiAttach',
        'operationLocks' => 'OperationLocks',
        'performanceLevel' => 'PerformanceLevel',
        'placement' => 'Placement',
        'portable' => 'Portable',
        'productCode' => 'ProductCode',
        'provisionedIops' => 'ProvisionedIops',
        'regionId' => 'RegionId',
        'resourceGroupId' => 'ResourceGroupId',
        'serialNumber' => 'SerialNumber',
        'size' => 'Size',
        'sourceSnapshotId' => 'SourceSnapshotId',
        'status' => 'Status',
        'storageClusterId' => 'StorageClusterId',
        'storageSetId' => 'StorageSetId',
        'storageSetPartitionNumber' => 'StorageSetPartitionNumber',
        'tags' => 'Tags',
        'throughput' => 'Throughput',
        'throughputRead' => 'ThroughputRead',
        'throughputWrite' => 'ThroughputWrite',
        'type' => 'Type',
        'zoneId' => 'ZoneId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->attachedTime) {
            $res['AttachedTime'] = $this->attachedTime;
        }
        if (null !== $this->attachments) {
            $res['Attachments'] = null !== $this->attachments ? $this->attachments->toMap() : null;
        }
        if (null !== $this->autoSnapshotPolicyId) {
            $res['AutoSnapshotPolicyId'] = $this->autoSnapshotPolicyId;
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
        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
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
        if (null !== $this->enableAutomatedSnapshotPolicy) {
            $res['EnableAutomatedSnapshotPolicy'] = $this->enableAutomatedSnapshotPolicy;
        }
        if (null !== $this->encrypted) {
            $res['Encrypted'] = $this->encrypted;
        }
        if (null !== $this->expiredTime) {
            $res['ExpiredTime'] = $this->expiredTime;
        }
        if (null !== $this->IOPS) {
            $res['IOPS'] = $this->IOPS;
        }
        if (null !== $this->IOPSRead) {
            $res['IOPSRead'] = $this->IOPSRead;
        }
        if (null !== $this->IOPSWrite) {
            $res['IOPSWrite'] = $this->IOPSWrite;
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
        if (null !== $this->mountInstances) {
            $res['MountInstances'] = null !== $this->mountInstances ? $this->mountInstances->toMap() : null;
        }
        if (null !== $this->multiAttach) {
            $res['MultiAttach'] = $this->multiAttach;
        }
        if (null !== $this->operationLocks) {
            $res['OperationLocks'] = null !== $this->operationLocks ? $this->operationLocks->toMap() : null;
        }
        if (null !== $this->performanceLevel) {
            $res['PerformanceLevel'] = $this->performanceLevel;
        }
        if (null !== $this->placement) {
            $res['Placement'] = null !== $this->placement ? $this->placement->toMap() : null;
        }
        if (null !== $this->portable) {
            $res['Portable'] = $this->portable;
        }
        if (null !== $this->productCode) {
            $res['ProductCode'] = $this->productCode;
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
        if (null !== $this->serialNumber) {
            $res['SerialNumber'] = $this->serialNumber;
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
            $res['Tags'] = null !== $this->tags ? $this->tags->toMap() : null;
        }
        if (null !== $this->throughput) {
            $res['Throughput'] = $this->throughput;
        }
        if (null !== $this->throughputRead) {
            $res['ThroughputRead'] = $this->throughputRead;
        }
        if (null !== $this->throughputWrite) {
            $res['ThroughputWrite'] = $this->throughputWrite;
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
        if (isset($map['Attachments'])) {
            $model->attachments = attachments::fromMap($map['Attachments']);
        }
        if (isset($map['AutoSnapshotPolicyId'])) {
            $model->autoSnapshotPolicyId = $map['AutoSnapshotPolicyId'];
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
        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
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
        if (isset($map['EnableAutomatedSnapshotPolicy'])) {
            $model->enableAutomatedSnapshotPolicy = $map['EnableAutomatedSnapshotPolicy'];
        }
        if (isset($map['Encrypted'])) {
            $model->encrypted = $map['Encrypted'];
        }
        if (isset($map['ExpiredTime'])) {
            $model->expiredTime = $map['ExpiredTime'];
        }
        if (isset($map['IOPS'])) {
            $model->IOPS = $map['IOPS'];
        }
        if (isset($map['IOPSRead'])) {
            $model->IOPSRead = $map['IOPSRead'];
        }
        if (isset($map['IOPSWrite'])) {
            $model->IOPSWrite = $map['IOPSWrite'];
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
        if (isset($map['MountInstances'])) {
            $model->mountInstances = mountInstances::fromMap($map['MountInstances']);
        }
        if (isset($map['MultiAttach'])) {
            $model->multiAttach = $map['MultiAttach'];
        }
        if (isset($map['OperationLocks'])) {
            $model->operationLocks = operationLocks::fromMap($map['OperationLocks']);
        }
        if (isset($map['PerformanceLevel'])) {
            $model->performanceLevel = $map['PerformanceLevel'];
        }
        if (isset($map['Placement'])) {
            $model->placement = placement::fromMap($map['Placement']);
        }
        if (isset($map['Portable'])) {
            $model->portable = $map['Portable'];
        }
        if (isset($map['ProductCode'])) {
            $model->productCode = $map['ProductCode'];
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
        if (isset($map['SerialNumber'])) {
            $model->serialNumber = $map['SerialNumber'];
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
            $model->tags = tags::fromMap($map['Tags']);
        }
        if (isset($map['Throughput'])) {
            $model->throughput = $map['Throughput'];
        }
        if (isset($map['ThroughputRead'])) {
            $model->throughputRead = $map['ThroughputRead'];
        }
        if (isset($map['ThroughputWrite'])) {
            $model->throughputWrite = $map['ThroughputWrite'];
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
