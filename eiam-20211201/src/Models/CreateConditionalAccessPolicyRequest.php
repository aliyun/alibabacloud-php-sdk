<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models;

use AlibabaCloud\SDK\Eiam\V20211201\Models\CreateConditionalAccessPolicyRequest\conditionsConfig;
use AlibabaCloud\SDK\Eiam\V20211201\Models\CreateConditionalAccessPolicyRequest\decisionConfig;
use AlibabaCloud\Tea\Model;

class CreateConditionalAccessPolicyRequest extends Model
{
    /**
     * @description Idempotent token.
     *
     * @example client-token-example
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description Conditional access policy name
     *
     * This parameter is required.
     *
     * @example My Conditional Access Policy
     *
     * @var string
     */
    public $conditionalAccessPolicyName;

    /**
     * @description Type of the conditional access policy, with the following options:
     *
     * arn:alibaba:idaas:authn:access:policy:system: System policy.
     *
     * This parameter is required.
     *
     * @example arn:alibaba:idaas:authn:access:policy:system
     *
     * @var string
     */
    public $conditionalAccessPolicyType;

    /**
     * @description Condition content configuration for the conditional access policy
     *
     * @var conditionsConfig
     */
    public $conditionsConfig;

    /**
     * @description Action configuration for the conditional access policy
     *
     * @var decisionConfig
     */
    public $decisionConfig;

    /**
     * @description Execution type of the conditional access policy, with the following options:
     *
     * enforcement: Enforce the policy.
     *
     * This parameter is required.
     *
     * @example enforcement
     *
     * @var string
     */
    public $decisionType;

    /**
     * @description Description of the conditional access policy
     *
     * @example Test Description
     *
     * @var string
     */
    public $description;

    /**
     * @description Execution point of the conditional access policy, with the following options:
     *
     * - arn:alibaba:idaas:authn:access:rule:eval_at:after_step1: Allow.
     *
     * This parameter is required.
     *
     * @example arn:alibaba:idaas:authn:access:rule:eval_at:after_step1
     *
     * @var string
     */
    public $evaluateAt;

    /**
     * @description Instance ID.
     *
     * This parameter is required.
     *
     * @example idaas_ue2jvisn35ea5lmthk267xxxxx
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description Priority of the conditional access policy, lower values indicate higher priority
     * Minimum value: 1
     * Maximum value: 100
     *
     * @example 1
     *
     * @var int
     */
    public $priority;
    protected $_name = [
        'clientToken' => 'ClientToken',
        'conditionalAccessPolicyName' => 'ConditionalAccessPolicyName',
        'conditionalAccessPolicyType' => 'ConditionalAccessPolicyType',
        'conditionsConfig' => 'ConditionsConfig',
        'decisionConfig' => 'DecisionConfig',
        'decisionType' => 'DecisionType',
        'description' => 'Description',
        'evaluateAt' => 'EvaluateAt',
        'instanceId' => 'InstanceId',
        'priority' => 'Priority',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->conditionalAccessPolicyName) {
            $res['ConditionalAccessPolicyName'] = $this->conditionalAccessPolicyName;
        }
        if (null !== $this->conditionalAccessPolicyType) {
            $res['ConditionalAccessPolicyType'] = $this->conditionalAccessPolicyType;
        }
        if (null !== $this->conditionsConfig) {
            $res['ConditionsConfig'] = null !== $this->conditionsConfig ? $this->conditionsConfig->toMap() : null;
        }
        if (null !== $this->decisionConfig) {
            $res['DecisionConfig'] = null !== $this->decisionConfig ? $this->decisionConfig->toMap() : null;
        }
        if (null !== $this->decisionType) {
            $res['DecisionType'] = $this->decisionType;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->evaluateAt) {
            $res['EvaluateAt'] = $this->evaluateAt;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->priority) {
            $res['Priority'] = $this->priority;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateConditionalAccessPolicyRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['ConditionalAccessPolicyName'])) {
            $model->conditionalAccessPolicyName = $map['ConditionalAccessPolicyName'];
        }
        if (isset($map['ConditionalAccessPolicyType'])) {
            $model->conditionalAccessPolicyType = $map['ConditionalAccessPolicyType'];
        }
        if (isset($map['ConditionsConfig'])) {
            $model->conditionsConfig = conditionsConfig::fromMap($map['ConditionsConfig']);
        }
        if (isset($map['DecisionConfig'])) {
            $model->decisionConfig = decisionConfig::fromMap($map['DecisionConfig']);
        }
        if (isset($map['DecisionType'])) {
            $model->decisionType = $map['DecisionType'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['EvaluateAt'])) {
            $model->evaluateAt = $map['EvaluateAt'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['Priority'])) {
            $model->priority = $map['Priority'];
        }

        return $model;
    }
}
