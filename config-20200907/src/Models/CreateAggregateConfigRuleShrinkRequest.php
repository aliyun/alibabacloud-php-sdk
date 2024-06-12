<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models;

use AlibabaCloud\Tea\Model;

class CreateAggregateConfigRuleShrinkRequest extends Model
{
    /**
     * @description The ID of the account group.
     *
     * This parameter is required.
     * @example ca-a4e5626622af0079****
     *
     * @var string
     */
    public $aggregatorId;

    /**
     * @description The client token that is used to ensure the idempotence of the request. You can use the client to generate the token, but you must make sure that the token is unique among different requests. The `token` can contain only ASCII characters and cannot exceed 64 characters in length.
     *
     * @example 1594295238-f9361358-5843-4294-8d30-b5183fac****
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description The rule name.
     *
     * This parameter is required.
     * @var string
     */
    public $configRuleName;

    /**
     * @description The trigger type of the rule. Valid values:
     *
     *   ConfigurationItemChangeNotification: The rule is triggered by configuration changes.
     *   ScheduledNotification: The rule is periodically triggered.
     *
     * This parameter is required.
     * @example ConfigurationItemChangeNotification
     *
     * @var string
     */
    public $configRuleTriggerTypes;

    /**
     * @description The description of the rule.
     *
     * @var string
     */
    public $description;

    /**
     * @description The ID of the member account to which the rule does not apply, which means that the resources within the member account are not evaluated based on the rule. Separate multiple member account IDs with commas (,).
     *
     * > This parameter applies only to a managed rule.
     * @example 120886317861****
     *
     * @var string
     */
    public $excludeAccountIdsScope;

    /**
     * @description The ID of the resource directory to which the rule does not apply, which means that the resources within member accounts in the resource directory are not evaluated based on the rule. Separate multiple resource directory IDs with commas (,).
     *
     * >
     *
     *   This parameter applies only to a rule of a global account group.
     *
     *   This parameter applies only to a managed rule.
     *
     * @example fd-pWmkqZ****
     *
     * @var string
     */
    public $excludeFolderIdsScope;

    /**
     * @description The ID of the resource to be excluded from the compliance evaluations performed by the rule. Separate multiple resource IDs with commas (,).
     *
     * > This parameter applies only to a managed rule.
     * @example lb-t4nbowvtbkss7t326****
     *
     * @var string
     */
    public $excludeResourceIdsScope;

    /**
     * @description The ID of the resource directory to which the rule applies, which means that the resources within member accounts in the resource directory are evaluated based on the rule.
     *
     * >
     *
     *   This parameter applies only to a rule of a global account group.
     *
     *   This parameter applies only to a managed rule.
     *
     * @example fd-ZtHsRH****
     *
     * @var string
     */
    public $folderIdsScope;

    /**
     * @description The input parameter of the rule.
     *
     * @example {"tag1Key":"ECS","tag1Value":"test"}
     *
     * @var string
     */
    public $inputParametersShrink;

    /**
     * @description The interval at which the rule is triggered. Valid values:
     *
     *   One_Hour: 1 hour.
     *   Three_Hours: 3 hours.
     *   Six_Hours: 6 hours.
     *   Twelve_Hours: 12 hours.
     *   TwentyFour_Hours (default): 24 hours.
     *
     * > This parameter is required if the `ConfigRuleTriggerTypes` parameter is set to `ScheduledNotification`.
     * @example One_Hour
     *
     * @var string
     */
    public $maximumExecutionFrequency;

    /**
     * @description The ID of the region to which the rule applies. Separate multiple region IDs with commas (,).
     *
     * > This parameter applies only to a managed rule.
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionIdsScope;

    /**
     * @description The ID of the resource group to which the rule applies. Separate multiple resource group IDs with commas (,).
     *
     * > This parameter applies only to a managed rule.
     * @example rg-aekzc7r7rhx****
     *
     * @var string
     */
    public $resourceGroupIdsScope;

    /**
     * @description The type of the resource evaluated by the rule. Separate multiple resource types with commas (,).
     *
     * This parameter is required.
     * @example ACS::ECS::Instance
     *
     * @var string
     */
    public $resourceTypesScopeShrink;

    /**
     * @description The risk level of the resources that are not compliant with the rule. Valid values:
     *
     *   1: high risk level
     *   2: medium risk level
     *   3: low risk level
     *
     * This parameter is required.
     * @example 1
     *
     * @var int
     */
    public $riskLevel;

    /**
     * @description The identifier of the rule.
     *
     *   If you set the SourceOwner parameter to ALIYUN, set this parameter to the name of the managed rule.
     *   If you set the SourceOwner parameter to CUSTOM_FC, set this parameter to the Alibaba Cloud Resource Name (ARN) of the relevant function in Function Compute.
     *
     * This parameter is required.
     * @example required-tags
     *
     * @var string
     */
    public $sourceIdentifier;

    /**
     * @description The type of the rule. Valid values:
     *
     *   ALIYUN: managed rule
     *   CUSTOM_FC: custom rule
     *
     * This parameter is required.
     * @example ALIYUN
     *
     * @var string
     */
    public $sourceOwner;

