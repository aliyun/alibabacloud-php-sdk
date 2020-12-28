<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInstancesFullStatusResponseBody\instanceFullStatusSet;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInstancesFullStatusResponseBody\instanceFullStatusSet\scheduledSystemEventSet\eventCycleStatus;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInstancesFullStatusResponseBody\instanceFullStatusSet\scheduledSystemEventSet\eventType;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInstancesFullStatusResponseBody\instanceFullStatusSet\scheduledSystemEventSet\extendedAttribute;
use AlibabaCloud\Tea\Model;

class scheduledSystemEventSet extends Model
{
    /**
     * @var string
     */
    public $eventPublishTime;

    /**
     * @var string
     */
    public $eventId;

    /**
     * @var string
     */
    public $impactLevel;

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
    public $notBefore;

    /**
     * @var string
     */
    public $reason;

    /**
     * @var eventCycleStatus
     */
    public $eventCycleStatus;
    protected $_name = [
        'eventPublishTime'  => 'EventPublishTime',
        'eventId'           => 'EventId',
        'impactLevel'       => 'ImpactLevel',
        'eventType'         => 'EventType',
        'extendedAttribute' => 'ExtendedAttribute',
        'notBefore'         => 'NotBefore',
        'reason'            => 'Reason',
        'eventCycleStatus'  => 'EventCycleStatus',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->eventPublishTime) {
            $res['EventPublishTime'] = $this->eventPublishTime;
        }
        if (null !== $this->eventId) {
            $res['EventId'] = $this->eventId;
        }
        if (null !== $this->impactLevel) {
            $res['ImpactLevel'] = $this->impactLevel;
        }
        if (null !== $this->eventType) {
            $res['EventType'] = null !== $this->eventType ? $this->eventType->toMap() : null;
        }
        if (null !== $this->extendedAttribute) {
            $res['ExtendedAttribute'] = null !== $this->extendedAttribute ? $this->extendedAttribute->toMap() : null;
        }
        if (null !== $this->notBefore) {
            $res['NotBefore'] = $this->notBefore;
        }
        if (null !== $this->reason) {
            $res['Reason'] = $this->reason;
        }
        if (null !== $this->eventCycleStatus) {
            $res['EventCycleStatus'] = null !== $this->eventCycleStatus ? $this->eventCycleStatus->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return scheduledSystemEventSet
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EventPublishTime'])) {
            $model->eventPublishTime = $map['EventPublishTime'];
        }
        if (isset($map['EventId'])) {
            $model->eventId = $map['EventId'];
        }
        if (isset($map['ImpactLevel'])) {
            $model->impactLevel = $map['ImpactLevel'];
        }
        if (isset($map['EventType'])) {
            $model->eventType = eventType::fromMap($map['EventType']);
        }
        if (isset($map['ExtendedAttribute'])) {
            $model->extendedAttribute = extendedAttribute::fromMap($map['ExtendedAttribute']);
        }
        if (isset($map['NotBefore'])) {
            $model->notBefore = $map['NotBefore'];
        }
        if (isset($map['Reason'])) {
            $model->reason = $map['Reason'];
        }
        if (isset($map['EventCycleStatus'])) {
            $model->eventCycleStatus = eventCycleStatus::fromMap($map['EventCycleStatus']);
        }

        return $model;
    }
}
