<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models;

use AlibabaCloud\Tea\Model;

class SimpleQuery extends Model
{
    /**
     * @var string
     */
    public $field;

    /**
     * @example eq / gt / gte / lt / lte / match / prefix / and / or / not
     *
     * @var string
     */
    public $operation;

    /**
     * @var \AlibabaCloud\SDK\Imm\V20200930\Models\SimpleQuery[]
     */
    public $subQueries;

    /**
     * @var string
     */
    public $value;
    protected $_name = [
        'field'      => 'Field',
        'operation'  => 'Operation',
        'subQueries' => 'SubQueries',
        'value'      => 'Value',
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
        if (null !== $this->subQueries) {
            $res['SubQueries'] = [];
            if (null !== $this->subQueries && \is_array($this->subQueries)) {
                $n = 0;
                foreach ($this->subQueries as $item) {
                    $res['SubQueries'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->value) {
            $res['Value'] = $this->value;
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
        if (isset($map['Value'])) {
            $model->value = $map['Value'];
        }

        return $model;
    }
}
