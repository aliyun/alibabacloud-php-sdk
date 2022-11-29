<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Serverless\V20210924\Models;

use AlibabaCloud\Tea\Model;

class Condition extends Model
{
    /**
     * @var string
     */
    public $expression;
    protected $_name = [
        'expression' => 'expression',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->expression) {
            $res['expression'] = $this->expression;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return Condition
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['expression'])) {
            $model->expression = $map['expression'];
        }

        return $model;
    }
}
