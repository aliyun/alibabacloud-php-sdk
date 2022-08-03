<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oss\V20190517\Models;

use AlibabaCloud\Tea\Model;

class RoutingRule extends Model
{
    /**
     * @var RoutingRuleCondition
     */
    public $condition;

    /**
     * @var RoutingRuleRedirect
     */
    public $redirect;

    /**
     * @var int
     */
    public $ruleNumber;
    protected $_name = [
        'condition'  => 'Condition',
        'redirect'   => 'Redirect',
        'ruleNumber' => 'RuleNumber',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->condition) {
            $res['Condition'] = null !== $this->condition ? $this->condition->toMap() : null;
        }
        if (null !== $this->redirect) {
            $res['Redirect'] = null !== $this->redirect ? $this->redirect->toMap() : null;
        }
        if (null !== $this->ruleNumber) {
            $res['RuleNumber'] = $this->ruleNumber;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RoutingRule
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Condition'])) {
            $model->condition = RoutingRuleCondition::fromMap($map['Condition']);
        }
        if (isset($map['Redirect'])) {
            $model->redirect = RoutingRuleRedirect::fromMap($map['Redirect']);
        }
        if (isset($map['RuleNumber'])) {
            $model->ruleNumber = $map['RuleNumber'];
        }

        return $model;
    }
}
