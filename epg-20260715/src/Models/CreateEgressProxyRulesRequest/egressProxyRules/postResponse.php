<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EPG\V20260715\Models\CreateEgressProxyRulesRequest\egressProxyRules;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\EPG\V20260715\Models\CreateEgressProxyRulesRequest\egressProxyRules\postResponse\conditions;

class postResponse extends Model
{
    /**
     * @var string
     */
    public $action;

    /**
     * @var conditions[]
     */
    public $conditions;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $egressProxyRuleName;

    /**
     * @var int
     */
    public $priority;
    protected $_name = [
        'action' => 'Action',
        'conditions' => 'Conditions',
        'description' => 'Description',
        'egressProxyRuleName' => 'EgressProxyRuleName',
        'priority' => 'Priority',
    ];

    public function validate()
    {
        if (\is_array($this->conditions)) {
            Model::validateArray($this->conditions);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->action) {
            $res['Action'] = $this->action;
        }

        if (null !== $this->conditions) {
            if (\is_array($this->conditions)) {
                $res['Conditions'] = [];
                $n1 = 0;
                foreach ($this->conditions as $item1) {
                    $res['Conditions'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->egressProxyRuleName) {
            $res['EgressProxyRuleName'] = $this->egressProxyRuleName;
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
        if (isset($map['Action'])) {
            $model->action = $map['Action'];
        }

        if (isset($map['Conditions'])) {
            if (!empty($map['Conditions'])) {
                $model->conditions = [];
                $n1 = 0;
                foreach ($map['Conditions'] as $item1) {
                    $model->conditions[$n1] = conditions::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['EgressProxyRuleName'])) {
            $model->egressProxyRuleName = $map['EgressProxyRuleName'];
        }

        if (isset($map['Priority'])) {
            $model->priority = $map['Priority'];
        }

        return $model;
    }
}
