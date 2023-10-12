<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cmn\V20200825\Models;

use AlibabaCloud\SDK\Cmn\V20200825\Models\Event\resourceDevice;
use AlibabaCloud\Tea\Model;

class Event extends Model
{
    /**
     * @example WARNING
     *
     * @var string
     */
    public $alarmStatus;

    /**
     * @example 10
     *
     * @var int
     */
    public $count;

    /**
     * @example 2021-10-01 01:00:00
     *
     * @var string
     */
    public $createTime;

    /**
     * @example device-dcfv2fob0g
     *
     * @var string
     */
    public $deviceId;

    /**
     * @example 探针掉线事件
     *
     * @var string
     */
    public $eventName;

    /**
     * @example xxx设备
     *
     * @var string
     */
    public $eventObject;

    /**
     * @example device-12345
     *
     * @var string
     */
    public $eventObjectId;

    /**
     * @example AGENT_EVENT
     *
     * @var string
     */
    public $eventType;

    /**
     * @example xxx事件发生，请关注
     *
     * @var string
     */
    public $message;

    /**
     * @var resourceDevice
     */
    public $resourceDevice;

    /**
     * @example temp-1dcvf2911wdc
     *
     * @var string
     */
    public $templateId;

    /**
     * @example 2021-10-01 01:00:00
     *
     * @var string
     */
    public $updateTime;
    protected $_name = [
        'alarmStatus'    => 'AlarmStatus',
        'count'          => 'Count',
        'createTime'     => 'CreateTime',
        'deviceId'       => 'DeviceId',
        'eventName'      => 'EventName',
        'eventObject'    => 'EventObject',
        'eventObjectId'  => 'EventObjectId',
        'eventType'      => 'EventType',
        'message'        => 'Message',
        'resourceDevice' => 'ResourceDevice',
        'templateId'     => 'TemplateId',
        'updateTime'     => 'UpdateTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->alarmStatus) {
            $res['AlarmStatus'] = $this->alarmStatus;
        }
        if (null !== $this->count) {
            $res['Count'] = $this->count;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->deviceId) {
            $res['DeviceId'] = $this->deviceId;
        }
        if (null !== $this->eventName) {
            $res['EventName'] = $this->eventName;
        }
        if (null !== $this->eventObject) {
            $res['EventObject'] = $this->eventObject;
        }
        if (null !== $this->eventObjectId) {
            $res['EventObjectId'] = $this->eventObjectId;
        }
        if (null !== $this->eventType) {
            $res['EventType'] = $this->eventType;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->resourceDevice) {
            $res['ResourceDevice'] = null !== $this->resourceDevice ? $this->resourceDevice->toMap() : null;
        }
        if (null !== $this->templateId) {
            $res['TemplateId'] = $this->templateId;
        }
        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return Event
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AlarmStatus'])) {
            $model->alarmStatus = $map['AlarmStatus'];
        }
        if (isset($map['Count'])) {
            $model->count = $map['Count'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['DeviceId'])) {
            $model->deviceId = $map['DeviceId'];
        }
        if (isset($map['EventName'])) {
            $model->eventName = $map['EventName'];
        }
        if (isset($map['EventObject'])) {
            $model->eventObject = $map['EventObject'];
        }
        if (isset($map['EventObjectId'])) {
            $model->eventObjectId = $map['EventObjectId'];
        }
        if (isset($map['EventType'])) {
            $model->eventType = $map['EventType'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['ResourceDevice'])) {
            $model->resourceDevice = resourceDevice::fromMap($map['ResourceDevice']);
        }
        if (isset($map['TemplateId'])) {
            $model->templateId = $map['TemplateId'];
        }
        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }

        return $model;
    }
}
