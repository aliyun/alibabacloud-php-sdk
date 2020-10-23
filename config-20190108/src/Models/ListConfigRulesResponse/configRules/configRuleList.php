<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20190108\Models\ListConfigRulesResponse\configRules;

use AlibabaCloud\SDK\Config\V20190108\Models\ListConfigRulesResponse\configRules\configRuleList\compliance;
use AlibabaCloud\SDK\Config\V20190108\Models\ListConfigRulesResponse\configRules\configRuleList\createBy;
use AlibabaCloud\Tea\Model;

class configRuleList extends Model
{
    /**
     * @var int
     */
    public $accountId;

    /**
     * @var string
     */
    public $configRuleArn;

    /**
     * @var string
     */
    public $configRuleId;

    /**
     * @var string
     */
    public $configRuleName;

    /**
     * @var string
     */
    public $configRuleState;

    /**
     * @var string
     */
    public $description;

    /**
     * @var int
     */
    public $riskLevel;

    /**
     * @var string
     */
    public $sourceIdentifier;

    /**
     * @var string
     */
    public $sourceOwner;

    /**
     * @var string
     */
    public $automationType;

    /**
     * @var compliance
     */
    public $compliance;

    /**
     * @var createBy
     */
    public $createBy;
    protected $_name = [
        'accountId'        => 'AccountId',
        'configRuleArn'    => 'ConfigRuleArn',
        'configRuleId'     => 'ConfigRuleId',
        'configRuleName'   => 'ConfigRuleName',
        'configRuleState'  => 'ConfigRuleState',
        'description'      => 'Description',
        'riskLevel'        => 'RiskLevel',
        'sourceIdentifier' => 'SourceIdentifier',
        'sourceOwner'      => 'SourceOwner',
        'automationType'   => 'AutomationType',
        'compliance'       => 'Compliance',
        'createBy'         => 'CreateBy',
    ];

    public function validate()
    {
        Model::validateRequired('accountId', $this->accountId, true);
        Model::validateRequired('configRuleArn', $this->configRuleArn, true);
        Model::validateRequired('configRuleId', $this->configRuleId, true);
        Model::validateRequired('configRuleName', $this->configRuleName, true);
        Model::validateRequired('configRuleState', $this->configRuleState, true);
        Model::validateRequired('description', $this->description, true);
        Model::validateRequired('riskLevel', $this->riskLevel, true);
        Model::validateRequired('sourceIdentifier', $this->sourceIdentifier, true);
        Model::validateRequired('sourceOwner', $this->sourceOwner, true);
        Model::validateRequired('automationType', $this->automationType, true);
        Model::validateRequired('compliance', $this->compliance, true);
        Model::validateRequired('createBy', $this->createBy, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accountId) {
            $res['AccountId'] = $this->accountId;
        }
        if (null !== $this->configRuleArn) {
            $res['ConfigRuleArn'] = $this->configRuleArn;
        }
        if (null !== $this->configRuleId) {
            $res['ConfigRuleId'] = $this->configRuleId;
        }
        if (null !== $this->configRuleName) {
            $res['ConfigRuleName'] = $this->configRuleName;
        }
        if (null !== $this->configRuleState) {
            $res['ConfigRuleState'] = $this->configRuleState;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->riskLevel) {
            $res['RiskLevel'] = $this->riskLevel;
        }
        if (null !== $this->sourceIdentifier) {
            $res['SourceIdentifier'] = $this->sourceIdentifier;
        }
        if (null !== $this->sourceOwner) {
            $res['SourceOwner'] = $this->sourceOwner;
        }
        if (null !== $this->automationType) {
            $res['AutomationType'] = $this->automationType;
        }
        if (null !== $this->compliance) {
            $res['Compliance'] = null !== $this->compliance ? $this->compliance->toMap() : null;
        }
        if (null !== $this->createBy) {
            $res['CreateBy'] = null !== $this->createBy ? $this->createBy->toMap() : null;
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
        if (isset($map['AccountId'])) {
            $model->accountId = $map['AccountId'];
        }
        if (isset($map['ConfigRuleArn'])) {
            $model->configRuleArn = $map['ConfigRuleArn'];
        }
        if (isset($map['ConfigRuleId'])) {
            $model->configRuleId = $map['ConfigRuleId'];
        }
        if (isset($map['ConfigRuleName'])) {
            $model->configRuleName = $map['ConfigRuleName'];
        }
        if (isset($map['ConfigRuleState'])) {
            $model->configRuleState = $map['ConfigRuleState'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['RiskLevel'])) {
            $model->riskLevel = $map['RiskLevel'];
        }
        if (isset($map['SourceIdentifier'])) {
            $model->sourceIdentifier = $map['SourceIdentifier'];
        }
        if (isset($map['SourceOwner'])) {
            $model->sourceOwner = $map['SourceOwner'];
        }
        if (isset($map['AutomationType'])) {
            $model->automationType = $map['AutomationType'];
        }
        if (isset($map['Compliance'])) {
            $model->compliance = compliance::fromMap($map['Compliance']);
        }
        if (isset($map['CreateBy'])) {
            $model->createBy = createBy::fromMap($map['CreateBy']);
        }

        return $model;
    }
}
