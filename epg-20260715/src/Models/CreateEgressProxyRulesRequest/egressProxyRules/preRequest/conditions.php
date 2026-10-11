<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EPG\V20260715\Models\CreateEgressProxyRulesRequest\egressProxyRules\preRequest;

use AlibabaCloud\Dara\Model;

class conditions extends Model
{
    /**
     * @var string
     */
    public $conditionKey;

    /**
     * @var string
     */
    public $conditionOperator;

    /**
     * @var string[]
     */
    public $conditionValues;
    protected $_name = [
        'conditionKey' => 'ConditionKey',
        'conditionOperator' => 'ConditionOperator',
        'conditionValues' => 'ConditionValues',
    ];

    public function validate()
    {
        if (\is_array($this->conditionValues)) {
            Model::validateArray($this->conditionValues);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->conditionKey) {
            $res['ConditionKey'] = $this->conditionKey;
        }

        if (null !== $this->conditionOperator) {
            $res['ConditionOperator'] = $this->conditionOperator;
        }

        if (null !== $this->conditionValues) {
            if (\is_array($this->conditionValues)) {
                $res['ConditionValues'] = [];
                $n1 = 0;
                foreach ($this->conditionValues as $item1) {
                    $res['ConditionValues'][$n1] = $item1;
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
        if (isset($map['ConditionKey'])) {
            $model->conditionKey = $map['ConditionKey'];
        }

        if (isset($map['ConditionOperator'])) {
            $model->conditionOperator = $map['ConditionOperator'];
        }

        if (isset($map['ConditionValues'])) {
            if (!empty($map['ConditionValues'])) {
                $model->conditionValues = [];
                $n1 = 0;
                foreach ($map['ConditionValues'] as $item1) {
                    $model->conditionValues[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
