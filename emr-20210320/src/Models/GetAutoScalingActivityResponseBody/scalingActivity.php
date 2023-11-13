<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20210320\Models\GetAutoScalingActivityResponseBody;

use AlibabaCloud\SDK\Emr\V20210320\Models\ScalingActivityResult;
use AlibabaCloud\SDK\Emr\V20210320\Models\ScalingRule;
use AlibabaCloud\Tea\Model;

class scalingActivity extends Model
{
    /**
     * @description The ID of the scaling activity.
     *
     * @example asa-36373b084d6b4b13aa50f4129a9e****
     *
     * @var string
     */
    public $activityId;

    /**
     * @description The instances corresponding to this scaling activity.
     *
     * @var ScalingActivityResult[]
     */
    public $activityResults;

    /**
     * @description The status of the scaling activity. Valid values:
     *
     *   REJECTED
     *   SUCCESSFUL
     *   FAILED
     *   IN_PROGRESS
     *
     * @example IN_PROGRESS
     *
     * @var string
     */
    public $activityState;

    /**
     * @description The type of the scaling activity. Valid value:
     *
     *   SCALE_OUT
     *   SCALE_IN
     *
     * @example SCALE_OUT
     *
     * @var string
     */
    public $activityType;

    /**
     * @description The cluster ID.
     *
     * @example c-b933c5aac8fe****
     *
     * @var string
     */
    public $clusterId;

    /**
     * @description The description of the scaling activity.
     *
     * @example clusterId not exist
     *
     * @var string
     */
    public $description;

    /**
     * @description The time when scaling ended.
     *
     * @example 1639715634819
     *
     * @var int
     */
    public $endTime;

    /**
     * @description The number of added or removed instances.
     *
     * @example 10
     *
     * @var int
     */
    public $expectNum;

    /**
     * @description The ID of the node group.
     *
     * @example ng-869471354ecd****
     *
     * @var string
     */
    public $nodeGroupId;

    /**
     * @description The name of the node group.
     *
     * @example task-01
     *
     * @var string
     */
    public $nodeGroupName;

    /**
     * @description The operation ID.
     *
     * @example op-13c37a77c505****
     *
     * @var string
     */
    public $operationId;

    /**
     * @description The description of the scaling rule.
     *
     * @var ScalingRule
     */
    public $ruleDetail;

    /**
     * @description The name of the scaling rule.
     *
     * @example scaling-out-memory
     *
     * @var string
     */
    public $ruleName;

    /**
     * @description The time when scaling started.
     *
     * @example 1639714634819
     *
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
        'ruleDetail'      => 'RuleDetail',
        'ruleName'        => 'RuleName',
        'startTime'       => 'StartTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->activityId) {
            $res['ActivityId'] = $this->activityId;
        }
        if (null !== $this->activityResults) {
            $res['ActivityResults'] = [];
            if (null !== $this->activityResults && \is_array($this->activityResults)) {
                $n = 0;
                foreach ($this->activityResults as $item) {
                    $res['ActivityResults'][$n++] = null !== $item ? $item->toMap() : $item;
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
        if (null !== $this->ruleDetail) {
            $res['RuleDetail'] = null !== $this->ruleDetail ? $this->ruleDetail->toMap() : null;
        }
        if (null !== $this->ruleName) {
            $res['RuleName'] = $this->ruleName;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
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
        if (isset($map['ActivityId'])) {
            $model->activityId = $map['ActivityId'];
        }
        if (isset($map['ActivityResults'])) {
            if (!empty($map['ActivityResults'])) {
                $model->activityResults = [];
                $n                      = 0;
                foreach ($map['ActivityResults'] as $item) {
                    $model->activityResults[$n++] = null !== $item ? ScalingActivityResult::fromMap($item) : $item;
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
