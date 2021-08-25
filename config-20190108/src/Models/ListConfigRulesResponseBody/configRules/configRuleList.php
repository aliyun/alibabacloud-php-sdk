<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20190108\Models\ListConfigRulesResponseBody\configRules;

use AlibabaCloud\SDK\Config\V20190108\Models\ListConfigRulesResponseBody\configRules\configRuleList\compliance;
use AlibabaCloud\SDK\Config\V20190108\Models\ListConfigRulesResponseBody\configRules\configRuleList\createBy;
use AlibabaCloud\Tea\Model;

class configRuleList extends Model
{
    /**
     * @var string
     */
    public $compliancePackId;

    /**
     * @var int
     */
    public $riskLevel;

    /**
     * @var string
     */
    public $sourceOwner;

    /**
     * @var int
     */
    public $accountId;

    /**
     * @var string
     */
    public $configRuleState;

    /**
     * @var compliance
     */
    public $compliance;

    /**
     * @var string
     */
    public $sourceIdentifier;

    /**
     * @var string
     */
    public $configRuleArn;

    /**
     * @var string
     */
    public $description;

    /**
     * @var createBy
     */
    public $createBy;

    /**
     * @var string
     */
    public $automationType;

    /**
     * @var string
     */
    public $configRuleName;

    /**
     * @var string
     */
    public $configRuleId;
    protected $_name = [
        'compliancePackId' => 'CompliancePackId',
        'riskLevel'        => 'RiskLevel',
        'sourceOwner'      => 'SourceOwner',
        'accountId'        => 'AccountId',
        'configRuleState'  => 'ConfigRuleState',
        'compliance'       => 'Compliance',
        'sourceIdentifier' => 'SourceIdentifier',
        'configRuleArn'    => 'ConfigRuleArn',
        'description'      => 'Description',
        'createBy'         => 'CreateBy',
        'automationType'   => 'AutomationType',
        'configRuleName'   => 'ConfigRuleName',
        'configRuleId'     => 'ConfigRuleId',
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
        if (null !== $this->riskLevel) {
            $res['RiskLevel'] = $this->riskLevel;
        }
        if (null !== $this->sourceOwner) {
            $res['SourceOwner'] = $this->sourceOwner;
        }
        if (null !== $this->accountId) {
            $res['AccountId'] = $this->accountId;
        }
        if (null !== $this->configRuleState) {
            $res['ConfigRuleState'] = $this->configRuleState;
        }
        if (null !== $this->compliance) {
            $res['Compliance'] = null !== $this->compliance ? $this->compliance->toMap() : null;
        }
        if (null !== $this->sourceIdentifier) {
            $res['SourceIdentifier'] = $this->sourceIdentifier;
        }
        if (null !== $this->configRuleArn) {
            $res['ConfigRuleArn'] = $this->configRuleArn;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->createBy) {
            $res['CreateBy'] = null !== $this->createBy ? $this->createBy->toMap() : null;
        }
        if (null !== $this->automationType) {
            $res['AutomationType'] = $this->automationType;
        }
        if (null !== $this->configRuleName) {
            $res['ConfigRuleName'] = $this->configRuleName;
        }
        if (null !== $this->configRuleId) {
            $res['ConfigRuleId'] = $this->configRuleId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return configRuleList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CompliancePackId'])) {
            $model->compliancePackId = $map['CompliancePackId'];
        }
        if (isset($map['RiskLevel'])) {
            $model->riskLevel = $map['RiskLevel'];
        }
        if (isset($map['SourceOwner'])) {
            $model->sourceOwner = $map['SourceOwner'];
        }
        if (isset($map['AccountId'])) {
            $model->accountId = $map['AccountId'];
        }
        if (isset($map['ConfigRuleState'])) {
            $model->configRuleState = $map['ConfigRuleState'];
        }
        if (isset($map['Compliance'])) {
            $model->compliance = compliance::fromMap($map['Compliance']);
        }
        if (isset($map['SourceIdentifier'])) {
            $model->sourceIdentifier = $map['SourceIdentifier'];
        }
        if (isset($map['ConfigRuleArn'])) {
            $model->configRuleArn = $map['ConfigRuleArn'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['CreateBy'])) {
            $model->createBy = createBy::fromMap($map['CreateBy']);
        }
        if (isset($map['AutomationType'])) {
            $model->automationType = $map['AutomationType'];
        }
        if (isset($map['ConfigRuleName'])) {
            $model->configRuleName = $map['ConfigRuleName'];
        }
        if (isset($map['ConfigRuleId'])) {
            $model->configRuleId = $map['ConfigRuleId'];
        }

        return $model;
    }
}
