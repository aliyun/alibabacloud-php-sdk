<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20190108\Models;

use AlibabaCloud\Tea\Model;

class PutConfigRuleRequest extends Model
{
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
    public $description;

    /**
     * @var string
     */
    public $inputParameters;

    /**
     * @var int
     */
    public $memberId;

    /**
     * @var bool
     */
    public $multiAccount;

    /**
     * @var int
     */
    public $riskLevel;

    /**
     * @var string
     */
    public $scopeComplianceResourceId;

    /**
     * @var string
     */
    public $scopeComplianceResourceTypes;

    /**
     * @var string
     */
    public $sourceDetailMessageType;

    /**
     * @var string
     */
    public $sourceIdentifier;

    /**
     * @var string
     */
    public $sourceMaximumExecutionFrequency;

    /**
     * @var string
     */
    public $sourceOwner;
    protected $_name = [
        'clientToken'                     => 'ClientToken',
        'configRuleId'                    => 'ConfigRuleId',
        'configRuleName'                  => 'ConfigRuleName',
        'description'                     => 'Description',
        'inputParameters'                 => 'InputParameters',
        'memberId'                        => 'MemberId',
        'multiAccount'                    => 'MultiAccount',
        'riskLevel'                       => 'RiskLevel',
        'scopeComplianceResourceId'       => 'ScopeComplianceResourceId',
        'scopeComplianceResourceTypes'    => 'ScopeComplianceResourceTypes',
        'sourceDetailMessageType'         => 'SourceDetailMessageType',
        'sourceIdentifier'                => 'SourceIdentifier',
        'sourceMaximumExecutionFrequency' => 'SourceMaximumExecutionFrequency',
        'sourceOwner'                     => 'SourceOwner',
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
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->inputParameters) {
            $res['InputParameters'] = $this->inputParameters;
        }
        if (null !== $this->memberId) {
            $res['MemberId'] = $this->memberId;
        }
        if (null !== $this->multiAccount) {
            $res['MultiAccount'] = $this->multiAccount;
        }
        if (null !== $this->riskLevel) {
            $res['RiskLevel'] = $this->riskLevel;
        }
        if (null !== $this->scopeComplianceResourceId) {
            $res['ScopeComplianceResourceId'] = $this->scopeComplianceResourceId;
        }
        if (null !== $this->scopeComplianceResourceTypes) {
            $res['ScopeComplianceResourceTypes'] = $this->scopeComplianceResourceTypes;
        }
        if (null !== $this->sourceDetailMessageType) {
            $res['SourceDetailMessageType'] = $this->sourceDetailMessageType;
        }
        if (null !== $this->sourceIdentifier) {
            $res['SourceIdentifier'] = $this->sourceIdentifier;
        }
        if (null !== $this->sourceMaximumExecutionFrequency) {
            $res['SourceMaximumExecutionFrequency'] = $this->sourceMaximumExecutionFrequency;
        }
        if (null !== $this->sourceOwner) {
            $res['SourceOwner'] = $this->sourceOwner;
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
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
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
        if (isset($map['MemberId'])) {
            $model->memberId = $map['MemberId'];
        }
        if (isset($map['MultiAccount'])) {
            $model->multiAccount = $map['MultiAccount'];
        }
        if (isset($map['RiskLevel'])) {
            $model->riskLevel = $map['RiskLevel'];
        }
        if (isset($map['ScopeComplianceResourceId'])) {
            $model->scopeComplianceResourceId = $map['ScopeComplianceResourceId'];
        }
        if (isset($map['ScopeComplianceResourceTypes'])) {
            $model->scopeComplianceResourceTypes = $map['ScopeComplianceResourceTypes'];
        }
        if (isset($map['SourceDetailMessageType'])) {
            $model->sourceDetailMessageType = $map['SourceDetailMessageType'];
        }
        if (isset($map['SourceIdentifier'])) {
            $model->sourceIdentifier = $map['SourceIdentifier'];
        }
        if (isset($map['SourceMaximumExecutionFrequency'])) {
            $model->sourceMaximumExecutionFrequency = $map['SourceMaximumExecutionFrequency'];
        }
        if (isset($map['SourceOwner'])) {
            $model->sourceOwner = $map['SourceOwner'];
        }

        return $model;
    }
}
