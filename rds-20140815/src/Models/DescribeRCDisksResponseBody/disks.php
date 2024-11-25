<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeRCDisksResponseBody;

use AlibabaCloud\Tea\Model;

class disks extends Model
{
    /**
     * @description The disk category. Valid values:
     *
     *   cloud: basic disk
     *   cloud_efficiency: utra disk
     *   cloud_ssd: standard SSD
     *   cloud_essd: Enterprise SSD (ESSD)
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
     * @description The creation time.
     *
     * @example 2024-10-22T02:41:37Z
     *
     * @var string
     */
    public $creationTime;

    /**
     * @description Indicates whether the automatic snapshots of the cloud disk are deleted after the disk is released. Valid values:
     *
     *   true
     *   false
     *
     * @example true
     *
     * @var bool
     */
    public $deleteAutoSnapshot;

    /**
     * @description Indicates whether the cloud disk is released when its associated instance is released. Valid values:
     *
     *   true
     *   false
     *
     * @example true
     *
     * @var bool
     */
    public $deleteWithInstance;

    /**
     * @description The disk description.
     *
     * @example zd_test
     *
     * @var string
     */
    public $description;

    /**
     * @description The mount point of the disk.
     *
     * @example /dev/xvda
     *
     * @var string
     */
    public $device;

    /**
     * @description The billing method of the disk.
     *
     * PostPaid: pay-as-you-go
     * @example PostPaid
     *
     * @var string
     */
    public $diskChargeType;

    /**
     * @description The disk ID.
     *
     * @example rcd-wz9f3peueu5npsl****
     *
     * @var string
     */
    public $diskId;

    /**
     * @description The disk name.
     *
     * @example fvt-ecs-bcfb3627
     *
     * @var string
     */
    public $diskName;

    /**
     * @description Indicates whether only encrypted cloud disks are queried. Valid values:
     *
     *   true
     *   false (default)
     *
     * @example true
     *
     * @var bool
     */
    public $encrypted;

    /**
     * @description A reserved parameter. You do not need to specify this parameter.
     *
     * @example none
     *
     * @var string
     */
    public $expiredTime;

    /**
     * @description The provisioned read/write IOPS of the ESSD AutoPL disk. Valid values: 0 to min{50,000, 1,000 × Storage capacity - Baseline performance}. Baseline performance = min{1,800 + 50 × Storage capacity, 50,000}.
     *
     * This parameter is available only when the `Category` parameter is set to `cloud_auto`.
     * @example 4000
     *
     * @var int
     */
    public $IOPS;

    /**
     * @description The ID of the image that is used to create the instance. This parameter is returned only if the cloud disk is created from an image. The value of this parameter remains unchanged throughout the lifecycle of the cloud disk.
     *
     * @example m-2zeb24dw6wripjn2****
     *
     * @var string
     */
    public $imageId;

    /**
     * @description The instance ID.
     *
     * @example rc-e8w1cn7634kiam****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The performance level (PL) of the ESSD. Valid values:
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
     * @description The region ID.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The ID of the resource group to which the disk belongs.
     *
     * @example rg-aekzescnje5khnq
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
     * @example rcds-bp67acfmxazb4p****
     *
     * @var string
     */
    public $sourceSnapshotId;

    /**
     * @description The status of the disk. Valid values:
     *
     *   In_use: The disk is in use.
     *   Available: The disk can be attached.
     *   Attaching: The disk is being attached.
     *   Detaching: The cloud disk is being detached.
     *   Creating: The disk is being created.
     *   ReIniting: The disk is being initialized.
     *
     * @example In_use
     *
     * @var string
     */
    public $status;

    /**
     * @description The ID of the dedicated block storage cluster to which the cloud disk belongs. If your cloud disk belongs to the public block storage cluster, an empty value is returned.
     *
     * @example dbsc-cn-zvp2rl601****
     *
     * @var string
     */
    public $storageClusterId;

    /**
     * @description The storage set ID.
     *
     * @example ss-i-bp1j4i2jdf3owlhe****
     *
     * @var string
     */
    public $storageSetId;

    /**
     * @description The disk type. Valid values:
     *
     *   system: system disk
     *   data: data disk
     *
     * @example data
     *
     * @var string
     */
    public $type;

    /**
     * @description The zone ID.
     *
     * @example cn-hangzhou-j
     *
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'category'           => 'Category',
        'creationTime'       => 'CreationTime',
        'deleteAutoSnapshot' => 'DeleteAutoSnapshot',
        'deleteWithInstance' => 'DeleteWithInstance',
        'description'        => 'Description',
        'device'             => 'Device',
        'diskChargeType'     => 'DiskChargeType',
        'diskId'             => 'DiskId',
        'diskName'           => 'DiskName',
        'encrypted'          => 'Encrypted',
        'expiredTime'        => 'ExpiredTime',
        'IOPS'               => 'IOPS',
        'imageId'            => 'ImageId',
        'instanceId'         => 'InstanceId',
        'performanceLevel'   => 'PerformanceLevel',
        'regionId'           => 'RegionId',
        'resourceGroupId'    => 'ResourceGroupId',
        'serialNumber'       => 'SerialNumber',
        'size'               => 'Size',
        'sourceSnapshotId'   => 'SourceSnapshotId',
        'status'             => 'Status',
        'storageClusterId'   => 'StorageClusterId',
        'storageSetId'       => 'StorageSetId',
        'type'               => 'Type',
        'zoneId'             => 'ZoneId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
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
        if (null !== $this->encrypted) {
            $res['Encrypted'] = $this->encrypted;
        }
        if (null !== $this->expiredTime) {
            $res['ExpiredTime'] = $this->expiredTime;
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
        if (null !== $this->performanceLevel) {
            $res['PerformanceLevel'] = $this->performanceLevel;
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
     * @return disks
     */
    public static function fromMap($map = [])
    {
        $model = new self();
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
        if (isset($map['Encrypted'])) {
            $model->encrypted = $map['Encrypted'];
        }
        if (isset($map['ExpiredTime'])) {
            $model->expiredTime = $map['ExpiredTime'];
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
        if (isset($map['PerformanceLevel'])) {
            $model->performanceLevel = $map['PerformanceLevel'];
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
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }

        return $model;
    }
}
