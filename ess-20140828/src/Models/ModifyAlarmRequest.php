<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ess\V20140828\Models;

use AlibabaCloud\SDK\Ess\V20140828\Models\ModifyAlarmRequest\dimension;
use AlibabaCloud\Tea\Model;

class ModifyAlarmRequest extends Model
{
    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $alarmTaskId;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $metricName;

    /**
     * @var string
     */
    public $metricType;

    /**
     * @var int
     */
    public $period;

    /**
     * @var string
     */
    public $statistics;

    /**
     * @var float
     */
    public $threshold;

    /**
     * @var string
     */
    public $comparisonOperator;

    /**
     * @var int
     */
    public $evaluationCount;

    /**
     * @var int
     */
    public $groupId;

    /**
     * @var string
     */
    public $effective;

    /**
     * @var string[]
     */
    public $alarmAction;

    /**
     * @var dimension[]
     */
    public $dimension;
    protected $_name = [
        'ownerId'              => 'OwnerId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'regionId'             => 'RegionId',
        'alarmTaskId'          => 'AlarmTaskId',
        'name'                 => 'Name',
        'description'          => 'Description',
        'metricName'           => 'MetricName',
        'metricType'           => 'MetricType',
        'period'               => 'Period',
        'statistics'           => 'Statistics',
        'threshold'            => 'Threshold',
        'comparisonOperator'   => 'ComparisonOperator',
        'evaluationCount'      => 'EvaluationCount',
        'groupId'              => 'GroupId',
        'effective'            => 'Effective',
        'alarmAction'          => 'AlarmAction',
        'dimension'            => 'Dimension',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->alarmTaskId) {
            $res['AlarmTaskId'] = $this->alarmTaskId;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->metricName) {
            $res['MetricName'] = $this->metricName;
        }
        if (null !== $this->metricType) {
            $res['MetricType'] = $this->metricType;
        }
        if (null !== $this->period) {
            $res['Period'] = $this->period;
        }
        if (null !== $this->statistics) {
            $res['Statistics'] = $this->statistics;
        }
        if (null !== $this->threshold) {
            $res['Threshold'] = $this->threshold;
        }
        if (null !== $this->comparisonOperator) {
            $res['ComparisonOperator'] = $this->comparisonOperator;
        }
        if (null !== $this->evaluationCount) {
            $res['EvaluationCount'] = $this->evaluationCount;
        }
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->effective) {
            $res['Effective'] = $this->effective;
        }
        if (null !== $this->alarmAction) {
            $res['AlarmAction'] = $this->alarmAction;
        }
        if (null !== $this->dimension) {
            $res['Dimension'] = [];
            if (null !== $this->dimension && \is_array($this->dimension)) {
                $n = 0;
                foreach ($this->dimension as $item) {
                    $res['Dimension'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyAlarmRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['AlarmTaskId'])) {
            $model->alarmTaskId = $map['AlarmTaskId'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['MetricName'])) {
            $model->metricName = $map['MetricName'];
        }
        if (isset($map['MetricType'])) {
            $model->metricType = $map['MetricType'];
        }
        if (isset($map['Period'])) {
            $model->period = $map['Period'];
        }
        if (isset($map['Statistics'])) {
            $model->statistics = $map['Statistics'];
        }
        if (isset($map['Threshold'])) {
            $model->threshold = $map['Threshold'];
        }
        if (isset($map['ComparisonOperator'])) {
            $model->comparisonOperator = $map['ComparisonOperator'];
        }
        if (isset($map['EvaluationCount'])) {
            $model->evaluationCount = $map['EvaluationCount'];
        }
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['Effective'])) {
            $model->effective = $map['Effective'];
        }
        if (isset($map['AlarmAction'])) {
            if (!empty($map['AlarmAction'])) {
                $model->alarmAction = $map['AlarmAction'];
            }
        }
        if (isset($map['Dimension'])) {
            if (!empty($map['Dimension'])) {
                $model->dimension = [];
                $n                = 0;
                foreach ($map['Dimension'] as $item) {
                    $model->dimension[$n++] = null !== $item ? dimension::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
