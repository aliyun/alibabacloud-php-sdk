<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeLocalDiskRepairActivitiesResponseBody\localDiskRepairActivities\localDiskRepairActivity\instanceEvents;

use AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeLocalDiskRepairActivitiesResponseBody\localDiskRepairActivities\localDiskRepairActivity\instanceEvents\instanceEvent\eventCycleStatus;
use AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeLocalDiskRepairActivitiesResponseBody\localDiskRepairActivities\localDiskRepairActivity\instanceEvents\instanceEvent\eventType;
use AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeLocalDiskRepairActivitiesResponseBody\localDiskRepairActivities\localDiskRepairActivity\instanceEvents\instanceEvent\extendedAttribute;
use AlibabaCloud\Tea\Model;

class instanceEvent extends Model
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
    public $instanceId;

    /**
     * @var string
     */
    public $reason;
    protected $_name = [
        'eventCycleStatus'  => 'EventCycleStatus',
        'eventFinishTime'   => 'EventFinishTime',
        'eventId'           => 'EventId',
        'eventPublishTime'  => 'EventPublishTime',
        'eventType'         => 'EventType',
        'extendedAttribute' => 'ExtendedAttribute',
        'instanceId'        => 'InstanceId',
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
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->reason) {
            $res['Reason'] = $this->reason;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return instanceEvent
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
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['Reason'])) {
            $model->reason = $map['Reason'];
        }

        return $model;
    }
}
