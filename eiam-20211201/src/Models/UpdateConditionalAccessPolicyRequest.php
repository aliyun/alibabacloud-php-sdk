<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Eiam\V20211201\Models\UpdateConditionalAccessPolicyRequest\conditionsConfig;
use AlibabaCloud\SDK\Eiam\V20211201\Models\UpdateConditionalAccessPolicyRequest\decisionConfig;

class UpdateConditionalAccessPolicyRequest extends Model
{
    /**
     * @var string
     */
    public $clientToken;

    /**
     * @var string
     */
    public $conditionalAccessPolicyId;

    /**
     * @var string
     */
    public $conditionalAccessPolicyName;

    /**
     * @var conditionsConfig
     */
    public $conditionsConfig;

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
    public $instanceId;

    /**
     * @var int
     */
    public $priority;
    protected $_name = [
        'clientToken' => 'ClientToken',
        'conditionalAccessPolicyId' => 'ConditionalAccessPolicyId',
        'conditionalAccessPolicyName' => 'ConditionalAccessPolicyName',
        'conditionsConfig' => 'ConditionsConfig',
        'decisionConfig' => 'DecisionConfig',
        'decisionType' => 'DecisionType',
        'instanceId' => 'InstanceId',
        'priority' => 'Priority',
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
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }

        if (null !== $this->conditionalAccessPolicyId) {
            $res['ConditionalAccessPolicyId'] = $this->conditionalAccessPolicyId;
        }

        if (null !== $this->conditionalAccessPolicyName) {
            $res['ConditionalAccessPolicyName'] = $this->conditionalAccessPolicyName;
        }

        if (null !== $this->conditionsConfig) {
            $res['ConditionsConfig'] = null !== $this->conditionsConfig ? $this->conditionsConfig->toArray($noStream) : $this->conditionsConfig;
        }

        if (null !== $this->decisionConfig) {
            $res['DecisionConfig'] = null !== $this->decisionConfig ? $this->decisionConfig->toArray($noStream) : $this->decisionConfig;
        }

        if (null !== $this->decisionType) {
            $res['DecisionType'] = $this->decisionType;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->priority) {
            $res['Priority'] = $this->priority;
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
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }

        if (isset($map['ConditionalAccessPolicyId'])) {
            $model->conditionalAccessPolicyId = $map['ConditionalAccessPolicyId'];
        }

        if (isset($map['ConditionalAccessPolicyName'])) {
            $model->conditionalAccessPolicyName = $map['ConditionalAccessPolicyName'];
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

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['Priority'])) {
            $model->priority = $map['Priority'];
        }

        return $model;
    }
}
