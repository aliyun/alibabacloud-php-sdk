<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInstancesFullStatusResponseBody\instanceFullStatusSet\instanceFullStatusType\scheduledSystemEventSet;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInstancesFullStatusResponseBody\instanceFullStatusSet\instanceFullStatusType\scheduledSystemEventSet\scheduledSystemEventType\eventCycleStatus;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInstancesFullStatusResponseBody\instanceFullStatusSet\instanceFullStatusType\scheduledSystemEventSet\scheduledSystemEventType\eventType;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInstancesFullStatusResponseBody\instanceFullStatusSet\instanceFullStatusType\scheduledSystemEventSet\scheduledSystemEventType\extendedAttribute;

class scheduledSystemEventType extends Model
{
    /**
     * @var eventCycleStatus
     */
    public $eventCycleStatus;

    /**
     * @var string
     */
    public $eventId;

    /**
     * @var string
     */
    public $eventPublishTime;

    /**
     * @var eventType
     */
    public $eventType;

    /**
     * @var extendedAttribute
     */
    public $extendedAttribute;

    /**
     * @var string
     */
    public $impactLevel;

    /**
     * @var string
     */
    public $notBefore;

    /**
     * @var string
     */
    public $reason;
    protected $_name = [
        'eventCycleStatus' => 'EventCycleStatus',
        'eventId' => 'EventId',
        'eventPublishTime' => 'EventPublishTime',
        'eventType' => 'EventType',
        'extendedAttribute' => 'ExtendedAttribute',
        'impactLevel' => 'ImpactLevel',
        'notBefore' => 'NotBefore',
        'reason' => 'Reason',
    ];

    public function validate()
    {
        if (null !== $this->eventCycleStatus) {
            $this->eventCycleStatus->validate();
        }
        if (null !== $this->eventType) {
            $this->eventType->validate();
        }
        if (null !== $this->extendedAttribute) {
            $this->extendedAttribute->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->eventCycleStatus) {
            $res['EventCycleStatus'] = null !== $this->eventCycleStatus ? $this->eventCycleStatus->toArray($noStream) : $this->eventCycleStatus;
        }

        if (null !== $this->eventId) {
            $res['EventId'] = $this->eventId;
        }

        if (null !== $this->eventPublishTime) {
            $res['EventPublishTime'] = $this->eventPublishTime;
        }

        if (null !== $this->eventType) {
            $res['EventType'] = null !== $this->eventType ? $this->eventType->toArray($noStream) : $this->eventType;
        }

        if (null !== $this->extendedAttribute) {
            $res['ExtendedAttribute'] = null !== $this->extendedAttribute ? $this->extendedAttribute->toArray($noStream) : $this->extendedAttribute;
        }

        if (null !== $this->impactLevel) {
            $res['ImpactLevel'] = $this->impactLevel;
        }

        if (null !== $this->notBefore) {
            $res['NotBefore'] = $this->notBefore;
        }

        if (null !== $this->reason) {
            $res['Reason'] = $this->reason;
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
        if (isset($map['EventCycleStatus'])) {
            $model->eventCycleStatus = eventCycleStatus::fromMap($map['EventCycleStatus']);
        }

        if (isset($map['EventId'])) {
            $model->eventId = $map['EventId'];
        }

        if (isset($map['EventPublishTime'])) {
            $model->eventPublishTime = $map['EventPublishTime'];
        }

        if (isset($map['EventType'])) {
            $model->eventType = eventType::fromMap($map['EventType']);
        }

        if (isset($map['ExtendedAttribute'])) {
            $model->extendedAttribute = extendedAttribute::fromMap($map['ExtendedAttribute']);
        }

        if (isset($map['ImpactLevel'])) {
            $model->impactLevel = $map['ImpactLevel'];
        }

        if (isset($map['NotBefore'])) {
            $model->notBefore = $map['NotBefore'];
        }

        if (isset($map['Reason'])) {
            $model->reason = $map['Reason'];
        }

        return $model;
    }
}
