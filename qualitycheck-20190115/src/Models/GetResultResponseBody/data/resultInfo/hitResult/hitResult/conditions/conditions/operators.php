<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetResultResponseBody\data\resultInfo\hitResult\hitResult\conditions\conditions;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetResultResponseBody\data\resultInfo\hitResult\hitResult\conditions\conditions\operators\operator;

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
        if (\is_array($this->operator)) {
            Model::validateArray($this->operator);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->operator) {
            if (\is_array($this->operator)) {
                $res['Operator'] = [];
                $n1              = 0;
                foreach ($this->operator as $item1) {
                    $res['Operator'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['Operator'])) {
            if (!empty($map['Operator'])) {
                $model->operator = [];
                $n1              = 0;
                foreach ($map['Operator'] as $item1) {
                    $model->operator[$n1++] = operator::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
