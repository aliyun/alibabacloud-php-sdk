<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models;

use AlibabaCloud\Tea\Model;

class SimpleQuery extends Model
{
    /**
     * @description 需要查询的字段名
     *
     * @var string
     */
    public $field;

    /**
     * @description 需要查询的字段值
     *
     * @var string
     */
    public $value;

    /**
     * @description 运算符
     *
     * @var string
     */
    public $operation;

    /**
     * @description 由 SimpleQuery 结构体组成的子查询数组
     *
     * @var \AlibabaCloud\SDK\Imm\V20200930\Models\SimpleQuery[]
     */
    public $subQueries;
    protected $_name = [
        'field'      => 'Field',
        'value'      => 'Value',
        'operation'  => 'Operation',
        'subQueries' => 'SubQueries',
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
        if (null !== $this->value) {
            $res['Value'] = $this->value;
        }
        if (null !== $this->operation) {
            $res['Operation'] = $this->operation;
        }
        if (null !== $this->subQueries) {
            $res['SubQueries'] = [];
            if (null !== $this->subQueries && \is_array($this->subQueries)) {
                $n = 0;
                foreach ($this->subQueries as $item) {
                    $res['SubQueries'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SimpleQuery
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Field'])) {
            $model->field = $map['Field'];
        }
        if (isset($map['Value'])) {
            $model->value = $map['Value'];
        }
        if (isset($map['Operation'])) {
            $model->operation = $map['Operation'];
        }
        if (isset($map['SubQueries'])) {
            if (!empty($map['SubQueries'])) {
                $model->subQueries = [];
                $n                 = 0;
                foreach ($map['SubQueries'] as $item) {
                    $model->subQueries[$n++] = null !== $item ? self::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
