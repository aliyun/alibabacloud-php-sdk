<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cmn\V20200825\Models;

use AlibabaCloud\Tea\Model;

class ListMonitorDataRequest extends Model
{
    /**
     * @example a-cjqd1crux50udtt0
     *
     * @var string
     */
    public $aggregateDataId;

    /**
     * @example 5m-sum
     *
     * @var string
     */
    public $aggregationType;

    /**
     * @example app-wgh09k2gam3k4ggm
     *
     * @var string
     */
    public $appId;

    /**
     * @example avg_latency
     *
     * @var string
     */
    public $dataItem;

    /**
     * @example SINGLE
     *
     * @var string
     */
    public $dataType;

    /**
     * @example space_isp-wgh09k2gam3k4ggm
     *
     * @var string
     */
    public $dedicatedLineId;

    /**
     * @example d-fwq29cmatva28
     *
     * @var string
     */
    public $deviceId;

    /**
     * @example 1609431000
     *
     * @var int
     */
    public $end;

    /**
     * @example cmn-cn-xxx
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example in_bps
     *
     * @var string
     */
    public $key;

    /**
     * @example m-52gmqniln3u53n32
     *
     * @var string
     */
    public $monitorItemId;

    /**
     * @example p-26dlna3ez8gejgrz
     *
     * @var string
     */
    public $portCollectionId;

    /**
     * @example 1609430400
     *
     * @var int
     */
    public $start;
    protected $_name = [
        'aggregateDataId'  => 'AggregateDataId',
        'aggregationType'  => 'AggregationType',
        'appId'            => 'AppId',
        'dataItem'         => 'DataItem',
        'dataType'         => 'DataType',
        'dedicatedLineId'  => 'DedicatedLineId',
        'deviceId'         => 'DeviceId',
        'end'              => 'End',
        'instanceId'       => 'InstanceId',
        'key'              => 'Key',
        'monitorItemId'    => 'MonitorItemId',
        'portCollectionId' => 'PortCollectionId',
        'start'            => 'Start',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->aggregateDataId) {
            $res['AggregateDataId'] = $this->aggregateDataId;
        }
        if (null !== $this->aggregationType) {
            $res['AggregationType'] = $this->aggregationType;
        }
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->dataItem) {
            $res['DataItem'] = $this->dataItem;
        }
        if (null !== $this->dataType) {
            $res['DataType'] = $this->dataType;
        }
        if (null !== $this->dedicatedLineId) {
            $res['DedicatedLineId'] = $this->dedicatedLineId;
        }
        if (null !== $this->deviceId) {
            $res['DeviceId'] = $this->deviceId;
        }
        if (null !== $this->end) {
            $res['End'] = $this->end;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->key) {
            $res['Key'] = $this->key;
        }
        if (null !== $this->monitorItemId) {
            $res['MonitorItemId'] = $this->monitorItemId;
        }
        if (null !== $this->portCollectionId) {
            $res['PortCollectionId'] = $this->portCollectionId;
        }
        if (null !== $this->start) {
            $res['Start'] = $this->start;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListMonitorDataRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AggregateDataId'])) {
            $model->aggregateDataId = $map['AggregateDataId'];
        }
        if (isset($map['AggregationType'])) {
            $model->aggregationType = $map['AggregationType'];
        }
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['DataItem'])) {
            $model->dataItem = $map['DataItem'];
        }
        if (isset($map['DataType'])) {
            $model->dataType = $map['DataType'];
        }
        if (isset($map['DedicatedLineId'])) {
            $model->dedicatedLineId = $map['DedicatedLineId'];
        }
        if (isset($map['DeviceId'])) {
            $model->deviceId = $map['DeviceId'];
        }
        if (isset($map['End'])) {
            $model->end = $map['End'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['Key'])) {
            $model->key = $map['Key'];
        }
        if (isset($map['MonitorItemId'])) {
            $model->monitorItemId = $map['MonitorItemId'];
        }
        if (isset($map['PortCollectionId'])) {
            $model->portCollectionId = $map['PortCollectionId'];
        }
        if (isset($map['Start'])) {
            $model->start = $map['Start'];
        }

        return $model;
    }
}
