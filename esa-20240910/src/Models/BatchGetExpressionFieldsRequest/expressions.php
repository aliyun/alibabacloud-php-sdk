<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models\BatchGetExpressionFieldsRequest;

use AlibabaCloud\Tea\Model;

class expressions extends Model
{
    /**
     * @description The content of the regular expression.
     *
     * @example ip.src eq 1.1.1.1
     *
     * @var string
     */
    public $expression;

    /**
     * @description The ID of the regular expression.
     *
     * @example 1
     *
     * @var int
     */
    public $id;
    protected $_name = [
        'expression' => 'Expression',
        'id'         => 'Id',
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
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return expressions
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Expression'])) {
            $model->expression = $map['Expression'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        return $model;
    }
}
