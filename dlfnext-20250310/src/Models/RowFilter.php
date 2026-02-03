<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DlfNext\V20250310\Models;

use AlibabaCloud\Dara\Model;

class RowFilter extends Model
{
    /**
     * @var string
     */
    public $expression;

    /**
     * @var string
     */
    public $predicate;
    protected $_name = [
        'expression' => 'expression',
        'predicate' => 'predicate',
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

        if (null !== $this->predicate) {
            $res['predicate'] = $this->predicate;
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

        if (isset($map['predicate'])) {
            $model->predicate = $map['predicate'];
        }

        return $model;
    }
}
