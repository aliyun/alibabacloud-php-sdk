<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20210320\Models;

use AlibabaCloud\Tea\Model;

class ListAutoScalingActivitiesRequest extends Model
{
    /**
     * @description 集群ID。
     *
     * @example c-b933c5aac8fe****
     *
     * @var string
     */
    public $clusterId;

    /**
     * @description 查询伸缩活动创建时间的结束时间戳。单位为毫秒。
     *
     * @example 1639718634819
     *
     * @var int
     */
    public $endTime;

    /**
     * @description 一次获取的最大记录数。取值范围：1~100。
     *
     * @example 20
     *
     * @var int
     */
    public $maxResults;

    /**
     * @description 标记当前开始读取的位置，置空表示从头开始。
     *
     * @example DD6B1B2A-5837-5237-ABE4-FF0C89568980
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description 节点组ID。节点组 Id-针对 ACK 集群，此字段为空。
     *
     * @example ng-869471354ecd****
     *
     * @var string
     */
    public $nodeGroupId;

    /**
     * @description 区域ID。
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description 伸缩活动状态。数组元数个数N的取值范围：1~20。默认取值：
     * - IN_PROGRESS：进行中。
     * @example ["REJECTED","SUCCESSFUL"]
     *
     * @var string[]
     */
    public $scalingActivityStates;

    /**
     * @description 伸缩活动类型。数组元数个数N的取值范围：1~20。取值范围：
     * - SCALE_IN：缩容。
     * @example SCALE_IN
     *
     * @var string
     */
    public $scalingActivityType;

    /**
     * @description 伸缩规则名称。
     *
     * @example scale-out-by-memroy
     *
     * @var string
     */
    public $scalingRuleName;

    /**
     * @description 查询伸缩活动创建时间的时间戳。单位为毫秒。
     *
     * @example 1639714634819
     *
     * @var int
     */
    public $startTime;
    protected $_name = [
        'clusterId'             => 'ClusterId',
        'endTime'               => 'EndTime',
        'maxResults'            => 'MaxResults',
        'nextToken'             => 'NextToken',
        'nodeGroupId'           => 'NodeGroupId',
        'regionId'              => 'RegionId',
        'scalingActivityStates' => 'ScalingActivityStates',
        'scalingActivityType'   => 'ScalingActivityType',
        'scalingRuleName'       => 'ScalingRuleName',
        'startTime'             => 'StartTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->nodeGroupId) {
            $res['NodeGroupId'] = $this->nodeGroupId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->scalingActivityStates) {
            $res['ScalingActivityStates'] = $this->scalingActivityStates;
        }
        if (null !== $this->scalingActivityType) {
            $res['ScalingActivityType'] = $this->scalingActivityType;
        }
        if (null !== $this->scalingRuleName) {
            $res['ScalingRuleName'] = $this->scalingRuleName;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListAutoScalingActivitiesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['NodeGroupId'])) {
            $model->nodeGroupId = $map['NodeGroupId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ScalingActivityStates'])) {
            if (!empty($map['ScalingActivityStates'])) {
                $model->scalingActivityStates = $map['ScalingActivityStates'];
            }
        }
        if (isset($map['ScalingActivityType'])) {
            $model->scalingActivityType = $map['ScalingActivityType'];
        }
        if (isset($map['ScalingRuleName'])) {
            $model->scalingRuleName = $map['ScalingRuleName'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        return $model;
    }
}
