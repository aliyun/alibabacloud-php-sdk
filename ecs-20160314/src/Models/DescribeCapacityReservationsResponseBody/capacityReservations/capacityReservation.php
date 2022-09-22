<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeCapacityReservationsResponseBody\capacityReservations;

use AlibabaCloud\Tea\Model;

class capacityReservation extends Model
{
    /**
     * @var int
     */
    public $availableInstanceCount;

    /**
     * @var string
     */
    public $capacityReservationId;

    /**
     * @var string
     */
    public $capacityReservationName;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $endDateType;

    /**
     * @var string
     */
    public $instanceMatchCriteria;

    /**
     * @var string
     */
    public $instancePlatform;

    /**
     * @var string
     */
    public $instanceType;

    /**
     * @var string
     */
    public $networkType;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $timeSlot;

    /**
     * @var int
     */
    public $totalInstanceCount;

    /**
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'availableInstanceCount'  => 'AvailableInstanceCount',
        'capacityReservationId'   => 'CapacityReservationId',
        'capacityReservationName' => 'CapacityReservationName',
        'description'             => 'Description',
        'endDateType'             => 'EndDateType',
        'instanceMatchCriteria'   => 'InstanceMatchCriteria',
        'instancePlatform'        => 'InstancePlatform',
        'instanceType'            => 'InstanceType',
        'networkType'             => 'NetworkType',
        'regionId'                => 'RegionId',
        'status'                  => 'Status',
        'timeSlot'                => 'TimeSlot',
        'totalInstanceCount'      => 'TotalInstanceCount',
        'zoneId'                  => 'ZoneId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->availableInstanceCount) {
            $res['AvailableInstanceCount'] = $this->availableInstanceCount;
        }
        if (null !== $this->capacityReservationId) {
            $res['CapacityReservationId'] = $this->capacityReservationId;
        }
        if (null !== $this->capacityReservationName) {
            $res['CapacityReservationName'] = $this->capacityReservationName;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->endDateType) {
            $res['EndDateType'] = $this->endDateType;
        }
        if (null !== $this->instanceMatchCriteria) {
            $res['InstanceMatchCriteria'] = $this->instanceMatchCriteria;
        }
        if (null !== $this->instancePlatform) {
            $res['InstancePlatform'] = $this->instancePlatform;
        }
        if (null !== $this->instanceType) {
            $res['InstanceType'] = $this->instanceType;
        }
        if (null !== $this->networkType) {
            $res['NetworkType'] = $this->networkType;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->timeSlot) {
            $res['TimeSlot'] = $this->timeSlot;
        }
        if (null !== $this->totalInstanceCount) {
            $res['TotalInstanceCount'] = $this->totalInstanceCount;
        }
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return capacityReservation
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AvailableInstanceCount'])) {
            $model->availableInstanceCount = $map['AvailableInstanceCount'];
        }
        if (isset($map['CapacityReservationId'])) {
            $model->capacityReservationId = $map['CapacityReservationId'];
        }
        if (isset($map['CapacityReservationName'])) {
            $model->capacityReservationName = $map['CapacityReservationName'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['EndDateType'])) {
            $model->endDateType = $map['EndDateType'];
        }
        if (isset($map['InstanceMatchCriteria'])) {
            $model->instanceMatchCriteria = $map['InstanceMatchCriteria'];
        }
        if (isset($map['InstancePlatform'])) {
            $model->instancePlatform = $map['InstancePlatform'];
        }
        if (isset($map['InstanceType'])) {
            $model->instanceType = $map['InstanceType'];
        }
        if (isset($map['NetworkType'])) {
            $model->networkType = $map['NetworkType'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['TimeSlot'])) {
            $model->timeSlot = $map['TimeSlot'];
        }
        if (isset($map['TotalInstanceCount'])) {
            $model->totalInstanceCount = $map['TotalInstanceCount'];
        }
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }

        return $model;
    }
}
