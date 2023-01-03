<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models;

use AlibabaCloud\Tea\Model;

class GisSearchDeviceTraceRequest extends Model
{
    /**
     * @example mock_device_name
     *
     * @var string
     */
    public $deviceName;

    /**
     * @example 1645071254000
     *
     * @var int
     */
    public $endTime;

    /**
     * @example iot-a****13l
     *
     * @var string
     */
    public $iotInstanceId;

    /**
     * @example 0
     *
     * @var int
     */
    public $mapMatch;

    /**
     * @example g3r****Vjta
     *
     * @var string
     */
    public $productKey;

    /**
     * @example 1645071254000
     *
     * @var int
     */
    public $startTime;
    protected $_name = [
        'deviceName'    => 'DeviceName',
        'endTime'       => 'EndTime',
        'iotInstanceId' => 'IotInstanceId',
        'mapMatch'      => 'MapMatch',
        'productKey'    => 'ProductKey',
        'startTime'     => 'StartTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->deviceName) {
            $res['DeviceName'] = $this->deviceName;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->iotInstanceId) {
            $res['IotInstanceId'] = $this->iotInstanceId;
        }
        if (null !== $this->mapMatch) {
            $res['MapMatch'] = $this->mapMatch;
        }
        if (null !== $this->productKey) {
            $res['ProductKey'] = $this->productKey;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GisSearchDeviceTraceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DeviceName'])) {
            $model->deviceName = $map['DeviceName'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['IotInstanceId'])) {
            $model->iotInstanceId = $map['IotInstanceId'];
        }
        if (isset($map['MapMatch'])) {
            $model->mapMatch = $map['MapMatch'];
        }
        if (isset($map['ProductKey'])) {
            $model->productKey = $map['ProductKey'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        return $model;
    }
}
