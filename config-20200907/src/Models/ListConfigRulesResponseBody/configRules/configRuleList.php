<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models\ListConfigRulesResponseBody\configRules;

use AlibabaCloud\SDK\Config\V20200907\Models\ListConfigRulesResponseBody\configRules\configRuleList\compliance;
use AlibabaCloud\SDK\Config\V20200907\Models\ListConfigRulesResponseBody\configRules\configRuleList\createBy;
use AlibabaCloud\SDK\Config\V20200907\Models\ListConfigRulesResponseBody\configRules\configRuleList\tags;
use AlibabaCloud\Tea\Model;

class configRuleList extends Model
{
    /**
     * @description The ID of the management account to which the rule belongs.
     *
     * @example 100931896542****
     *
     * @var int
     */
    public $accountId;

    /**
     * @description The type of the remediation template. Valid value: OOS, which indicates Operation Orchestration Service.
     *
     * @example OOS
     *
     * @var string
     */
    public $automationType;

    /**
     * @description The compliance evaluation result.
     *
     * @var compliance
     */
    public $compliance;

    /**
     * @description The ARN of the rule.
     *
     * @example acs:config::100931896542****:rule/cr-fdc8626622af00f9****
     *
     * @var string
     */
    public $configRuleArn;

    /**
     * @description The rule ID.
     *
     * @example cr-fdc8626622af00f9****
     *
     * @var string
     */
    public $configRuleId;

    /**
     * @description The rule name.
     *
     * @example test-rule-name
     *
     * @var string
     */
    public $configRuleName;

    /**
     * @description The status of the rule. Valid values:
     *
     * - INACTIVE: The rule is disabled.
     * @example ACTIVE
     *
     * @var string
     */
    public $configRuleState;

    /**
     * @description The information about the creation of the rule.
     *
     * @var createBy
     */
    public $createBy;

    /**
     * @description The description of the rule.
     *
     * @example The description of the test rule.
     *
     * @var string
     */
    public $description;

    /**
     * @description The types of resources evaluated by the rule. Multiple resource types are separated with commas (,).
     *
     * @example ACS::EIP::EipAddress
     *
     * @var string
     */
    public $resourceTypesScope;

    /**
     * @description The risk level of the resources that are not compliant with the rule. Valid values:
     *
     * - 3: low
     * @example 1
     *
     * @var int
     */
    public $riskLevel;

    /**
     * @description The ID of the rule.
     *
     * - If the rule is a custom rule, the value of this parameter is the Alibaba Cloud Resource Name (ARN) of the relevant function in Function Compute.
     * @example eip-bandwidth-limit
     *
     * @var string
     */
    public $sourceIdentifier;

    /**
     * @description The type of the rule. Valid values:
     *
     * - ALIYUN: managed rule
     * @example ALIYUN
     *
     * @var string
     */
    public $sourceOwner;

    /**
     * @description The tags of the rule.
     *
     * @var tags[]
     */
    public $tags;
    protected $_name = [
        'accountId'          => 'AccountId',
        'automationType'     => 'AutomationType',
        'compliance'         => 'Compliance',
        'configRuleArn'      => 'ConfigRuleArn',
        'configRuleId'       => 'ConfigRuleId',
        'configRuleName'     => 'ConfigRuleName',
        'configRuleState'    => 'ConfigRuleState',
        'createBy'           => 'CreateBy',
        'description'        => 'Description',
        'resourceTypesScope' => 'ResourceTypesScope',
        'riskLevel'          => 'RiskLevel',
        'sourceIdentifier'   => 'SourceIdentifier',
        'sourceOwner'        => 'SourceOwner',
        'tags'               => 'Tags',
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
        if (null !== $this->resourceTypesScope) {
            $res['ResourceTypesScope'] = $this->resourceTypesScope;
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
        if (isset($map['ResourceTypesScope'])) {
            $model->resourceTypesScope = $map['ResourceTypesScope'];
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
