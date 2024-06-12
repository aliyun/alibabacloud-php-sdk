<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models\ListResourceEvaluationResultsResponseBody\evaluationResults;

use AlibabaCloud\SDK\Config\V20200907\Models\ListResourceEvaluationResultsResponseBody\evaluationResults\evaluationResultList\evaluationResultIdentifier;
use AlibabaCloud\Tea\Model;

class evaluationResultList extends Model
{
    /**
     * @description The annotation to the resource that is evaluated as incompliant. The following section describes the parameters that can be returned:
     *
     *   `configuration`: the current resource configuration that is evaluated as incompliant by using the rule.
     *   `desiredValue`: the expected resource configuration that is evaluated as compliant by using the rule.
     *   `operator`: the operator that is used to compare the current configuration with the expected configuration of the resource.
     *   `property`: the JSON path of the current configuration in the resource property struct.
     *   `reason`: the reason why the resource is evaluated as incompliant.
     *
     * @example {\\"configuration\\":\\"false\\",\\"desiredValue\\":\\"True\\",\\"operator\\":\\"StringEquals\\",\\"property\\":\\"$.LoginProfile.MFABindRequired\\"}
     *
     * @var string
     */
    public $annotation;

    /**
     * @description The compliance evaluation result of the resources. Valid values:
     *
     *   COMPLIANT: The resources are evaluated as compliant.
     *   NON_COMPLIANT: The resources are evaluated as incompliant.
     *   NOT_APPLICABLE: The rule does not apply to your resources.
     *   INSUFFICIENT_DATA: No resource data is available.
     *   IGNORED: The resource is ignored during compliance evaluation.
     *
     * @example NON_COMPLIANT
     *
     * @var string
     */
    public $complianceType;

    /**
     * @description The timestamp when the rule was triggered for the compliance evaluation. Unit: milliseconds.
     *
     * @example 1624932227157
     *
     * @var int
     */
    public $configRuleInvokedTimestamp;

    /**
     * @description The identifying information about the compliance evaluation result.
     *
     * @var evaluationResultIdentifier
     */
    public $evaluationResultIdentifier;

    /**
     * @description The trigger type of the managed rule. Valid values:
     *
     *   ConfigurationItemChangeNotification: The managed rule is triggered by configuration changes.
     *   ScheduledNotification: The managed rule is periodically triggered.
     *
     * @example ScheduledNotification
     *
     * @var string
     */
    public $invokingEventMessageType;

    /**
     * @description Indicates whether the remediation template is enabled. Valid values:
     *
     * - false: The remediation template is disabled.
     * @example true
     *
     * @var bool
     */
    public $remediationEnabled;

    /**
     * @description The timestamp when the compliance evaluation result was recorded. Unit: milliseconds.
     *
     * @example 1624932227595
     *
     * @var int
     */
    public $resultRecordedTimestamp;

    /**
     * @description The risk level of the resources that do not comply with the rule. Valid values:
     *
     *   1: high risk level
     *   2: medium risk level
     *   3: low risk level
     *
     * @example 1
     *
     * @var int
     */
    public $riskLevel;
    protected $_name = [
        'annotation'                 => 'Annotation',
        'complianceType'             => 'ComplianceType',
        'configRuleInvokedTimestamp' => 'ConfigRuleInvokedTimestamp',
        'evaluationResultIdentifier' => 'EvaluationResultIdentifier',
        'invokingEventMessageType'   => 'InvokingEventMessageType',
        'remediationEnabled'         => 'RemediationEnabled',
        'resultRecordedTimestamp'    => 'ResultRecordedTimestamp',
        'riskLevel'                  => 'RiskLevel',
    ];

    public function validate()
    {
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
        if (null !== $this->evaluationResultIdentifier) {
            $res['EvaluationResultIdentifier'] = null !== $this->evaluationResultIdentifier ? $this->evaluationResultIdentifier->toMap() : null;
        }
        if (null !== $this->invokingEventMessageType) {
            $res['InvokingEventMessageType'] = $this->invokingEventMessageType;
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
        if (isset($map['EvaluationResultIdentifier'])) {
            $model->evaluationResultIdentifier = evaluationResultIdentifier::fromMap($map['EvaluationResultIdentifier']);
        }
        if (isset($map['InvokingEventMessageType'])) {
            $model->invokingEventMessageType = $map['InvokingEventMessageType'];
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
