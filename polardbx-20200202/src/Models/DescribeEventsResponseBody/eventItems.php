<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardbx\V20200202\Models\DescribeEventsResponseBody;

use AlibabaCloud\Dara\Model;

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
    public $eventPayload;
    /**
     * @var string
     */
    public $eventReason;
    /**
     * @var string
     */
    public $eventRecordTime;
    /**
     * @var string
     */
    public $eventTime;
    /**
     * @var string
     */
    public $eventType;
    /**
     * @var string
     */
    public $eventUserType;
    /**
     * @var string
     */
    public $regionId;
    /**
     * @var string
     */
    public $resourceName;
    /**
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
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
