<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20210320\Models;

use AlibabaCloud\Dara\Model;

class ListAutoScalingActivitiesRequest extends Model
{
    /**
     * @var string
     */
    public $clusterId;

    /**
     * @var int
     */
    public $endTime;

    /**
     * @var int
     */
    public $maxResults;

    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var string
     */
    public $nodeGroupId;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string[]
     */
    public $scalingActivityStates;

    /**
     * @var string
     */
    public $scalingActivityType;

    /**
     * @var string
     */
    public $scalingPolicyType;

    /**
     * @var string
     */
    public $scalingRuleName;

    /**
     * @var int
     */
    public $startTime;
    protected $_name = [
        'clusterId' => 'ClusterId',
        'endTime' => 'EndTime',
        'maxResults' => 'MaxResults',
        'nextToken' => 'NextToken',
        'nodeGroupId' => 'NodeGroupId',
        'regionId' => 'RegionId',
        'scalingActivityStates' => 'ScalingActivityStates',
        'scalingActivityType' => 'ScalingActivityType',
        'scalingPolicyType' => 'ScalingPolicyType',
        'scalingRuleName' => 'ScalingRuleName',
        'startTime' => 'StartTime',
    ];

    public function validate()
    {
        if (\is_array($this->scalingActivityStates)) {
            Model::validateArray($this->scalingActivityStates);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            if (\is_array($this->scalingActivityStates)) {
                $res['ScalingActivityStates'] = [];
                $n1 = 0;
                foreach ($this->scalingActivityStates as $item1) {
                    $res['ScalingActivityStates'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->scalingActivityType) {
            $res['ScalingActivityType'] = $this->scalingActivityType;
        }

        if (null !== $this->scalingPolicyType) {
            $res['ScalingPolicyType'] = $this->scalingPolicyType;
        }

        if (null !== $this->scalingRuleName) {
            $res['ScalingRuleName'] = $this->scalingRuleName;
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
                $model->scalingActivityStates = [];
                $n1 = 0;
                foreach ($map['ScalingActivityStates'] as $item1) {
                    $model->scalingActivityStates[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['ScalingActivityType'])) {
            $model->scalingActivityType = $map['ScalingActivityType'];
        }

        if (isset($map['ScalingPolicyType'])) {
            $model->scalingPolicyType = $map['ScalingPolicyType'];
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
