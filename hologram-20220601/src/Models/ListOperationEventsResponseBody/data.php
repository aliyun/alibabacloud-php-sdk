<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hologram\V20220601\Models\ListOperationEventsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Hologram\V20220601\Models\ListOperationEventsResponseBody\data\followerInstances;

class data extends Model
{
    /**
     * @var bool
     */
    public $cancelable;

    /**
     * @var bool
     */
    public $changeScheduleTime;

    /**
     * @var string
     */
    public $detail;

    /**
     * @var string
     */
    public $eventName;

    /**
     * @var string
     */
    public $eventType;

    /**
     * @var followerInstances[]
     */
    public $followerInstances;

    /**
     * @var string
     */
    public $id;

    /**
     * @var string
     */
    public $instanceName;

    /**
     * @var string
     */
    public $maintainWindow;

    /**
     * @var string
     */
    public $resourceId;

    /**
     * @var string
     */
    public $scheduleTime;

    /**
     * @var string
     */
    public $state;

    /**
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'cancelable' => 'Cancelable',
        'changeScheduleTime' => 'ChangeScheduleTime',
        'detail' => 'Detail',
        'eventName' => 'EventName',
        'eventType' => 'EventType',
        'followerInstances' => 'FollowerInstances',
        'id' => 'Id',
        'instanceName' => 'InstanceName',
        'maintainWindow' => 'MaintainWindow',
        'resourceId' => 'ResourceId',
        'scheduleTime' => 'ScheduleTime',
        'state' => 'State',
        'zoneId' => 'ZoneId',
    ];

    public function validate()
    {
        if (\is_array($this->followerInstances)) {
            Model::validateArray($this->followerInstances);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->cancelable) {
            $res['Cancelable'] = $this->cancelable;
        }

        if (null !== $this->changeScheduleTime) {
            $res['ChangeScheduleTime'] = $this->changeScheduleTime;
        }

        if (null !== $this->detail) {
            $res['Detail'] = $this->detail;
        }

        if (null !== $this->eventName) {
            $res['EventName'] = $this->eventName;
        }

        if (null !== $this->eventType) {
            $res['EventType'] = $this->eventType;
        }

        if (null !== $this->followerInstances) {
            if (\is_array($this->followerInstances)) {
                $res['FollowerInstances'] = [];
                $n1 = 0;
                foreach ($this->followerInstances as $item1) {
                    $res['FollowerInstances'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->instanceName) {
            $res['InstanceName'] = $this->instanceName;
        }

        if (null !== $this->maintainWindow) {
            $res['MaintainWindow'] = $this->maintainWindow;
        }

        if (null !== $this->resourceId) {
            $res['ResourceId'] = $this->resourceId;
        }

        if (null !== $this->scheduleTime) {
            $res['ScheduleTime'] = $this->scheduleTime;
        }

        if (null !== $this->state) {
            $res['State'] = $this->state;
        }

        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
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
        if (isset($map['Cancelable'])) {
            $model->cancelable = $map['Cancelable'];
        }

        if (isset($map['ChangeScheduleTime'])) {
            $model->changeScheduleTime = $map['ChangeScheduleTime'];
        }

        if (isset($map['Detail'])) {
            $model->detail = $map['Detail'];
        }

        if (isset($map['EventName'])) {
            $model->eventName = $map['EventName'];
        }

        if (isset($map['EventType'])) {
            $model->eventType = $map['EventType'];
        }

        if (isset($map['FollowerInstances'])) {
            if (!empty($map['FollowerInstances'])) {
                $model->followerInstances = [];
                $n1 = 0;
                foreach ($map['FollowerInstances'] as $item1) {
                    $model->followerInstances[$n1] = followerInstances::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['InstanceName'])) {
            $model->instanceName = $map['InstanceName'];
        }

        if (isset($map['MaintainWindow'])) {
            $model->maintainWindow = $map['MaintainWindow'];
        }

        if (isset($map['ResourceId'])) {
            $model->resourceId = $map['ResourceId'];
        }

        if (isset($map['ScheduleTime'])) {
            $model->scheduleTime = $map['ScheduleTime'];
        }

        if (isset($map['State'])) {
            $model->state = $map['State'];
        }

        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }

        return $model;
    }
}
