<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DlfNext\V20250310\Models;

use AlibabaCloud\Dara\Model;

class Transform extends Model
{
    /**
     * @var FullDataType
     */
    public $castType;

    /**
     * @var FieldRef
     */
    public $fieldRef;

    /**
     * @var TransformInput[]
     */
    public $inputs;

    /**
     * @var string
     */
    public $name;
    protected $_name = [
        'castType' => 'castType',
        'fieldRef' => 'fieldRef',
        'inputs' => 'inputs',
        'name' => 'name',
    ];

    public function validate()
    {
        if (null !== $this->castType) {
            $this->castType->validate();
        }
        if (null !== $this->fieldRef) {
            $this->fieldRef->validate();
        }
        if (\is_array($this->inputs)) {
            Model::validateArray($this->inputs);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->castType) {
            $res['castType'] = null !== $this->castType ? $this->castType->toArray($noStream) : $this->castType;
        }

        if (null !== $this->fieldRef) {
            $res['fieldRef'] = null !== $this->fieldRef ? $this->fieldRef->toArray($noStream) : $this->fieldRef;
        }

        if (null !== $this->inputs) {
            if (\is_array($this->inputs)) {
                $res['inputs'] = [];
                $n1 = 0;
                foreach ($this->inputs as $item1) {
                    $res['inputs'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
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
        if (isset($map['castType'])) {
            $model->castType = FullDataType::fromMap($map['castType']);
        }

        if (isset($map['fieldRef'])) {
            $model->fieldRef = FieldRef::fromMap($map['fieldRef']);
        }

        if (isset($map['inputs'])) {
            if (!empty($map['inputs'])) {
                $model->inputs = [];
                $n1 = 0;
                foreach ($map['inputs'] as $item1) {
                    $model->inputs[$n1] = TransformInput::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        return $model;
    }
}
