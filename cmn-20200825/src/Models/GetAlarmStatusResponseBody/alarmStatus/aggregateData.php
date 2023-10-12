<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cmn\V20200825\Models\GetAlarmStatusResponseBody\alarmStatus;

use AlibabaCloud\Tea\Model;

class aggregateData extends Model
{
    /**
     * @description 描述
     *
     * @example avg latency avg
     *
     * @var string
     */
    public $aggregateDataDescription;

    /**
     * @description 聚合数据ID
     *
     * @example a-52gmqniln3u53n32
     *
     * @var string
     */
    public $aggregateDataId;

    /**
     * @description 聚合数据名称
     *
     * @example avg_latency_avg
     *
     * @var string
     */
    public $aggregateDataName;

    /**
     * @description 聚合方式
     *
     * @example SUM
     *
     * @var string
     */
    public $aggregateMode;

    /**
     * @description 数据项
     *
     * @example latency
     *
     * @var string
     */
    public $dataItem;

    /**
     * @description 设备ID
     *
     * @example device-jrjb476ub06
     *
     * @var string
     */
    public $deviceId;

    /**
     * @description 是否聚合全部设备
     *
     * @example 0
     *
     * @var int
     */
    public $isAllDevice;

    /**
     * @description 监控项ID
     *
     * @example m-22ut5sn54o35wsz6
     *
     * @var string
     */
    public $monitorItemId;
    protected $_name = [
        'aggregateDataDescription' => 'AggregateDataDescription',
        'aggregateDataId'          => 'AggregateDataId',
        'aggregateDataName'        => 'AggregateDataName',
        'aggregateMode'            => 'AggregateMode',
        'dataItem'                 => 'DataItem',
        'deviceId'                 => 'DeviceId',
        'isAllDevice'              => 'IsAllDevice',
        'monitorItemId'            => 'MonitorItemId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->aggregateDataDescription) {
            $res['AggregateDataDescription'] = $this->aggregateDataDescription;
        }
        if (null !== $this->aggregateDataId) {
            $res['AggregateDataId'] = $this->aggregateDataId;
        }
        if (null !== $this->aggregateDataName) {
            $res['AggregateDataName'] = $this->aggregateDataName;
        }
        if (null !== $this->aggregateMode) {
            $res['AggregateMode'] = $this->aggregateMode;
        }
        if (null !== $this->dataItem) {
            $res['DataItem'] = $this->dataItem;
        }
        if (null !== $this->deviceId) {
            $res['DeviceId'] = $this->deviceId;
        }
        if (null !== $this->isAllDevice) {
            $res['IsAllDevice'] = $this->isAllDevice;
        }
        if (null !== $this->monitorItemId) {
            $res['MonitorItemId'] = $this->monitorItemId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return aggregateData
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AggregateDataDescription'])) {
            $model->aggregateDataDescription = $map['AggregateDataDescription'];
        }
        if (isset($map['AggregateDataId'])) {
            $model->aggregateDataId = $map['AggregateDataId'];
        }
        if (isset($map['AggregateDataName'])) {
            $model->aggregateDataName = $map['AggregateDataName'];
        }
        if (isset($map['AggregateMode'])) {
            $model->aggregateMode = $map['AggregateMode'];
        }
        if (isset($map['DataItem'])) {
            $model->dataItem = $map['DataItem'];
        }
        if (isset($map['DeviceId'])) {
            $model->deviceId = $map['DeviceId'];
        }
        if (isset($map['IsAllDevice'])) {
            $model->isAllDevice = $map['IsAllDevice'];
        }
        if (isset($map['MonitorItemId'])) {
            $model->monitorItemId = $map['MonitorItemId'];
        }

        return $model;
    }
}
