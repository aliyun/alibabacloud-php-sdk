<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models;

use AlibabaCloud\Tea\Model;

class UpdateAggregateConfigRuleRequest extends Model
{
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
    public $excludeResourceIdsScope;

    /**
     * @var string
     */
    public $folderIdsScope;

    /**
     * @var mixed[]
     */
    public $inputParameters;

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
     * @var string[]
     */
    public $resourceTypesScope;

    /**
     * @var int
     */
    public $riskLevel;

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
    protected $_name = [
        'aggregatorId'              => 'AggregatorId',
        'clientToken'               => 'ClientToken',
        'configRuleId'              => 'ConfigRuleId',
        'configRuleName'            => 'ConfigRuleName',
        'configRuleTriggerTypes'    => 'ConfigRuleTriggerTypes',
        'description'               => 'Description',
        'excludeAccountIdsScope'    => 'ExcludeAccountIdsScope',
        'excludeFolderIdsScope'     => 'ExcludeFolderIdsScope',
        'excludeResourceIdsScope'   => 'ExcludeResourceIdsScope',
        'folderIdsScope'            => 'FolderIdsScope',
        'inputParameters'           => 'InputParameters',
        'maximumExecutionFrequency' => 'MaximumExecutionFrequency',
        'regionIdsScope'            => 'RegionIdsScope',
        'resourceGroupIdsScope'     => 'ResourceGroupIdsScope',
        'resourceTypesScope'        => 'ResourceTypesScope',
        'riskLevel'                 => 'RiskLevel',
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
        if (null !== $this->excludeResourceIdsScope) {
            $res['ExcludeResourceIdsScope'] = $this->excludeResourceIdsScope;
        }
        if (null !== $this->folderIdsScope) {
            $res['FolderIdsScope'] = $this->folderIdsScope;
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
        if (null !== $this->resourceTypesScope) {
            $res['ResourceTypesScope'] = $this->resourceTypesScope;
        }
        if (null !== $this->riskLevel) {
            $res['RiskLevel'] = $this->riskLevel;
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
     * @return UpdateAggregateConfigRuleRequest
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
        if (isset($map['ExcludeResourceIdsScope'])) {
            $model->excludeResourceIdsScope = $map['ExcludeResourceIdsScope'];
        }
        if (isset($map['FolderIdsScope'])) {
            $model->folderIdsScope = $map['FolderIdsScope'];
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
        if (isset($map['ResourceTypesScope'])) {
            if (!empty($map['ResourceTypesScope'])) {
                $model->resourceTypesScope = $map['ResourceTypesScope'];
            }
        }
        if (isset($map['RiskLevel'])) {
            $model->riskLevel = $map['RiskLevel'];
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
