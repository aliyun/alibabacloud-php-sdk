<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20190108\Models\DescribeConfigRuleResponseBody;

use AlibabaCloud\SDK\Config\V20190108\Models\DescribeConfigRuleResponseBody\configRule\configRuleEvaluationStatus;
use AlibabaCloud\SDK\Config\V20190108\Models\DescribeConfigRuleResponseBody\configRule\managedRule;
use AlibabaCloud\SDK\Config\V20190108\Models\DescribeConfigRuleResponseBody\configRule\scope;
use AlibabaCloud\SDK\Config\V20190108\Models\DescribeConfigRuleResponseBody\configRule\source;
use AlibabaCloud\Tea\Model;

class configRule extends Model
{
    /**
     * @var int
     */
    public $riskLevel;

    /**
     * @var mixed[]
     */
    public $inputParameters;

    /**
     * @var source
     */
    public $source;

    /**
     * @var string
     */
    public $configRuleState;

    /**
     * @var string
     */
    public $maximumExecutionFrequency;

    /**
     * @var managedRule
     */
    public $managedRule;

    /**
     * @var string
     */
    public $configRuleArn;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $configRuleName;

    /**
     * @var scope
     */
    public $scope;

    /**
     * @var configRuleEvaluationStatus
     */
    public $configRuleEvaluationStatus;

    /**
     * @var string
     */
    public $configRuleId;

    /**
     * @var int
     */
    public $modifiedTimestamp;

    /**
     * @var int
     */
    public $createTimestamp;
    protected $_name = [
        'riskLevel'                  => 'RiskLevel',
        'inputParameters'            => 'InputParameters',
        'source'                     => 'Source',
        'configRuleState'            => 'ConfigRuleState',
        'maximumExecutionFrequency'  => 'MaximumExecutionFrequency',
        'managedRule'                => 'ManagedRule',
        'configRuleArn'              => 'ConfigRuleArn',
        'description'                => 'Description',
        'configRuleName'             => 'ConfigRuleName',
        'scope'                      => 'Scope',
        'configRuleEvaluationStatus' => 'ConfigRuleEvaluationStatus',
        'configRuleId'               => 'ConfigRuleId',
        'modifiedTimestamp'          => 'ModifiedTimestamp',
        'createTimestamp'            => 'CreateTimestamp',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->riskLevel) {
            $res['RiskLevel'] = $this->riskLevel;
        }
        if (null !== $this->inputParameters) {
            $res['InputParameters'] = $this->inputParameters;
        }
        if (null !== $this->source) {
            $res['Source'] = null !== $this->source ? $this->source->toMap() : null;
        }
        if (null !== $this->configRuleState) {
            $res['ConfigRuleState'] = $this->configRuleState;
        }
        if (null !== $this->maximumExecutionFrequency) {
            $res['MaximumExecutionFrequency'] = $this->maximumExecutionFrequency;
        }
        if (null !== $this->managedRule) {
            $res['ManagedRule'] = null !== $this->managedRule ? $this->managedRule->toMap() : null;
        }
        if (null !== $this->configRuleArn) {
            $res['ConfigRuleArn'] = $this->configRuleArn;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->configRuleName) {
            $res['ConfigRuleName'] = $this->configRuleName;
        }
        if (null !== $this->scope) {
            $res['Scope'] = null !== $this->scope ? $this->scope->toMap() : null;
        }
        if (null !== $this->configRuleEvaluationStatus) {
            $res['ConfigRuleEvaluationStatus'] = null !== $this->configRuleEvaluationStatus ? $this->configRuleEvaluationStatus->toMap() : null;
        }
        if (null !== $this->configRuleId) {
            $res['ConfigRuleId'] = $this->configRuleId;
        }
        if (null !== $this->modifiedTimestamp) {
            $res['ModifiedTimestamp'] = $this->modifiedTimestamp;
        }
        if (null !== $this->createTimestamp) {
            $res['CreateTimestamp'] = $this->createTimestamp;
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
        if (isset($map['RiskLevel'])) {
            $model->riskLevel = $map['RiskLevel'];
        }
        if (isset($map['InputParameters'])) {
            $model->inputParameters = $map['InputParameters'];
        }
        if (isset($map['Source'])) {
            $model->source = source::fromMap($map['Source']);
        }
        if (isset($map['ConfigRuleState'])) {
            $model->configRuleState = $map['ConfigRuleState'];
        }
        if (isset($map['MaximumExecutionFrequency'])) {
            $model->maximumExecutionFrequency = $map['MaximumExecutionFrequency'];
        }
        if (isset($map['ManagedRule'])) {
            $model->managedRule = managedRule::fromMap($map['ManagedRule']);
        }
        if (isset($map['ConfigRuleArn'])) {
            $model->configRuleArn = $map['ConfigRuleArn'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['ConfigRuleName'])) {
            $model->configRuleName = $map['ConfigRuleName'];
        }
        if (isset($map['Scope'])) {
            $model->scope = scope::fromMap($map['Scope']);
        }
        if (isset($map['ConfigRuleEvaluationStatus'])) {
            $model->configRuleEvaluationStatus = configRuleEvaluationStatus::fromMap($map['ConfigRuleEvaluationStatus']);
        }
        if (isset($map['ConfigRuleId'])) {
            $model->configRuleId = $map['ConfigRuleId'];
        }
        if (isset($map['ModifiedTimestamp'])) {
            $model->modifiedTimestamp = $map['ModifiedTimestamp'];
        }
        if (isset($map['CreateTimestamp'])) {
            $model->createTimestamp = $map['CreateTimestamp'];
        }

        return $model;
    }
}
