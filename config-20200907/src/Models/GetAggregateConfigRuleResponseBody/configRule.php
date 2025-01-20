<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models\GetAggregateConfigRuleResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Config\V20200907\Models\GetAggregateConfigRuleResponseBody\configRule\compliance;
use AlibabaCloud\SDK\Config\V20200907\Models\GetAggregateConfigRuleResponseBody\configRule\configRuleEvaluationStatus;
use AlibabaCloud\SDK\Config\V20200907\Models\GetAggregateConfigRuleResponseBody\configRule\createBy;
use AlibabaCloud\SDK\Config\V20200907\Models\GetAggregateConfigRuleResponseBody\configRule\excludeTagsScope;
use AlibabaCloud\SDK\Config\V20200907\Models\GetAggregateConfigRuleResponseBody\configRule\managedRule;
use AlibabaCloud\SDK\Config\V20200907\Models\GetAggregateConfigRuleResponseBody\configRule\source;
use AlibabaCloud\SDK\Config\V20200907\Models\GetAggregateConfigRuleResponseBody\configRule\tags;
use AlibabaCloud\SDK\Config\V20200907\Models\GetAggregateConfigRuleResponseBody\configRule\tagsScope;

class configRule extends Model
{
    /**
     * @var int
     */
    public $accountId;
    /**
     * @var string
     */
    public $accountIdsScope;
    /**
     * @var compliance
     */
    public $compliance;
    /**
     * @var string
     */
    public $configRuleArn;
    /**
     * @var configRuleEvaluationStatus
     */
    public $configRuleEvaluationStatus;
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
    public $configRuleTriggerTypes;
    /**
     * @var createBy
     */
    public $createBy;
    /**
     * @var int
     */
    public $createTimestamp;
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
    public $extendContent;
    /**
     * @var string
     */
    public $folderIdsScope;
    /**
     * @var mixed[]
     */
    public $inputParameters;
    /**
     * @var managedRule
     */
    public $managedRule;
    /**
     * @var string
     */
    public $maximumExecutionFrequency;
    /**
     * @var int
     */
    public $modifiedTimestamp;
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
    public $resourceTypesScope;
    /**
     * @var int
     */
    public $riskLevel;
    /**
     * @var source
     */
    public $source;
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
     * @var tags[]
     */
    public $tags;
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
        'extendContent'                => 'ExtendContent',
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
        'tags'                         => 'Tags',
        'tagsScope'                    => 'TagsScope',
    ];

    public function validate()
    {
        if (null !== $this->compliance) {
            $this->compliance->validate();
        }
        if (null !== $this->configRuleEvaluationStatus) {
            $this->configRuleEvaluationStatus->validate();
        }
        if (null !== $this->createBy) {
            $this->createBy->validate();
        }
        if (\is_array($this->excludeTagsScope)) {
            Model::validateArray($this->excludeTagsScope);
        }
        if (\is_array($this->inputParameters)) {
            Model::validateArray($this->inputParameters);
        }
        if (null !== $this->managedRule) {
            $this->managedRule->validate();
        }
        if (null !== $this->source) {
            $this->source->validate();
        }
        if (\is_array($this->tags)) {
            Model::validateArray($this->tags);
        }
        if (\is_array($this->tagsScope)) {
            Model::validateArray($this->tagsScope);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accountId) {
            $res['AccountId'] = $this->accountId;
        }

        if (null !== $this->accountIdsScope) {
            $res['AccountIdsScope'] = $this->accountIdsScope;
        }

        if (null !== $this->compliance) {
            $res['Compliance'] = null !== $this->compliance ? $this->compliance->toArray($noStream) : $this->compliance;
        }

        if (null !== $this->configRuleArn) {
            $res['ConfigRuleArn'] = $this->configRuleArn;
        }

        if (null !== $this->configRuleEvaluationStatus) {
            $res['ConfigRuleEvaluationStatus'] = null !== $this->configRuleEvaluationStatus ? $this->configRuleEvaluationStatus->toArray($noStream) : $this->configRuleEvaluationStatus;
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
            $res['CreateBy'] = null !== $this->createBy ? $this->createBy->toArray($noStream) : $this->createBy;
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
            if (\is_array($this->excludeTagsScope)) {
                $res['ExcludeTagsScope'] = [];
                $n1                      = 0;
                foreach ($this->excludeTagsScope as $item1) {
                    $res['ExcludeTagsScope'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->extendContent) {
            $res['ExtendContent'] = $this->extendContent;
        }

        if (null !== $this->folderIdsScope) {
            $res['FolderIdsScope'] = $this->folderIdsScope;
        }

        if (null !== $this->inputParameters) {
            if (\is_array($this->inputParameters)) {
                $res['InputParameters'] = [];
                foreach ($this->inputParameters as $key1 => $value1) {
                    $res['InputParameters'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->managedRule) {
            $res['ManagedRule'] = null !== $this->managedRule ? $this->managedRule->toArray($noStream) : $this->managedRule;
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
            $res['Source'] = null !== $this->source ? $this->source->toArray($noStream) : $this->source;
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

        if (null !== $this->tags) {
            if (\is_array($this->tags)) {
                $res['Tags'] = [];
                $n1          = 0;
                foreach ($this->tags as $item1) {
                    $res['Tags'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->tagsScope) {
            if (\is_array($this->tagsScope)) {
                $res['TagsScope'] = [];
                $n1               = 0;
                foreach ($this->tagsScope as $item1) {
                    $res['TagsScope'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
                $n1                      = 0;
                foreach ($map['ExcludeTagsScope'] as $item1) {
                    $model->excludeTagsScope[$n1++] = excludeTagsScope::fromMap($item1);
                }
            }
        }

        if (isset($map['ExtendContent'])) {
            $model->extendContent = $map['ExtendContent'];
        }

        if (isset($map['FolderIdsScope'])) {
            $model->folderIdsScope = $map['FolderIdsScope'];
        }

        if (isset($map['InputParameters'])) {
            if (!empty($map['InputParameters'])) {
                $model->inputParameters = [];
                foreach ($map['InputParameters'] as $key1 => $value1) {
                    $model->inputParameters[$key1] = $value1;
                }
            }
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

        if (isset($map['Tags'])) {
            if (!empty($map['Tags'])) {
                $model->tags = [];
                $n1          = 0;
                foreach ($map['Tags'] as $item1) {
                    $model->tags[$n1++] = tags::fromMap($item1);
                }
            }
        }

        if (isset($map['TagsScope'])) {
            if (!empty($map['TagsScope'])) {
                $model->tagsScope = [];
                $n1               = 0;
                foreach ($map['TagsScope'] as $item1) {
                    $model->tagsScope[$n1++] = tagsScope::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
