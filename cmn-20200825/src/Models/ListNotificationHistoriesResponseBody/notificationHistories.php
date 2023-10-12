<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cmn\V20200825\Models\ListNotificationHistoriesResponseBody;

use AlibabaCloud\Tea\Model;

class notificationHistories extends Model
{
    /**
     * @example a-52gmqniln3u53n32
     *
     * @var string
     */
    public $aggregateDataId;

    /**
     * @description 监控状态
     *
     * @example WARNING
     *
     * @var string
     */
    public $alarmStatus;

    /**
     * @description 应用ID
     *
     * @example a-52gmqniln3u53n32
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
     * @example alarm content
     *
     * @var string
     */
    public $message;

    /**
     * @example m-22ut5sn54o35wsz6
     *
     * @var string
     */
    public $monitorItemId;

    /**
     * @example n-22ut5sn54o35wsz6
     *
     * @var string
     */
    public $notificationGroupId;

    /**
     * @example Notification Group
     *
     * @var string
     */
    public $notificationGroupName;

    /**
     * @example DING_GROUP
     *
     * @var string
     */
    public $notificationMode;

    /**
     * @example OK
     *
     * @var string
     */
    public $output;

    /**
     * @description 端口集ID
     *
     * @example p-52gmqniln3u53n32
     *
     * @var string
     */
    public $portCollectionId;

    /**
     * @example SUCCESS
     *
     * @var string
     */
    public $status;

    /**
     * @example 2021-01-01 00:01:00
     *
     * @var string
     */
    public $time;
    protected $_name = [
        'aggregateDataId'       => 'AggregateDataId',
        'alarmStatus'           => 'AlarmStatus',
        'appId'                 => 'AppId',
        'dedicatedLineId'       => 'DedicatedLineId',
        'deviceId'              => 'DeviceId',
        'message'               => 'Message',
        'monitorItemId'         => 'MonitorItemId',
        'notificationGroupId'   => 'NotificationGroupId',
        'notificationGroupName' => 'NotificationGroupName',
        'notificationMode'      => 'NotificationMode',
        'output'                => 'Output',
        'portCollectionId'      => 'PortCollectionId',
        'status'                => 'Status',
        'time'                  => 'Time',
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
        if (null !== $this->alarmStatus) {
            $res['AlarmStatus'] = $this->alarmStatus;
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
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->monitorItemId) {
            $res['MonitorItemId'] = $this->monitorItemId;
        }
        if (null !== $this->notificationGroupId) {
            $res['NotificationGroupId'] = $this->notificationGroupId;
        }
        if (null !== $this->notificationGroupName) {
            $res['NotificationGroupName'] = $this->notificationGroupName;
        }
        if (null !== $this->notificationMode) {
            $res['NotificationMode'] = $this->notificationMode;
        }
        if (null !== $this->output) {
            $res['Output'] = $this->output;
        }
        if (null !== $this->portCollectionId) {
            $res['PortCollectionId'] = $this->portCollectionId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->time) {
            $res['Time'] = $this->time;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return notificationHistories
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AggregateDataId'])) {
            $model->aggregateDataId = $map['AggregateDataId'];
        }
        if (isset($map['AlarmStatus'])) {
            $model->alarmStatus = $map['AlarmStatus'];
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
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['MonitorItemId'])) {
            $model->monitorItemId = $map['MonitorItemId'];
        }
        if (isset($map['NotificationGroupId'])) {
            $model->notificationGroupId = $map['NotificationGroupId'];
        }
        if (isset($map['NotificationGroupName'])) {
            $model->notificationGroupName = $map['NotificationGroupName'];
        }
        if (isset($map['NotificationMode'])) {
            $model->notificationMode = $map['NotificationMode'];
        }
        if (isset($map['Output'])) {
            $model->output = $map['Output'];
        }
        if (isset($map['PortCollectionId'])) {
            $model->portCollectionId = $map['PortCollectionId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Time'])) {
            $model->time = $map['Time'];
        }

        return $model;
    }
}
