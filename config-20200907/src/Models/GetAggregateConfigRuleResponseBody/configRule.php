<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models\GetAggregateConfigRuleResponseBody;

use AlibabaCloud\SDK\Config\V20200907\Models\GetAggregateConfigRuleResponseBody\configRule\compliance;
use AlibabaCloud\SDK\Config\V20200907\Models\GetAggregateConfigRuleResponseBody\configRule\configRuleEvaluationStatus;
use AlibabaCloud\SDK\Config\V20200907\Models\GetAggregateConfigRuleResponseBody\configRule\createBy;
use AlibabaCloud\SDK\Config\V20200907\Models\GetAggregateConfigRuleResponseBody\configRule\excludeTagsScope;
use AlibabaCloud\SDK\Config\V20200907\Models\GetAggregateConfigRuleResponseBody\configRule\managedRule;
use AlibabaCloud\SDK\Config\V20200907\Models\GetAggregateConfigRuleResponseBody\configRule\source;
use AlibabaCloud\SDK\Config\V20200907\Models\GetAggregateConfigRuleResponseBody\configRule\tagsScope;
use AlibabaCloud\Tea\Model;

class configRule extends Model
{
    /**
     * @description The ID of the Alibaba Cloud account to which the rule belongs.
     *
     * @example 120886317861****
     *
     * @var int
     */
    public $accountId;

    /**
     * @var string
     */
    public $accountIdsScope;

    /**
     * @description The details of compliance evaluation results.
     *
     * @var compliance
     */
    public $compliance;

    /**
     * @description The ARN of the managed rule.
     *
     * @example acs:config::100931896542****:rule/cr-7f7d626622af0041****
     *
     * @var string
     */
    public $configRuleArn;

    /**
     * @description The information about compliance evaluations performed by the rule.
     *
     * @var configRuleEvaluationStatus
     */
    public $configRuleEvaluationStatus;

    /**
     * @description The ID of the rule.
     *
     * @example cr-7f7d626622af0041****
     *
     * @var string
     */
    public $configRuleId;

    /**
     * @description The name of the monitoring rule.
     *
     * @var string
     */
    public $configRuleName;

    /**
     * @description The status of the rule. Valid values:
     *
     *   ACTIVE: The rule is being used to monitor resource configurations.
     *   DELETING: The rule is being deleted.
     *   EVALUATING: The rule is triggered and is being used to monitor resource configurations.
     *   INACTIVE: The rule is disabled and is no longer used to monitor resource configurations.
     *
     * @example ACTIVE
     *
     * @var string
     */
    public $configRuleState;

    /**
     * @description The trigger type of the rule. Valid values:
     *
     *   ConfigurationItemChangeNotification: The managed rule is triggered by configuration changes.
     *   ScheduledNotification: The managed rule is periodically triggered.
     *
     * @example ConfigurationItemChangeNotification
     *
     * @var string
     */
    public $configRuleTriggerTypes;

    /**
     * @description The information about the creation of the rule.
     *
     * @var createBy
     */
    public $createBy;

    /**
     * @description The timestamp when the rule was created. Unit: milliseconds.
     *
     * @example 1604684022000
     *
     * @var int
     */
    public $createTimestamp;

    /**
     * @description The description of the managed rule.
     *
     * @var string
     */
    public $description;

    /**
     * @description The ID of the member account to which the rule does not apply, which means that the resources within the member account are not evaluated based on the rule.
     *
     * >  This parameter applies only to a managed rule.
     * @example 120886317861****
     *
     * @var string
     */
    public $excludeAccountIdsScope;

    /**
     * @description The ID of the resource directory to which the rule does not apply, which means that the resources within member accounts in the resource directory are not evaluated based on the rule.
     *
     * >
     *   This parameter applies only to a rule of a global account group.
     *   This parameter applies only to a managed rule.
     *
     * @example fd-pWmkqZ****
     *
     * @var string
     */
    public $excludeFolderIdsScope;

    /**
     * @var string
     */
    public $excludeRegionIdsScope;

    /**
     * @var string
     */
    public $excludeResourceGroupIdsScope;

    /**
     * @description The ID of the resource excluded from the compliance evaluations performed by the rule.
     *
     * @example 23642660635687****
     *
     * @var string
     */
    public $excludeResourceIdsScope;

    /**
     * @var excludeTagsScope[]
     */
    public $excludeTagsScope;

