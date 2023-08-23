<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ess\V20220222\Models;

use AlibabaCloud\SDK\Ess\V20220222\Models\CreateAlarmRequest\dimensions;
use AlibabaCloud\SDK\Ess\V20220222\Models\CreateAlarmRequest\expressions;
use AlibabaCloud\Tea\Model;

class CreateAlarmRequest extends Model
{
    /**
     * @var string[]
     */
    public $alarmActions;

    /**
     * @example >=
     *
     * @var string
     */
    public $comparisonOperator;

    /**
     * @example Test alarm task.
     *
     * @var string
     */
    public $description;

    /**
     * @var dimensions[]
     */
    public $dimensions;

    /**
     * @example TZ=+00 * * 1-2 * * ?
     *
     * @var string
     */
    public $effective;

    /**
     * @example 3
     *
     * @var int
     */
    public $evaluationCount;

    /**
     * @var expressions[]
     */
    public $expressions;

    /**
     * @example &&
     *
     * @var string
     */
    public $expressionsLogicOperator;

    /**
     * @example 4055401
     *
     * @var int
     */
    public $groupId;

    /**
     * @example CpuUtilization
     *
     * @var string
     */
    public $metricName;

    /**
     * @example system
     *
     * @var string
     */
    public $metricType;

    /**
     * @example TestAlarmTask
     *
     * @var string
     */
    public $name;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @example 300
     *
     * @var int
     */
    public $period;

    /**
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @example asg-bp18p2yfxow2dloq****
     *
     * @var string
     */
    public $scalingGroupId;

    /**
     * @example Average
     *
     * @var string
     */
    public $statistics;

    /**
     * @example 80.0
     *
     * @var float
     */
    public $threshold;
    protected $_name = [
        'alarmActions'             => 'AlarmActions',
        'comparisonOperator'       => 'ComparisonOperator',
        'description'              => 'Description',
        'dimensions'               => 'Dimensions',
        'effective'                => 'Effective',
        'evaluationCount'          => 'EvaluationCount',
        'expressions'              => 'Expressions',
        'expressionsLogicOperator' => 'ExpressionsLogicOperator',
        'groupId'                  => 'GroupId',
        'metricName'               => 'MetricName',
        'metricType'               => 'MetricType',
        'name'                     => 'Name',
        'ownerId'                  => 'OwnerId',
        'period'                   => 'Period',
        'regionId'                 => 'RegionId',
        'resourceOwnerAccount'     => 'ResourceOwnerAccount',
        'scalingGroupId'           => 'ScalingGroupId',
        'statistics'               => 'Statistics',
        'threshold'                => 'Threshold',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->alarmActions) {
            $res['AlarmActions'] = $this->alarmActions;
        }
        if (null !== $this->comparisonOperator) {
            $res['ComparisonOperator'] = $this->comparisonOperator;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->dimensions) {
            $res['Dimensions'] = [];
            if (null !== $this->dimensions && \is_array($this->dimensions)) {
                $n = 0;
                foreach ($this->dimensions as $item) {
                    $res['Dimensions'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->effective) {
            $res['Effective'] = $this->effective;
        }
        if (null !== $this->evaluationCount) {
            $res['EvaluationCount'] = $this->evaluationCount;
        }
        if (null !== $this->expressions) {
            $res['Expressions'] = [];
            if (null !== $this->expressions && \is_array($this->expressions)) {
                $n = 0;
                foreach ($this->expressions as $item) {
                    $res['Expressions'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->expressionsLogicOperator) {
            $res['ExpressionsLogicOperator'] = $this->expressionsLogicOperator;
        }
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->metricName) {
            $res['MetricName'] = $this->metricName;
        }
        if (null !== $this->metricType) {
            $res['MetricType'] = $this->metricType;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->period) {
            $res['Period'] = $this->period;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }
        if (null !== $this->scalingGroupId) {
            $res['ScalingGroupId'] = $this->scalingGroupId;
        }
        if (null !== $this->statistics) {
            $res['Statistics'] = $this->statistics;
        }
        if (null !== $this->threshold) {
            $res['Threshold'] = $this->threshold;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateAlarmRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AlarmActions'])) {
            if (!empty($map['AlarmActions'])) {
                $model->alarmActions = $map['AlarmActions'];
            }
        }
        if (isset($map['ComparisonOperator'])) {
            $model->comparisonOperator = $map['ComparisonOperator'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Dimensions'])) {
            if (!empty($map['Dimensions'])) {
                $model->dimensions = [];
                $n                 = 0;
                foreach ($map['Dimensions'] as $item) {
                    $model->dimensions[$n++] = null !== $item ? dimensions::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Effective'])) {
            $model->effective = $map['Effective'];
        }
        if (isset($map['EvaluationCount'])) {
            $model->evaluationCount = $map['EvaluationCount'];
        }
        if (isset($map['Expressions'])) {
            if (!empty($map['Expressions'])) {
                $model->expressions = [];
                $n                  = 0;
                foreach ($map['Expressions'] as $item) {
                    $model->expressions[$n++] = null !== $item ? expressions::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['ExpressionsLogicOperator'])) {
            $model->expressionsLogicOperator = $map['ExpressionsLogicOperator'];
        }
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['MetricName'])) {
            $model->metricName = $map['MetricName'];
        }
        if (isset($map['MetricType'])) {
            $model->metricType = $map['MetricType'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['Period'])) {
            $model->period = $map['Period'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if (isset($map['ScalingGroupId'])) {
            $model->scalingGroupId = $map['ScalingGroupId'];
        }
        if (isset($map['Statistics'])) {
            $model->statistics = $map['Statistics'];
        }
        if (isset($map['Threshold'])) {
            $model->threshold = $map['Threshold'];
        }

        return $model;
    }
}
