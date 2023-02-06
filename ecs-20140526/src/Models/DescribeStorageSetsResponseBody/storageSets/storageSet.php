<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeStorageSetsResponseBody\storageSets;

use AlibabaCloud\Tea\Model;

class storageSet extends Model
{
    /**
     * @description The time when the storage set was created.
     *
     * @example 2019-06-01T00:00:00Z
     *
     * @var string
     */
    public $creationTime;

    /**
     * @description The description of the storage set.
     *
     * @example testDescription
     *
     * @var string
     */
    public $description;

    /**
     * @description The ID of the region to which the storage set belongs.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The ID of the storage set.
     *
     * @example ss-bp1d6tsvznfghy7y****
     *
     * @var string
     */
    public $storageSetId;

    /**
     * @description The name of the storage set.
     *
     * @example testStorageSetName
     *
     * @var string
     */
    public $storageSetName;

    /**
     * @description The maximum number of partitions supported by the storage set.
     *
     * @example 3
     *
     * @var int
     */
    public $storageSetPartitionNumber;

    /**
     * @description The ID of the zone to which the storage set belongs.
     *
     * @example cn-hangzhou-g
     *
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'creationTime'              => 'CreationTime',
        'description'               => 'Description',
        'regionId'                  => 'RegionId',
        'storageSetId'              => 'StorageSetId',
        'storageSetName'            => 'StorageSetName',
        'storageSetPartitionNumber' => 'StorageSetPartitionNumber',
        'zoneId'                    => 'ZoneId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->storageSetId) {
            $res['StorageSetId'] = $this->storageSetId;
        }
        if (null !== $this->storageSetName) {
            $res['StorageSetName'] = $this->storageSetName;
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
     * @return storageSet
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['StorageSetId'])) {
            $model->storageSetId = $map['StorageSetId'];
        }
        if (isset($map['StorageSetName'])) {
            $model->storageSetName = $map['StorageSetName'];
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
