<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models\ListConditionalAccessPoliciesForNetworkZoneResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Eiam\V20211201\Models\ListConditionalAccessPoliciesForNetworkZoneResponseBody\conditionalAccessPolicies\conditionsConfig;
use AlibabaCloud\SDK\Eiam\V20211201\Models\ListConditionalAccessPoliciesForNetworkZoneResponseBody\conditionalAccessPolicies\decisionConfig;

class conditionalAccessPolicies extends Model
{
    /**
     * @var string
     */
    public $conditionalAccessPolicyId;

    /**
     * @var string
     */
    public $conditionalAccessPolicyName;

    /**
     * @var string
     */
    public $conditionalAccessPolicyType;

    /**
     * @var conditionsConfig
     */
    public $conditionsConfig;

    /**
     * @var int
     */
    public $createTime;

    /**
     * @var decisionConfig
     */
    public $decisionConfig;

    /**
     * @var string
     */
    public $decisionType;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $evaluateAt;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var int
     */
    public $lastUpdatedTime;

    /**
     * @var int
     */
    public $priority;

    /**
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

    public function validate()
    {
        if (null !== $this->conditionsConfig) {
            $this->conditionsConfig->validate();
        }
        if (null !== $this->decisionConfig) {
            $this->decisionConfig->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            $res['ConditionsConfig'] = null !== $this->conditionsConfig ? $this->conditionsConfig->toArray($noStream) : $this->conditionsConfig;
        }

        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->decisionConfig) {
            $res['DecisionConfig'] = null !== $this->decisionConfig ? $this->decisionConfig->toArray($noStream) : $this->decisionConfig;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
