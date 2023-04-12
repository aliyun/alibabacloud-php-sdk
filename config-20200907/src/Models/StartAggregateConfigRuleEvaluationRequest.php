<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models;

use AlibabaCloud\Tea\Model;

class StartAggregateConfigRuleEvaluationRequest extends Model
{
    /**
     * @description The ID of the account group.
     *
     * For more information about how to obtain the ID of an account group, see [ListAggregators](~~255797~~).
     * @example ca-3a58626622af0005****
     *
     * @var string
     */
    public $aggregatorId;

    /**
     * @description The ID of the compliance package.
     *
     * >  You must set either the `CompliancePackId` or `ConfigRuleId` parameter.
     * @example cp-ac16626622af0053****
     *
     * @var string
     */
    public $compliancePackId;

    /**
     * @description The ID of the rule.
     *
     * For more information about how to obtain the ID of a rule, see [ListAggregateConfigRules](~~264148~~).
     * @example cr-c169626622af009f****
     *
     * @var string
     */
    public $configRuleId;

    /**
     * @description Specifies whether to re-evaluate the ignored non-compliant resource. Valid values:
     *
     *   true: re-evaluates the ignored non-compliant resource based on the rule.
     *   false: continues to ignore the resource in the compliance evaluation based on the rule.
     *
     * @example false
     *
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
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return StartAggregateConfigRuleEvaluationRequest
     */
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
