<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DlfNext\V20250310\Models;

use AlibabaCloud\Dara\Model;

class Predicate extends Model
{
    /**
     * @var Predicate[]
     */
    public $children;

    /**
     * @var string
     */
    public $function;

    /**
     * @var string
     */
    public $kind;

    /**
     * @var mixed[]
     */
    public $literals;

    /**
     * @var Transform
     */
    public $transform;
    protected $_name = [
        'children' => 'children',
        'function' => 'function',
        'kind' => 'kind',
        'literals' => 'literals',
        'transform' => 'transform',
    ];

    public function validate()
    {
        if (\is_array($this->children)) {
            Model::validateArray($this->children);
        }
        if (\is_array($this->literals)) {
            Model::validateArray($this->literals);
        }
        if (null !== $this->transform) {
            $this->transform->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->children) {
            if (\is_array($this->children)) {
                $res['children'] = [];
                $n1 = 0;
                foreach ($this->children as $item1) {
                    $res['children'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->function) {
            $res['function'] = $this->function;
        }

        if (null !== $this->kind) {
            $res['kind'] = $this->kind;
        }

        if (null !== $this->literals) {
            if (\is_array($this->literals)) {
                $res['literals'] = [];
                $n1 = 0;
                foreach ($this->literals as $item1) {
                    $res['literals'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->transform) {
            $res['transform'] = null !== $this->transform ? $this->transform->toArray($noStream) : $this->transform;
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
        if (isset($map['children'])) {
            if (!empty($map['children'])) {
                $model->children = [];
                $n1 = 0;
                foreach ($map['children'] as $item1) {
                    $model->children[$n1] = self::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['function'])) {
            $model->function = $map['function'];
        }

        if (isset($map['kind'])) {
            $model->kind = $map['kind'];
        }

        if (isset($map['literals'])) {
            if (!empty($map['literals'])) {
                $model->literals = [];
                $n1 = 0;
                foreach ($map['literals'] as $item1) {
                    $model->literals[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['transform'])) {
            $model->transform = Transform::fromMap($map['transform']);
        }

        return $model;
    }
}
