<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cmn\V20200825\Models;

use AlibabaCloud\Tea\Model;

class ListEventsRequest extends Model
{
    /**
     * @example WARNING
     *
     * @var string
     */
    public $alarmStatus;

    /**
     * @example device-23ecvcvf0
     *
     * @var string
     */
    public $deviceId;

    /**
     * @example SYSLOG_EVENT
     *
     * @var string
     */
    public $eventType;

    /**
     * @example cmn-cn-xxxxx
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
     * @example 1
     *
     * @var string
     */
    public $nextToken;

    /**
     * @example space-dcfv9cof4e
     *
     * @var string
     */
    public $physicalSpaceId;
    protected $_name = [
        'alarmStatus'     => 'AlarmStatus',
        'deviceId'        => 'DeviceId',
        'eventType'       => 'EventType',
        'instanceId'      => 'InstanceId',
        'maxResults'      => 'MaxResults',
        'nextToken'       => 'NextToken',
        'physicalSpaceId' => 'PhysicalSpaceId',
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
        if (null !== $this->deviceId) {
            $res['DeviceId'] = $this->deviceId;
        }
        if (null !== $this->eventType) {
            $res['EventType'] = $this->eventType;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->physicalSpaceId) {
            $res['PhysicalSpaceId'] = $this->physicalSpaceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListEventsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AlarmStatus'])) {
            $model->alarmStatus = $map['AlarmStatus'];
        }
        if (isset($map['DeviceId'])) {
            $model->deviceId = $map['DeviceId'];
        }
        if (isset($map['EventType'])) {
            $model->eventType = $map['EventType'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['PhysicalSpaceId'])) {
            $model->physicalSpaceId = $map['PhysicalSpaceId'];
        }

        return $model;
    }
}
