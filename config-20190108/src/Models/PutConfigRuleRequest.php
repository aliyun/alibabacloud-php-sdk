<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20190108\Models;

use AlibabaCloud\Tea\Model;

class PutConfigRuleRequest extends Model
{
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
    public $description;

    /**
     * @var string
     */
    public $inputParameters;

    /**
     * @var string
     */
    public $sourceOwner;

    /**
     * @var string
     */
    public $sourceIdentifier;

    /**
     * @var string
     */
    public $sourceDetailMessageType;

    /**
     * @var string
     */
    public $sourceMaximumExecutionFrequency;

    /**
     * @var string
     */
    public $scopeComplianceResourceId;

    /**
     * @var string
     */
    public $scopeComplianceResourceTypes;

    /**
     * @var int
     */
    public $riskLevel;

    /**
     * @var string
     */
    public $clientToken;

    /**
     * @var bool
     */
    public $multiAccount;

    /**
     * @var int
     */
    public $memberId;
    protected $_name = [
        'configRuleId'                    => 'ConfigRuleId',
        'configRuleName'                  => 'ConfigRuleName',
        'description'                     => 'Description',
        'inputParameters'                 => 'InputParameters',
        'sourceOwner'                     => 'SourceOwner',
        'sourceIdentifier'                => 'SourceIdentifier',
        'sourceDetailMessageType'         => 'SourceDetailMessageType',
        'sourceMaximumExecutionFrequency' => 'SourceMaximumExecutionFrequency',
        'scopeComplianceResourceId'       => 'ScopeComplianceResourceId',
        'scopeComplianceResourceTypes'    => 'ScopeComplianceResourceTypes',
        'riskLevel'                       => 'RiskLevel',
        'clientToken'                     => 'ClientToken',
        'multiAccount'                    => 'MultiAccount',
        'memberId'                        => 'MemberId',
    ];

    public function validate()
    {
        Model::validateRequired('configRuleName', $this->configRuleName, true);
        Model::validateRequired('sourceOwner', $this->sourceOwner, true);
        Model::validateRequired('sourceIdentifier', $this->sourceIdentifier, true);
        Model::validateRequired('sourceDetailMessageType', $this->sourceDetailMessageType, true);
        Model::validateRequired('scopeComplianceResourceTypes', $this->scopeComplianceResourceTypes, true);
        Model::validateRequired('riskLevel', $this->riskLevel, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->configRuleId) {
            $res['ConfigRuleId'] = $this->configRuleId;
        }
        if (null !== $this->configRuleName) {
            $res['ConfigRuleName'] = $this->configRuleName;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->inputParameters) {
            $res['InputParameters'] = $this->inputParameters;
        }
        if (null !== $this->sourceOwner) {
            $res['SourceOwner'] = $this->sourceOwner;
        }
        if (null !== $this->sourceIdentifier) {
            $res['SourceIdentifier'] = $this->sourceIdentifier;
        }
        if (null !== $this->sourceDetailMessageType) {
            $res['SourceDetailMessageType'] = $this->sourceDetailMessageType;
        }
        if (null !== $this->sourceMaximumExecutionFrequency) {
            $res['SourceMaximumExecutionFrequency'] = $this->sourceMaximumExecutionFrequency;
        }
        if (null !== $this->scopeComplianceResourceId) {
            $res['ScopeComplianceResourceId'] = $this->scopeComplianceResourceId;
        }
        if (null !== $this->scopeComplianceResourceTypes) {
            $res['ScopeComplianceResourceTypes'] = $this->scopeComplianceResourceTypes;
        }
        if (null !== $this->riskLevel) {
            $res['RiskLevel'] = $this->riskLevel;
        }
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->multiAccount) {
            $res['MultiAccount'] = $this->multiAccount;
        }
        if (null !== $this->memberId) {
            $res['MemberId'] = $this->memberId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return PutConfigRuleRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ConfigRuleId'])) {
            $model->configRuleId = $map['ConfigRuleId'];
        }
        if (isset($map['ConfigRuleName'])) {
            $model->configRuleName = $map['ConfigRuleName'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['InputParameters'])) {
            $model->inputParameters = $map['InputParameters'];
        }
        if (isset($map['SourceOwner'])) {
            $model->sourceOwner = $map['SourceOwner'];
        }
        if (isset($map['SourceIdentifier'])) {
            $model->sourceIdentifier = $map['SourceIdentifier'];
        }
        if (isset($map['SourceDetailMessageType'])) {
            $model->sourceDetailMessageType = $map['SourceDetailMessageType'];
        }
        if (isset($map['SourceMaximumExecutionFrequency'])) {
            $model->sourceMaximumExecutionFrequency = $map['SourceMaximumExecutionFrequency'];
        }
        if (isset($map['ScopeComplianceResourceId'])) {
            $model->scopeComplianceResourceId = $map['ScopeComplianceResourceId'];
        }
        if (isset($map['ScopeComplianceResourceTypes'])) {
            $model->scopeComplianceResourceTypes = $map['ScopeComplianceResourceTypes'];
        }
        if (isset($map['RiskLevel'])) {
            $model->riskLevel = $map['RiskLevel'];
        }
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['MultiAccount'])) {
            $model->multiAccount = $map['MultiAccount'];
        }
        if (isset($map['MemberId'])) {
            $model->memberId = $map['MemberId'];
        }

        return $model;
    }
}
