<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models\GetConfigRuleResponseBody;

use AlibabaCloud\SDK\Config\V20200907\Models\GetConfigRuleResponseBody\configRule\compliance;
use AlibabaCloud\SDK\Config\V20200907\Models\GetConfigRuleResponseBody\configRule\configRuleEvaluationStatus;
use AlibabaCloud\SDK\Config\V20200907\Models\GetConfigRuleResponseBody\configRule\createBy;
use AlibabaCloud\SDK\Config\V20200907\Models\GetConfigRuleResponseBody\configRule\managedRule;
use AlibabaCloud\SDK\Config\V20200907\Models\GetConfigRuleResponseBody\configRule\scope;
use AlibabaCloud\SDK\Config\V20200907\Models\GetConfigRuleResponseBody\configRule\source;
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
     * @description The rule ID.
     *
     * @example cr-7f7d626622af0041****
     *
     * @var string
     */
    public $configRuleId;

    /**
     * @description The name of the defense rule.
     *
     * @var string
     */
    public $configRuleName;

    /**
     * @description The status of the rule. Valid values:
     *
     *   ACTIVE: The rule was being used to monitor resource configurations.
     *   DELETING: The rule was being deleted.
     *   EVALUATING: The rule was triggered and is being used to monitor resource configurations.
     *   INACTIVE: The rule was disabled.
     *
     * @example ACTIVE
     *
     * @var string
     */
    public $configRuleState;

    /**
     * @description The trigger type of the rule. Valid values:
     *
     *   ConfigurationItemChangeNotification: The rule was triggered by configuration changes.
     *   ScheduledNotification: The rule was periodically triggered.
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
     * @description The ID of the resource excluded from the compliance evaluations performed by the rule.
     *
     * @example 23642660635687****
     *
     * @var string
     */
    public $excludeResourceIdsScope;

    /**
     * @description The details of the input parameters of the rule.
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
     * @description The interval at which the rule was triggered. Valid values:
     *
     *   One_Hour: 1 hour.
     *   Three_Hours: 3 hours.
     *   Six_Hours: 6 hours.
     *   Twelve_Hours: 12 hours.
     *   TwentyFour_Hours: 24 hours.
     *
     * > This parameter is returned if the managed rule is periodically triggered.
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
     * @description The type of the resource to be evaluated by the rule.
     *
     * @example ACS::RAM::User
     *
     * @var string
     */
    public $resourceTypesScope;

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

    /**
     * @var scope
     */
    public $scope;

    /**
     * @description The information about how the rule was created.
     *
     * @var source
     */
    public $source;

    /**
     * @description The ID of the member account to which the rule does not apply, which means that the resources within the member account are not evaluated based on the rule.
     *
     * > This parameter applies only to a managed rule.
     * @example 120886317861****
     *
     * @var string
     */
    public $tagKeyLogicScope;

    /**
     * @description The tag key used to filter resources. The rule applies only to the resources with the specified tag key.
     *
     * > The `TagKeyScope` and `TagValueScope` parameters are returned at the same time.
     * @example RAM
     *
     * @var string
     */
    public $tagKeyScope;

    /**
     * @description The tag value used to filter resources. The rule applies only to the resources with the specified tag value.
     *
     * > The `TagKeyScope` and `TagValueScope` parameters are returned at the same time.
     * @example MFA
     *
     * @var string
     */
    public $tagValueScope;
    protected $_name = [
        'accountId'                  => 'AccountId',
        'compliance'                 => 'Compliance',
        'configRuleArn'              => 'ConfigRuleArn',
        'configRuleEvaluationStatus' => 'ConfigRuleEvaluationStatus',
        'configRuleId'               => 'ConfigRuleId',
        'configRuleName'             => 'ConfigRuleName',
        'configRuleState'            => 'ConfigRuleState',
        'configRuleTriggerTypes'     => 'ConfigRuleTriggerTypes',
        'createBy'                   => 'CreateBy',
        'createTimestamp'            => 'CreateTimestamp',
        'description'                => 'Description',
        'excludeResourceIdsScope'    => 'ExcludeResourceIdsScope',
        'inputParameters'            => 'InputParameters',
        'managedRule'                => 'ManagedRule',
        'maximumExecutionFrequency'  => 'MaximumExecutionFrequency',
        'modifiedTimestamp'          => 'ModifiedTimestamp',
        'regionIdsScope'             => 'RegionIdsScope',
        'resourceGroupIdsScope'      => 'ResourceGroupIdsScope',
        'resourceTypesScope'         => 'ResourceTypesScope',
        'riskLevel'                  => 'RiskLevel',
        'scope'                      => 'Scope',
        'source'                     => 'Source',
        'tagKeyLogicScope'           => 'TagKeyLogicScope',
        'tagKeyScope'                => 'TagKeyScope',
        'tagValueScope'              => 'TagValueScope',
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
        if (null !== $this->excludeResourceIdsScope) {
            $res['ExcludeResourceIdsScope'] = $this->excludeResourceIdsScope;
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
        if (null !== $this->resourceTypesScope) {
            $res['ResourceTypesScope'] = $this->resourceTypesScope;
        }
        if (null !== $this->riskLevel) {
            $res['RiskLevel'] = $this->riskLevel;
        }
        if (null !== $this->scope) {
            $res['Scope'] = null !== $this->scope ? $this->scope->toMap() : null;
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
        if (isset($map['ExcludeResourceIdsScope'])) {
            $model->excludeResourceIdsScope = $map['ExcludeResourceIdsScope'];
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
        if (isset($map['ResourceTypesScope'])) {
            $model->resourceTypesScope = $map['ResourceTypesScope'];
        }
        if (isset($map['RiskLevel'])) {
            $model->riskLevel = $map['RiskLevel'];
        }
        if (isset($map['Scope'])) {
            $model->scope = scope::fromMap($map['Scope']);
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

        return $model;
    }
}
