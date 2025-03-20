<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models;

use AlibabaCloud\SDK\Eiam\V20211201\Models\UpdateConditionalAccessPolicyRequest\conditionsConfig;
use AlibabaCloud\SDK\Eiam\V20211201\Models\UpdateConditionalAccessPolicyRequest\decisionConfig;
use AlibabaCloud\Tea\Model;

class UpdateConditionalAccessPolicyRequest extends Model
{
    /**
     * @description Conditional Access Policy ID
     *
     * This parameter is required.
     *
     * @example cap_11111
     *
     * @var string
     */
    public $conditionalAccessPolicyId;

    /**
     * @description Conditional Access Policy Name
     *
     * This parameter is required.
     *
     * @example My Policy
     *
     * @var string
     */
    public $conditionalAccessPolicyName;

    /**
     * @description Conditional Access Policy Condition Content Configuration
     *
     * @var conditionsConfig
     */
    public $conditionsConfig;

    /**
     * @description Conditional Access Policy Action Configuration
     *
     * @var decisionConfig
     */
    public $decisionConfig;

    /**
     * @description Conditional Access Policy Execution Type
     *
     * This parameter is required.
     *
     * @example enforcement
     *
     * @var string
     */
    public $decisionType;

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
     * @description Priority of the conditional access policy
     *
     * @example 1
     *
     * @var int
     */
    public $priority;
    protected $_name = [
        'conditionalAccessPolicyId' => 'ConditionalAccessPolicyId',
        'conditionalAccessPolicyName' => 'ConditionalAccessPolicyName',
        'conditionsConfig' => 'ConditionsConfig',
        'decisionConfig' => 'DecisionConfig',
        'decisionType' => 'DecisionType',
        'instanceId' => 'InstanceId',
        'priority' => 'Priority',
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
        if (null !== $this->conditionsConfig) {
            $res['ConditionsConfig'] = null !== $this->conditionsConfig ? $this->conditionsConfig->toMap() : null;
        }
        if (null !== $this->decisionConfig) {
            $res['DecisionConfig'] = null !== $this->decisionConfig ? $this->decisionConfig->toMap() : null;
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

    /**
     * @param array $map
     *
     * @return UpdateConditionalAccessPolicyRequest
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
