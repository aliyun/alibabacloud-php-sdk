<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ess\V20220222\Models\DescribeInstanceRefreshesResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ess\V20220222\Models\DescribeInstanceRefreshesResponseBody\instanceRefreshTasks\desiredConfiguration;

class instanceRefreshTasks extends Model
{
    /**
     * @var desiredConfiguration
     */
    public $desiredConfiguration;
    /**
     * @var string
     */
    public $detail;
    /**
     * @var string
     */
    public $endTime;
    /**
     * @var int
     */
    public $finishedUpdateCapacity;
    /**
     * @var string
     */
    public $instanceRefreshTaskId;
    /**
     * @var int
     */
    public $maxHealthyPercentage;
    /**
     * @var int
     */
    public $minHealthyPercentage;
    /**
     * @var string
     */
    public $regionId;
    /**
     * @var string
     */
    public $scalingGroupId;
    /**
     * @var bool
     */
    public $skipMatching;
    /**
     * @var string
     */
    public $startTime;
    /**
     * @var string
     */
    public $status;
    /**
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
        if (null !== $this->desiredConfiguration) {
            $this->desiredConfiguration->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->desiredConfiguration) {
            $res['DesiredConfiguration'] = null !== $this->desiredConfiguration ? $this->desiredConfiguration->toArray($noStream) : $this->desiredConfiguration;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
