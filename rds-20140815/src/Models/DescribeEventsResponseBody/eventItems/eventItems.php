<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeEventsResponseBody\eventItems;

use AlibabaCloud\Tea\Model;

class eventItems extends Model
{
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
    public $eventRecordTime;

    /**
     * @var int
     */
    public $callerUid;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var int
     */
    public $eventId;

    /**
     * @var string
     */
    public $eventType;

    /**
     * @var string
     */
    public $resourceType;

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
    protected $_name = [
        'eventName'       => 'EventName',
        'eventTime'       => 'EventTime',
        'eventUserType'   => 'EventUserType',
        'eventRecordTime' => 'EventRecordTime',
        'callerUid'       => 'CallerUid',
        'regionId'        => 'RegionId',
        'eventId'         => 'EventId',
        'eventType'       => 'EventType',
        'resourceType'    => 'ResourceType',
        'eventPayload'    => 'EventPayload',
        'eventReason'     => 'EventReason',
        'resourceName'    => 'ResourceName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->eventName) {
            $res['EventName'] = $this->eventName;
        }
        if (null !== $this->eventTime) {
            $res['EventTime'] = $this->eventTime;
        }
        if (null !== $this->eventUserType) {
            $res['EventUserType'] = $this->eventUserType;
        }
        if (null !== $this->eventRecordTime) {
            $res['EventRecordTime'] = $this->eventRecordTime;
        }
        if (null !== $this->callerUid) {
            $res['CallerUid'] = $this->callerUid;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->eventId) {
            $res['EventId'] = $this->eventId;
        }
        if (null !== $this->eventType) {
            $res['EventType'] = $this->eventType;
        }
        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
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
        if (isset($map['EventName'])) {
            $model->eventName = $map['EventName'];
        }
        if (isset($map['EventTime'])) {
            $model->eventTime = $map['EventTime'];
        }
        if (isset($map['EventUserType'])) {
            $model->eventUserType = $map['EventUserType'];
        }
        if (isset($map['EventRecordTime'])) {
            $model->eventRecordTime = $map['EventRecordTime'];
        }
        if (isset($map['CallerUid'])) {
            $model->callerUid = $map['CallerUid'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['EventId'])) {
            $model->eventId = $map['EventId'];
        }
        if (isset($map['EventType'])) {
            $model->eventType = $map['EventType'];
        }
        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
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

        return $model;
    }
}
