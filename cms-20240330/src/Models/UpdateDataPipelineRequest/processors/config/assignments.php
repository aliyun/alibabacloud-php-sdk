<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models\UpdateDataPipelineRequest\processors\config;

use AlibabaCloud\Dara\Model;

class assignments extends Model
{
    /**
     * @var string
     */
    public $expression;

    /**
     * @var string
     */
    public $field;
    protected $_name = [
        'expression' => 'expression',
        'field' => 'field',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->expression) {
            $res['expression'] = $this->expression;
        }

        if (null !== $this->field) {
            $res['field'] = $this->field;
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
        if (isset($map['expression'])) {
            $model->expression = $map['expression'];
        }

        if (isset($map['field'])) {
            $model->field = $map['field'];
        }

        return $model;
    }
}
