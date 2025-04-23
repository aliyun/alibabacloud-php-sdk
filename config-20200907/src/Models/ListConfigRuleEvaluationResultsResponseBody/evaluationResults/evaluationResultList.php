<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models\ListConfigRuleEvaluationResultsResponseBody\evaluationResults;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Config\V20200907\Models\ListConfigRuleEvaluationResultsResponseBody\evaluationResults\evaluationResultList\evaluationResultIdentifier;

class evaluationResultList extends Model
{
    /**
     * @var string
     */
    public $annotation;

    /**
     * @var string
     */
    public $complianceType;

    /**
     * @var int
     */
    public $configRuleInvokedTimestamp;

    /**
     * @var string
     */
    public $evaluationId;

    /**
     * @var evaluationResultIdentifier
     */
    public $evaluationResultIdentifier;

    /**
     * @var string
     */
    public $invokingEventMessageType;

    /**
     * @var int
     */
    public $lastNonCompliantRecordTimestamp;

    /**
     * @var bool
     */
    public $remediationEnabled;

    /**
     * @var int
     */
    public $resultRecordedTimestamp;

    /**
     * @var int
     */
    public $riskLevel;
    protected $_name = [
        'annotation' => 'Annotation',
        'complianceType' => 'ComplianceType',
        'configRuleInvokedTimestamp' => 'ConfigRuleInvokedTimestamp',
        'evaluationId' => 'EvaluationId',
        'evaluationResultIdentifier' => 'EvaluationResultIdentifier',
        'invokingEventMessageType' => 'InvokingEventMessageType',
        'lastNonCompliantRecordTimestamp' => 'LastNonCompliantRecordTimestamp',
        'remediationEnabled' => 'RemediationEnabled',
        'resultRecordedTimestamp' => 'ResultRecordedTimestamp',
        'riskLevel' => 'RiskLevel',
    ];

    public function validate()
    {
        if (null !== $this->evaluationResultIdentifier) {
            $this->evaluationResultIdentifier->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->annotation) {
            $res['Annotation'] = $this->annotation;
        }

        if (null !== $this->complianceType) {
            $res['ComplianceType'] = $this->complianceType;
        }

        if (null !== $this->configRuleInvokedTimestamp) {
            $res['ConfigRuleInvokedTimestamp'] = $this->configRuleInvokedTimestamp;
        }

        if (null !== $this->evaluationId) {
            $res['EvaluationId'] = $this->evaluationId;
        }

        if (null !== $this->evaluationResultIdentifier) {
            $res['EvaluationResultIdentifier'] = null !== $this->evaluationResultIdentifier ? $this->evaluationResultIdentifier->toArray($noStream) : $this->evaluationResultIdentifier;
        }

        if (null !== $this->invokingEventMessageType) {
            $res['InvokingEventMessageType'] = $this->invokingEventMessageType;
        }

        if (null !== $this->lastNonCompliantRecordTimestamp) {
            $res['LastNonCompliantRecordTimestamp'] = $this->lastNonCompliantRecordTimestamp;
        }

        if (null !== $this->remediationEnabled) {
            $res['RemediationEnabled'] = $this->remediationEnabled;
        }

        if (null !== $this->resultRecordedTimestamp) {
            $res['ResultRecordedTimestamp'] = $this->resultRecordedTimestamp;
        }

        if (null !== $this->riskLevel) {
            $res['RiskLevel'] = $this->riskLevel;
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
        if (isset($map['Annotation'])) {
            $model->annotation = $map['Annotation'];
        }

        if (isset($map['ComplianceType'])) {
            $model->complianceType = $map['ComplianceType'];
        }

        if (isset($map['ConfigRuleInvokedTimestamp'])) {
            $model->configRuleInvokedTimestamp = $map['ConfigRuleInvokedTimestamp'];
        }

        if (isset($map['EvaluationId'])) {
            $model->evaluationId = $map['EvaluationId'];
        }

        if (isset($map['EvaluationResultIdentifier'])) {
            $model->evaluationResultIdentifier = evaluationResultIdentifier::fromMap($map['EvaluationResultIdentifier']);
        }

        if (isset($map['InvokingEventMessageType'])) {
            $model->invokingEventMessageType = $map['InvokingEventMessageType'];
        }

        if (isset($map['LastNonCompliantRecordTimestamp'])) {
            $model->lastNonCompliantRecordTimestamp = $map['LastNonCompliantRecordTimestamp'];
        }

        if (isset($map['RemediationEnabled'])) {
            $model->remediationEnabled = $map['RemediationEnabled'];
        }

        if (isset($map['ResultRecordedTimestamp'])) {
            $model->resultRecordedTimestamp = $map['ResultRecordedTimestamp'];
        }

        if (isset($map['RiskLevel'])) {
            $model->riskLevel = $map['RiskLevel'];
        }

        return $model;
    }
}
