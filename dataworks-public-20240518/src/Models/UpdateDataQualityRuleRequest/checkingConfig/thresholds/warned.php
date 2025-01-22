<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\UpdateDataQualityRuleRequest\checkingConfig\thresholds;

use AlibabaCloud\Dara\Model;

class warned extends Model
{
    /**
     * @var string
     */
    public $expression;
    /**
     * @var string
     */
    public $operator;
    /**
     * @var string
     */
    public $value;
    protected $_name = [
        'expression' => 'Expression',
        'operator'   => 'Operator',
        'value'      => 'Value',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->expression) {
            $res['Expression'] = $this->expression;
        }

        if (null !== $this->operator) {
            $res['Operator'] = $this->operator;
        }

        if (null !== $this->value) {
            $res['Value'] = $this->value;
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
        if (isset($map['Expression'])) {
            $model->expression = $map['Expression'];
        }

        if (isset($map['Operator'])) {
            $model->operator = $map['Operator'];
        }

        if (isset($map['Value'])) {
            $model->value = $map['Value'];
        }

        return $model;
    }
}