    /**
     * @description The ID of the resource directory to which the rule applies, which means that the resources within member accounts in the resource directory are evaluated based on the rule.
     *
     * >
     *   This parameter applies only to rules of a global account group.
     *   This parameter applies only to managed rules.
     *
     * @example fd-ZtHsRH****
     *
     * @var string
     */
    public $folderIdsScope;

    /**
     * @description The input parameters of the rule.
     *
     * @example {"tag1Key":"ECS","tag1Value":"test"}
     *
     * @var mixed[]
     */
    public $inputParameters;

    /**
     * @description The details of the managed rule.
     *
     * @var managedRule
     */
    public $managedRule;

    /**
     * @description The intervals at which the managed rule is triggered. Valid values:
     *
     *   One_Hour: 1 hour.
     *   Three_Hours: 3 hours.
     *   Six_Hours: 6 hours.
     *   Twelve_Hours: 12 hours
     *   TwentyFour_Hours: 24 hours
     *
     * @example One_Hour
     *
     * @var string
     */
    public $maximumExecutionFrequency;

    /**
     * @description The timestamp when the rule was last updated. Unit: milliseconds.
     *
     * @example 1614687022000
     *
     * @var int
     */
    public $modifiedTimestamp;

    /**
     * @description The ID of the region to which the rule applies.
     *
     * @example global
     *
     * @var string
     */
    public $regionIdsScope;

    /**
     * @description The ID of the resource group to which the rule applies.
     *
     * @example rg-aekzdibsjjc****
     *
     * @var string
     */
    public $resourceGroupIdsScope;

    /**
     * @var string
     */
    public $resourceIdsScope;

    /**
     * @description The type of the resource evaluated by the rule.
     *
     * @example ACS::RAM::User
     *
     * @var string
     */
    public $resourceTypesScope;

    /**
     * @description The risk level of the resources that are not compliant with the rule. Valid values:
     *
     *   1: high risk level
     *   2: medium risk level
     *   3: low risk level
     *
     * @example 1
     *
     * @var int
     */
    public $riskLevel;

    /**
     * @description The information about how the rule was created.
     *
     * @var source
     */
    public $source;

    /**
     * @description The logical relationship among the tag keys if you specify multiple tag keys by using the `TagKeyScope` parameter. For example, if the `TagKeyScope` parameter is set to `ECS,OSS` and the TagKeyLogicScope parameter is set to `AND`, the rule applies to resources with both the `ECS` and `OSS` tag keys. Valid values:
     *
     *   AND: the logical relationship of AND
     *   OR: the logical relationship of OR
     *
     * @example AND
     *
     * @var string
     */
    public $tagKeyLogicScope;

    /**
     * @description The tag key used to filter resources. The rule applies only to the resources with the specified tag key.
     *
     * @example RAM
     *
     * @var string
     */
    public $tagKeyScope;

    /**
     * @description The tag value used to filter resources. The rule applies only to the resources with the specified tag value.
     *
     * @example MFA
     *
     * @var string
     */
    public $tagValueScope;

