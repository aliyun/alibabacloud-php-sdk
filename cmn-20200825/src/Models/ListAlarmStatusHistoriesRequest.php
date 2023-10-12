<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cmn\V20200825\Models;

use AlibabaCloud\Tea\Model;

class ListAlarmStatusHistoriesRequest extends Model
{
    /**
     * @example a-cjqd1crux50udtt0
     *
     * @var string
     */
    public $aggregateDataId;

    /**
     * @example app-fwq29cmatva28
     *
     * @var string
     */
    public $appId;

    /**
     * @example d-fwq29cmatva28
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
     * @example cmn-cn-xxxx
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example m-52gmqniln3u53n32
     *
     * @var string
     */
    public $monitorItemId;

    /**
     * @example p-fwq29cmatva28
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

    /**
     * @example SINGLE
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'aggregateDataId'  => 'AggregateDataId',
        'appId'            => 'AppId',
        'dedicatedLineId'  => 'DedicatedLineId',
        'deviceId'         => 'DeviceId',
        'end'              => 'End',
        'instanceId'       => 'InstanceId',
        'monitorItemId'    => 'MonitorItemId',
        'portCollectionId' => 'PortCollectionId',
        'start'            => 'Start',
        'type'             => 'Type',
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
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
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
        if (null !== $this->monitorItemId) {
            $res['MonitorItemId'] = $this->monitorItemId;
        }
        if (null !== $this->portCollectionId) {
            $res['PortCollectionId'] = $this->portCollectionId;
        }
        if (null !== $this->start) {
            $res['Start'] = $this->start;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListAlarmStatusHistoriesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AggregateDataId'])) {
            $model->aggregateDataId = $map['AggregateDataId'];
        }
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
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
        if (isset($map['MonitorItemId'])) {
            $model->monitorItemId = $map['MonitorItemId'];
        }
        if (isset($map['PortCollectionId'])) {
            $model->portCollectionId = $map['PortCollectionId'];
        }
        if (isset($map['Start'])) {
            $model->start = $map['Start'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
