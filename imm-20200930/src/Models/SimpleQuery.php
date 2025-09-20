<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models;

use AlibabaCloud\Dara\Model;

class SimpleQuery extends Model
{
    /**
     * @var string
     */
    public $field;

    /**
     * @var string
     */
    public $operation;

    /**
     * @var SimpleQuery[]
     */
    public $subQueries;

    /**
     * @var string
     */
    public $value;
    protected $_name = [
        'field' => 'Field',
        'operation' => 'Operation',
        'subQueries' => 'SubQueries',
        'value' => 'Value',
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
            $res['Field'] = $this->field;
        }

        if (null !== $this->operation) {
            $res['Operation'] = $this->operation;
        }

        if (null !== $this->subQueries) {
            if (\is_array($this->subQueries)) {
                $res['SubQueries'] = [];
                $n1 = 0;
                foreach ($this->subQueries as $item1) {
                    $res['SubQueries'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->value) {
            $res['Value'] = $this->value;
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
        if (isset($map['Field'])) {
            $model->field = $map['Field'];
        }

        if (isset($map['Operation'])) {
            $model->operation = $map['Operation'];
        }

        if (isset($map['SubQueries'])) {
            if (!empty($map['SubQueries'])) {
                $model->subQueries = [];
                $n1 = 0;
                foreach ($map['SubQueries'] as $item1) {
                    $model->subQueries[$n1] = self::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Value'])) {
            $model->value = $map['Value'];
        }

        return $model;
    }
}
