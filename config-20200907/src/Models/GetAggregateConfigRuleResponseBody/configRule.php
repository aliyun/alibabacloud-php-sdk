<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models\GetAggregateConfigRuleResponseBody;

use AlibabaCloud\SDK\Config\V20200907\Models\GetAggregateConfigRuleResponseBody\configRule\configRuleEvaluationStatus;
use AlibabaCloud\SDK\Config\V20200907\Models\GetAggregateConfigRuleResponseBody\configRule\createBy;
use AlibabaCloud\SDK\Config\V20200907\Models\GetAggregateConfigRuleResponseBody\configRule\managedRule;
use AlibabaCloud\SDK\Config\V20200907\Models\GetAggregateConfigRuleResponseBody\configRule\source;
use AlibabaCloud\Tea\Model;

class configRule extends Model
{
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
    public $excludeResourceIdsScope;

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
    protected $_name = [
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
