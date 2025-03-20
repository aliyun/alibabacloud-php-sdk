<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models\GetConditionalAccessPolicyResponseBody;

use AlibabaCloud\SDK\Eiam\V20211201\Models\GetConditionalAccessPolicyResponseBody\conditionalAccessPolicy\conditionsConfig;
use AlibabaCloud\SDK\Eiam\V20211201\Models\GetConditionalAccessPolicyResponseBody\conditionalAccessPolicy\decisionConfig;
use AlibabaCloud\Tea\Model;

class conditionalAccessPolicy extends Model
{
    /**
     * @description Conditional Access Policy ID
     *
     * @example cp_xxxxx
     *
     * @var string
     */
    public $conditionalAccessPolicyId;

    /**
     * @description Conditional Access Policy Name
     *
     * @example My Policy
     *
     * @var string
     */
    public $conditionalAccessPolicyName;

    /**
     * @description Type of the conditional access policy
     *
     * @example arn:alibaba:idaas:authn:access:policy:system
     *
     * @var string
     */
    public $conditionalAccessPolicyType;

    /**
     * @description Conditional access policy content
     *
     * @var conditionsConfig
     */
    public $conditionsConfig;

    /**
     * @description Creation time
     *
     * @example 1741857554000
     *
     * @var int
     */
    public $createTime;

    /**
     * @description Action of the conditional access policy
     *
     * @var decisionConfig
     */
    public $decisionConfig;

    /**
     * @description Execution type of the conditional access policy
     *
     * @example enforcement
     *
     * @var string
     */
    public $decisionType;

    /**
     * @description Description of the conditional access policy
     *
     * @example ga access port for ecs: internal-cn-hangzhou-docker-builder-2(i-bp19g1pheaailkk1xvr6)
     *
     * @var string
     */
    public $description;

    /**
     * @description Execution point of the conditional access policy
     *
     * @example arn:alibaba:idaas:authn:access:rule:eval_at:after_step1
     *
     * @var string
     */
    public $evaluateAt;

    /**
     * @description Instance ID
     *
     * @example idaas_qnx6fbrinlecptl5hld23lfkvy
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description Last updated time
     *
     * @example 1741857554000
     *
     * @var int
     */
    public $lastUpdatedTime;

    /**
     * @description Priority
     *
     * @example 5
     *
     * @var int
     */
    public $priority;

    /**
     * @description Enable or disable status of the conditional access policy
     *
     * @example enabled
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'conditionalAccessPolicyId' => 'ConditionalAccessPolicyId',
        'conditionalAccessPolicyName' => 'ConditionalAccessPolicyName',
        'conditionalAccessPolicyType' => 'ConditionalAccessPolicyType',
        'conditionsConfig' => 'ConditionsConfig',
        'createTime' => 'CreateTime',
        'decisionConfig' => 'DecisionConfig',
        'decisionType' => 'DecisionType',
        'description' => 'Description',
        'evaluateAt' => 'EvaluateAt',
        'instanceId' => 'InstanceId',
        'lastUpdatedTime' => 'LastUpdatedTime',
        'priority' => 'Priority',
        'status' => 'Status',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->conditionalAccessPolicyId) {
            $res['ConditionalAccessPolicyId'] = $this->conditionalAccessPolicyId;
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
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
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
        if (null !== $this->lastUpdatedTime) {
            $res['LastUpdatedTime'] = $this->lastUpdatedTime;
        }
        if (null !== $this->priority) {
            $res['Priority'] = $this->priority;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return conditionalAccessPolicy
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ConditionalAccessPolicyId'])) {
            $model->conditionalAccessPolicyId = $map['ConditionalAccessPolicyId'];
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
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
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
        if (isset($map['LastUpdatedTime'])) {
            $model->lastUpdatedTime = $map['LastUpdatedTime'];
        }
        if (isset($map['Priority'])) {
            $model->priority = $map['Priority'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
