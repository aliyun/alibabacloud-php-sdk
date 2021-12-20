<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oss\V20190517\Models;

use AlibabaCloud\Tea\Model;

class SelectRequest extends Model
{
    /**
     * @description description
     *
     * @var string
     */
    public $expression;
    protected $_name = [
        'expression' => 'Expression',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->expression) {
            $res['Expression'] = $this->expression;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SelectRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Expression'])) {
            $model->expression = $map['Expression'];
        }

        return $model;
    }
}
