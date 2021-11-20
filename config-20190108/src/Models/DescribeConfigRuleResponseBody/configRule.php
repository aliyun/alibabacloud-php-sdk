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
     * @var int
     */
    public $createTimestamp;

    /**
     * @var string
     */
    public $description;

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
     * @var int
     */
    public $riskLevel;

    /**
     * @var scope
     */
    public $scope;

    /**
     * @var source
     */
    public $source;
    protected $_name = [
        'configRuleArn'              => 'ConfigRuleArn',
        'configRuleEvaluationStatus' => 'ConfigRuleEvaluationStatus',
        'configRuleId'               => 'ConfigRuleId',
        'configRuleName'             => 'ConfigRuleName',
        'configRuleState'            => 'ConfigRuleState',
        'createTimestamp'            => 'CreateTimestamp',
        'description'                => 'Description',
        'inputParameters'            => 'InputParameters',
        'managedRule'                => 'ManagedRule',
        'maximumExecutionFrequency'  => 'MaximumExecutionFrequency',
        'modifiedTimestamp'          => 'ModifiedTimestamp',
        'riskLevel'                  => 'RiskLevel',
        'scope'                      => 'Scope',
        'source'                     => 'Source',
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
        if (null !== $this->createTimestamp) {
            $res['CreateTimestamp'] = $this->createTimestamp;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
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
        if (null !== $this->riskLevel) {
            $res['RiskLevel'] = $this->riskLevel;
        }
        if (null !== $this->scope) {
            $res['Scope'] = null !== $this->scope ? $this->scope->toMap() : null;
        }
        if (null !== $this->source) {
            $res['Source'] = null !== $this->source ? $this->source->toMap() : null;
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
        if (isset($map['CreateTimestamp'])) {
            $model->createTimestamp = $map['CreateTimestamp'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
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
        if (isset($map['RiskLevel'])) {
            $model->riskLevel = $map['RiskLevel'];
        }
        if (isset($map['Scope'])) {
            $model->scope = scope::fromMap($map['Scope']);
        }
        if (isset($map['Source'])) {
            $model->source = source::fromMap($map['Source']);
        }

        return $model;
    }
}
