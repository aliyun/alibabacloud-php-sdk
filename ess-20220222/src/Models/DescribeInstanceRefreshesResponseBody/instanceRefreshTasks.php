<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ess\V20220222\Models\DescribeInstanceRefreshesResponseBody;

use AlibabaCloud\SDK\Ess\V20220222\Models\DescribeInstanceRefreshesResponseBody\instanceRefreshTasks\desiredConfiguration;
use AlibabaCloud\Tea\Model;

class instanceRefreshTasks extends Model
{
    /**
     * @description The desired configurations of the instance refresh task.
     *
     * @var desiredConfiguration
     */
    public $desiredConfiguration;

    /**
     * @description The reason why the instance refresh task failed to be executed.
     *
     * @example The task exceeded its maximum run time of one week. So the task failed.
     *
     * @var string
     */
    public $detail;

    /**
     * @description The end time of the instance refresh task.
     *
     * @example 2024-08-22T02:09:00Z
     *
     * @var string
     */
    public $endTime;

    /**
     * @description The refreshed number of instances in the scaling group.
     *
     * @example 10
     *
     * @var int
     */
    public $finishedUpdateCapacity;

    /**
     * @description The ID of the instance refresh task.
     *
     * @example ir-1adfa123****
     *
     * @var string
     */
    public $instanceRefreshTaskId;

    /**
     * @description The ratio by which the number of instances in the scaling group can exceed the upper limit for the number of instances in the scaling group during instance refresh.
     *
     * @example 120
     *
     * @var int
     */
    public $maxHealthyPercentage;

    /**
     * @description The ratio of the number of instances that provide services to the total number of instances in the scaling group during instance refresh.
     *
     * @example 80
     *
     * @var int
     */
    public $minHealthyPercentage;

    /**
     * @description The region ID of the scaling group.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The ID of the scaling group.
     *
     * @example asg-bp16pbfcr8j9*****
     *
     * @var string
     */
    public $scalingGroupId;

    /**
     * @var bool
     */
    public $skipMatching;

    /**
     * @description The start time of the instance refresh task.
     *
     * @example 2024-08-22T01:09:00Z
     *
     * @var string
     */
    public $startTime;

    /**
     * @description The status of the instance refresh task. Valid values:
     *
     *   Pending: The instance refresh task is created and is waiting to be scheduled.
     *   InProgress: The instance refresh task is being executed.
     *   Paused: The instance refresh task is suspended.
     *   Failed: The instance refresh task failed to be executed.
     *   Successful: The instance refresh task is successful.
     *   Cancelling: The instance refresh task is being canceled.
     *   Cancelled: The instance refresh task is canceled.
     *   RollbackInProgress: The instance refresh task is being rolled back.
     *   RollbackSuccessful: The instance refresh task is rolled back.
     *   RollbackFailed: The instance refresh task fails to be rolled back.
     *
     * @example InProgress
     *
     * @var string
     */
    public $status;

    /**
     * @description The total number of instances whose configurations are refreshed.
     *
     * @example 20
     *
     * @var int
     */
    public $totalNeedUpdateCapacity;
    protected $_name = [
        'desiredConfiguration'    => 'DesiredConfiguration',
        'detail'                  => 'Detail',
        'endTime'                 => 'EndTime',
        'finishedUpdateCapacity'  => 'FinishedUpdateCapacity',
        'instanceRefreshTaskId'   => 'InstanceRefreshTaskId',
        'maxHealthyPercentage'    => 'MaxHealthyPercentage',
        'minHealthyPercentage'    => 'MinHealthyPercentage',
        'regionId'                => 'RegionId',
        'scalingGroupId'          => 'ScalingGroupId',
        'skipMatching'            => 'SkipMatching',
        'startTime'               => 'StartTime',
        'status'                  => 'Status',
        'totalNeedUpdateCapacity' => 'TotalNeedUpdateCapacity',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->desiredConfiguration) {
            $res['DesiredConfiguration'] = null !== $this->desiredConfiguration ? $this->desiredConfiguration->toMap() : null;
        }
        if (null !== $this->detail) {
            $res['Detail'] = $this->detail;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->finishedUpdateCapacity) {
            $res['FinishedUpdateCapacity'] = $this->finishedUpdateCapacity;
        }
        if (null !== $this->instanceRefreshTaskId) {
            $res['InstanceRefreshTaskId'] = $this->instanceRefreshTaskId;
        }
        if (null !== $this->maxHealthyPercentage) {
            $res['MaxHealthyPercentage'] = $this->maxHealthyPercentage;
        }
        if (null !== $this->minHealthyPercentage) {
            $res['MinHealthyPercentage'] = $this->minHealthyPercentage;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->scalingGroupId) {
            $res['ScalingGroupId'] = $this->scalingGroupId;
        }
        if (null !== $this->skipMatching) {
            $res['SkipMatching'] = $this->skipMatching;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->totalNeedUpdateCapacity) {
            $res['TotalNeedUpdateCapacity'] = $this->totalNeedUpdateCapacity;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return instanceRefreshTasks
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DesiredConfiguration'])) {
            $model->desiredConfiguration = desiredConfiguration::fromMap($map['DesiredConfiguration']);
        }
        if (isset($map['Detail'])) {
            $model->detail = $map['Detail'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['FinishedUpdateCapacity'])) {
            $model->finishedUpdateCapacity = $map['FinishedUpdateCapacity'];
        }
        if (isset($map['InstanceRefreshTaskId'])) {
            $model->instanceRefreshTaskId = $map['InstanceRefreshTaskId'];
        }
        if (isset($map['MaxHealthyPercentage'])) {
            $model->maxHealthyPercentage = $map['MaxHealthyPercentage'];
        }
        if (isset($map['MinHealthyPercentage'])) {
            $model->minHealthyPercentage = $map['MinHealthyPercentage'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ScalingGroupId'])) {
            $model->scalingGroupId = $map['ScalingGroupId'];
        }
        if (isset($map['SkipMatching'])) {
            $model->skipMatching = $map['SkipMatching'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['TotalNeedUpdateCapacity'])) {
            $model->totalNeedUpdateCapacity = $map['TotalNeedUpdateCapacity'];
        }

        return $model;
    }
}
