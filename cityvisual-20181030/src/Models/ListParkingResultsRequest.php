<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cityvisual\V20181030\Models;

use AlibabaCloud\Tea\Model;

class ListParkingResultsRequest extends Model
{
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
    public $cameraIds;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $vehiclePlate;
    protected $_name = [
        'startTime'    => 'StartTime',
        'endTime'      => 'EndTime',
        'cameraIds'    => 'CameraIds',
        'instanceId'   => 'InstanceId',
        'regionId'     => 'RegionId',
        'vehiclePlate' => 'VehiclePlate',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->cameraIds) {
            $res['CameraIds'] = $this->cameraIds;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->vehiclePlate) {
            $res['VehiclePlate'] = $this->vehiclePlate;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListParkingResultsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['CameraIds'])) {
            $model->cameraIds = $map['CameraIds'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['VehiclePlate'])) {
            $model->vehiclePlate = $map['VehiclePlate'];
        }

        return $model;
    }
}
