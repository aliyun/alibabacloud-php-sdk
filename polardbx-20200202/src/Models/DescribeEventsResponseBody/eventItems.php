<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardbx\V20200202\Models\DescribeEventsResponseBody;

use AlibabaCloud\Tea\Model;

class eventItems extends Model
{
    /**
     * @example 50421290
     *
     * @var int
     */
    public $eventId;

    /**
     * @example ModifySecurityIps
     *
     * @var string
     */
    public $eventName;

    /**
     * @example {\"Domain\": \"rds-cn-hangzhou.aliyuncs.com\"}
     *
     * @var string
     */
    public $eventPayload;

    /**
     * @example FROM_USER
     *
     * @var string
     */
    public $eventReason;

    /**
     * @example 2021-10-15T06:39:49Z
     *
     * @var string
     */
    public $eventRecordTime;

    /**
     * @example 2021-10-15T06:35:00Z
     *
     * @var string
     */
    public $eventTime;

    /**
     * @example SecurityManagement
     *
     * @var string
     */
    public $eventType;

    /**
     * @example USRE
     *
     * @var string
     */
    public $eventUserType;

    /**
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @example px-bp1v8udesc89g156g
     *
     * @var string
     */
    public $resourceName;

    /**
     * @example instance
     *
     * @var string
     */
    public $resourceType;
    protected $_name = [
        'eventId'         => 'EventId',
        'eventName'       => 'EventName',
        'eventPayload'    => 'EventPayload',
        'eventReason'     => 'EventReason',
        'eventRecordTime' => 'EventRecordTime',
        'eventTime'       => 'EventTime',
        'eventType'       => 'EventType',
        'eventUserType'   => 'EventUserType',
        'regionId'        => 'RegionId',
        'resourceName'    => 'ResourceName',
        'resourceType'    => 'ResourceType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->eventId) {
            $res['EventId'] = $this->eventId;
        }
        if (null !== $this->eventName) {
            $res['EventName'] = $this->eventName;
        }
        if (null !== $this->eventPayload) {
            $res['EventPayload'] = $this->eventPayload;
        }
        if (null !== $this->eventReason) {
            $res['EventReason'] = $this->eventReason;
        }
        if (null !== $this->eventRecordTime) {
            $res['EventRecordTime'] = $this->eventRecordTime;
        }
        if (null !== $this->eventTime) {
            $res['EventTime'] = $this->eventTime;
        }
        if (null !== $this->eventType) {
            $res['EventType'] = $this->eventType;
        }
        if (null !== $this->eventUserType) {
            $res['EventUserType'] = $this->eventUserType;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resourceName) {
            $res['ResourceName'] = $this->resourceName;
        }
        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return eventItems
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EventId'])) {
            $model->eventId = $map['EventId'];
        }
        if (isset($map['EventName'])) {
            $model->eventName = $map['EventName'];
        }
        if (isset($map['EventPayload'])) {
            $model->eventPayload = $map['EventPayload'];
        }
        if (isset($map['EventReason'])) {
            $model->eventReason = $map['EventReason'];
        }
        if (isset($map['EventRecordTime'])) {
            $model->eventRecordTime = $map['EventRecordTime'];
        }
        if (isset($map['EventTime'])) {
            $model->eventTime = $map['EventTime'];
        }
        if (isset($map['EventType'])) {
            $model->eventType = $map['EventType'];
        }
        if (isset($map['EventUserType'])) {
            $model->eventUserType = $map['EventUserType'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResourceName'])) {
            $model->resourceName = $map['ResourceName'];
        }
        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
        }

        return $model;
    }
}
