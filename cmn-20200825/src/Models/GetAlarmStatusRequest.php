<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cmn\V20200825\Models;

use AlibabaCloud\Tea\Model;

class GetAlarmStatusRequest extends Model
{
    /**
     * @example a-52gmqniln3u53n32
     *
     * @var string
     */
    public $aggregateDataId;

    /**
     * @example app-52gmqniln3u53n32
     *
     * @var string
     */
    public $appId;

    /**
     * @example d-52gmqniln3u53n32
     *
     * @var string
     */
    public $dedicatedLineId;

    /**
     * @example device-jrjb476ub06
     *
     * @var string
     */
    public $deviceId;

    /**
     * @example cmn-cn-xxxx
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example m-22ut5sn54o35wsz6
     *
     * @var string
     */
    public $monitorItemId;

    /**
     * @example p-52gmqniln3u53n32
     *
     * @var string
     */
    public $portCollectionId;

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
        'instanceId'       => 'InstanceId',
        'monitorItemId'    => 'MonitorItemId',
        'portCollectionId' => 'PortCollectionId',
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
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->monitorItemId) {
            $res['MonitorItemId'] = $this->monitorItemId;
        }
        if (null !== $this->portCollectionId) {
            $res['PortCollectionId'] = $this->portCollectionId;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetAlarmStatusRequest
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
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['MonitorItemId'])) {
            $model->monitorItemId = $map['MonitorItemId'];
        }
        if (isset($map['PortCollectionId'])) {
            $model->portCollectionId = $map['PortCollectionId'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
