<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emasappmonitor\V20190611\Models;

use AlibabaCloud\Dara\Model;

class Filter extends Model
{
    /**
     * @var string
     */
    public $key;
    /**
     * @var string
     */
    public $operator;
    /**
     * @var Filter[]
     */
    public $subFilters;
    /**
     * @var mixed
     */
    public $values;
    protected $_name = [
        'key'        => 'Key',
        'operator'   => 'Operator',
        'subFilters' => 'SubFilters',
        'values'     => 'Values',
    ];

    public function validate()
    {
        if (\is_array($this->subFilters)) {
            Model::validateArray($this->subFilters);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->key) {
            $res['Key'] = $this->key;
        }

        if (null !== $this->operator) {
            $res['Operator'] = $this->operator;
        }

        if (null !== $this->subFilters) {
            if (\is_array($this->subFilters)) {
                $res['SubFilters'] = [];
                $n1                = 0;
                foreach ($this->subFilters as $item1) {
                    $res['SubFilters'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->values) {
            $res['Values'] = $this->values;
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
        if (isset($map['Key'])) {
            $model->key = $map['Key'];
        }

        if (isset($map['Operator'])) {
            $model->operator = $map['Operator'];
        }

        if (isset($map['SubFilters'])) {
            if (!empty($map['SubFilters'])) {
                $model->subFilters = [];
                $n1                = 0;
                foreach ($map['SubFilters'] as $item1) {
                    $model->subFilters[$n1++] = self::fromMap($item1);
                }
            }
        }

        if (isset($map['Values'])) {
            $model->values = $map['Values'];
        }

        return $model;
    }
}
