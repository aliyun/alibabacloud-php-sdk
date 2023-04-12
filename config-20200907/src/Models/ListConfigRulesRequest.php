<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models;

use AlibabaCloud\Tea\Model;

class ListConfigRulesRequest extends Model
{
    /**
     * @example COMPLIANT
     *
     * @var string
     */
    public $complianceType;

    /**
     * @var string
     */
    public $configRuleName;

    /**
     * @example ACTIVE
     *
     * @var string
     */
    public $configRuleState;

    /**
     * @example ecs
     *
     * @var string
     */
    public $keyword;

    /**
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @example ACS::ECS::Instance
     *
     * @var string
     */
    public $resourceTypes;

    /**
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
