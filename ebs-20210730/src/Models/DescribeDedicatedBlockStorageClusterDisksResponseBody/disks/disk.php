<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ebs\V20210730\Models\DescribeDedicatedBlockStorageClusterDisksResponseBody\disks;

use AlibabaCloud\SDK\Ebs\V20210730\Models\DescribeDedicatedBlockStorageClusterDisksResponseBody\disks\disk\tags;
use AlibabaCloud\Tea\Model;

class disk extends Model
{
    /**
     * @example 2021-06-07T06:08:56Z
     *
     * @var string
     */
    public $attachedTime;

    /**
     * @example null
     *
     * @var string
     */
    public $bdfId;

    /**
     * @example cloud_essd
     *
     * @var string
     */
    public $category;

    /**
     * @example false
     *
     * @var bool
     */
    public $deleteAutoSnapshot;

    /**
     * @example true
     *
     * @var bool
     */
    public $deleteWithInstance;

    /**
     * @example testDescription
     *
     * @var string
     */
    public $description;

    /**
     * @example 2021-06-07T21:01:22Z
     *
     * @var string
     */
    public $detachedTime;

    /**
     * @example /dev/xvdb
     *
     * @var string
     */
    public $device;

    /**
     * @example PrePaid
     *
     * @var string
     */
    public $diskChargeType;

    /**
     * @example d-bp67acfmxazb4p****
     *
     * @var string
     */
    public $diskId;

    /**
     * @example testDiskName
     *
     * @var string
     */
    public $diskName;

    /**
     * @example false
     *
     * @var bool
     */
    public $enableAutoSnapshot;

    /**
     * @example false
     *
     * @var bool
     */
    public $encrypted;

    /**
     * @example 4000
     *
     * @var int
     */
    public $IOPS;

    /**
     * @example m-bp13aqm171qynt3u***
     *
     * @var string
     */
    public $imageId;

    /**
     * @example i-bp67acfmxazb4q****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example 0e478b7a-4262-4802-b8cb-00d3fb40****
     *
     * @var string
     */
    public $KMSKeyId;

    /**
     * @example 1
     *
     * @var int
     */
    public $mountInstanceNum;

    /**
     * @example Disabled
     *
     * @var string
     */
    public $multiAttach;

    /**
     * @example PL0
     *
     * @var string
     */
    public $performanceLevel;

    /**
     * @example false
     *
     * @var bool
     */
    public $portable;

    /**
     * @example cn-heyuan
     *
     * @var string
     */
    public $regionId;

    /**
     * @example 60
     *
     * @var int
     */
    public $size;

    /**
     * @example s-bp67acfmxazb4p****
     *
     * @var string
     */
    public $sourceSnapshotId;

    /**
     * @example In_use
     *
     * @var string
     */
    public $status;

    /**
     * @example dbsc-j5e1sf2vaf5he8m2****
     *
     * @var string
     */
    public $storageClusterId;

    /**
     * @example ss-i-bp1j4i2jdf3owlhe****
     *
     * @var string
     */
    public $storageSetId;

    /**
     * @example 11
     *
     * @var int
     */
    public $storageSetPartitionNumber;

    /**
     * @var tags[]
     */
    public $tags;

    /**
     * @example all
     *
     * @var string
     */
    public $type;

    /**
     * @example cn-heyuan-i
     *
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'attachedTime'              => 'AttachedTime',
        'bdfId'                     => 'BdfId',
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
        'regionId'                  => 'RegionId',
        'size'                      => 'Size',
        'sourceSnapshotId'          => 'SourceSnapshotId',
        'status'                    => 'Status',
        'storageClusterId'          => 'StorageClusterId',
        'storageSetId'              => 'StorageSetId',
        'storageSetPartitionNumber' => 'StorageSetPartitionNumber',
        'tags'                      => 'Tags',
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
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }

        return $model;
    }
}
