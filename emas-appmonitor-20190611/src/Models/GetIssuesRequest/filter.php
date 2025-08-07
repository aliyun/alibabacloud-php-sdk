<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emasappmonitor\V20190611\Models\GetIssuesRequest;

use AlibabaCloud\Dara\Model;

class filter extends Model
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
     * @var string[]
     */
    public $subFilters;

    /**
     * @var mixed[]
     */
    public $values;
    protected $_name = [
        'key' => 'Key',
        'operator' => 'Operator',
        'subFilters' => 'SubFilters',
        'values' => 'Values',
    ];

    public function validate()
    {
        if (\is_array($this->subFilters)) {
            Model::validateArray($this->subFilters);
        }
        if (\is_array($this->values)) {
            Model::validateArray($this->values);
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
                $n1 = 0;
                foreach ($this->subFilters as $item1) {
                    $res['SubFilters'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->values) {
            if (\is_array($this->values)) {
                $res['Values'] = [];
                $n1 = 0;
                foreach ($this->values as $item1) {
                    $res['Values'][$n1] = $item1;
                    ++$n1;
                }
            }
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
                $n1 = 0;
                foreach ($map['SubFilters'] as $item1) {
                    $model->subFilters[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Values'])) {
            if (!empty($map['Values'])) {
                $model->values = [];
                $n1 = 0;
                foreach ($map['Values'] as $item1) {
                    $model->values[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
