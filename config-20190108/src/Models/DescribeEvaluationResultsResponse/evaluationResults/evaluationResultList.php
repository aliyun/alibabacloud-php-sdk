<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20190108\Models\DescribeEvaluationResultsResponse\evaluationResults;

use AlibabaCloud\SDK\Config\V20190108\Models\DescribeEvaluationResultsResponse\evaluationResults\evaluationResultList\evaluationResultIdentifier;
use AlibabaCloud\Tea\Model;

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
    public $invokingEventMessageType;

    /**
     * @var int
     */
    public $resultRecordedTimestamp;

    /**
     * @var int
     */
    public $riskLevel;

    /**
     * @var evaluationResultIdentifier
     */
    public $evaluationResultIdentifier;
    protected $_name = [
        'annotation'                 => 'Annotation',
        'complianceType'             => 'ComplianceType',
        'configRuleInvokedTimestamp' => 'ConfigRuleInvokedTimestamp',
        'invokingEventMessageType'   => 'InvokingEventMessageType',
        'resultRecordedTimestamp'    => 'ResultRecordedTimestamp',
        'riskLevel'                  => 'RiskLevel',
        'evaluationResultIdentifier' => 'EvaluationResultIdentifier',
    ];

    public function validate()
    {
        Model::validateRequired('annotation', $this->annotation, true);
        Model::validateRequired('complianceType', $this->complianceType, true);
        Model::validateRequired('configRuleInvokedTimestamp', $this->configRuleInvokedTimestamp, true);
        Model::validateRequired('invokingEventMessageType', $this->invokingEventMessageType, true);
        Model::validateRequired('resultRecordedTimestamp', $this->resultRecordedTimestamp, true);
        Model::validateRequired('riskLevel', $this->riskLevel, true);
        Model::validateRequired('evaluationResultIdentifier', $this->evaluationResultIdentifier, true);
    }

    public function toMap()
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
        if (null !== $this->invokingEventMessageType) {
            $res['InvokingEventMessageType'] = $this->invokingEventMessageType;
        }
        if (null !== $this->resultRecordedTimestamp) {
            $res['ResultRecordedTimestamp'] = $this->resultRecordedTimestamp;
        }
        if (null !== $this->riskLevel) {
            $res['RiskLevel'] = $this->riskLevel;
        }
        if (null !== $this->evaluationResultIdentifier) {
            $res['EvaluationResultIdentifier'] = null !== $this->evaluationResultIdentifier ? $this->evaluationResultIdentifier->toMap() : null;
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
        if (isset($map['Annotation'])) {
            $model->annotation = $map['Annotation'];
        }
        if (isset($map['ComplianceType'])) {
            $model->complianceType = $map['ComplianceType'];
        }
        if (isset($map['ConfigRuleInvokedTimestamp'])) {
            $model->configRuleInvokedTimestamp = $map['ConfigRuleInvokedTimestamp'];
        }
        if (isset($map['InvokingEventMessageType'])) {
            $model->invokingEventMessageType = $map['InvokingEventMessageType'];
        }
        if (isset($map['ResultRecordedTimestamp'])) {
            $model->resultRecordedTimestamp = $map['ResultRecordedTimestamp'];
        }
        if (isset($map['RiskLevel'])) {
            $model->riskLevel = $map['RiskLevel'];
        }
        if (isset($map['EvaluationResultIdentifier'])) {
            $model->evaluationResultIdentifier = evaluationResultIdentifier::fromMap($map['EvaluationResultIdentifier']);
        }

        return $model;
    }
}
