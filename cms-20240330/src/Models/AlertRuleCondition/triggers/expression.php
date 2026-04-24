<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models\AlertRuleCondition\triggers;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cms\V20240330\Models\AlertRuleCondition\triggers\expression\conditions;

class expression extends Model
{
    /**
     * @var conditions[]
     */
    public $conditions;

    /**
     * @var string
     */
    public $expressionType;

    /**
     * @var string
     */
    public $logicOperator;
    protected $_name = [
        'conditions' => 'conditions',
        'expressionType' => 'expressionType',
        'logicOperator' => 'logicOperator',
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
                $res['conditions'] = [];
                $n1 = 0;
                foreach ($this->conditions as $item1) {
                    $res['conditions'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->expressionType) {
            $res['expressionType'] = $this->expressionType;
        }

        if (null !== $this->logicOperator) {
            $res['logicOperator'] = $this->logicOperator;
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
        if (isset($map['conditions'])) {
            if (!empty($map['conditions'])) {
                $model->conditions = [];
                $n1 = 0;
                foreach ($map['conditions'] as $item1) {
                    $model->conditions[$n1] = conditions::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['expressionType'])) {
            $model->expressionType = $map['expressionType'];
        }

        if (isset($map['logicOperator'])) {
            $model->logicOperator = $map['logicOperator'];
        }

        return $model;
    }
}
