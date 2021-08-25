<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models\ListAggregateResourceEvaluationResultsResponseBody\evaluationResults;

use AlibabaCloud\SDK\Config\V20200907\Models\ListAggregateResourceEvaluationResultsResponseBody\evaluationResults\evaluationResultList\evaluationResultIdentifier;
use AlibabaCloud\Tea\Model;

class evaluationResultList extends Model
{
    /**
     * @var int
     */
    public $riskLevel;

    /**
     * @var string
     */
    public $complianceType;

    /**
     * @var int
     */
    public $resultRecordedTimestamp;

    /**
     * @var string
     */
    public $annotation;

    /**
     * @var int
     */
    public $configRuleInvokedTimestamp;

    /**
     * @var string
     */
    public $invokingEventMessageType;

    /**
     * @var evaluationResultIdentifier
     */
    public $evaluationResultIdentifier;

    /**
     * @var bool
     */
    public $remediationEnabled;
    protected $_name = [
        'riskLevel'                  => 'RiskLevel',
        'complianceType'             => 'ComplianceType',
        'resultRecordedTimestamp'    => 'ResultRecordedTimestamp',
        'annotation'                 => 'Annotation',
        'configRuleInvokedTimestamp' => 'ConfigRuleInvokedTimestamp',
        'invokingEventMessageType'   => 'InvokingEventMessageType',
        'evaluationResultIdentifier' => 'EvaluationResultIdentifier',
        'remediationEnabled'         => 'RemediationEnabled',
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
        if (null !== $this->complianceType) {
            $res['ComplianceType'] = $this->complianceType;
        }
        if (null !== $this->resultRecordedTimestamp) {
            $res['ResultRecordedTimestamp'] = $this->resultRecordedTimestamp;
        }
        if (null !== $this->annotation) {
            $res['Annotation'] = $this->annotation;
        }
        if (null !== $this->configRuleInvokedTimestamp) {
            $res['ConfigRuleInvokedTimestamp'] = $this->configRuleInvokedTimestamp;
        }
        if (null !== $this->invokingEventMessageType) {
            $res['InvokingEventMessageType'] = $this->invokingEventMessageType;
        }
        if (null !== $this->evaluationResultIdentifier) {
            $res['EvaluationResultIdentifier'] = null !== $this->evaluationResultIdentifier ? $this->evaluationResultIdentifier->toMap() : null;
        }
        if (null !== $this->remediationEnabled) {
            $res['RemediationEnabled'] = $this->remediationEnabled;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return evaluationResultList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RiskLevel'])) {
            $model->riskLevel = $map['RiskLevel'];
        }
        if (isset($map['ComplianceType'])) {
            $model->complianceType = $map['ComplianceType'];
        }
        if (isset($map['ResultRecordedTimestamp'])) {
            $model->resultRecordedTimestamp = $map['ResultRecordedTimestamp'];
        }
        if (isset($map['Annotation'])) {
            $model->annotation = $map['Annotation'];
        }
        if (isset($map['ConfigRuleInvokedTimestamp'])) {
            $model->configRuleInvokedTimestamp = $map['ConfigRuleInvokedTimestamp'];
        }
        if (isset($map['InvokingEventMessageType'])) {
            $model->invokingEventMessageType = $map['InvokingEventMessageType'];
        }
        if (isset($map['EvaluationResultIdentifier'])) {
            $model->evaluationResultIdentifier = evaluationResultIdentifier::fromMap($map['EvaluationResultIdentifier']);
        }
        if (isset($map['RemediationEnabled'])) {
            $model->remediationEnabled = $map['RemediationEnabled'];
        }

        return $model;
    }
}
