<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetResultResponseBody\data\resultInfo\hitResult\hitResult\conditions\conditions;

use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetResultResponseBody\data\resultInfo\hitResult\hitResult\conditions\conditions\operators\operator;
use AlibabaCloud\Tea\Model;

class operators extends Model
{
    /**
     * @var operator[]
     */
    public $operator;
    protected $_name = [
        'operator' => 'Operator',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->operator) {
            $res['Operator'] = [];
            if (null !== $this->operator && \is_array($this->operator)) {
                $n = 0;
                foreach ($this->operator as $item) {
                    $res['Operator'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return operators
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Operator'])) {
            if (!empty($map['Operator'])) {
                $model->operator = [];
                $n               = 0;
                foreach ($map['Operator'] as $item) {
                    $model->operator[$n++] = null !== $item ? operator::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
