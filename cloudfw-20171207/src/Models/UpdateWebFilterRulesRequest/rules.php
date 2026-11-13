<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models\UpdateWebFilterRulesRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\UpdateWebFilterRulesRequest\rules\conditions;

class rules extends Model
{
    /**
     * @var conditions[]
     */
    public $conditions;

    /**
     * @var string
     */
    public $ruleAction;

    /**
     * @var string
     */
    public $webFilterRuleId;
    protected $_name = [
        'conditions' => 'Conditions',
        'ruleAction' => 'RuleAction',
        'webFilterRuleId' => 'WebFilterRuleId',
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

        if (null !== $this->ruleAction) {
            $res['RuleAction'] = $this->ruleAction;
        }

        if (null !== $this->webFilterRuleId) {
            $res['WebFilterRuleId'] = $this->webFilterRuleId;
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

        if (isset($map['RuleAction'])) {
            $model->ruleAction = $map['RuleAction'];
        }

        if (isset($map['WebFilterRuleId'])) {
            $model->webFilterRuleId = $map['WebFilterRuleId'];
        }

        return $model;
    }
}
