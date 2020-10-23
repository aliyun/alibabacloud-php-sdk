<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20190108\Models\DescribeConfigRuleResponse;

use AlibabaCloud\SDK\Config\V20190108\Models\DescribeConfigRuleResponse\configRule\configRuleEvaluationStatus;
use AlibabaCloud\SDK\Config\V20190108\Models\DescribeConfigRuleResponse\configRule\createBy;
use AlibabaCloud\SDK\Config\V20190108\Models\DescribeConfigRuleResponse\configRule\managedRule;
use AlibabaCloud\SDK\Config\V20190108\Models\DescribeConfigRuleResponse\configRule\scope;
use AlibabaCloud\SDK\Config\V20190108\Models\DescribeConfigRuleResponse\configRule\source;
use AlibabaCloud\Tea\Model;

class configRule extends Model
{
    /**
     * @var string
     */
    public $configRuleArn;

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
     * @var int
     */
    public $modifiedTimestamp;

    /**
     * @var int
     */
    public $riskLevel;

    /**
     * @var string
     */
    public $maximumExecutionFrequency;

    /**
     * @var createBy
     */
    public $createBy;

    /**
     * @var configRuleEvaluationStatus
     */
    public $configRuleEvaluationStatus;

    /**
     * @var managedRule
     */
    public $managedRule;

    /**
     * @var source
     */
    public $source;

    /**
     * @var scope
     */
    public $scope;
    protected $_name = [
        'configRuleArn'              => 'ConfigRuleArn',
        'configRuleId'               => 'ConfigRuleId',
        'configRuleName'             => 'ConfigRuleName',
        'configRuleState'            => 'ConfigRuleState',
        'createTimestamp'            => 'CreateTimestamp',
        'description'                => 'Description',
        'inputParameters'            => 'InputParameters',
        'modifiedTimestamp'          => 'ModifiedTimestamp',
        'riskLevel'                  => 'RiskLevel',
        'maximumExecutionFrequency'  => 'MaximumExecutionFrequency',
        'createBy'                   => 'CreateBy',
        'configRuleEvaluationStatus' => 'ConfigRuleEvaluationStatus',
        'managedRule'                => 'ManagedRule',
        'source'                     => 'Source',
        'scope'                      => 'Scope',
    ];

    public function validate()
    {
        Model::validateRequired('configRuleArn', $this->configRuleArn, true);
        Model::validateRequired('configRuleId', $this->configRuleId, true);
        Model::validateRequired('configRuleName', $this->configRuleName, true);
        Model::validateRequired('configRuleState', $this->configRuleState, true);
        Model::validateRequired('createTimestamp', $this->createTimestamp, true);
        Model::validateRequired('description', $this->description, true);
        Model::validateRequired('inputParameters', $this->inputParameters, true);
        Model::validateRequired('modifiedTimestamp', $this->modifiedTimestamp, true);
        Model::validateRequired('riskLevel', $this->riskLevel, true);
        Model::validateRequired('maximumExecutionFrequency', $this->maximumExecutionFrequency, true);
        Model::validateRequired('createBy', $this->createBy, true);
        Model::validateRequired('configRuleEvaluationStatus', $this->configRuleEvaluationStatus, true);
        Model::validateRequired('managedRule', $this->managedRule, true);
        Model::validateRequired('source', $this->source, true);
        Model::validateRequired('scope', $this->scope, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->configRuleArn) {
            $res['ConfigRuleArn'] = $this->configRuleArn;
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
        if (null !== $this->modifiedTimestamp) {
            $res['ModifiedTimestamp'] = $this->modifiedTimestamp;
        }
        if (null !== $this->riskLevel) {
            $res['RiskLevel'] = $this->riskLevel;
        }
        if (null !== $this->maximumExecutionFrequency) {
            $res['MaximumExecutionFrequency'] = $this->maximumExecutionFrequency;
        }
        if (null !== $this->createBy) {
            $res['CreateBy'] = null !== $this->createBy ? $this->createBy->toMap() : null;
        }
        if (null !== $this->configRuleEvaluationStatus) {
            $res['ConfigRuleEvaluationStatus'] = null !== $this->configRuleEvaluationStatus ? $this->configRuleEvaluationStatus->toMap() : null;
        }
        if (null !== $this->managedRule) {
            $res['ManagedRule'] = null !== $this->managedRule ? $this->managedRule->toMap() : null;
        }
        if (null !== $this->source) {
            $res['Source'] = null !== $this->source ? $this->source->toMap() : null;
        }
        if (null !== $this->scope) {
            $res['Scope'] = null !== $this->scope ? $this->scope->toMap() : null;
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
        if (isset($map['ModifiedTimestamp'])) {
            $model->modifiedTimestamp = $map['ModifiedTimestamp'];
        }
        if (isset($map['RiskLevel'])) {
            $model->riskLevel = $map['RiskLevel'];
        }
        if (isset($map['MaximumExecutionFrequency'])) {
            $model->maximumExecutionFrequency = $map['MaximumExecutionFrequency'];
        }
        if (isset($map['CreateBy'])) {
            $model->createBy = createBy::fromMap($map['CreateBy']);
        }
        if (isset($map['ConfigRuleEvaluationStatus'])) {
            $model->configRuleEvaluationStatus = configRuleEvaluationStatus::fromMap($map['ConfigRuleEvaluationStatus']);
        }
        if (isset($map['ManagedRule'])) {
            $model->managedRule = managedRule::fromMap($map['ManagedRule']);
        }
        if (isset($map['Source'])) {
            $model->source = source::fromMap($map['Source']);
        }
        if (isset($map['Scope'])) {
            $model->scope = scope::fromMap($map['Scope']);
        }

        return $model;
    }
}