    /**
     * @description The logical relationship among the tag keys if you specify multiple tag keys for the `TagKeyScope` parameter. For example, if you set the `TagKeyScope` parameter to `ECS,OSS` and the TagKeyLogicScope parameter to `AND`, the rule applies to resources with both the `ECS` and `OSS` tag keys. Valid values:
     *
     *   AND
     *   OR
     *
     * @example AND
     *
     * @var string
     */
    public $tagKeyLogicScope;

    /**
     * @description The tag key used to filter resources. The rule applies only to the resources with the specified tag key. Separate multiple parameter values with commas (,).
     *
     * > This parameter applies only to a managed rule. You must configure the `TagKeyScope` and `TagValueScope` parameters at the same time.
     * @example ECS
     *
     * @var string
     */
    public $tagKeyScope;

    /**
     * @description The tag value used to filter resources. The rule applies only to the resources with the specified tag value.
     *
     * > This parameter applies only to a managed rule. You must configure the `TagKeyScope` and `TagValueScope` parameters at the same time.
     * @example test
     *
     * @var string
     */
    public $tagValueScope;
    protected $_name = [
        'aggregatorId'              => 'AggregatorId',
        'clientToken'               => 'ClientToken',
        'configRuleName'            => 'ConfigRuleName',
        'configRuleTriggerTypes'    => 'ConfigRuleTriggerTypes',
        'description'               => 'Description',
        'excludeAccountIdsScope'    => 'ExcludeAccountIdsScope',
        'excludeFolderIdsScope'     => 'ExcludeFolderIdsScope',
        'excludeResourceIdsScope'   => 'ExcludeResourceIdsScope',
        'folderIdsScope'            => 'FolderIdsScope',
        'inputParametersShrink'     => 'InputParameters',
        'maximumExecutionFrequency' => 'MaximumExecutionFrequency',
        'regionIdsScope'            => 'RegionIdsScope',
        'resourceGroupIdsScope'     => 'ResourceGroupIdsScope',
        'resourceTypesScopeShrink'  => 'ResourceTypesScope',
        'riskLevel'                 => 'RiskLevel',
        'sourceIdentifier'          => 'SourceIdentifier',
        'sourceOwner'               => 'SourceOwner',
        'tagKeyLogicScope'          => 'TagKeyLogicScope',
        'tagKeyScope'               => 'TagKeyScope',
        'tagValueScope'             => 'TagValueScope',
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
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->configRuleName) {
            $res['ConfigRuleName'] = $this->configRuleName;
        }
        if (null !== $this->configRuleTriggerTypes) {
            $res['ConfigRuleTriggerTypes'] = $this->configRuleTriggerTypes;
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
        if (null !== $this->excludeResourceIdsScope) {
            $res['ExcludeResourceIdsScope'] = $this->excludeResourceIdsScope;
        }
        if (null !== $this->folderIdsScope) {
            $res['FolderIdsScope'] = $this->folderIdsScope;
        }
        if (null !== $this->inputParametersShrink) {
            $res['InputParameters'] = $this->inputParametersShrink;
        }
        if (null !== $this->maximumExecutionFrequency) {
            $res['MaximumExecutionFrequency'] = $this->maximumExecutionFrequency;
        }
        if (null !== $this->regionIdsScope) {
            $res['RegionIdsScope'] = $this->regionIdsScope;
        }
        if (null !== $this->resourceGroupIdsScope) {
            $res['ResourceGroupIdsScope'] = $this->resourceGroupIdsScope;
        }
        if (null !== $this->resourceTypesScopeShrink) {
            $res['ResourceTypesScope'] = $this->resourceTypesScopeShrink;
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
     * @return CreateAggregateConfigRuleShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AggregatorId'])) {
            $model->aggregatorId = $map['AggregatorId'];
        }
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['ConfigRuleName'])) {
            $model->configRuleName = $map['ConfigRuleName'];
        }
        if (isset($map['ConfigRuleTriggerTypes'])) {
            $model->configRuleTriggerTypes = $map['ConfigRuleTriggerTypes'];
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
        if (isset($map['ExcludeResourceIdsScope'])) {
            $model->excludeResourceIdsScope = $map['ExcludeResourceIdsScope'];
        }
        if (isset($map['FolderIdsScope'])) {
            $model->folderIdsScope = $map['FolderIdsScope'];
        }
        if (isset($map['InputParameters'])) {
            $model->inputParametersShrink = $map['InputParameters'];
        }
        if (isset($map['MaximumExecutionFrequency'])) {
            $model->maximumExecutionFrequency = $map['MaximumExecutionFrequency'];
        }
        if (isset($map['RegionIdsScope'])) {
            $model->regionIdsScope = $map['RegionIdsScope'];
        }
        if (isset($map['ResourceGroupIdsScope'])) {
            $model->resourceGroupIdsScope = $map['ResourceGroupIdsScope'];
        }
        if (isset($map['ResourceTypesScope'])) {
            $model->resourceTypesScopeShrink = $map['ResourceTypesScope'];
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
