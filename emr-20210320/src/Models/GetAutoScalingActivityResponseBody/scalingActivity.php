<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20210320\Models\GetAutoScalingActivityResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Emr\V20210320\Models\ScalingActivityResult;
use AlibabaCloud\SDK\Emr\V20210320\Models\ScalingRule;

class scalingActivity extends Model
{
    /**
     * @var string
     */
    public $activityId;
    /**
     * @var ScalingActivityResult[]
     */
    public $activityResults;
    /**
     * @var string
     */
    public $activityState;
    /**
     * @var string
     */
    public $activityType;
    /**
     * @var string
     */
    public $clusterId;
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
    public $nodeGroupId;
    /**
     * @var string
     */
    public $nodeGroupName;
    /**
     * @var string
     */
    public $operationId;
    /**
     * @var string
     */
    public $policyType;
    /**
     * @var ScalingRule
     */
    public $ruleDetail;
    /**
     * @var string
     */
    public $ruleName;
    /**
     * @var int
     */
    public $startTime;
    protected $_name = [
        'activityId'      => 'ActivityId',
        'activityResults' => 'ActivityResults',
        'activityState'   => 'ActivityState',
        'activityType'    => 'ActivityType',
        'clusterId'       => 'ClusterId',
        'description'     => 'Description',
        'endTime'         => 'EndTime',
        'expectNum'       => 'ExpectNum',
        'nodeGroupId'     => 'NodeGroupId',
        'nodeGroupName'   => 'NodeGroupName',
        'operationId'     => 'OperationId',
        'policyType'      => 'PolicyType',
        'ruleDetail'      => 'RuleDetail',
        'ruleName'        => 'RuleName',
        'startTime'       => 'StartTime',
    ];

    public function validate()
    {
        if (\is_array($this->activityResults)) {
            Model::validateArray($this->activityResults);
        }
        if (null !== $this->ruleDetail) {
            $this->ruleDetail->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->activityId) {
            $res['ActivityId'] = $this->activityId;
        }

        if (null !== $this->activityResults) {
            if (\is_array($this->activityResults)) {
                $res['ActivityResults'] = [];
                $n1                     = 0;
                foreach ($this->activityResults as $item1) {
                    $res['ActivityResults'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->activityState) {
            $res['ActivityState'] = $this->activityState;
        }

        if (null !== $this->activityType) {
            $res['ActivityType'] = $this->activityType;
        }

        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
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

        if (null !== $this->nodeGroupId) {
            $res['NodeGroupId'] = $this->nodeGroupId;
        }

        if (null !== $this->nodeGroupName) {
            $res['NodeGroupName'] = $this->nodeGroupName;
        }

        if (null !== $this->operationId) {
            $res['OperationId'] = $this->operationId;
        }

        if (null !== $this->policyType) {
            $res['PolicyType'] = $this->policyType;
        }

        if (null !== $this->ruleDetail) {
            $res['RuleDetail'] = null !== $this->ruleDetail ? $this->ruleDetail->toArray($noStream) : $this->ruleDetail;
        }

        if (null !== $this->ruleName) {
            $res['RuleName'] = $this->ruleName;
        }

        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
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
        if (isset($map['ActivityId'])) {
            $model->activityId = $map['ActivityId'];
        }

        if (isset($map['ActivityResults'])) {
            if (!empty($map['ActivityResults'])) {
                $model->activityResults = [];
                $n1                     = 0;
                foreach ($map['ActivityResults'] as $item1) {
                    $model->activityResults[$n1++] = ScalingActivityResult::fromMap($item1);
                }
            }
        }

        if (isset($map['ActivityState'])) {
            $model->activityState = $map['ActivityState'];
        }

        if (isset($map['ActivityType'])) {
            $model->activityType = $map['ActivityType'];
        }

        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
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

        if (isset($map['NodeGroupId'])) {
            $model->nodeGroupId = $map['NodeGroupId'];
        }

        if (isset($map['NodeGroupName'])) {
            $model->nodeGroupName = $map['NodeGroupName'];
        }

        if (isset($map['OperationId'])) {
            $model->operationId = $map['OperationId'];
        }

        if (isset($map['PolicyType'])) {
            $model->policyType = $map['PolicyType'];
        }

        if (isset($map['RuleDetail'])) {
            $model->ruleDetail = ScalingRule::fromMap($map['RuleDetail']);
        }

        if (isset($map['RuleName'])) {
            $model->ruleName = $map['RuleName'];
        }

        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        return $model;
    }
}
