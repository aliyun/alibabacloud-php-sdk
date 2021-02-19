<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ess\V20140828\Models\DescribeScheduledTasksResponseBody\scheduledTasks;

use AlibabaCloud\Tea\Model;

class scheduledTask extends Model
{
    /**
     * @var bool
     */
    public $taskEnabled;

    /**
     * @var string
     */
    public $recurrenceValue;

    /**
     * @var int
     */
    public $maxValue;

    /**
     * @var string
     */
    public $recurrenceType;

    /**
     * @var string
     */
    public $scheduledTaskName;

    /**
     * @var string
     */
    public $recurrenceEndTime;

    /**
     * @var string
     */
    public $scheduledTaskId;

    /**
     * @var int
     */
    public $desiredCapacity;

    /**
     * @var int
     */
    public $minValue;

    /**
     * @var string
     */
    public $scalingGroupId;

    /**
     * @var int
     */
    public $launchExpirationTime;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $scheduledAction;

    /**
     * @var string
     */
    public $launchTime;
    protected $_name = [
        'taskEnabled'          => 'TaskEnabled',
        'recurrenceValue'      => 'RecurrenceValue',
        'maxValue'             => 'MaxValue',
        'recurrenceType'       => 'RecurrenceType',
        'scheduledTaskName'    => 'ScheduledTaskName',
        'recurrenceEndTime'    => 'RecurrenceEndTime',
        'scheduledTaskId'      => 'ScheduledTaskId',
        'desiredCapacity'      => 'DesiredCapacity',
        'minValue'             => 'MinValue',
        'scalingGroupId'       => 'ScalingGroupId',
        'launchExpirationTime' => 'LaunchExpirationTime',
        'description'          => 'Description',
        'scheduledAction'      => 'ScheduledAction',
        'launchTime'           => 'LaunchTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->taskEnabled) {
            $res['TaskEnabled'] = $this->taskEnabled;
        }
        if (null !== $this->recurrenceValue) {
            $res['RecurrenceValue'] = $this->recurrenceValue;
        }
        if (null !== $this->maxValue) {
            $res['MaxValue'] = $this->maxValue;
        }
        if (null !== $this->recurrenceType) {
            $res['RecurrenceType'] = $this->recurrenceType;
        }
        if (null !== $this->scheduledTaskName) {
            $res['ScheduledTaskName'] = $this->scheduledTaskName;
        }
        if (null !== $this->recurrenceEndTime) {
            $res['RecurrenceEndTime'] = $this->recurrenceEndTime;
        }
        if (null !== $this->scheduledTaskId) {
            $res['ScheduledTaskId'] = $this->scheduledTaskId;
        }
        if (null !== $this->desiredCapacity) {
            $res['DesiredCapacity'] = $this->desiredCapacity;
        }
        if (null !== $this->minValue) {
            $res['MinValue'] = $this->minValue;
        }
        if (null !== $this->scalingGroupId) {
            $res['ScalingGroupId'] = $this->scalingGroupId;
        }
        if (null !== $this->launchExpirationTime) {
            $res['LaunchExpirationTime'] = $this->launchExpirationTime;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->scheduledAction) {
            $res['ScheduledAction'] = $this->scheduledAction;
        }
        if (null !== $this->launchTime) {
            $res['LaunchTime'] = $this->launchTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return scheduledTask
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TaskEnabled'])) {
            $model->taskEnabled = $map['TaskEnabled'];
        }
        if (isset($map['RecurrenceValue'])) {
            $model->recurrenceValue = $map['RecurrenceValue'];
        }
        if (isset($map['MaxValue'])) {
            $model->maxValue = $map['MaxValue'];
        }
        if (isset($map['RecurrenceType'])) {
            $model->recurrenceType = $map['RecurrenceType'];
        }
        if (isset($map['ScheduledTaskName'])) {
            $model->scheduledTaskName = $map['ScheduledTaskName'];
        }
        if (isset($map['RecurrenceEndTime'])) {
            $model->recurrenceEndTime = $map['RecurrenceEndTime'];
        }
        if (isset($map['ScheduledTaskId'])) {
            $model->scheduledTaskId = $map['ScheduledTaskId'];
        }
        if (isset($map['DesiredCapacity'])) {
            $model->desiredCapacity = $map['DesiredCapacity'];
        }
        if (isset($map['MinValue'])) {
            $model->minValue = $map['MinValue'];
        }
        if (isset($map['ScalingGroupId'])) {
            $model->scalingGroupId = $map['ScalingGroupId'];
        }
        if (isset($map['LaunchExpirationTime'])) {
            $model->launchExpirationTime = $map['LaunchExpirationTime'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['ScheduledAction'])) {
            $model->scheduledAction = $map['ScheduledAction'];
        }
        if (isset($map['LaunchTime'])) {
            $model->launchTime = $map['LaunchTime'];
        }

        return $model;
    }
}
