<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeRCDisksResponseBody;

use AlibabaCloud\Dara\Model;

class disks extends Model
{
    /**
     * @var string
     */
    public $category;
    /**
     * @var string
     */
    public $creationTime;
    /**
     * @var bool
     */
    public $deleteAutoSnapshot;
    /**
     * @var bool
     */
    public $deleteWithInstance;
    /**
     * @var string
     */
    public $description;
    /**
     * @var string
     */
    public $device;
    /**
     * @var string
     */
    public $diskChargeType;
    /**
     * @var string
     */
    public $diskId;
    /**
     * @var string
     */
    public $diskName;
    /**
     * @var bool
     */
    public $encrypted;
    /**
     * @var string
     */
    public $expiredTime;
    /**
     * @var int
     */
    public $IOPS;
    /**
     * @var string
     */
    public $imageId;
    /**
     * @var string
     */
    public $instanceId;
    /**
     * @var string
     */
    public $performanceLevel;
    /**
     * @var string
     */
    public $regionId;
    /**
     * @var string
     */
    public $resourceGroupId;
    /**
     * @var string
     */
    public $serialNumber;
    /**
     * @var int
     */
    public $size;
    /**
     * @var string
     */
    public $sourceSnapshotId;
    /**
     * @var string
     */
    public $status;
    /**
     * @var string
     */
    public $storageClusterId;
    /**
     * @var string
     */
    public $storageSetId;
    /**
     * @var string
     */
    public $type;
    /**
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
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
