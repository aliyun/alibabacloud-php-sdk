<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkvisual\V20180120\Models;

use AlibabaCloud\Tea\Model;

class QueryRecordUrlByTimeRequest extends Model
{
    /**
     * @example 1638675381
     *
     * @var int
     */
    public $beginTime;

    /**
     * @example camera1
     *
     * @var string
     */
    public $deviceName;

    /**
     * @example 1638866820
     *
     * @var int
     */
    public $endTime;

    /**
     * @example d7XmBoJhAr88C6PelXDF00****
     *
     * @var string
     */
    public $iotId;

    /**
     * @example iot-060a****
     *
     * @var string
     */
    public $iotInstanceId;

    /**
     * @example a1BwAGV****
     *
     * @var string
     */
    public $productKey;

    /**
     * @example 0
     *
     * @var int
     */
    public $streamType;

    /**
     * @example 200
     *
     * @var int
     */
    public $urlValidDuration;
    protected $_name = [
        'beginTime'        => 'BeginTime',
        'deviceName'       => 'DeviceName',
        'endTime'          => 'EndTime',
        'iotId'            => 'IotId',
        'iotInstanceId'    => 'IotInstanceId',
        'productKey'       => 'ProductKey',
        'streamType'       => 'StreamType',
        'urlValidDuration' => 'UrlValidDuration',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->beginTime) {
            $res['BeginTime'] = $this->beginTime;
        }
        if (null !== $this->deviceName) {
            $res['DeviceName'] = $this->deviceName;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->iotId) {
            $res['IotId'] = $this->iotId;
        }
        if (null !== $this->iotInstanceId) {
            $res['IotInstanceId'] = $this->iotInstanceId;
        }
        if (null !== $this->productKey) {
            $res['ProductKey'] = $this->productKey;
        }
        if (null !== $this->streamType) {
            $res['StreamType'] = $this->streamType;
        }
        if (null !== $this->urlValidDuration) {
            $res['UrlValidDuration'] = $this->urlValidDuration;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryRecordUrlByTimeRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BeginTime'])) {
            $model->beginTime = $map['BeginTime'];
        }
        if (isset($map['DeviceName'])) {
            $model->deviceName = $map['DeviceName'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['IotId'])) {
            $model->iotId = $map['IotId'];
        }
        if (isset($map['IotInstanceId'])) {
            $model->iotInstanceId = $map['IotInstanceId'];
        }
        if (isset($map['ProductKey'])) {
            $model->productKey = $map['ProductKey'];
        }
        if (isset($map['StreamType'])) {
            $model->streamType = $map['StreamType'];
        }
        if (isset($map['UrlValidDuration'])) {
            $model->urlValidDuration = $map['UrlValidDuration'];
        }

        return $model;
    }
}
