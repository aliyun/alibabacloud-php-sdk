<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20160408\Models;

use AlibabaCloud\Tea\Model;

class DescribeScalingActivityResponseBody extends Model
{
    /**
     * @var string
     */
    public $bizId;

    /**
     * @var string
     */
    public $cause;

    /**
     * @var string
     */
    public $description;

    /**
     * @var int
     */
    public $endTime;

    /**
     * @var int
     */
    public $expectNum;

    /**
     * @var string
     */
    public $instanceIds;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $scalingRuleId;

    /**
     * @var int
     */
    public $startTime;

    /**
     * @var string
     */
    public $status;

    /**
     * @var int
     */
    public $totalCapacity;

    /**
     * @var string
     */
    public $transition;
    protected $_name = [
        'bizId'         => 'BizId',
        'cause'         => 'Cause',
        'description'   => 'Description',
        'endTime'       => 'EndTime',
        'expectNum'     => 'ExpectNum',
        'instanceIds'   => 'InstanceIds',
        'requestId'     => 'RequestId',
        'scalingRuleId' => 'ScalingRuleId',
        'startTime'     => 'StartTime',
        'status'        => 'Status',
        'totalCapacity' => 'TotalCapacity',
        'transition'    => 'Transition',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bizId) {
            $res['BizId'] = $this->bizId;
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
        if (null !== $this->expectNum) {
            $res['ExpectNum'] = $this->expectNum;
        }
        if (null !== $this->instanceIds) {
            $res['InstanceIds'] = $this->instanceIds;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->scalingRuleId) {
            $res['ScalingRuleId'] = $this->scalingRuleId;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->totalCapacity) {
            $res['TotalCapacity'] = $this->totalCapacity;
        }
        if (null !== $this->transition) {
            $res['Transition'] = $this->transition;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeScalingActivityResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BizId'])) {
            $model->bizId = $map['BizId'];
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
        if (isset($map['ExpectNum'])) {
            $model->expectNum = $map['ExpectNum'];
        }
        if (isset($map['InstanceIds'])) {
            $model->instanceIds = $map['InstanceIds'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ScalingRuleId'])) {
            $model->scalingRuleId = $map['ScalingRuleId'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['TotalCapacity'])) {
            $model->totalCapacity = $map['TotalCapacity'];
        }
        if (isset($map['Transition'])) {
            $model->transition = $map['Transition'];
        }

        return $model;
    }
}
