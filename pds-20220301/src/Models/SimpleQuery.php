<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pds\V20220301\Models;

use AlibabaCloud\Tea\Model;

class SimpleQuery extends Model
{
    /**
     * @var int[]
     */
    public $field;

    /**
     * @var int[]
     */
    public $operation;

    /**
     * @var \AlibabaCloud\SDK\Pds\V20220301\Models\SimpleQuery[]
     */
    public $subQueries;

    /**
     * @var int[]
     */
    public $value;
    protected $_name = [
        'field'      => 'field',
        'operation'  => 'operation',
        'subQueries' => 'sub_queries',
        'value'      => 'value',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->field) {
            $res['field'] = $this->field;
        }
        if (null !== $this->operation) {
            $res['operation'] = $this->operation;
        }
        if (null !== $this->subQueries) {
            $res['sub_queries'] = [];
            if (null !== $this->subQueries && \is_array($this->subQueries)) {
                $n = 0;
                foreach ($this->subQueries as $item) {
                    $res['sub_queries'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->value) {
            $res['value'] = $this->value;
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
        if (isset($map['field'])) {
            $model->field = $map['field'];
        }
        if (isset($map['operation'])) {
            $model->operation = $map['operation'];
        }
        if (isset($map['sub_queries'])) {
            if (!empty($map['sub_queries'])) {
                $model->subQueries = [];
                $n                 = 0;
                foreach ($map['sub_queries'] as $item) {
                    $model->subQueries[$n++] = null !== $item ? self::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['value'])) {
            $model->value = $map['value'];
        }

        return $model;
    }
}
