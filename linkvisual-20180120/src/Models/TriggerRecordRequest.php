<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkvisual\V20180120\Models;

use AlibabaCloud\Tea\Model;

class TriggerRecordRequest extends Model
{
    /**
     * @example camera1
     *
     * @var string
     */
    public $deviceName;

    /**
     * @example zLZyi6aOLyOSHa****yD000100
     *
     * @var string
     */
    public $iotId;

    /**
     * @example iot-cn-n6w1y5****0t
     *
     * @var string
     */
    public $iotInstanceId;

    /**
     * @example 5
     *
     * @var int
     */
    public $preRecordDuration;

    /**
     * @example a1BwAGV****
     *
     * @var string
     */
    public $productKey;

    /**
     * @example 60
     *
     * @var int
     */
    public $recordDuration;

    /**
     * @example 0
     *
     * @var int
     */
    public $streamType;
    protected $_name = [
        'deviceName'        => 'DeviceName',
        'iotId'             => 'IotId',
        'iotInstanceId'     => 'IotInstanceId',
        'preRecordDuration' => 'PreRecordDuration',
        'productKey'        => 'ProductKey',
        'recordDuration'    => 'RecordDuration',
        'streamType'        => 'StreamType',
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
        if (null !== $this->iotId) {
            $res['IotId'] = $this->iotId;
        }
        if (null !== $this->iotInstanceId) {
            $res['IotInstanceId'] = $this->iotInstanceId;
        }
        if (null !== $this->preRecordDuration) {
            $res['PreRecordDuration'] = $this->preRecordDuration;
        }
        if (null !== $this->productKey) {
            $res['ProductKey'] = $this->productKey;
        }
        if (null !== $this->recordDuration) {
            $res['RecordDuration'] = $this->recordDuration;
        }
        if (null !== $this->streamType) {
            $res['StreamType'] = $this->streamType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return TriggerRecordRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DeviceName'])) {
            $model->deviceName = $map['DeviceName'];
        }
        if (isset($map['IotId'])) {
            $model->iotId = $map['IotId'];
        }
        if (isset($map['IotInstanceId'])) {
            $model->iotInstanceId = $map['IotInstanceId'];
        }
        if (isset($map['PreRecordDuration'])) {
            $model->preRecordDuration = $map['PreRecordDuration'];
        }
        if (isset($map['ProductKey'])) {
            $model->productKey = $map['ProductKey'];
        }
        if (isset($map['RecordDuration'])) {
            $model->recordDuration = $map['RecordDuration'];
        }
        if (isset($map['StreamType'])) {
            $model->streamType = $map['StreamType'];
        }

        return $model;
    }
}
