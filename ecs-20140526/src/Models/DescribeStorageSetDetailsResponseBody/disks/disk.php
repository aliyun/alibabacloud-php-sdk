<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeStorageSetDetailsResponseBody\disks;

use AlibabaCloud\Tea\Model;

class disk extends Model
{
    /**
     * @description The category of the disk or Shared Block Storage device.
     *
     * @example cloud_ssd
     *
     * @var string
     */
    public $category;

    /**
     * @description The time when the disk or Shared Block Storage device was created.
     *
     * @example 2019-06-01T00:00:00Z
     *
     * @var string
     */
    public $creationTime;

    /**
     * @description The ID of the disk or Shared Block Storage device.
     *
     * @example d-bp67acfmxazb4p****
     *
     * @var string
     */
    public $diskId;

    /**
     * @description The name of the disk or Shared Block Storage device.
     *
     * @example testDiskName
     *
     * @var string
     */
    public $diskName;

    /**
     * @description The region to which the disk or Shared Block Storage device belongs.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The ID of the storage set.
     *
     * @example ss-bp67acfmxazb4p****
     *
     * @var string
     */
    public $storageSetId;

    /**
     * @description The number of partitions in the storage set.
     *
     * @example 3
     *
     * @var int
     */
    public $storageSetPartitionNumber;

    /**
     * @description The zone to which the disk or Shared Block Storage device belongs.
     *
     * @example cn-hangzhou-g
     *
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'category'                  => 'Category',
        'creationTime'              => 'CreationTime',
        'diskId'                    => 'DiskId',
        'diskName'                  => 'DiskName',
        'regionId'                  => 'RegionId',
        'storageSetId'              => 'StorageSetId',
        'storageSetPartitionNumber' => 'StorageSetPartitionNumber',
        'zoneId'                    => 'ZoneId',
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
        if (null !== $this->diskId) {
            $res['DiskId'] = $this->diskId;
        }
        if (null !== $this->diskName) {
            $res['DiskName'] = $this->diskName;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->storageSetId) {
            $res['StorageSetId'] = $this->storageSetId;
        }
        if (null !== $this->storageSetPartitionNumber) {
            $res['StorageSetPartitionNumber'] = $this->storageSetPartitionNumber;
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
        if (isset($map['Category'])) {
            $model->category = $map['Category'];
        }
        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }
        if (isset($map['DiskId'])) {
            $model->diskId = $map['DiskId'];
        }
        if (isset($map['DiskName'])) {
            $model->diskName = $map['DiskName'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['StorageSetId'])) {
            $model->storageSetId = $map['StorageSetId'];
        }
        if (isset($map['StorageSetPartitionNumber'])) {
            $model->storageSetPartitionNumber = $map['StorageSetPartitionNumber'];
        }
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }

        return $model;
    }
}
