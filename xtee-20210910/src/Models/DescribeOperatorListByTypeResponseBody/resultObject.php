<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeOperatorListByTypeResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeOperatorListByTypeResponseBody\resultObject\operators;

class resultObject extends Model
{
    /**
     * @var string
     */
    public $fieldType;

    /**
     * @var operators[]
     */
    public $operators;
    protected $_name = [
        'fieldType' => 'fieldType',
        'operators' => 'operators',
    ];

    public function validate()
    {
        if (\is_array($this->operators)) {
            Model::validateArray($this->operators);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->fieldType) {
            $res['fieldType'] = $this->fieldType;
        }

        if (null !== $this->operators) {
            if (\is_array($this->operators)) {
                $res['operators'] = [];
                $n1 = 0;
                foreach ($this->operators as $item1) {
                    $res['operators'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['fieldType'])) {
            $model->fieldType = $map['fieldType'];
        }

        if (isset($map['operators'])) {
            if (!empty($map['operators'])) {
                $model->operators = [];
                $n1 = 0;
                foreach ($map['operators'] as $item1) {
                    $model->operators[$n1] = operators::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
