<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cmn\V20200825\Models\DisableNotificationRequest;

use AlibabaCloud\Tea\Model;

class list_ extends Model
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
     * @example e-f641qv4eg6u4fgd6
     *
     * @var string
     */
    public $eventId;

    /**
     * @example 192.xxx.xxx.xxx【100GE2/2/0/8】:linkDown
     *
     * @var string
     */
    public $eventObjectId;

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
        'eventId'          => 'EventId',
        'eventObjectId'    => 'EventObjectId',
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
        if (null !== $this->eventId) {
            $res['EventId'] = $this->eventId;
        }
        if (null !== $this->eventObjectId) {
            $res['EventObjectId'] = $this->eventObjectId;
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
     * @return list_
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
        if (isset($map['EventId'])) {
            $model->eventId = $map['EventId'];
        }
        if (isset($map['EventObjectId'])) {
            $model->eventObjectId = $map['EventObjectId'];
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
