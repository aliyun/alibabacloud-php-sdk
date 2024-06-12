<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models;

use AlibabaCloud\Tea\Model;

class ListConfigRulesRequest extends Model
{
    /**
     * @description The compliance evaluation result of the rule. Valid values:
     *
     *   COMPLIANT: The resources are evaluated as compliant.
     *   NON_COMPLIANT: The resources are evaluated as non-compliant.
     *   NOT_APPLICABLE: The rule does not apply to the resources.
     *   INSUFFICIENT_DATA: No resource data is available.
     *
     * @example COMPLIANT
     *
     * @var string
     */
    public $complianceType;

    /**
     * @description The name of the rule.
     *
     * @example test-rule-name
     *
     * @var string
     */
    public $configRuleName;

    /**
     * @description The status of the rule. Valid values:
     *
     *   ACTIVE: The rule is enabled.
     *   DELETING: The rule is being deleted.
     *   EVALUATING: The rule is being used to evaluate resource configurations.
     *   INACTIVE: The rule is disabled.
     *
     * @example ACTIVE
     *
     * @var string
     */
    public $configRuleState;

    /**
     * @description The query keyword.
     *
     * You can perform a fuzzy search by rule ID, rule name, rule description, or managed rule ID.
     * @example ecs
     *
     * @var string
     */
    public $keyword;

    /**
     * @description The page number.
     *
     * Page numbers start from 1. Default value: 1.
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The number of entries per page.
     *
     * Valid values: 1 to 100. A minimum of 1 entry can be returned per page. Default value: 10.
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The type of the resources to be evaluated based on the rule.
     *
     * @example ACS::ECS::Instance
     *
     * @var string
     */
    public $resourceTypes;

    /**
     * @description The risk level of the resources that are not compliant with the rule. Valid values:
     *
     *   1: high
     *   2: medium
     *   3: low
     *
     * @example 1
     *
     * @var int
     */
    public $riskLevel;
    protected $_name = [
        'complianceType'  => 'ComplianceType',
        'configRuleName'  => 'ConfigRuleName',
        'configRuleState' => 'ConfigRuleState',
        'keyword'         => 'Keyword',
        'pageNumber'      => 'PageNumber',
        'pageSize'        => 'PageSize',
        'resourceTypes'   => 'ResourceTypes',
        'riskLevel'       => 'RiskLevel',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->complianceType) {
            $res['ComplianceType'] = $this->complianceType;
        }
        if (null !== $this->configRuleName) {
            $res['ConfigRuleName'] = $this->configRuleName;
        }
        if (null !== $this->configRuleState) {
            $res['ConfigRuleState'] = $this->configRuleState;
        }
        if (null !== $this->keyword) {
            $res['Keyword'] = $this->keyword;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->resourceTypes) {
            $res['ResourceTypes'] = $this->resourceTypes;
        }
        if (null !== $this->riskLevel) {
            $res['RiskLevel'] = $this->riskLevel;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListConfigRulesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ComplianceType'])) {
            $model->complianceType = $map['ComplianceType'];
        }
        if (isset($map['ConfigRuleName'])) {
            $model->configRuleName = $map['ConfigRuleName'];
        }
        if (isset($map['ConfigRuleState'])) {
            $model->configRuleState = $map['ConfigRuleState'];
        }
        if (isset($map['Keyword'])) {
            $model->keyword = $map['Keyword'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['ResourceTypes'])) {
            $model->resourceTypes = $map['ResourceTypes'];
        }
        if (isset($map['RiskLevel'])) {
            $model->riskLevel = $map['RiskLevel'];
        }

        return $model;
    }
}
