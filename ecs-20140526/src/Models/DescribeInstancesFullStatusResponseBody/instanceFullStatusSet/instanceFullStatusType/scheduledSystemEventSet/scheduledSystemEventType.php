<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInstancesFullStatusResponseBody\instanceFullStatusSet\instanceFullStatusType\scheduledSystemEventSet;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInstancesFullStatusResponseBody\instanceFullStatusSet\instanceFullStatusType\scheduledSystemEventSet\scheduledSystemEventType\eventCycleStatus;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInstancesFullStatusResponseBody\instanceFullStatusSet\instanceFullStatusType\scheduledSystemEventSet\scheduledSystemEventType\eventType;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInstancesFullStatusResponseBody\instanceFullStatusSet\instanceFullStatusType\scheduledSystemEventSet\scheduledSystemEventType\extendedAttribute;
use AlibabaCloud\Tea\Model;

class scheduledSystemEventType extends Model
{
    /**
     * @description The state of the system event.
     *
     * @var eventCycleStatus
     */
    public $eventCycleStatus;

    /**
     * @description The system event ID.
     *
     * @example e-bp1hygp5b04o56l0****
     *
     * @var string
     */
    public $eventId;

    /**
     * @description The time when the system event was published. The time is displayed in UTC.
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
     * @description The extended attributes of system events generated for instances that have local disks attached.
     *
     * If the system event type is not one of the following types, this parameter is empty:
     *
     *   SystemMaintenance.StopAndRepair
     *   SystemMaintenance.CleanInactiveDisks
     *   SecurityPunish.Locked
     *   SecurityPunish.WebsiteBanned
     *   SystemUpgrade.Migrate
     *   SystemMaintenance.RebootAndIsolateErrorDisk
     *   SystemMaintenance.RebootAndReInitErrorDisk
     *   SystemMaintenance.ReInitErrorDisk
     *   SystemMaintenance.IsolateErrorDisk
     *
     * @var extendedAttribute
     */
    public $extendedAttribute;

    /**
     * @description The impact level of the system event.
     *
     * >  If the user is not in a whitelist, this parameter is empty.
     * @example 100
     *
     * @var string
     */
    public $impactLevel;

    /**
     * @description The scheduled time at which to execute the O\\&M task related to the system event. The time is displayed in UTC.
     *
     * @example 2017-12-07T00:00:00Z
     *
     * @var string
     */
    public $notBefore;

    /**
     * @description The reason why the system event was scheduled.
     *
     * >  If the exception cause is not detected, this parameter is empty.
     * @example A simulated event.
     *
     * @var string
     */
    public $reason;
    protected $_name = [
        'eventCycleStatus'  => 'EventCycleStatus',
        'eventId'           => 'EventId',
        'eventPublishTime'  => 'EventPublishTime',
        'eventType'         => 'EventType',
        'extendedAttribute' => 'ExtendedAttribute',
        'impactLevel'       => 'ImpactLevel',
        'notBefore'         => 'NotBefore',
        'reason'            => 'Reason',
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
        if (null !== $this->notBefore) {
            $res['NotBefore'] = $this->notBefore;
        }
        if (null !== $this->reason) {
            $res['Reason'] = $this->reason;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return scheduledSystemEventType
     */
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
