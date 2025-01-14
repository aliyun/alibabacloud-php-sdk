<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models;

use AlibabaCloud\SDK\Config\V20200907\Models\UpdateConfigRuleRequest\excludeTagsScope;
use AlibabaCloud\SDK\Config\V20200907\Models\UpdateConfigRuleRequest\tag;
use AlibabaCloud\SDK\Config\V20200907\Models\UpdateConfigRuleRequest\tagsScope;
use AlibabaCloud\Tea\Model;

class UpdateConfigRuleRequest extends Model
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
     * @description The ID of the rule.
     *
     * This parameter is required.
     * @example cr-a260626622af0005****
     *
     * @var string
     */
    public $configRuleId;

    /**
     * @description The name of the rule.
     *
     * For more information about how to query the name of a rule, see [ListAggregateConfigRules](https://help.aliyun.com/document_detail/264148.html).
     * @example The name of the rule.
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
     * >  This parameter applies only to custom rules.
     * @example ConfigurationItemChangeNotification
     *
     * @var string
     */
    public $configRuleTriggerTypes;

    /**
     * @description The description of the rule. You can enter up to 500 characters.
     *
     * @example The description of the rule.
     *
     * @var string
     */
    public $description;

    /**
     * @description The IDs of the regions excluded from the compliance evaluations performed by the rule. Separate multiple region IDs with commas (,).
     *
     * @example cn-shanghai
     *
     * @var string
     */
    public $excludeRegionIdsScope;

    /**
     * @description The IDs of the resource groups excluded from the compliance evaluations performed by the rule. Separate multiple resource group IDs with commas (,).
     *
     * @example rg-bnczc6r7rml****
     *
     * @var string
     */
    public $excludeResourceGroupIdsScope;

    /**
     * @description The IDs of the resources excluded from the compliance evaluations performed by the rule. Separate multiple resource IDs with commas (,).
     *
     * >  This parameter applies only to a managed rule.
     * @example lb-t4nbowvtbkss7t326****
     *
     * @var string
     */
    public $excludeResourceIdsScope;

    /**
     * @description The scope of the tag that is excluded.
     *
     * @var excludeTagsScope[]
     */
    public $excludeTagsScope;

    /**
     * @description Optional. The extended content of the resource. This parameter can be used together with the MaximumExecutionFrequency parameter when the MaximumExecutionFrequency parameter is set to TwentyFour_Hours to specify the trigger time.
     *
     * @example {"fixedHour":"12"}
     *
     * @var string
     */
    public $extendContent;

    /**
     * @description The input parameters of the rule.
     *
     * @example {"tag1Key":"ECS","tag1Value":"test"}
     *
     * @var mixed[]
     */
    public $inputParameters;

    /**
     * @description The interval at which the rule is triggered. Valid values:
     *
     *   One_Hour
     *   Three_Hours
     *   Six_Hours
     *   Twelve_Hours
     *   TwentyFour_Hours (default)
     *
     * >  This parameter is required if the `ConfigRuleTriggerTypes` parameter is set to `ScheduledNotification`.
     * @example One_Hour
     *
     * @var string
     */
    public $maximumExecutionFrequency;

    /**
     * @description The IDs of the regions to which the rule applies. Separate multiple region IDs with commas (,).
     *
     * >  This parameter applies only to a managed rule.
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionIdsScope;

    /**
     * @description The IDs of the resource groups to which the rule applies. Separate multiple resource group IDs with commas (,).
     *
     * >  This parameter applies only to a managed rule.
     * @example rg-aekzc7r7rhx****
     *
     * @var string
     */
    public $resourceGroupIdsScope;

    /**
     * @description The IDs of the resources to which the rule applies. Separate multiple resource IDs with commas (,).
     *
     * @example lb-5cmbowstbkss9ta03****
     *
     * @var string
     */
    public $resourceIdsScope;

    /**
     * @description The type of the resource to be evaluated by the rule. Separate multiple resource types with commas (,).
     *
     * @example ACS::ECS::Instance
     *
     * @var string[]
     */
    public $resourceTypesScope;

    /**
     * @description The risk level of the resources that do not comply with the rule. Valid values:
     *
     *   1: high
     *   2: medium
     *   3: low
     *
     * @example 3
     *
     * @var int
     */
    public $riskLevel;

    /**
     * @var tag[]
     */
    public $tag;

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
     * @description The tag key used to filter resources. The rule applies only to the resources with the specified tag key.
     *
     * >  This parameter applies only to a managed rule. You must configure the `TagKeyScope` and `TagValueScope` parameters at the same time.
     * @example ECS
     *
     * @var string
     */
    public $tagKeyScope;

    /**
     * @description The tag value used to filter resources. The rule applies only to the resources that use the specified tag value.
     *
     * >  This parameter applies only to a managed rule. You must configure the `TagKeyScope` and `TagValueScope` parameters at the same time.
     * @example test
     *
     * @var string
     */
    public $tagValueScope;

    /**
     * @description The tag scope.
     *
     * @var tagsScope[]
     */
    public $tagsScope;
    protected $_name = [
        'clientToken'                  => 'ClientToken',
        'configRuleId'                 => 'ConfigRuleId',
        'configRuleName'               => 'ConfigRuleName',
        'configRuleTriggerTypes'       => 'ConfigRuleTriggerTypes',
        'description'                  => 'Description',
        'excludeRegionIdsScope'        => 'ExcludeRegionIdsScope',
        'excludeResourceGroupIdsScope' => 'ExcludeResourceGroupIdsScope',
        'excludeResourceIdsScope'      => 'ExcludeResourceIdsScope',
        'excludeTagsScope'             => 'ExcludeTagsScope',
        'extendContent'                => 'ExtendContent',
        'inputParameters'              => 'InputParameters',
        'maximumExecutionFrequency'    => 'MaximumExecutionFrequency',
        'regionIdsScope'               => 'RegionIdsScope',
        'resourceGroupIdsScope'        => 'ResourceGroupIdsScope',
        'resourceIdsScope'             => 'ResourceIdsScope',
        'resourceTypesScope'           => 'ResourceTypesScope',
        'riskLevel'                    => 'RiskLevel',
        'tag'                          => 'Tag',
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
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->configRuleId) {
            $res['ConfigRuleId'] = $this->configRuleId;
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
        if (null !== $this->extendContent) {
            $res['ExtendContent'] = $this->extendContent;
        }
        if (null !== $this->inputParameters) {
            $res['InputParameters'] = $this->inputParameters;
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
        if (null !== $this->resourceIdsScope) {
            $res['ResourceIdsScope'] = $this->resourceIdsScope;
        }
        if (null !== $this->resourceTypesScope) {
            $res['ResourceTypesScope'] = $this->resourceTypesScope;
        }
        if (null !== $this->riskLevel) {
            $res['RiskLevel'] = $this->riskLevel;
        }
        if (null !== $this->tag) {
            $res['Tag'] = [];
            if (null !== $this->tag && \is_array($this->tag)) {
                $n = 0;
                foreach ($this->tag as $item) {
                    $res['Tag'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
     * @return UpdateConfigRuleRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['ConfigRuleId'])) {
            $model->configRuleId = $map['ConfigRuleId'];
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
        if (isset($map['ExtendContent'])) {
            $model->extendContent = $map['ExtendContent'];
        }
        if (isset($map['InputParameters'])) {
            $model->inputParameters = $map['InputParameters'];
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
        if (isset($map['ResourceIdsScope'])) {
            $model->resourceIdsScope = $map['ResourceIdsScope'];
        }
        if (isset($map['ResourceTypesScope'])) {
            if (!empty($map['ResourceTypesScope'])) {
                $model->resourceTypesScope = $map['ResourceTypesScope'];
            }
        }
        if (isset($map['RiskLevel'])) {
            $model->riskLevel = $map['RiskLevel'];
        }
        if (isset($map['Tag'])) {
            if (!empty($map['Tag'])) {
                $model->tag = [];
                $n          = 0;
                foreach ($map['Tag'] as $item) {
                    $model->tag[$n++] = null !== $item ? tag::fromMap($item) : $item;
                }
            }
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
