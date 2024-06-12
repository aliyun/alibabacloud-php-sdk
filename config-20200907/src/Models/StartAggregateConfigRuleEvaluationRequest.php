<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models;

use AlibabaCloud\Tea\Model;

class StartAggregateConfigRuleEvaluationRequest extends Model
{
    /**
     * @description The ID of the account group.
     *
     * This parameter is required.
     * @example ca-3a58626622af0005****
     *
     * @var string
     */
    public $aggregatorId;

    /**
     * @description The ID of the compliance package.
     *
     * > You must configure either the `CompliancePackId` or `ConfigRuleId` parameter.
     * @example cp-ac16626622af0053****
     *
     * @var string
     */
    public $compliancePackId;

    /**
     * @description The rule ID.
     *
     * For more information about how to obtain the ID of a rule, see [ListAggregateConfigRules](https://help.aliyun.com/document_detail/264148.html).
     * @example cr-c169626622af009f****
     *
     * @var string
     */
    public $configRuleId;

    /**
     * @description Specifies whether to re-evaluate the ignored incompliant resource. Valid values:
     *
     *   true: The ignored incompliant resource based on the rule are re-evaluated.
     *   false: The ignored incompliant resource based on the rule are not re-evaluated.
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
