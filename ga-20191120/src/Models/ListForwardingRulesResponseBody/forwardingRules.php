<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ga\V20191120\Models\ListForwardingRulesResponseBody;

use AlibabaCloud\SDK\Ga\V20191120\Models\ListForwardingRulesResponseBody\forwardingRules\ruleActions;
use AlibabaCloud\SDK\Ga\V20191120\Models\ListForwardingRulesResponseBody\forwardingRules\ruleConditions;
use AlibabaCloud\SDK\Ga\V20191120\Models\ListForwardingRulesResponseBody\forwardingRules\serviceManagedInfos;
use AlibabaCloud\Tea\Model;

class forwardingRules extends Model
{
    /**
     * @description The direction in which the forwarding rule takes effect.
     *
     * By default, **request** is returned, which indicates that the forwarding rule takes effect on requests.
     * @example request
     *
     * @var string
     */
    public $forwardingRuleDirection;

    /**
     * @description The ID of the forwarding rule.
     *
     * @example frule-bp19a3t3yzr21q3****
     *
     * @var string
     */
    public $forwardingRuleId;

    /**
     * @description The name of the forwarding rule.
     *
     * @example auto_named_rule
     *
     * @var string
     */
    public $forwardingRuleName;

    /**
     * @description The status of the forwarding rule.
     *
     *   **active**: The forwarding rule is normal.
     *   **configuring**: The forwarding rule is being modified.
     *   **deleting**: The forwarding rule is being deleted.
     *
     * @example active
     *
     * @var string
     */
    public $forwardingRuleStatus;

    /**
     * @description The ID of the listener.
     *
     * @example lsr-bp1s0vzbi5bxlx5****
     *
     * @var string
     */
    public $listenerId;

    /**
     * @description The priority of the forwarding rule.
     *
     * Valid values: **1** to **10000**. A lower value indicates a higher priority.
     * @example 1000
     *
     * @var int
     */
    public $priority;

    /**
     * @description The forwarding action.
     *
     * @var ruleActions[]
     */
    public $ruleActions;

    /**
     * @description The forwarding conditions.
     *
     * @var ruleConditions[]
     */
    public $ruleConditions;

    /**
     * @var string
     */
    public $serviceId;

    /**
     * @var bool
     */
    public $serviceManaged;

    /**
     * @var serviceManagedInfos[]
     */
    public $serviceManagedInfos;
    protected $_name = [
        'forwardingRuleDirection' => 'ForwardingRuleDirection',
        'forwardingRuleId'        => 'ForwardingRuleId',
        'forwardingRuleName'      => 'ForwardingRuleName',
        'forwardingRuleStatus'    => 'ForwardingRuleStatus',
        'listenerId'              => 'ListenerId',
        'priority'                => 'Priority',
        'ruleActions'             => 'RuleActions',
        'ruleConditions'          => 'RuleConditions',
        'serviceId'               => 'ServiceId',
        'serviceManaged'          => 'ServiceManaged',
        'serviceManagedInfos'     => 'ServiceManagedInfos',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->forwardingRuleDirection) {
            $res['ForwardingRuleDirection'] = $this->forwardingRuleDirection;
        }
        if (null !== $this->forwardingRuleId) {
            $res['ForwardingRuleId'] = $this->forwardingRuleId;
        }
        if (null !== $this->forwardingRuleName) {
            $res['ForwardingRuleName'] = $this->forwardingRuleName;
        }
        if (null !== $this->forwardingRuleStatus) {
            $res['ForwardingRuleStatus'] = $this->forwardingRuleStatus;
        }
        if (null !== $this->listenerId) {
            $res['ListenerId'] = $this->listenerId;
        }
        if (null !== $this->priority) {
            $res['Priority'] = $this->priority;
        }
        if (null !== $this->ruleActions) {
            $res['RuleActions'] = [];
            if (null !== $this->ruleActions && \is_array($this->ruleActions)) {
                $n = 0;
                foreach ($this->ruleActions as $item) {
                    $res['RuleActions'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->ruleConditions) {
            $res['RuleConditions'] = [];
            if (null !== $this->ruleConditions && \is_array($this->ruleConditions)) {
                $n = 0;
                foreach ($this->ruleConditions as $item) {
                    $res['RuleConditions'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->serviceId) {
            $res['ServiceId'] = $this->serviceId;
        }
        if (null !== $this->serviceManaged) {
            $res['ServiceManaged'] = $this->serviceManaged;
        }
        if (null !== $this->serviceManagedInfos) {
            $res['ServiceManagedInfos'] = [];
            if (null !== $this->serviceManagedInfos && \is_array($this->serviceManagedInfos)) {
                $n = 0;
                foreach ($this->serviceManagedInfos as $item) {
                    $res['ServiceManagedInfos'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return forwardingRules
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ForwardingRuleDirection'])) {
            $model->forwardingRuleDirection = $map['ForwardingRuleDirection'];
        }
        if (isset($map['ForwardingRuleId'])) {
            $model->forwardingRuleId = $map['ForwardingRuleId'];
        }
        if (isset($map['ForwardingRuleName'])) {
            $model->forwardingRuleName = $map['ForwardingRuleName'];
        }
        if (isset($map['ForwardingRuleStatus'])) {
            $model->forwardingRuleStatus = $map['ForwardingRuleStatus'];
        }
        if (isset($map['ListenerId'])) {
            $model->listenerId = $map['ListenerId'];
        }
        if (isset($map['Priority'])) {
            $model->priority = $map['Priority'];
        }
        if (isset($map['RuleActions'])) {
            if (!empty($map['RuleActions'])) {
                $model->ruleActions = [];
                $n                  = 0;
                foreach ($map['RuleActions'] as $item) {
                    $model->ruleActions[$n++] = null !== $item ? ruleActions::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RuleConditions'])) {
            if (!empty($map['RuleConditions'])) {
                $model->ruleConditions = [];
                $n                     = 0;
                foreach ($map['RuleConditions'] as $item) {
                    $model->ruleConditions[$n++] = null !== $item ? ruleConditions::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['ServiceId'])) {
            $model->serviceId = $map['ServiceId'];
        }
        if (isset($map['ServiceManaged'])) {
            $model->serviceManaged = $map['ServiceManaged'];
        }
        if (isset($map['ServiceManagedInfos'])) {
            if (!empty($map['ServiceManagedInfos'])) {
                $model->serviceManagedInfos = [];
                $n                          = 0;
                foreach ($map['ServiceManagedInfos'] as $item) {
                    $model->serviceManagedInfos[$n++] = null !== $item ? serviceManagedInfos::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
