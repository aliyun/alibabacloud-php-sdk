<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInstanceHistoryEventsResponseBody\instanceSystemEventSet;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInstanceHistoryEventsResponseBody\instanceSystemEventSet\instanceSystemEventType\eventCycleStatus;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInstanceHistoryEventsResponseBody\instanceSystemEventSet\instanceSystemEventType\eventType;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInstanceHistoryEventsResponseBody\instanceSystemEventSet\instanceSystemEventType\extendedAttribute;

class instanceSystemEventType extends Model
{
    /**
     * @var eventCycleStatus
     */
    public $eventCycleStatus;
    /**
     * @var string
     */
    public $eventFinishTime;
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
    public $instanceId;
    /**
     * @var string
     */
    public $notBefore;
    /**
     * @var string
     */
    public $reason;
    /**
     * @var string
     */
    public $reasonCode;
    /**
     * @var string
     */
    public $resourceType;
    protected $_name = [
        'eventCycleStatus'  => 'EventCycleStatus',
        'eventFinishTime'   => 'EventFinishTime',
        'eventId'           => 'EventId',
        'eventPublishTime'  => 'EventPublishTime',
        'eventType'         => 'EventType',
        'extendedAttribute' => 'ExtendedAttribute',
        'impactLevel'       => 'ImpactLevel',
        'instanceId'        => 'InstanceId',
        'notBefore'         => 'NotBefore',
        'reason'            => 'Reason',
        'reasonCode'        => 'ReasonCode',
        'resourceType'      => 'ResourceType',
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

        if (null !== $this->eventFinishTime) {
            $res['EventFinishTime'] = $this->eventFinishTime;
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

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->notBefore) {
            $res['NotBefore'] = $this->notBefore;
        }

        if (null !== $this->reason) {
            $res['Reason'] = $this->reason;
        }

        if (null !== $this->reasonCode) {
            $res['ReasonCode'] = $this->reasonCode;
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
        if (isset($map['EventCycleStatus'])) {
            $model->eventCycleStatus = eventCycleStatus::fromMap($map['EventCycleStatus']);
        }

        if (isset($map['EventFinishTime'])) {
            $model->eventFinishTime = $map['EventFinishTime'];
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

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['NotBefore'])) {
            $model->notBefore = $map['NotBefore'];
        }

        if (isset($map['Reason'])) {
            $model->reason = $map['Reason'];
        }

        if (isset($map['ReasonCode'])) {
            $model->reasonCode = $map['ReasonCode'];
        }

        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
        }

        return $model;
    }
}
