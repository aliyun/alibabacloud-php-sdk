<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ess\V20220222\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ess\V20220222\Models\CreateAlarmRequest\dimensions;
use AlibabaCloud\SDK\Ess\V20220222\Models\CreateAlarmRequest\expressions;

class CreateAlarmRequest extends Model
{
    /**
     * @var string[]
     */
    public $alarmActions;

    /**
     * @var string
     */
    public $comparisonOperator;

    /**
     * @var string
     */
    public $description;

    /**
     * @var dimensions[]
     */
    public $dimensions;

    /**
     * @var string
     */
    public $effective;

    /**
     * @var int
     */
    public $evaluationCount;

    /**
     * @var expressions[]
     */
    public $expressions;

    /**
     * @var string
     */
    public $expressionsLogicOperator;

    /**
     * @var int
     */
    public $groupId;

    /**
     * @var string
     */
    public $metricName;

    /**
     * @var string
     */
    public $metricType;

    /**
     * @var string
     */
    public $name;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var int
     */
    public $period;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @var string
     */
    public $scalingGroupId;

    /**
     * @var string
     */
    public $statistics;

    /**
     * @var float
     */
    public $threshold;
    protected $_name = [
        'alarmActions' => 'AlarmActions',
        'comparisonOperator' => 'ComparisonOperator',
        'description' => 'Description',
        'dimensions' => 'Dimensions',
        'effective' => 'Effective',
        'evaluationCount' => 'EvaluationCount',
        'expressions' => 'Expressions',
        'expressionsLogicOperator' => 'ExpressionsLogicOperator',
        'groupId' => 'GroupId',
        'metricName' => 'MetricName',
        'metricType' => 'MetricType',
        'name' => 'Name',
        'ownerId' => 'OwnerId',
        'period' => 'Period',
        'regionId' => 'RegionId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'scalingGroupId' => 'ScalingGroupId',
        'statistics' => 'Statistics',
        'threshold' => 'Threshold',
    ];

    public function validate()
    {
        if (\is_array($this->alarmActions)) {
            Model::validateArray($this->alarmActions);
        }
        if (\is_array($this->dimensions)) {
            Model::validateArray($this->dimensions);
        }
        if (\is_array($this->expressions)) {
            Model::validateArray($this->expressions);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->alarmActions) {
            if (\is_array($this->alarmActions)) {
                $res['AlarmActions'] = [];
                $n1 = 0;
                foreach ($this->alarmActions as $item1) {
                    $res['AlarmActions'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->comparisonOperator) {
            $res['ComparisonOperator'] = $this->comparisonOperator;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->dimensions) {
            if (\is_array($this->dimensions)) {
                $res['Dimensions'] = [];
                $n1 = 0;
                foreach ($this->dimensions as $item1) {
                    $res['Dimensions'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
            if (\is_array($this->expressions)) {
                $res['Expressions'] = [];
                $n1 = 0;
                foreach ($this->expressions as $item1) {
                    $res['Expressions'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AlarmActions'])) {
            if (!empty($map['AlarmActions'])) {
                $model->alarmActions = [];
                $n1 = 0;
                foreach ($map['AlarmActions'] as $item1) {
                    $model->alarmActions[$n1++] = $item1;
                }
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
                $n1 = 0;
                foreach ($map['Dimensions'] as $item1) {
                    $model->dimensions[$n1++] = dimensions::fromMap($item1);
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
                $n1 = 0;
                foreach ($map['Expressions'] as $item1) {
                    $model->expressions[$n1++] = expressions::fromMap($item1);
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
