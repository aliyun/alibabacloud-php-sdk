<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models;

use AlibabaCloud\Dara\Model;

class JoinConditions extends Model
{
    /**
     * @var string
     */
    public $lhsField;

    /**
     * @var string
     */
    public $operator;

    /**
     * @var string
     */
    public $rhsField;
    protected $_name = [
        'lhsField' => 'lhsField',
        'operator' => 'operator',
        'rhsField' => 'rhsField',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->lhsField) {
            $res['lhsField'] = $this->lhsField;
        }

        if (null !== $this->operator) {
            $res['operator'] = $this->operator;
        }

        if (null !== $this->rhsField) {
            $res['rhsField'] = $this->rhsField;
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
        if (isset($map['lhsField'])) {
            $model->lhsField = $map['lhsField'];
        }

        if (isset($map['operator'])) {
            $model->operator = $map['operator'];
        }

        if (isset($map['rhsField'])) {
            $model->rhsField = $map['rhsField'];
        }

        return $model;
    }
}
