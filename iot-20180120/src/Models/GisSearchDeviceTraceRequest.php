<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models;

use AlibabaCloud\Tea\Model;

class GisSearchDeviceTraceRequest extends Model
{
    /**
     * @var int
     */
    public $mapMatch;

    /**
     * @var string
     */
    public $iotInstanceId;

    /**
     * @var int
     */
    public $endTime;

    /**
     * @var int
     */
    public $startTime;

    /**
     * @var string
     */
    public $productKey;

    /**
     * @var string
     */
    public $deviceName;
    protected $_name = [
        'mapMatch'      => 'MapMatch',
        'iotInstanceId' => 'IotInstanceId',
        'endTime'       => 'EndTime',
        'startTime'     => 'StartTime',
        'productKey'    => 'ProductKey',
        'deviceName'    => 'DeviceName',
    ];

    public function validate()
    {
        Model::validateRequired('mapMatch', $this->mapMatch, true);
        Model::validateRequired('endTime', $this->endTime, true);
        Model::validateRequired('startTime', $this->startTime, true);
        Model::validateRequired('productKey', $this->productKey, true);
        Model::validateRequired('deviceName', $this->deviceName, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->mapMatch) {
            $res['MapMatch'] = $this->mapMatch;
        }
        if (null !== $this->iotInstanceId) {
            $res['IotInstanceId'] = $this->iotInstanceId;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->productKey) {
            $res['ProductKey'] = $this->productKey;
        }
        if (null !== $this->deviceName) {
            $res['DeviceName'] = $this->deviceName;
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
        if (isset($map['MapMatch'])) {
            $model->mapMatch = $map['MapMatch'];
        }
        if (isset($map['IotInstanceId'])) {
            $model->iotInstanceId = $map['IotInstanceId'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['ProductKey'])) {
            $model->productKey = $map['ProductKey'];
        }
        if (isset($map['DeviceName'])) {
            $model->deviceName = $map['DeviceName'];
        }

        return $model;
    }
}
