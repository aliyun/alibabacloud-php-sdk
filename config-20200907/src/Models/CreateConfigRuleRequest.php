<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models;

use AlibabaCloud\Tea\Model;

class CreateConfigRuleRequest extends Model
{
    /**
     * @var string
     */
    public $clientToken;

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
    public $excludeResourceIdsScope;

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
    public $sourceIdentifier;

    /**
     * @var string
     */
    public $sourceOwner;

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
        'clientToken'               => 'ClientToken',
        'configRuleName'            => 'ConfigRuleName',
        'configRuleTriggerTypes'    => 'ConfigRuleTriggerTypes',
        'description'               => 'Description',
        'excludeResourceIdsScope'   => 'ExcludeResourceIdsScope',
        'inputParameters'           => 'InputParameters',
        'maximumExecutionFrequency' => 'MaximumExecutionFrequency',
        'regionIdsScope'            => 'RegionIdsScope',
        'resourceGroupIdsScope'     => 'ResourceGroupIdsScope',
        'resourceTypesScope'        => 'ResourceTypesScope',
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
     * @return CreateConfigRuleRequest
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
