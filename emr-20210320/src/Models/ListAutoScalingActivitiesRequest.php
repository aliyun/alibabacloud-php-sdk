<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20210320\Models;

use AlibabaCloud\Tea\Model;

class ListAutoScalingActivitiesRequest extends Model
{
    /**
     * @description The cluster ID.
     *
     * @example c-b933c5aac8fe****
     *
     * @var string
     */
    public $clusterId;

    /**
     * @description The end of the time range to query. Unit: milliseconds.
     *
     * @example 1639718634819
     *
     * @var int
     */
    public $endTime;

    /**
     * @description The number of entries to return on each page.
     *
     * @example 20
     *
     * @var int
     */
    public $maxResults;

    /**
     * @description The pagination token that is used in the request to retrieve a new page of results.
     *
     * @example DD6B1B2A-5837-5237-ABE4-FF0C89568980
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description The ID of the node group.
     *
     * @example ng-869471354ecd****
     *
     * @var string
     */
    public $nodeGroupId;

    /**
     * @description The region ID.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The status of the scaling activity. Number of elements in the array: 1-20.
     *
     * @example ["REJECTED","SUCCESSFUL"]
     *
     * @var string[]
     */
    public $scalingActivityStates;

    /**
     * @description The type of the scaling activity. Valid values:
     *
     *   SCALE_OUT
     *   SCALE_IN
     *
     * @example SCALE_IN
     *
     * @var string
     */
    public $scalingActivityType;

    /**
     * @description The name of the scaling rule.
     *
     * @example scale-out-by-memroy
     *
     * @var string
     */
    public $scalingRuleName;

    /**
     * @description The beginning of the time range to query. Unit: milliseconds.
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
