<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pds\V20220301\Models;

use AlibabaCloud\Dara\Model;

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
     * @var SimpleQuery[]
     */
    public $subQueries;

    /**
     * @var int[]
     */
    public $value;
    protected $_name = [
        'field' => 'field',
        'operation' => 'operation',
        'subQueries' => 'sub_queries',
        'value' => 'value',
    ];

    public function validate()
    {
        if (\is_array($this->subQueries)) {
            Model::validateArray($this->subQueries);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->field) {
            $res['field'] = $this->field;
        }

        if (null !== $this->operation) {
            $res['operation'] = $this->operation;
        }

        if (null !== $this->subQueries) {
            if (\is_array($this->subQueries)) {
                $res['sub_queries'] = [];
                $n1 = 0;
                foreach ($this->subQueries as $item1) {
                    $res['sub_queries'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->value) {
            $res['value'] = $this->value;
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
        if (isset($map['field'])) {
            $model->field = $map['field'];
        }

        if (isset($map['operation'])) {
            $model->operation = $map['operation'];
        }

        if (isset($map['sub_queries'])) {
            if (!empty($map['sub_queries'])) {
                $model->subQueries = [];
                $n1 = 0;
                foreach ($map['sub_queries'] as $item1) {
                    $model->subQueries[$n1++] = self::fromMap($item1);
                }
            }
        }

        if (isset($map['value'])) {
            $model->value = $map['value'];
        }

        return $model;
    }
}
