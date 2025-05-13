<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cms\V20240330\Models\FilterSetting\conditions;

class FilterSetting extends Model
{
    /**
     * @var conditions[]
     */
    public $conditions;

    /**
     * @var string
     */
    public $expression;

    /**
     * @var string
     */
    public $relation;
    protected $_name = [
        'conditions' => 'conditions',
        'expression' => 'expression',
        'relation' => 'relation',
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
                    $res['conditions'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->expression) {
            $res['expression'] = $this->expression;
        }

        if (null !== $this->relation) {
            $res['relation'] = $this->relation;
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
                    $model->conditions[$n1++] = conditions::fromMap($item1);
                }
            }
        }

        if (isset($map['expression'])) {
            $model->expression = $map['expression'];
        }

        if (isset($map['relation'])) {
            $model->relation = $map['relation'];
        }

        return $model;
    }
}
