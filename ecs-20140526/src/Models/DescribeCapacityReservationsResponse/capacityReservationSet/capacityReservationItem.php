<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeCapacityReservationsResponse\capacityReservationSet;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeCapacityReservationsResponse\capacityReservationSet\capacityReservationItem\allocatedResources;
use AlibabaCloud\Tea\Model;

class capacityReservationItem extends Model
{
    /**
     * @var string
     */
    public $privatePoolOptionsId;

    /**
     * @var string
     */
    public $privatePoolOptionsName;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $privatePoolOptionsMatchCriteria;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $startTime;

    /**
     * @var string
     */
    public $endTime;

    /**
     * @var string
     */
    public $endTimeType;

    /**
     * @var string
     */
    public $instanceChargeType;

    /**
     * @var string
     */
    public $platform;

    /**
     * @var string
     */
    public $timeSlot;

    /**
     * @var allocatedResources
     */
    public $allocatedResources;
    protected $_name = [
        'privatePoolOptionsId'            => 'PrivatePoolOptionsId',
        'privatePoolOptionsName'          => 'PrivatePoolOptionsName',
        'description'                     => 'Description',
        'regionId'                        => 'RegionId',
        'privatePoolOptionsMatchCriteria' => 'PrivatePoolOptionsMatchCriteria',
        'status'                          => 'Status',
        'startTime'                       => 'StartTime',
        'endTime'                         => 'EndTime',
        'endTimeType'                     => 'EndTimeType',
        'instanceChargeType'              => 'InstanceChargeType',
        'platform'                        => 'Platform',
        'timeSlot'                        => 'TimeSlot',
        'allocatedResources'              => 'AllocatedResources',
    ];

    public function validate()
    {
        Model::validateRequired('privatePoolOptionsId', $this->privatePoolOptionsId, true);
        Model::validateRequired('privatePoolOptionsName', $this->privatePoolOptionsName, true);
        Model::validateRequired('description', $this->description, true);
        Model::validateRequired('regionId', $this->regionId, true);
        Model::validateRequired('privatePoolOptionsMatchCriteria', $this->privatePoolOptionsMatchCriteria, true);
        Model::validateRequired('status', $this->status, true);
        Model::validateRequired('startTime', $this->startTime, true);
        Model::validateRequired('endTime', $this->endTime, true);
        Model::validateRequired('endTimeType', $this->endTimeType, true);
        Model::validateRequired('instanceChargeType', $this->instanceChargeType, true);
        Model::validateRequired('platform', $this->platform, true);
        Model::validateRequired('timeSlot', $this->timeSlot, true);
        Model::validateRequired('allocatedResources', $this->allocatedResources, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->privatePoolOptionsId) {
            $res['PrivatePoolOptionsId'] = $this->privatePoolOptionsId;
        }
        if (null !== $this->privatePoolOptionsName) {
            $res['PrivatePoolOptionsName'] = $this->privatePoolOptionsName;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->privatePoolOptionsMatchCriteria) {
            $res['PrivatePoolOptionsMatchCriteria'] = $this->privatePoolOptionsMatchCriteria;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->endTimeType) {
            $res['EndTimeType'] = $this->endTimeType;
        }
        if (null !== $this->instanceChargeType) {
            $res['InstanceChargeType'] = $this->instanceChargeType;
        }
        if (null !== $this->platform) {
            $res['Platform'] = $this->platform;
        }
        if (null !== $this->timeSlot) {
            $res['TimeSlot'] = $this->timeSlot;
        }
        if (null !== $this->allocatedResources) {
            $res['AllocatedResources'] = null !== $this->allocatedResources ? $this->allocatedResources->toMap() : null;
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
        if (isset($map['PrivatePoolOptionsId'])) {
            $model->privatePoolOptionsId = $map['PrivatePoolOptionsId'];
        }
        if (isset($map['PrivatePoolOptionsName'])) {
            $model->privatePoolOptionsName = $map['PrivatePoolOptionsName'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['PrivatePoolOptionsMatchCriteria'])) {
            $model->privatePoolOptionsMatchCriteria = $map['PrivatePoolOptionsMatchCriteria'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['EndTimeType'])) {
            $model->endTimeType = $map['EndTimeType'];
        }
        if (isset($map['InstanceChargeType'])) {
            $model->instanceChargeType = $map['InstanceChargeType'];
        }
        if (isset($map['Platform'])) {
            $model->platform = $map['Platform'];
        }
        if (isset($map['TimeSlot'])) {
            $model->timeSlot = $map['TimeSlot'];
        }
        if (isset($map['AllocatedResources'])) {
            $model->allocatedResources = allocatedResources::fromMap($map['AllocatedResources']);
        }

        return $model;
    }
}
