<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oss\V20190517\Models;

use AlibabaCloud\Tea\Model;

class MetaQueryAggregation extends Model
{
    /**
     * @var string
     */
    public $field;

    /**
     * @var string
     */
    public $operation;
    protected $_name = [
        'field'     => 'Field',
        'operation' => 'Operation',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->field) {
            $res['Field'] = $this->field;
        }
        if (null !== $this->operation) {
            $res['Operation'] = $this->operation;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return MetaQueryAggregation
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Field'])) {
            $model->field = $map['Field'];
        }
        if (isset($map['Operation'])) {
            $model->operation = $map['Operation'];
        }

        return $model;
    }
}
