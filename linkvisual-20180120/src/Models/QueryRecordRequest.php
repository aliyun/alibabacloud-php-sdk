<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkvisual\V20180120\Models;

use AlibabaCloud\Tea\Model;

class QueryRecordRequest extends Model
{
    /**
     * @example 1508200012
     *
     * @var int
     */
    public $beginTime;

    /**
     * @example 1
     *
     * @var int
     */
    public $currentPage;

    /**
     * @example camera1
     *
     * @var string
     */
    public $deviceName;

    /**
     * @example 1582420940
     *
     * @var int
     */
    public $endTime;

    /**
     * @example C47T6xwp6ms4bNlkHRWCg4****
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
     * @example true
     *
     * @var bool
     */
    public $needSnapshot;

    /**
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @example a1BwAGV****
     *
     * @var string
     */
    public $productKey;

    /**
     * @example 1
     *
     * @var int
     */
    public $recordType;

    /**
     * @example 1
     *
     * @var int
     */
    public $streamType;
    protected $_name = [
        'beginTime'     => 'BeginTime',
        'currentPage'   => 'CurrentPage',
        'deviceName'    => 'DeviceName',
        'endTime'       => 'EndTime',
        'iotId'         => 'IotId',
        'iotInstanceId' => 'IotInstanceId',
        'needSnapshot'  => 'NeedSnapshot',
        'pageSize'      => 'PageSize',
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
        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
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
        if (null !== $this->needSnapshot) {
            $res['NeedSnapshot'] = $this->needSnapshot;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
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
     * @return QueryRecordRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BeginTime'])) {
            $model->beginTime = $map['BeginTime'];
        }
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
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
        if (isset($map['NeedSnapshot'])) {
            $model->needSnapshot = $map['NeedSnapshot'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
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
