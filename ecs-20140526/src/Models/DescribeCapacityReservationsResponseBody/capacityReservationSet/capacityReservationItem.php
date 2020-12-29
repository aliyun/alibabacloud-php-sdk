<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeCapacityReservationsResponseBody\capacityReservationSet;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeCapacityReservationsResponseBody\capacityReservationSet\capacityReservationItem\allocatedResources;
use AlibabaCloud\Tea\Model;

class capacityReservationItem extends Model
{
    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $timeSlot;

    /**
     * @var string
     */
    public $privatePoolOptionsMatchCriteria;

    /**
     * @var string
     */
    public $privatePoolOptionsId;

    /**
     * @var allocatedResources
     */
    public $allocatedResources;

    /**
     * @var string
     */
    public $privatePoolOptionsName;

    /**
     * @var string
     */
    public $instanceChargeType;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $endTime;

    /**
     * @var string
     */
    public $startTime;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $endTimeType;

    /**
     * @var string
     */
    public $platform;
    protected $_name = [
        'status'                          => 'Status',
        'timeSlot'                        => 'TimeSlot',
        'privatePoolOptionsMatchCriteria' => 'PrivatePoolOptionsMatchCriteria',
        'privatePoolOptionsId'            => 'PrivatePoolOptionsId',
        'allocatedResources'              => 'AllocatedResources',
        'privatePoolOptionsName'          => 'PrivatePoolOptionsName',
        'instanceChargeType'              => 'InstanceChargeType',
        'regionId'                        => 'RegionId',
        'endTime'                         => 'EndTime',
        'startTime'                       => 'StartTime',
        'description'                     => 'Description',
        'endTimeType'                     => 'EndTimeType',
        'platform'                        => 'Platform',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->timeSlot) {
            $res['TimeSlot'] = $this->timeSlot;
        }
        if (null !== $this->privatePoolOptionsMatchCriteria) {
            $res['PrivatePoolOptionsMatchCriteria'] = $this->privatePoolOptionsMatchCriteria;
        }
        if (null !== $this->privatePoolOptionsId) {
            $res['PrivatePoolOptionsId'] = $this->privatePoolOptionsId;
        }
        if (null !== $this->allocatedResources) {
            $res['AllocatedResources'] = null !== $this->allocatedResources ? $this->allocatedResources->toMap() : null;
        }
        if (null !== $this->privatePoolOptionsName) {
            $res['PrivatePoolOptionsName'] = $this->privatePoolOptionsName;
        }
        if (null !== $this->instanceChargeType) {
            $res['InstanceChargeType'] = $this->instanceChargeType;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->endTimeType) {
            $res['EndTimeType'] = $this->endTimeType;
        }
        if (null !== $this->platform) {
            $res['Platform'] = $this->platform;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return capacityReservationItem
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['TimeSlot'])) {
            $model->timeSlot = $map['TimeSlot'];
        }
        if (isset($map['PrivatePoolOptionsMatchCriteria'])) {
            $model->privatePoolOptionsMatchCriteria = $map['PrivatePoolOptionsMatchCriteria'];
        }
        if (isset($map['PrivatePoolOptionsId'])) {
            $model->privatePoolOptionsId = $map['PrivatePoolOptionsId'];
        }
        if (isset($map['AllocatedResources'])) {
            $model->allocatedResources = allocatedResources::fromMap($map['AllocatedResources']);
        }
        if (isset($map['PrivatePoolOptionsName'])) {
            $model->privatePoolOptionsName = $map['PrivatePoolOptionsName'];
        }
        if (isset($map['InstanceChargeType'])) {
            $model->instanceChargeType = $map['InstanceChargeType'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['EndTimeType'])) {
            $model->endTimeType = $map['EndTimeType'];
        }
        if (isset($map['Platform'])) {
            $model->platform = $map['Platform'];
        }

        return $model;
    }
}
