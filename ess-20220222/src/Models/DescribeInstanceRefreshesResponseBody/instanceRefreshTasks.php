<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ess\V20220222\Models\DescribeInstanceRefreshesResponseBody;

use AlibabaCloud\SDK\Ess\V20220222\Models\DescribeInstanceRefreshesResponseBody\instanceRefreshTasks\desiredConfiguration;
use AlibabaCloud\Tea\Model;

class instanceRefreshTasks extends Model
{
    /**
     * @var desiredConfiguration
     */
    public $desiredConfiguration;

    /**
     * @example The task exceeded its maximum run time of one week. So the task failed.
     *
     * @var string
     */
    public $detail;

    /**
     * @example 2024-08-22T02:09:00Z
     *
     * @var string
     */
    public $endTime;

    /**
     * @example 10
     *
     * @var int
     */
    public $finishedUpdateCapacity;

    /**
     * @example ir-1adfa123****
     *
     * @var string
     */
    public $instanceRefreshTaskId;

    /**
     * @example 120
     *
     * @var int
     */
    public $maxHealthyPercentage;

    /**
     * @example 80
     *
     * @var int
     */
    public $minHealthyPercentage;

    /**
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @example asg-bp16pbfcr8j9*****
     *
     * @var string
     */
    public $scalingGroupId;

    /**
     * @example 2024-08-22T01:09:00Z
     *
     * @var string
     */
    public $startTime;

    /**
     * @example InProgress
     *
     * @var string
     */
    public $status;

    /**
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
