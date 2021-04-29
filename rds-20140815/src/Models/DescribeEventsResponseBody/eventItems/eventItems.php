<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeEventsResponseBody\eventItems;

use AlibabaCloud\Tea\Model;

class eventItems extends Model
{
    /**
     * @var int
     */
    public $eventId;

    /**
     * @var string
     */
    public $eventName;

    /**
     * @var string
     */
    public $eventTime;

    /**
     * @var string
     */
    public $eventUserType;

    /**
     * @var string
     */
    public $resourceType;

    /**
     * @var string
     */
    public $eventType;

    /**
     * @var string
     */
    public $eventRecordTime;

    /**
     * @var string
     */
    public $eventPayload;

    /**
     * @var string
     */
    public $eventReason;

    /**
     * @var string
     */
    public $resourceName;

    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'eventId'         => 'EventId',
        'eventName'       => 'EventName',
        'eventTime'       => 'EventTime',
        'eventUserType'   => 'EventUserType',
        'resourceType'    => 'ResourceType',
        'eventType'       => 'EventType',
        'eventRecordTime' => 'EventRecordTime',
        'eventPayload'    => 'EventPayload',
        'eventReason'     => 'EventReason',
        'resourceName'    => 'ResourceName',
        'regionId'        => 'RegionId',
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
        if (null !== $this->eventTime) {
            $res['EventTime'] = $this->eventTime;
        }
        if (null !== $this->eventUserType) {
            $res['EventUserType'] = $this->eventUserType;
        }
        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
        }
        if (null !== $this->eventType) {
            $res['EventType'] = $this->eventType;
        }
        if (null !== $this->eventRecordTime) {
            $res['EventRecordTime'] = $this->eventRecordTime;
        }
        if (null !== $this->eventPayload) {
            $res['EventPayload'] = $this->eventPayload;
        }
        if (null !== $this->eventReason) {
            $res['EventReason'] = $this->eventReason;
        }
        if (null !== $this->resourceName) {
            $res['ResourceName'] = $this->resourceName;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
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
        if (isset($map['EventTime'])) {
            $model->eventTime = $map['EventTime'];
        }
        if (isset($map['EventUserType'])) {
            $model->eventUserType = $map['EventUserType'];
        }
        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
        }
        if (isset($map['EventType'])) {
            $model->eventType = $map['EventType'];
        }
        if (isset($map['EventRecordTime'])) {
            $model->eventRecordTime = $map['EventRecordTime'];
        }
        if (isset($map['EventPayload'])) {
            $model->eventPayload = $map['EventPayload'];
        }
        if (isset($map['EventReason'])) {
            $model->eventReason = $map['EventReason'];
        }
        if (isset($map['ResourceName'])) {
            $model->resourceName = $map['ResourceName'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
