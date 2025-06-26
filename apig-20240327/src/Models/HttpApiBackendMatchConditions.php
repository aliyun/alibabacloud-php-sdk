<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models;

use AlibabaCloud\Dara\Model;

class HttpApiBackendMatchConditions extends Model
{
    /**
     * @var HttpApiBackendMatchCondition[]
     */
    public $conditions;

    /**
     * @var bool
     */
    public $default;
    protected $_name = [
        'conditions' => 'conditions',
        'default' => 'default',
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

        if (null !== $this->default) {
            $res['default'] = $this->default;
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
                    $model->conditions[$n1] = HttpApiBackendMatchCondition::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['default'])) {
            $model->default = $map['default'];
        }

        return $model;
    }
}
