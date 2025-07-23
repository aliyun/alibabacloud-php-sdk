<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models;

use AlibabaCloud\SDK\Cms\V20240330\Models\FilterSetting\conditions;
use AlibabaCloud\Tea\Model;

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

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->conditions) {
            $res['conditions'] = [];
            if (null !== $this->conditions && \is_array($this->conditions)) {
                $n = 0;
                foreach ($this->conditions as $item) {
                    $res['conditions'][$n++] = null !== $item ? $item->toMap() : $item;
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

    /**
     * @param array $map
     *
     * @return FilterSetting
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['conditions'])) {
            if (!empty($map['conditions'])) {
                $model->conditions = [];
                $n = 0;
                foreach ($map['conditions'] as $item) {
                    $model->conditions[$n++] = null !== $item ? conditions::fromMap($item) : $item;
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
