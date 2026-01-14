<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ga\V20191120\Models\ListForwardingRulesResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ga\V20191120\Models\ListForwardingRulesResponseBody\forwardingRules\ruleActions;
use AlibabaCloud\SDK\Ga\V20191120\Models\ListForwardingRulesResponseBody\forwardingRules\ruleConditions;
use AlibabaCloud\SDK\Ga\V20191120\Models\ListForwardingRulesResponseBody\forwardingRules\serviceManagedInfos;

class forwardingRules extends Model
{
    /**
     * @var string
     */
    public $forwardingRuleDirection;

    /**
     * @var string
     */
    public $forwardingRuleId;

    /**
     * @var string
     */
    public $forwardingRuleName;

    /**
     * @var string
     */
    public $forwardingRuleStatus;

    /**
     * @var string
     */
    public $listenerId;

    /**
     * @var int
     */
    public $priority;

    /**
     * @var ruleActions[]
     */
    public $ruleActions;

    /**
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
        'forwardingRuleId' => 'ForwardingRuleId',
        'forwardingRuleName' => 'ForwardingRuleName',
        'forwardingRuleStatus' => 'ForwardingRuleStatus',
        'listenerId' => 'ListenerId',
        'priority' => 'Priority',
        'ruleActions' => 'RuleActions',
        'ruleConditions' => 'RuleConditions',
        'serviceId' => 'ServiceId',
        'serviceManaged' => 'ServiceManaged',
        'serviceManagedInfos' => 'ServiceManagedInfos',
    ];

    public function validate()
    {
        if (\is_array($this->ruleActions)) {
            Model::validateArray($this->ruleActions);
        }
        if (\is_array($this->ruleConditions)) {
            Model::validateArray($this->ruleConditions);
        }
        if (\is_array($this->serviceManagedInfos)) {
            Model::validateArray($this->serviceManagedInfos);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            if (\is_array($this->ruleActions)) {
                $res['RuleActions'] = [];
                $n1 = 0;
                foreach ($this->ruleActions as $item1) {
                    $res['RuleActions'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->ruleConditions) {
            if (\is_array($this->ruleConditions)) {
                $res['RuleConditions'] = [];
                $n1 = 0;
                foreach ($this->ruleConditions as $item1) {
                    $res['RuleConditions'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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
            if (\is_array($this->serviceManagedInfos)) {
                $res['ServiceManagedInfos'] = [];
                $n1 = 0;
                foreach ($this->serviceManagedInfos as $item1) {
                    $res['ServiceManagedInfos'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
                $n1 = 0;
                foreach ($map['RuleActions'] as $item1) {
                    $model->ruleActions[$n1] = ruleActions::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['RuleConditions'])) {
            if (!empty($map['RuleConditions'])) {
                $model->ruleConditions = [];
                $n1 = 0;
                foreach ($map['RuleConditions'] as $item1) {
                    $model->ruleConditions[$n1] = ruleConditions::fromMap($item1);
                    ++$n1;
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
                $n1 = 0;
                foreach ($map['ServiceManagedInfos'] as $item1) {
                    $model->serviceManagedInfos[$n1] = serviceManagedInfos::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
