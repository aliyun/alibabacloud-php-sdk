<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20210320\Models\GetAutoScalingActivityResponseBody;

use AlibabaCloud\SDK\Emr\V20210320\Models\ScalingActivityResult;
use AlibabaCloud\SDK\Emr\V20210320\Models\ScalingRule;
use AlibabaCloud\Tea\Model;

class scalingActivity extends Model
{
    /**
     * @description 伸缩活动ID。
     *
     * @example asa-36373b084d6b4b13aa50f4129a9e****
     *
     * @var string
     */
    public $activityId;

    /**
     * @description 本次伸缩活动对应的实例列表。
     *
     * @var ScalingActivityResult[]
     */
    public $activityResults;

    /**
     * @description 伸缩活动状态。取值范围：
     * - IN_PROGRESS：进行中
     * @example IN_PROGRESS
     *
     * @var string
     */
    public $activityState;

    /**
     * @description 伸缩活动类型。取值范围：
     * - SCALE_OUT：扩容
     * @example SCALE_OUT
     *
     * @var string
     */
    public $activityType;

    /**
     * @description 集群ID。
     *
     * @example c-b933c5aac8fe****
     *
     * @var string
     */
    public $clusterId;

    /**
     * @description 伸缩活动描述。
     *
     * @example clusterId not exist
     *
     * @var string
     */
    public $description;

    /**
     * @description 伸缩结束时间。
     *
     * @example 1639715634819
     *
     * @var int
     */
    public $endTime;

    /**
     * @description 本次扩缩数量。
     *
     * @example 10
     *
     * @var int
     */
    public $expectNum;

    /**
     * @description 节点组ID。
     *
     * @example ng-869471354ecd****
     *
     * @var string
     */
    public $nodeGroupId;

    /**
     * @description 节点组名称。
     *
     * @example task-01
     *
     * @var string
     */
    public $nodeGroupName;

    /**
     * @description 操作ID。
     *
     * @example op-13c37a77c505****
     *
     * @var string
     */
    public $operationId;

    /**
     * @description 伸缩规则详述。
     *
     * @var ScalingRule
     */
    public $ruleDetail;

    /**
     * @description 伸缩规则名称。
     *
     * @example scaling-out-memory
     *
     * @var string
     */
    public $ruleName;

    /**
     * @description 伸缩启动时间。
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