    /**
     * @var tagsScope[]
     */
    public $tagsScope;
    protected $_name = [
        'accountId'                    => 'AccountId',
        'accountIdsScope'              => 'AccountIdsScope',
        'compliance'                   => 'Compliance',
        'configRuleArn'                => 'ConfigRuleArn',
        'configRuleEvaluationStatus'   => 'ConfigRuleEvaluationStatus',
        'configRuleId'                 => 'ConfigRuleId',
        'configRuleName'               => 'ConfigRuleName',
        'configRuleState'              => 'ConfigRuleState',
        'configRuleTriggerTypes'       => 'ConfigRuleTriggerTypes',
        'createBy'                     => 'CreateBy',
        'createTimestamp'              => 'CreateTimestamp',
        'description'                  => 'Description',
        'excludeAccountIdsScope'       => 'ExcludeAccountIdsScope',
        'excludeFolderIdsScope'        => 'ExcludeFolderIdsScope',
        'excludeRegionIdsScope'        => 'ExcludeRegionIdsScope',
        'excludeResourceGroupIdsScope' => 'ExcludeResourceGroupIdsScope',
        'excludeResourceIdsScope'      => 'ExcludeResourceIdsScope',
        'excludeTagsScope'             => 'ExcludeTagsScope',
        'folderIdsScope'               => 'FolderIdsScope',
        'inputParameters'              => 'InputParameters',
        'managedRule'                  => 'ManagedRule',
        'maximumExecutionFrequency'    => 'MaximumExecutionFrequency',
        'modifiedTimestamp'            => 'ModifiedTimestamp',
        'regionIdsScope'               => 'RegionIdsScope',
        'resourceGroupIdsScope'        => 'ResourceGroupIdsScope',
        'resourceIdsScope'             => 'ResourceIdsScope',
        'resourceTypesScope'           => 'ResourceTypesScope',
        'riskLevel'                    => 'RiskLevel',
        'source'                       => 'Source',
        'tagKeyLogicScope'             => 'TagKeyLogicScope',
        'tagKeyScope'                  => 'TagKeyScope',
        'tagValueScope'                => 'TagValueScope',
        'tagsScope'                    => 'TagsScope',
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
        if (null !== $this->accountIdsScope) {
            $res['AccountIdsScope'] = $this->accountIdsScope;
        }
        if (null !== $this->compliance) {
            $res['Compliance'] = null !== $this->compliance ? $this->compliance->toMap() : null;
        }
        if (null !== $this->configRuleArn) {
            $res['ConfigRuleArn'] = $this->configRuleArn;
        }
        if (null !== $this->configRuleEvaluationStatus) {
            $res['ConfigRuleEvaluationStatus'] = null !== $this->configRuleEvaluationStatus ? $this->configRuleEvaluationStatus->toMap() : null;
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
        if (null !== $this->configRuleTriggerTypes) {
            $res['ConfigRuleTriggerTypes'] = $this->configRuleTriggerTypes;
        }
        if (null !== $this->createBy) {
            $res['CreateBy'] = null !== $this->createBy ? $this->createBy->toMap() : null;
        }
        if (null !== $this->createTimestamp) {
            $res['CreateTimestamp'] = $this->createTimestamp;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->excludeAccountIdsScope) {
            $res['ExcludeAccountIdsScope'] = $this->excludeAccountIdsScope;
        }
        if (null !== $this->excludeFolderIdsScope) {
            $res['ExcludeFolderIdsScope'] = $this->excludeFolderIdsScope;
        }
        if (null !== $this->excludeRegionIdsScope) {
            $res['ExcludeRegionIdsScope'] = $this->excludeRegionIdsScope;
        }
        if (null !== $this->excludeResourceGroupIdsScope) {
            $res['ExcludeResourceGroupIdsScope'] = $this->excludeResourceGroupIdsScope;
        }
        if (null !== $this->excludeResourceIdsScope) {
            $res['ExcludeResourceIdsScope'] = $this->excludeResourceIdsScope;
        }
        if (null !== $this->excludeTagsScope) {
            $res['ExcludeTagsScope'] = [];
            if (null !== $this->excludeTagsScope && \is_array($this->excludeTagsScope)) {
                $n = 0;
                foreach ($this->excludeTagsScope as $item) {
                    $res['ExcludeTagsScope'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->folderIdsScope) {
            $res['FolderIdsScope'] = $this->folderIdsScope;
        }
        if (null !== $this->inputParameters) {
            $res['InputParameters'] = $this->inputParameters;
        }
        if (null !== $this->managedRule) {
            $res['ManagedRule'] = null !== $this->managedRule ? $this->managedRule->toMap() : null;
        }
        if (null !== $this->maximumExecutionFrequency) {
            $res['MaximumExecutionFrequency'] = $this->maximumExecutionFrequency;
        }
        if (null !== $this->modifiedTimestamp) {
            $res['ModifiedTimestamp'] = $this->modifiedTimestamp;
        }
        if (null !== $this->regionIdsScope) {
            $res['RegionIdsScope'] = $this->regionIdsScope;
        }
        if (null !== $this->resourceGroupIdsScope) {
            $res['ResourceGroupIdsScope'] = $this->resourceGroupIdsScope;
        }
        if (null !== $this->resourceIdsScope) {
            $res['ResourceIdsScope'] = $this->resourceIdsScope;
        }
        if (null !== $this->resourceTypesScope) {
            $res['ResourceTypesScope'] = $this->resourceTypesScope;
        }
        if (null !== $this->riskLevel) {
            $res['RiskLevel'] = $this->riskLevel;
        }
        if (null !== $this->source) {
            $res['Source'] = null !== $this->source ? $this->source->toMap() : null;
        }
        if (null !== $this->tagKeyLogicScope) {
            $res['TagKeyLogicScope'] = $this->tagKeyLogicScope;
        }
        if (null !== $this->tagKeyScope) {
            $res['TagKeyScope'] = $this->tagKeyScope;
        }
        if (null !== $this->tagValueScope) {
            $res['TagValueScope'] = $this->tagValueScope;
        }
        if (null !== $this->tagsScope) {
            $res['TagsScope'] = [];
            if (null !== $this->tagsScope && \is_array($this->tagsScope)) {
                $n = 0;
                foreach ($this->tagsScope as $item) {
                    $res['TagsScope'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return configRule
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccountId'])) {
            $model->accountId = $map['AccountId'];
        }
        if (isset($map['AccountIdsScope'])) {
            $model->accountIdsScope = $map['AccountIdsScope'];
        }
        if (isset($map['Compliance'])) {
            $model->compliance = compliance::fromMap($map['Compliance']);
        }
        if (isset($map['ConfigRuleArn'])) {
            $model->configRuleArn = $map['ConfigRuleArn'];
        }
        if (isset($map['ConfigRuleEvaluationStatus'])) {
            $model->configRuleEvaluationStatus = configRuleEvaluationStatus::fromMap($map['ConfigRuleEvaluationStatus']);
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
        if (isset($map['ConfigRuleTriggerTypes'])) {
            $model->configRuleTriggerTypes = $map['ConfigRuleTriggerTypes'];
        }
        if (isset($map['CreateBy'])) {
            $model->createBy = createBy::fromMap($map['CreateBy']);
        }
        if (isset($map['CreateTimestamp'])) {
            $model->createTimestamp = $map['CreateTimestamp'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['ExcludeAccountIdsScope'])) {
            $model->excludeAccountIdsScope = $map['ExcludeAccountIdsScope'];
        }
        if (isset($map['ExcludeFolderIdsScope'])) {
            $model->excludeFolderIdsScope = $map['ExcludeFolderIdsScope'];
        }
        if (isset($map['ExcludeRegionIdsScope'])) {
            $model->excludeRegionIdsScope = $map['ExcludeRegionIdsScope'];
        }
        if (isset($map['ExcludeResourceGroupIdsScope'])) {
            $model->excludeResourceGroupIdsScope = $map['ExcludeResourceGroupIdsScope'];
        }
        if (isset($map['ExcludeResourceIdsScope'])) {
            $model->excludeResourceIdsScope = $map['ExcludeResourceIdsScope'];
        }
        if (isset($map['ExcludeTagsScope'])) {
            if (!empty($map['ExcludeTagsScope'])) {
                $model->excludeTagsScope = [];
                $n                       = 0;
                foreach ($map['ExcludeTagsScope'] as $item) {
                    $model->excludeTagsScope[$n++] = null !== $item ? excludeTagsScope::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['FolderIdsScope'])) {
            $model->folderIdsScope = $map['FolderIdsScope'];
        }
        if (isset($map['InputParameters'])) {
            $model->inputParameters = $map['InputParameters'];
        }
        if (isset($map['ManagedRule'])) {
            $model->managedRule = managedRule::fromMap($map['ManagedRule']);
        }
        if (isset($map['MaximumExecutionFrequency'])) {
            $model->maximumExecutionFrequency = $map['MaximumExecutionFrequency'];
        }
        if (isset($map['ModifiedTimestamp'])) {
            $model->modifiedTimestamp = $map['ModifiedTimestamp'];
        }
        if (isset($map['RegionIdsScope'])) {
            $model->regionIdsScope = $map['RegionIdsScope'];
        }
        if (isset($map['ResourceGroupIdsScope'])) {
            $model->resourceGroupIdsScope = $map['ResourceGroupIdsScope'];
        }
        if (isset($map['ResourceIdsScope'])) {
            $model->resourceIdsScope = $map['ResourceIdsScope'];
        }
        if (isset($map['ResourceTypesScope'])) {
            $model->resourceTypesScope = $map['ResourceTypesScope'];
        }
        if (isset($map['RiskLevel'])) {
            $model->riskLevel = $map['RiskLevel'];
        }
        if (isset($map['Source'])) {
            $model->source = source::fromMap($map['Source']);
        }
        if (isset($map['TagKeyLogicScope'])) {
            $model->tagKeyLogicScope = $map['TagKeyLogicScope'];
        }
        if (isset($map['TagKeyScope'])) {
            $model->tagKeyScope = $map['TagKeyScope'];
        }
        if (isset($map['TagValueScope'])) {
            $model->tagValueScope = $map['TagValueScope'];
        }
        if (isset($map['TagsScope'])) {
            if (!empty($map['TagsScope'])) {
                $model->tagsScope = [];
                $n                = 0;
                foreach ($map['TagsScope'] as $item) {
                    $model->tagsScope[$n++] = null !== $item ? tagsScope::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
