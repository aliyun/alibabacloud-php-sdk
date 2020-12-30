<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20160408\Models\ListScalingActivityV2ResponseBody\items;

use AlibabaCloud\Tea\Model;

class item extends Model
{
    /**
     * @var string
     */
    public $status;

    /**
     * @var int
     */
    public $totalCapacity;

    /**
     * @var int
     */
    public $expectNum;

    /**
     * @var string
     */
    public $bizId;

    /**
     * @var string
     */
    public $instanceIds;

    /**
     * @var string
     */
    public $hostGroupBizId;

    /**
     * @var int
     */
    public $endTime;

    /**
     * @var int
     */
    public $startTime;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $scalingRuleName;

    /**
     * @var string
     */
    public $scalingRuleId;

    /**
     * @var string
     */
    public $cause;

    /**
     * @var string
     */
    public $hostGroupName;

    /**
     * @var string
     */
    public $transition;
    protected $_name = [
        'status'          => 'Status',
        'totalCapacity'   => 'TotalCapacity',
        'expectNum'       => 'ExpectNum',
        'bizId'           => 'BizId',
        'instanceIds'     => 'InstanceIds',
        'hostGroupBizId'  => 'HostGroupBizId',
        'endTime'         => 'EndTime',
        'startTime'       => 'StartTime',
        'description'     => 'Description',
        'scalingRuleName' => 'ScalingRuleName',
        'scalingRuleId'   => 'ScalingRuleId',
        'cause'           => 'Cause',
        'hostGroupName'   => 'HostGroupName',
        'transition'      => 'Transition',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->totalCapacity) {
            $res['TotalCapacity'] = $this->totalCapacity;
        }
        if (null !== $this->expectNum) {
            $res['ExpectNum'] = $this->expectNum;
        }
        if (null !== $this->bizId) {
            $res['BizId'] = $this->bizId;
        }
        if (null !== $this->instanceIds) {
            $res['InstanceIds'] = $this->instanceIds;
        }
        if (null !== $this->hostGroupBizId) {
            $res['HostGroupBizId'] = $this->hostGroupBizId;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->scalingRuleName) {
            $res['ScalingRuleName'] = $this->scalingRuleName;
        }
        if (null !== $this->scalingRuleId) {
            $res['ScalingRuleId'] = $this->scalingRuleId;
        }
        if (null !== $this->cause) {
            $res['Cause'] = $this->cause;
        }
        if (null !== $this->hostGroupName) {
            $res['HostGroupName'] = $this->hostGroupName;
        }
        if (null !== $this->transition) {
            $res['Transition'] = $this->transition;
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
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['TotalCapacity'])) {
            $model->totalCapacity = $map['TotalCapacity'];
        }
        if (isset($map['ExpectNum'])) {
            $model->expectNum = $map['ExpectNum'];
        }
        if (isset($map['BizId'])) {
            $model->bizId = $map['BizId'];
        }
        if (isset($map['InstanceIds'])) {
            $model->instanceIds = $map['InstanceIds'];
        }
        if (isset($map['HostGroupBizId'])) {
            $model->hostGroupBizId = $map['HostGroupBizId'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['ScalingRuleName'])) {
            $model->scalingRuleName = $map['ScalingRuleName'];
        }
        if (isset($map['ScalingRuleId'])) {
            $model->scalingRuleId = $map['ScalingRuleId'];
        }
        if (isset($map['Cause'])) {
            $model->cause = $map['Cause'];
        }
        if (isset($map['HostGroupName'])) {
            $model->hostGroupName = $map['HostGroupName'];
        }
        if (isset($map['Transition'])) {
            $model->transition = $map['Transition'];
        }

        return $model;
    }
}
