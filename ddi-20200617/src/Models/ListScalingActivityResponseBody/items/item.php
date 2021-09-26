<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddi\V20200617\Models\ListScalingActivityResponseBody\items;

use AlibabaCloud\Tea\Model;

class item extends Model
{
    /**
     * @description bizId
     *
     * @var string
     */
    public $bizId;

    /**
     * @description startTime
     *
     * @var int
     */
    public $startTime;

    /**
     * @description endTime
     *
     * @var int
     */
    public $endTime;

    /**
     * @var int
     */
    public $expectNum;

    /**
     * @description instanceIds
     *
     * @var string
     */
    public $instanceIds;

    /**
     * @description totalCapacity
     *
     * @var int
     */
    public $totalCapacity;

    /**
     * @description cause
     *
     * @var string
     */
    public $cause;

    /**
     * @description description
     *
     * @var string
     */
    public $description;

    /**
     * @description transition
     *
     * @var string
     */
    public $transition;

    /**
     * @description status
     *
     * @var string
     */
    public $status;

    /**
     * @description scalingRuleId
     *
     * @var string
     */
    public $scalingRuleId;

    /**
     * @description scalingRuleName
     *
     * @var string
     */
    public $scalingRuleName;

    /**
     * @description hostGroupBizId
     *
     * @var string
     */
    public $hostGroupBizId;

    /**
     * @description hostGroupName
     *
     * @var string
     */
    public $hostGroupName;
    protected $_name = [
        'bizId'           => 'BizId',
        'startTime'       => 'StartTime',
        'endTime'         => 'EndTime',
        'expectNum'       => 'ExpectNum',
        'instanceIds'     => 'InstanceIds',
        'totalCapacity'   => 'TotalCapacity',
        'cause'           => 'Cause',
        'description'     => 'Description',
        'transition'      => 'Transition',
        'status'          => 'Status',
        'scalingRuleId'   => 'ScalingRuleId',
        'scalingRuleName' => 'ScalingRuleName',
        'hostGroupBizId'  => 'HostGroupBizId',
        'hostGroupName'   => 'HostGroupName',
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
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
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
        if (null !== $this->totalCapacity) {
            $res['TotalCapacity'] = $this->totalCapacity;
        }
        if (null !== $this->cause) {
            $res['Cause'] = $this->cause;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->transition) {
            $res['Transition'] = $this->transition;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->scalingRuleId) {
            $res['ScalingRuleId'] = $this->scalingRuleId;
        }
        if (null !== $this->scalingRuleName) {
            $res['ScalingRuleName'] = $this->scalingRuleName;
        }
        if (null !== $this->hostGroupBizId) {
            $res['HostGroupBizId'] = $this->hostGroupBizId;
        }
        if (null !== $this->hostGroupName) {
            $res['HostGroupName'] = $this->hostGroupName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return item
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BizId'])) {
            $model->bizId = $map['BizId'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
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
        if (isset($map['TotalCapacity'])) {
            $model->totalCapacity = $map['TotalCapacity'];
        }
        if (isset($map['Cause'])) {
            $model->cause = $map['Cause'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Transition'])) {
            $model->transition = $map['Transition'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['ScalingRuleId'])) {
            $model->scalingRuleId = $map['ScalingRuleId'];
        }
        if (isset($map['ScalingRuleName'])) {
            $model->scalingRuleName = $map['ScalingRuleName'];
        }
        if (isset($map['HostGroupBizId'])) {
            $model->hostGroupBizId = $map['HostGroupBizId'];
        }
        if (isset($map['HostGroupName'])) {
            $model->hostGroupName = $map['HostGroupName'];
        }

        return $model;
    }
}
