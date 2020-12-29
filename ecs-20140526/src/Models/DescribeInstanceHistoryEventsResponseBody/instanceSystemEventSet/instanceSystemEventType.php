<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInstanceHistoryEventsResponseBody\instanceSystemEventSet;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInstanceHistoryEventsResponseBody\instanceSystemEventSet\instanceSystemEventType\eventCycleStatus;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInstanceHistoryEventsResponseBody\instanceSystemEventSet\instanceSystemEventType\eventType;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInstanceHistoryEventsResponseBody\instanceSystemEventSet\instanceSystemEventType\extendedAttribute;
use AlibabaCloud\Tea\Model;

class instanceSystemEventType extends Model
{
    /**
     * @var string
     */
    public $eventId;

    /**
     * @var string
     */
    public $eventPublishTime;

    /**
     * @var string
     */
    public $eventFinishTime;

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
    public $instanceId;

    /**
     * @var string
     */
    public $reason;

    /**
     * @var eventCycleStatus
     */
    public $eventCycleStatus;
    protected $_name = [
        'eventId'           => 'EventId',
        'eventPublishTime'  => 'EventPublishTime',
        'eventFinishTime'   => 'EventFinishTime',
        'impactLevel'       => 'ImpactLevel',
        'eventType'         => 'EventType',
        'extendedAttribute' => 'ExtendedAttribute',
        'notBefore'         => 'NotBefore',
        'instanceId'        => 'InstanceId',
        'reason'            => 'Reason',
        'eventCycleStatus'  => 'EventCycleStatus',
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
        if (null !== $this->eventPublishTime) {
            $res['EventPublishTime'] = $this->eventPublishTime;
        }
        if (null !== $this->eventFinishTime) {
            $res['EventFinishTime'] = $this->eventFinishTime;
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
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
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
     * @return instanceSystemEventType
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EventId'])) {
            $model->eventId = $map['EventId'];
        }
        if (isset($map['EventPublishTime'])) {
            $model->eventPublishTime = $map['EventPublishTime'];
        }
        if (isset($map['EventFinishTime'])) {
            $model->eventFinishTime = $map['EventFinishTime'];
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
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
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
