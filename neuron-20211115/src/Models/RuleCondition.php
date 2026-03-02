<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Neuron\V20211115\Models;

use AlibabaCloud\Dara\Model;

class RuleCondition extends Model
{
    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $position;

    /**
     * @var string
     */
    public $relation;

    /**
     * @var string
     */
    public $value;

    /**
     * @var string
     */
    public $valueType;
    protected $_name = [
        'name' => 'name',
        'position' => 'position',
        'relation' => 'relation',
        'value' => 'value',
        'valueType' => 'valueType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->position) {
            $res['position'] = $this->position;
        }

        if (null !== $this->relation) {
            $res['relation'] = $this->relation;
        }

        if (null !== $this->value) {
            $res['value'] = $this->value;
        }

        if (null !== $this->valueType) {
            $res['valueType'] = $this->valueType;
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
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['position'])) {
            $model->position = $map['position'];
        }

        if (isset($map['relation'])) {
            $model->relation = $map['relation'];
        }

        if (isset($map['value'])) {
            $model->value = $map['value'];
        }

        if (isset($map['valueType'])) {
            $model->valueType = $map['valueType'];
        }

        return $model;
    }
}
