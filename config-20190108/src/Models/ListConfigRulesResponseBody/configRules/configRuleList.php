<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20190108\Models\ListConfigRulesResponseBody\configRules;

use AlibabaCloud\SDK\Config\V20190108\Models\ListConfigRulesResponseBody\configRules\configRuleList\compliance;
use AlibabaCloud\SDK\Config\V20190108\Models\ListConfigRulesResponseBody\configRules\configRuleList\createBy;
use AlibabaCloud\SDK\Config\V20190108\Models\ListConfigRulesResponseBody\configRules\configRuleList\tags;
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
    public $automationType;

    /**
     * @var compliance
     */
    public $compliance;

    /**
     * @var string
     */
    public $compliancePackId;

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
     * @var createBy
     */
    public $createBy;

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
     * @var tags[]
     */
    public $tags;
    protected $_name = [
        'accountId'        => 'AccountId',
        'automationType'   => 'AutomationType',
        'compliance'       => 'Compliance',
        'compliancePackId' => 'CompliancePackId',
        'configRuleArn'    => 'ConfigRuleArn',
        'configRuleId'     => 'ConfigRuleId',
        'configRuleName'   => 'ConfigRuleName',
        'configRuleState'  => 'ConfigRuleState',
        'createBy'         => 'CreateBy',
        'description'      => 'Description',
        'riskLevel'        => 'RiskLevel',
        'sourceIdentifier' => 'SourceIdentifier',
        'sourceOwner'      => 'SourceOwner',
        'tags'             => 'Tags',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accountId) {
            $res['AccountId'] = $this->accountId;
        }
        if (null !== $this->automationType) {
            $res['AutomationType'] = $this->automationType;
        }
        if (null !== $this->compliance) {
            $res['Compliance'] = null !== $this->compliance ? $this->compliance->toMap() : null;
        }
        if (null !== $this->compliancePackId) {
            $res['CompliancePackId'] = $this->compliancePackId;
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
        if (null !== $this->createBy) {
            $res['CreateBy'] = null !== $this->createBy ? $this->createBy->toMap() : null;
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
        if (null !== $this->tags) {
            $res['Tags'] = [];
            if (null !== $this->tags && \is_array($this->tags)) {
                $n = 0;
                foreach ($this->tags as $item) {
                    $res['Tags'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
        if (isset($map['AutomationType'])) {
            $model->automationType = $map['AutomationType'];
        }
        if (isset($map['Compliance'])) {
            $model->compliance = compliance::fromMap($map['Compliance']);
        }
        if (isset($map['CompliancePackId'])) {
            $model->compliancePackId = $map['CompliancePackId'];
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
        if (isset($map['CreateBy'])) {
            $model->createBy = createBy::fromMap($map['CreateBy']);
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
        if (isset($map['Tags'])) {
            if (!empty($map['Tags'])) {
                $model->tags = [];
                $n           = 0;
                foreach ($map['Tags'] as $item) {
                    $model->tags[$n++] = null !== $item ? tags::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
