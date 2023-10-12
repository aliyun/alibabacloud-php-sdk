<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cmn\V20200825\Models;

use AlibabaCloud\Tea\Model;

class ListNotificationHistoriesRequest extends Model
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
     * @example app-gh6b3a8yxtkb86yy
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
     * @description 查询结束时间戳
     *
     * @example 1659930240
     *
     * @var int
     */
    public $end;

    /**
     * @description 事件id
     *
     * @example e-mkl2gnr3am3amlzz
     *
     * @var string
     */
    public $eventItemId;

    /**
     * @description 实例ID
     *
     * @example cmn-cn-tl3267yvz03
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example 10
     *
     * @var int
     */
    public $maxResults;

    /**
     * @description 发送内容
     *
     * @example Alarm
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
     * @example 1
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description 通知组id
     *
     * @example n-yqqqknft7kzemgwe
     *
     * @var string
     */
    public $notificationGroupId;

    /**
     * @description 发送方式
     *
     * @example DING_GROUP
     *
     * @var string
     */
    public $notificationMode;

    /**
     * @description 物理空间ID
     *
     * @example space-h47sn4e6d59n5ooh
     *
     * @var string
     */
    public $physicalSpaceId;

    /**
     * @description 端口集ID
     *
     * @example p-y12angok0gf881n1
     *
     * @var string
     */
    public $portCollectionId;

    /**
     * @description 查询开始时间戳
     *
     * @example 1667797440
     *
     * @var int
     */
    public $start;

    /**
     * @description 发送状态
     *
     * @example SUCCESS
     *
     * @var string
     */
    public $status;

    /**
     * @example SINGLE
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'aggregateDataId'     => 'AggregateDataId',
        'alarmStatus'         => 'AlarmStatus',
        'appId'               => 'AppId',
        'dedicatedLineId'     => 'DedicatedLineId',
        'deviceId'            => 'DeviceId',
        'end'                 => 'End',
        'eventItemId'         => 'EventItemId',
        'instanceId'          => 'InstanceId',
        'maxResults'          => 'MaxResults',
        'message'             => 'Message',
        'monitorItemId'       => 'MonitorItemId',
        'nextToken'           => 'NextToken',
        'notificationGroupId' => 'NotificationGroupId',
        'notificationMode'    => 'NotificationMode',
        'physicalSpaceId'     => 'PhysicalSpaceId',
        'portCollectionId'    => 'PortCollectionId',
        'start'               => 'Start',
        'status'              => 'Status',
        'type'                => 'Type',
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
        if (null !== $this->end) {
            $res['End'] = $this->end;
        }
        if (null !== $this->eventItemId) {
            $res['EventItemId'] = $this->eventItemId;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->monitorItemId) {
            $res['MonitorItemId'] = $this->monitorItemId;
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->notificationGroupId) {
            $res['NotificationGroupId'] = $this->notificationGroupId;
        }
        if (null !== $this->notificationMode) {
            $res['NotificationMode'] = $this->notificationMode;
        }
        if (null !== $this->physicalSpaceId) {
            $res['PhysicalSpaceId'] = $this->physicalSpaceId;
        }
        if (null !== $this->portCollectionId) {
            $res['PortCollectionId'] = $this->portCollectionId;
        }
        if (null !== $this->start) {
            $res['Start'] = $this->start;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListNotificationHistoriesRequest
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
        if (isset($map['End'])) {
            $model->end = $map['End'];
        }
        if (isset($map['EventItemId'])) {
            $model->eventItemId = $map['EventItemId'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['MonitorItemId'])) {
            $model->monitorItemId = $map['MonitorItemId'];
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['NotificationGroupId'])) {
            $model->notificationGroupId = $map['NotificationGroupId'];
        }
        if (isset($map['NotificationMode'])) {
            $model->notificationMode = $map['NotificationMode'];
        }
        if (isset($map['PhysicalSpaceId'])) {
            $model->physicalSpaceId = $map['PhysicalSpaceId'];
        }
        if (isset($map['PortCollectionId'])) {
            $model->portCollectionId = $map['PortCollectionId'];
        }
        if (isset($map['Start'])) {
            $model->start = $map['Start'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
