<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Config\V20200907\Models\UpdateAggregateConfigRuleShrinkRequest\excludeTagsScope;
use AlibabaCloud\SDK\Config\V20200907\Models\UpdateAggregateConfigRuleShrinkRequest\tagsScope;

class UpdateAggregateConfigRuleShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $accountIdsScope;

    /**
     * @var string
     */
    public $aggregatorId;

    /**
     * @var string
     */
    public $clientToken;

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
    public $configRuleTriggerTypes;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $excludeAccountIdsScope;

    /**
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
     * @var string
     */
    public $excludeResourceIdsScope;

    /**
     * @var excludeTagsScope[]
     */
    public $excludeTagsScope;

    /**
     * @var string
     */
    public $folderIdsScope;

    /**
     * @var string
     */
    public $inputParametersShrink;

    /**
     * @var string
     */
    public $maximumExecutionFrequency;

    /**
     * @var string
     */
    public $regionIdsScope;

    /**
     * @var string
     */
    public $resourceGroupIdsScope;

    /**
     * @var string
     */
    public $resourceIdsScope;

    /**
     * @var string
     */
    public $resourceNameScope;

    /**
     * @var string
     */
    public $resourceTypesScopeShrink;

    /**
     * @var int
     */
    public $riskLevel;

    /**
     * @var string
     */
    public $tagShrink;

    /**
     * @var string
     */
    public $tagKeyLogicScope;

    /**
     * @var string
     */
    public $tagKeyScope;

    /**
     * @var string
     */
    public $tagValueScope;

    /**
     * @var tagsScope[]
     */
    public $tagsScope;
    protected $_name = [
        'accountIdsScope' => 'AccountIdsScope',
        'aggregatorId' => 'AggregatorId',
        'clientToken' => 'ClientToken',
        'configRuleId' => 'ConfigRuleId',
        'configRuleName' => 'ConfigRuleName',
        'configRuleTriggerTypes' => 'ConfigRuleTriggerTypes',
        'description' => 'Description',
        'excludeAccountIdsScope' => 'ExcludeAccountIdsScope',
        'excludeFolderIdsScope' => 'ExcludeFolderIdsScope',
        'excludeRegionIdsScope' => 'ExcludeRegionIdsScope',
        'excludeResourceGroupIdsScope' => 'ExcludeResourceGroupIdsScope',
        'excludeResourceIdsScope' => 'ExcludeResourceIdsScope',
        'excludeTagsScope' => 'ExcludeTagsScope',
        'folderIdsScope' => 'FolderIdsScope',
        'inputParametersShrink' => 'InputParameters',
        'maximumExecutionFrequency' => 'MaximumExecutionFrequency',
        'regionIdsScope' => 'RegionIdsScope',
        'resourceGroupIdsScope' => 'ResourceGroupIdsScope',
        'resourceIdsScope' => 'ResourceIdsScope',
        'resourceNameScope' => 'ResourceNameScope',
        'resourceTypesScopeShrink' => 'ResourceTypesScope',
        'riskLevel' => 'RiskLevel',
        'tagShrink' => 'Tag',
        'tagKeyLogicScope' => 'TagKeyLogicScope',
        'tagKeyScope' => 'TagKeyScope',
        'tagValueScope' => 'TagValueScope',
        'tagsScope' => 'TagsScope',
    ];

    public function validate()
    {
        if (\is_array($this->excludeTagsScope)) {
            Model::validateArray($this->excludeTagsScope);
        }
        if (\is_array($this->tagsScope)) {
            Model::validateArray($this->tagsScope);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accountIdsScope) {
            $res['AccountIdsScope'] = $this->accountIdsScope;
        }

        if (null !== $this->aggregatorId) {
            $res['AggregatorId'] = $this->aggregatorId;
        }

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
            if (\is_array($this->excludeTagsScope)) {
                $res['ExcludeTagsScope'] = [];
                $n1 = 0;
                foreach ($this->excludeTagsScope as $item1) {
                    $res['ExcludeTagsScope'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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

        if (null !== $this->resourceIdsScope) {
            $res['ResourceIdsScope'] = $this->resourceIdsScope;
        }

        if (null !== $this->resourceNameScope) {
            $res['ResourceNameScope'] = $this->resourceNameScope;
        }

        if (null !== $this->resourceTypesScopeShrink) {
            $res['ResourceTypesScope'] = $this->resourceTypesScopeShrink;
        }

        if (null !== $this->riskLevel) {
            $res['RiskLevel'] = $this->riskLevel;
        }

        if (null !== $this->tagShrink) {
            $res['Tag'] = $this->tagShrink;
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
            if (\is_array($this->tagsScope)) {
                $res['TagsScope'] = [];
                $n1 = 0;
                foreach ($this->tagsScope as $item1) {
                    $res['TagsScope'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccountIdsScope'])) {
            $model->accountIdsScope = $map['AccountIdsScope'];
        }

        if (isset($map['AggregatorId'])) {
            $model->aggregatorId = $map['AggregatorId'];
        }

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
                $n1 = 0;
                foreach ($map['ExcludeTagsScope'] as $item1) {
                    $model->excludeTagsScope[$n1] = excludeTagsScope::fromMap($item1);
                    ++$n1;
                }
            }
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

        if (isset($map['ResourceIdsScope'])) {
            $model->resourceIdsScope = $map['ResourceIdsScope'];
        }

        if (isset($map['ResourceNameScope'])) {
            $model->resourceNameScope = $map['ResourceNameScope'];
        }

        if (isset($map['ResourceTypesScope'])) {
            $model->resourceTypesScopeShrink = $map['ResourceTypesScope'];
        }

        if (isset($map['RiskLevel'])) {
            $model->riskLevel = $map['RiskLevel'];
        }

        if (isset($map['Tag'])) {
            $model->tagShrink = $map['Tag'];
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
                $n1 = 0;
                foreach ($map['TagsScope'] as $item1) {
                    $model->tagsScope[$n1] = tagsScope::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
