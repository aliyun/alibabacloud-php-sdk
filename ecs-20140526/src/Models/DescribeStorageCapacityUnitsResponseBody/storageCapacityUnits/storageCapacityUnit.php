<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeStorageCapacityUnitsResponseBody\storageCapacityUnits;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeStorageCapacityUnitsResponseBody\storageCapacityUnits\storageCapacityUnit\tags;
use AlibabaCloud\Tea\Model;

class storageCapacityUnit extends Model
{
    /**
     * @description Indicates the allocation state of the SCU when the AllocationType parameter is set to Shared. Valid values:
     *
     *   allocated: The SCU is allocated to other accounts.
     *   BeAllocated: The SCU is allocated from another account.
     *
     * @example allocated
     *
     * @var string
     */
    public $allocationStatus;

    /**
     * @description The capacity of the SCU.
     *
     * @example 20
     *
     * @var int
     */
    public $capacity;

    /**
     * @description The time when the SCU was created.
     *
     * @example 2021-08-17T02:55Z
     *
     * @var string
     */
    public $creationTime;

    /**
     * @description The description of the SCU.
     *
     * @example testScuDescription
     *
     * @var string
     */
    public $description;

    /**
     * @description The time when the SCU expires.
     *
     * @example 2021-09-17T16:00Z
     *
     * @var string
     */
    public $expiredTime;

    /**
     * @description The name of the SCU.
     *
     * @example testScuName
     *
     * @var string
     */
    public $name;

    /**
     * @description The region ID of the SCU.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The time when the SCU took effect.
     *
     * @example 2021-08-17T02:55Z
     *
     * @var string
     */
    public $startTime;

    /**
     * @description The state of the SCU.
     *
     * @example Active
     *
     * @var string
     */
    public $status;

    /**
     * @description The ID of the SCU.
     *
     * @example scu-bp67acfmxazb4p****
     *
     * @var string
     */
    public $storageCapacityUnitId;

    /**
     * @description The tag key-value pairs of the SCU.
     *
     * @var tags
     */
    public $tags;
    protected $_name = [
        'allocationStatus'      => 'AllocationStatus',
        'capacity'              => 'Capacity',
        'creationTime'          => 'CreationTime',
        'description'           => 'Description',
        'expiredTime'           => 'ExpiredTime',
        'name'                  => 'Name',
        'regionId'              => 'RegionId',
        'startTime'             => 'StartTime',
        'status'                => 'Status',
        'storageCapacityUnitId' => 'StorageCapacityUnitId',
        'tags'                  => 'Tags',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->allocationStatus) {
            $res['AllocationStatus'] = $this->allocationStatus;
        }
        if (null !== $this->capacity) {
            $res['Capacity'] = $this->capacity;
        }
        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->expiredTime) {
            $res['ExpiredTime'] = $this->expiredTime;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->storageCapacityUnitId) {
            $res['StorageCapacityUnitId'] = $this->storageCapacityUnitId;
        }
        if (null !== $this->tags) {
            $res['Tags'] = null !== $this->tags ? $this->tags->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return storageCapacityUnit
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AllocationStatus'])) {
            $model->allocationStatus = $map['AllocationStatus'];
        }
        if (isset($map['Capacity'])) {
            $model->capacity = $map['Capacity'];
        }
        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['ExpiredTime'])) {
            $model->expiredTime = $map['ExpiredTime'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['StorageCapacityUnitId'])) {
            $model->storageCapacityUnitId = $map['StorageCapacityUnitId'];
        }
        if (isset($map['Tags'])) {
            $model->tags = tags::fromMap($map['Tags']);
        }

        return $model;
    }
}
