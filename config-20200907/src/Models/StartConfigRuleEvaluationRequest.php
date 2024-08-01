<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models;

use AlibabaCloud\Tea\Model;

class StartConfigRuleEvaluationRequest extends Model
{
    /**
     * @description The compliance package ID.
     *
     * >  You must configure either the `CompliancePackId` or `ConfigRuleId` parameter.
     * @example cp-ac16626622af0053****
     *
     * @var string
     */
    public $compliancePackId;

    /**
     * @description The rule ID.
     *
     * >  You must configure either the `CompliancePackId` or `ConfigRuleId` parameter.
     * @example cr-9920626622af0035****
     *
     * @var string
     */
    public $configRuleId;

    /**
     * @description Specifies whether to re-evaluate the ignored non-compliant resource. Valid values:
     *
     *   true: re-evaluates the ignored non-compliant resource based on the rule.
     *   false (default): does not re-evaluate the ignored non-compliant resource based on the rule.
     *
     * @example false
     *
     * @var bool
     */
    public $revertEvaluation;
    protected $_name = [
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
     * @return StartConfigRuleEvaluationRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
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
