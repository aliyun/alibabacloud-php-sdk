<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ess\V20160722\Models\DescribeScalingActivitiesResponseBody\scalingActivities;

use AlibabaCloud\Tea\Model;

class scalingActivity extends Model
{
    /**
     * @var string
     */
    public $attachedCapacity;

    /**
     * @var string
     */
    public $autoCreatedCapacity;

    /**
     * @var string
     */
    public $cause;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $endTime;

    /**
     * @var int
     */
    public $progress;

    /**
     * @var string
     */
    public $scalingActivityId;

    /**
     * @var string
     */
    public $scalingGroupId;

    /**
     * @var string
     */
    public $startTime;

    /**
     * @var string
     */
    public $statusCode;

    /**
     * @var string
     */
    public $statusMessage;

    /**
     * @var string
     */
    public $totalCapacity;
    protected $_name = [
        'attachedCapacity'    => 'AttachedCapacity',
        'autoCreatedCapacity' => 'AutoCreatedCapacity',
        'cause'               => 'Cause',
        'description'         => 'Description',
        'endTime'             => 'EndTime',
        'progress'            => 'Progress',
        'scalingActivityId'   => 'ScalingActivityId',
        'scalingGroupId'      => 'ScalingGroupId',
        'startTime'           => 'StartTime',
        'statusCode'          => 'StatusCode',
        'statusMessage'       => 'StatusMessage',
        'totalCapacity'       => 'TotalCapacity',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->attachedCapacity) {
            $res['AttachedCapacity'] = $this->attachedCapacity;
        }
        if (null !== $this->autoCreatedCapacity) {
            $res['AutoCreatedCapacity'] = $this->autoCreatedCapacity;
        }
        if (null !== $this->cause) {
            $res['Cause'] = $this->cause;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->progress) {
            $res['Progress'] = $this->progress;
        }
        if (null !== $this->scalingActivityId) {
            $res['ScalingActivityId'] = $this->scalingActivityId;
        }
        if (null !== $this->scalingGroupId) {
            $res['ScalingGroupId'] = $this->scalingGroupId;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->statusCode) {
            $res['StatusCode'] = $this->statusCode;
        }
        if (null !== $this->statusMessage) {
            $res['StatusMessage'] = $this->statusMessage;
        }
        if (null !== $this->totalCapacity) {
            $res['TotalCapacity'] = $this->totalCapacity;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return scalingActivity
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AttachedCapacity'])) {
            $model->attachedCapacity = $map['AttachedCapacity'];
        }
        if (isset($map['AutoCreatedCapacity'])) {
            $model->autoCreatedCapacity = $map['AutoCreatedCapacity'];
        }
        if (isset($map['Cause'])) {
            $model->cause = $map['Cause'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['Progress'])) {
            $model->progress = $map['Progress'];
        }
        if (isset($map['ScalingActivityId'])) {
            $model->scalingActivityId = $map['ScalingActivityId'];
        }
        if (isset($map['ScalingGroupId'])) {
            $model->scalingGroupId = $map['ScalingGroupId'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['StatusCode'])) {
            $model->statusCode = $map['StatusCode'];
        }
        if (isset($map['StatusMessage'])) {
            $model->statusMessage = $map['StatusMessage'];
        }
        if (isset($map['TotalCapacity'])) {
            $model->totalCapacity = $map['TotalCapacity'];
        }

        return $model;
    }
}
