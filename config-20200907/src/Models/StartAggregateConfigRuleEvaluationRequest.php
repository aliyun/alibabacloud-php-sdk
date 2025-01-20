<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models;

use AlibabaCloud\Dara\Model;

class StartAggregateConfigRuleEvaluationRequest extends Model
{
    /**
     * @var string
     */
    public $aggregatorId;
    /**
     * @var string
     */
    public $compliancePackId;
    /**
     * @var string
     */
    public $configRuleId;
    /**
     * @var bool
     */
    public $revertEvaluation;
    protected $_name = [
        'aggregatorId'     => 'AggregatorId',
        'compliancePackId' => 'CompliancePackId',
        'configRuleId'     => 'ConfigRuleId',
        'revertEvaluation' => 'RevertEvaluation',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->aggregatorId) {
            $res['AggregatorId'] = $this->aggregatorId;
        }

        if (null !== $this->compliancePackId) {
            $res['CompliancePackId'] = $this->compliancePackId;
        }

        if (null !== $this->configRuleId) {
            $res['ConfigRuleId'] = $this->configRuleId;
        }

        if (null !== $this->revertEvaluation) {
            $res['RevertEvaluation'] = $this->revertEvaluation;
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
        if (isset($map['AggregatorId'])) {
            $model->aggregatorId = $map['AggregatorId'];
        }

        if (isset($map['CompliancePackId'])) {
            $model->compliancePackId = $map['CompliancePackId'];
        }

        if (isset($map['ConfigRuleId'])) {
            $model->configRuleId = $map['ConfigRuleId'];
        }

        if (isset($map['RevertEvaluation'])) {
            $model->revertEvaluation = $map['RevertEvaluation'];
        }

        return $model;
    }
}
