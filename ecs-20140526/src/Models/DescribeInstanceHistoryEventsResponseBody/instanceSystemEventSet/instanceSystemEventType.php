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
     * @description The lifecycle state of the system event.
     *
     * @var eventCycleStatus
     */
    public $eventCycleStatus;

    /**
     * @description The time when the system event ended. The time follows the [ISO 8601](~~25696~~) standard in the yyyy-MM-ddTHH:mm:ssZ format. The time is displayed in UTC.
     *
     * @example 2017-12-01T06:35:31Z
     *
     * @var string
     */
    public $eventFinishTime;

    /**
     * @description The ID of the system event.
     *
     * @example e-uf64yvznlao4jl2c****
     *
     * @var string
     */
    public $eventId;

    /**
     * @description The time when the system event was published. The time follows the [ISO 8601](~~25696~~) standard in the yyyy-MM-ddTHH:mm:ssZ format. The time is displayed in UTC.
     *
     * @example 2017-11-30T06:32:31Z
     *
     * @var string
     */
    public $eventPublishTime;

    /**
     * @description The type of the system event.
     *
     * @var eventType
     */
    public $eventType;

    /**
     * @description The extended attribute of the system event.
     *
     * @var extendedAttribute
     */
    public $extendedAttribute;

    /**
     * @description The impact level of the system event.
     *
     * @example 100
     *
     * @var string
     */
    public $impactLevel;

    /**
     * @description The ID of the instance that you query.
     *
     * @example i-uf678mass4zvr9n1****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The scheduled start time of the system event. The time follows the [ISO 8601](~~25696~~) standard in the yyyy-MM-ddTHH:mm:ssZ format. The time is displayed in UTC.
     *
     * @example 2017-12-06T00:00:00Z
     *
     * @var string
     */
    public $notBefore;

    /**
     * @description The reason why the system event was scheduled.
     *
     * @example System maintenance is scheduled due to ***.
     *
     * @var string
     */
    public $reason;

    /**
     * @description The type of a resource. Valid values:
     *
     *   instance: ECS instance.
     *   ddh: dedicated host.
     *   managehost: physical machine in a smart hosting pool.
     *
     * @example instance
     *
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
        'resourceType'      => 'ResourceType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->eventCycleStatus) {
            $res['EventCycleStatus'] = null !== $this->eventCycleStatus ? $this->eventCycleStatus->toMap() : null;
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
            $res['EventType'] = null !== $this->eventType ? $this->eventType->toMap() : null;
        }
        if (null !== $this->extendedAttribute) {
            $res['ExtendedAttribute'] = null !== $this->extendedAttribute ? $this->extendedAttribute->toMap() : null;
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
        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
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
        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
        }

        return $model;
    }
}
