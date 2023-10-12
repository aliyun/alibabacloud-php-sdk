<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cmn\V20200825\Models;

use AlibabaCloud\Tea\Model;

class ListLogsRequest extends Model
{
    /**
     * @example WARNING
     *
     * @var string
     */
    public $alarmStatus;

    /**
     * @example hostname
     *
     * @var string
     */
    public $content;

    /**
     * @example device-134e3e2vf
     *
     * @var string
     */
    public $deviceId;

    /**
     * @example 1669686840
     *
     * @var int
     */
    public $end;

    /**
     * @example cmn-cn-13ef013e
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example SYSLOG
     *
     * @var string
     */
    public $logType;

    /**
     * @example 10
     *
     * @var int
     */
    public $maxResults;

    /**
     * @example 1
     *
     * @var string
     */
    public $nextToken;

    /**
     * @example ReceiveTime desc
     *
     * @var string
     */
    public $sort;

    /**
     * @example 1669686840
     *
     * @var int
     */
    public $start;
    protected $_name = [
        'alarmStatus' => 'AlarmStatus',
        'content'     => 'Content',
        'deviceId'    => 'DeviceId',
        'end'         => 'End',
        'instanceId'  => 'InstanceId',
        'logType'     => 'LogType',
        'maxResults'  => 'MaxResults',
        'nextToken'   => 'NextToken',
        'sort'        => 'Sort',
        'start'       => 'Start',
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
        if (null !== $this->content) {
            $res['Content'] = $this->content;
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
        if (null !== $this->logType) {
            $res['LogType'] = $this->logType;
        }
        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->sort) {
            $res['Sort'] = $this->sort;
        }
        if (null !== $this->start) {
            $res['Start'] = $this->start;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListLogsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AlarmStatus'])) {
            $model->alarmStatus = $map['AlarmStatus'];
        }
        if (isset($map['Content'])) {
            $model->content = $map['Content'];
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
        if (isset($map['LogType'])) {
            $model->logType = $map['LogType'];
        }
        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['Sort'])) {
            $model->sort = $map['Sort'];
        }
        if (isset($map['Start'])) {
            $model->start = $map['Start'];
        }

        return $model;
    }
}
