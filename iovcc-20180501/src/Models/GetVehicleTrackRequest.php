<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iovcc\V20180501\Models;

use AlibabaCloud\Tea\Model;

class GetVehicleTrackRequest extends Model
{
    /**
     * @description 项目ID
     *
     * @var string
     */
    public $projectId;

    /**
     * @var string
     */
    public $deviceId;

    /**
     * @var int
     */
    public $startTime;

    /**
     * @var int
     */
    public $endTime;

    /**
     * @var string
     */
    public $vin;
    protected $_name = [
        'projectId' => 'ProjectId',
        'deviceId'  => 'DeviceId',
        'startTime' => 'StartTime',
        'endTime'   => 'EndTime',
        'vin'       => 'Vin',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->deviceId) {
            $res['DeviceId'] = $this->deviceId;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->vin) {
            $res['Vin'] = $this->vin;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetVehicleTrackRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['DeviceId'])) {
            $model->deviceId = $map['DeviceId'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['Vin'])) {
            $model->vin = $map['Vin'];
        }

        return $model;
    }
}
