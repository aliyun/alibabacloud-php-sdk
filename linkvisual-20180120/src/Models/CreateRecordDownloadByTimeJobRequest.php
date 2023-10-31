<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkvisual\V20180120\Models;

use AlibabaCloud\Tea\Model;

class CreateRecordDownloadByTimeJobRequest extends Model
{
    /**
     * @var int
     */
    public $beginTime;

    /**
     * @var string
     */
    public $deviceName;

    /**
     * @var int
     */
    public $endTime;

    /**
     * @var string
     */
    public $iotId;

    /**
     * @var string
     */
    public $iotInstanceId;

    /**
     * @var string
     */
    public $productKey;

    /**
     * @var int
     */
    public $recordType;

    /**
     * @var int
     */
    public $streamType;
    protected $_name = [
        'beginTime'     => 'BeginTime',
        'deviceName'    => 'DeviceName',
        'endTime'       => 'EndTime',
        'iotId'         => 'IotId',
        'iotInstanceId' => 'IotInstanceId',
        'productKey'    => 'ProductKey',
        'recordType'    => 'RecordType',
        'streamType'    => 'StreamType',
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
        if (null !== $this->recordType) {
            $res['RecordType'] = $this->recordType;
        }
        if (null !== $this->streamType) {
            $res['StreamType'] = $this->streamType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateRecordDownloadByTimeJobRequest
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
        if (isset($map['RecordType'])) {
            $model->recordType = $map['RecordType'];
        }
        if (isset($map['StreamType'])) {
            $model->streamType = $map['StreamType'];
        }

        return $model;
    }
}
