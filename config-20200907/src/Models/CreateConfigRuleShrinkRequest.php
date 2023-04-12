<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models;

use AlibabaCloud\Tea\Model;

class CreateConfigRuleShrinkRequest extends Model
{
    /**
     * @description The client token that you want to use to ensure the idempotency of the request. You can use the client to generate the value, but you must make sure that the value is unique among different requests. The token can contain only ASCII characters and cannot exceed 64 characters in length.``
     *
     * @example 1594295238-f9361358-5843-4294-8d30-b5183fac****
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description The name of the rule.
     *
     * @var string
     */
    public $configRuleName;

    /**
     * @description The trigger type of the rule. Valid values:
     *
     *   ConfigurationItemChangeNotification: The rule is triggered by configuration changes.
     *   ScheduledNotification: The rule is periodically triggered.
     *
     * >  If a rule supports the preceding trigger types, separate the types with a comma (,).
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
     * @description The ID of the resource to be excluded from the compliance evaluations performed by the rule. Separate multiple resource IDs with commas (,).
     *
     * >  This parameter applies only to managed rules.
     * @example lb-t4nbowvtbkss7t326****
     *
     * @var string
     */
    public $excludeResourceIdsScope;

    /**
     * @description The input parameter of the rule.
     *
     * @example {"tag1Key":"ECS","tag1Value":"test"}
     *
     * @var string
     */
    public $inputParametersShrink;

    /**
     * @description The intervals at which the rule is triggered. Valid values:
     *
     *   One_Hour: 1 hour.
     *   Three_Hours: 3 hours.
     *   Six_Hours: 6 hours.
     *   Twelve_Hours: 12 hours.
     *   TwentyFour_Hours (default): 24 hours.
     *
     * >  This parameter is required if the ConfigRuleTriggerTypes parameter is set to ScheduledNotification.
     * @example One_Hour
     *
     * @var string
     */
    public $maximumExecutionFrequency;

    /**
     * @description The ID of the region to which the rule applies. Separate multiple region IDs with commas (,).
     *
     * >  This parameter applies only to managed rules.
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionIdsScope;

    /**
     * @description The ID of the resource group to which the rule applies. Separate multiple resource group IDs with commas (,).
     *
     * >  This parameter applies only to managed rules.
     * @example rg-aekzc7r7rhx****
     *
     * @var string
     */
    public $resourceGroupIdsScope;

    /**
     * @description The type of the resource to be evaluated by the rule. Separate multiple resource types with commas (,).
     *
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
     * @example 1
     *
     * @var int
     */
    public $riskLevel;

    /**
     * @description The ID of the rule.
     *
     *   If you set the SourceOwner parameter to ALIYUN, set this parameter to the name of the managed rule.
     *   If you set the SourceOwner parameter to CUSTOM_FC, set this parameter to the Alibaba Cloud Resource Name (ARN) of the relevant function in Function Compute.
     *
     * For more information about how to query the name of a managed rule, see [Managed rules](~~127404~~).
     * @example required-tags
     *
     * @var string
     */
    public $sourceIdentifier;

    /**
     * @description The type of the rule Valid values:
     *
     *   ALIYUN: managed rule.
     *   CUSTOM_FC: custom rule.
     *
     * @example ALIYUN
     *
     * @var string
     */
    public $sourceOwner;

    /**
     * @description The logical relationship among the tag keys if you specify multiple tag keys for the `TagKeyScope` parameter. For example, if you set the `TagKeyScope` parameter to `ECS,OSS` and the TagKeyLogicScope parameter to `AND`, the rule applies to resources with both the `ECS` and `OSS` tag keys. Valid values:
     *
     *   AND: logical AND
     *   OR: logical OR
     *
     * @example AND
     *
     * @var string
     */
    public $tagKeyLogicScope;

    /**
     * @description The tag key used to filter resources. The rule applies only to the resources with a specified tag key.
     *
     * >  This parameter applies only to managed rules. You must configure the `TagKeyScope` and `TagValueScope` parameters at the same time.
     * @example ECS
     *
     * @var string
     */
    public $tagKeyScope;

    /**
     * @description The tag key used to filter resources. The rule applies only to the resources with the specified tag key.
     *
     * >  This parameter applies only to managed rules. You must configure the `TagKeyScope` and `TagValueScope` parameters at the same time.
     * @example test
     *
     * @var string
     */
    public $tagValueScope;
    protected $_name = [
        'clientToken'               => 'ClientToken',
        'configRuleName'            => 'ConfigRuleName',
        'configRuleTriggerTypes'    => 'ConfigRuleTriggerTypes',
        'description'               => 'Description',
        'excludeResourceIdsScope'   => 'ExcludeResourceIdsScope',
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
        if (null !== $this->excludeResourceIdsScope) {
            $res['ExcludeResourceIdsScope'] = $this->excludeResourceIdsScope;
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
     * @return CreateConfigRuleShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
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
        if (isset($map['ExcludeResourceIdsScope'])) {
            $model->excludeResourceIdsScope = $map['ExcludeResourceIdsScope'];
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
