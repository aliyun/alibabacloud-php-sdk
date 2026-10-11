<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EPG\V20260715\Models\GetEgressProxyRuleGroupAttributeResponseBody\egressProxyRules;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\EPG\V20260715\Models\GetEgressProxyRuleGroupAttributeResponseBody\egressProxyRules\preDns\conditions;

class preDns extends Model
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
    public $createTime;

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
    protected $_name = [
        'action' => 'Action',
        'conditions' => 'Conditions',
        'createTime' => 'CreateTime',
        'description' => 'Description',
        'egressProxyRuleId' => 'EgressProxyRuleId',
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

        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
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

        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
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

        return $model;
    }
}
