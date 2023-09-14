<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alb\V20200616\Models\ListRulesResponseBody;

use AlibabaCloud\SDK\Alb\V20200616\Models\ListRulesResponseBody\rules\ruleActions;
use AlibabaCloud\SDK\Alb\V20200616\Models\ListRulesResponseBody\rules\ruleConditions;
use AlibabaCloud\SDK\Alb\V20200616\Models\ListRulesResponseBody\rules\tags;
use AlibabaCloud\Tea\Model;

class rules extends Model
{
    /**
     * @description The direction to which the forwarding rule is applied. Valid values:
     *
     *   Request (default): The rule applies to client requests.
     *   Response: The rule applies to responses from backend servers.
     *
     * > Response is not supported by basic ALB instances.
     * @var string
     */
    public $direction;

    /**
     * @description The ID of the listener to which the forwarding rule belongs.
     *
     * @example lsn-i35udpz3pxsmnf****
     *
     * @var string
     */
    public $listenerId;

    /**
     * @description The ID of the ALB instance to which the forwarding rule belongs.
     *
     * @example alb-x30o38azsuj0sx****
     *
     * @var string
     */
    public $loadBalancerId;

    /**
     * @description The priority of the forwarding rule. Valid values: **1 to 10000**. A smaller value indicates a higher priority.
     *
     * > The priority of each forwarding rule added to a listener must be unique.
     * @example 1
     *
     * @var int
     */
    public $priority;

    /**
     * @description The action of the forwarding rule.
     *
     * @var ruleActions[]
     */
    public $ruleActions;

    /**
     * @description The conditions of the forwarding rule.
     *
     * @var ruleConditions[]
     */
    public $ruleConditions;

    /**
     * @description The forwarding rule ID.
     *
     * @example rule-bpn0kn908w4nbw****
     *
     * @var string
     */
    public $ruleId;

    /**
     * @description The name of the forwarding rule. The name must be 2 to 128 characters in length, and can contain letters, digits, periods (.), underscores (\_), and hyphens (-). The name must start with a letter.
     *
     * @example rule-instance-test
     *
     * @var string
     */
    public $ruleName;

    /**
     * @description The status of the forwarding rule. Valid values:
     *
     *   **Provisioning**
     *   **Configuring**
     *   **Available**
     *
     * @example Available
     *
     * @var string
     */
    public $ruleStatus;

    /**
     * @var tags[]
     */
    public $tags;
    protected $_name = [
        'direction'      => 'Direction',
        'listenerId'     => 'ListenerId',
        'loadBalancerId' => 'LoadBalancerId',
        'priority'       => 'Priority',
        'ruleActions'    => 'RuleActions',
        'ruleConditions' => 'RuleConditions',
        'ruleId'         => 'RuleId',
        'ruleName'       => 'RuleName',
        'ruleStatus'     => 'RuleStatus',
        'tags'           => 'Tags',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->direction) {
            $res['Direction'] = $this->direction;
        }
        if (null !== $this->listenerId) {
            $res['ListenerId'] = $this->listenerId;
        }
        if (null !== $this->loadBalancerId) {
            $res['LoadBalancerId'] = $this->loadBalancerId;
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
        if (null !== $this->ruleId) {
            $res['RuleId'] = $this->ruleId;
        }
        if (null !== $this->ruleName) {
            $res['RuleName'] = $this->ruleName;
        }
        if (null !== $this->ruleStatus) {
            $res['RuleStatus'] = $this->ruleStatus;
        }
        if (null !== $this->tags) {
            $res['Tags'] = [];
            if (null !== $this->tags && \is_array($this->tags)) {
                $n = 0;
                foreach ($this->tags as $item) {
                    $res['Tags'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return rules
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Direction'])) {
            $model->direction = $map['Direction'];
        }
        if (isset($map['ListenerId'])) {
            $model->listenerId = $map['ListenerId'];
        }
        if (isset($map['LoadBalancerId'])) {
            $model->loadBalancerId = $map['LoadBalancerId'];
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
        if (isset($map['RuleId'])) {
            $model->ruleId = $map['RuleId'];
        }
        if (isset($map['RuleName'])) {
            $model->ruleName = $map['RuleName'];
        }
        if (isset($map['RuleStatus'])) {
            $model->ruleStatus = $map['RuleStatus'];
        }
        if (isset($map['Tags'])) {
            if (!empty($map['Tags'])) {
                $model->tags = [];
                $n           = 0;
                foreach ($map['Tags'] as $item) {
                    $model->tags[$n++] = null !== $item ? tags::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
