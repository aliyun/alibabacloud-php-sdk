<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DlfNext\V20250310\Models;

use AlibabaCloud\Dara\Model;

class ColumnMask extends Model
{
    /**
     * @var string
     */
    public $expression;

    /**
     * @var string
     */
    public $transform;
    protected $_name = [
        'expression' => 'expression',
        'transform' => 'transform',
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

        if (null !== $this->transform) {
            $res['transform'] = $this->transform;
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

        if (isset($map['transform'])) {
            $model->transform = $map['transform'];
        }

        return $model;
    }
}
