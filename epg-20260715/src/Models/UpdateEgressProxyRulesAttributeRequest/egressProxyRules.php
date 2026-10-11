<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EPG\V20260715\Models\UpdateEgressProxyRulesAttributeRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\EPG\V20260715\Models\UpdateEgressProxyRulesAttributeRequest\egressProxyRules\addConditions;
use AlibabaCloud\SDK\EPG\V20260715\Models\UpdateEgressProxyRulesAttributeRequest\egressProxyRules\removeConditions;

class egressProxyRules extends Model
{
    /**
     * @var string
     */
    public $action;

    /**
     * @var addConditions[]
     */
    public $addConditions;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $egressProxyRuleId;

    /**
     * @var string
     */
    public $egressProxyRuleName;

    /**
     * @var int
     */
    public $priority;

    /**
     * @var removeConditions[]
     */
    public $removeConditions;
    protected $_name = [
        'action' => 'Action',
        'addConditions' => 'AddConditions',
        'description' => 'Description',
        'egressProxyRuleId' => 'EgressProxyRuleId',
        'egressProxyRuleName' => 'EgressProxyRuleName',
        'priority' => 'Priority',
        'removeConditions' => 'RemoveConditions',
    ];

    public function validate()
    {
        if (\is_array($this->addConditions)) {
            Model::validateArray($this->addConditions);
        }
        if (\is_array($this->removeConditions)) {
            Model::validateArray($this->removeConditions);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->action) {
            $res['Action'] = $this->action;
        }

        if (null !== $this->addConditions) {
            if (\is_array($this->addConditions)) {
                $res['AddConditions'] = [];
                $n1 = 0;
                foreach ($this->addConditions as $item1) {
                    $res['AddConditions'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->egressProxyRuleId) {
            $res['EgressProxyRuleId'] = $this->egressProxyRuleId;
        }

        if (null !== $this->egressProxyRuleName) {
            $res['EgressProxyRuleName'] = $this->egressProxyRuleName;
        }

        if (null !== $this->priority) {
            $res['Priority'] = $this->priority;
        }

        if (null !== $this->removeConditions) {
            if (\is_array($this->removeConditions)) {
                $res['RemoveConditions'] = [];
                $n1 = 0;
                foreach ($this->removeConditions as $item1) {
                    $res['RemoveConditions'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['Action'])) {
            $model->action = $map['Action'];
        }

        if (isset($map['AddConditions'])) {
            if (!empty($map['AddConditions'])) {
                $model->addConditions = [];
                $n1 = 0;
                foreach ($map['AddConditions'] as $item1) {
                    $model->addConditions[$n1] = addConditions::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['EgressProxyRuleId'])) {
            $model->egressProxyRuleId = $map['EgressProxyRuleId'];
        }

        if (isset($map['EgressProxyRuleName'])) {
            $model->egressProxyRuleName = $map['EgressProxyRuleName'];
        }

        if (isset($map['Priority'])) {
            $model->priority = $map['Priority'];
        }

        if (isset($map['RemoveConditions'])) {
            if (!empty($map['RemoveConditions'])) {
                $model->removeConditions = [];
                $n1 = 0;
                foreach ($map['RemoveConditions'] as $item1) {
                    $model->removeConditions[$n1] = removeConditions::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
