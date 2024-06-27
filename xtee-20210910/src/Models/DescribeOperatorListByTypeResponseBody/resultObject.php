<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeOperatorListByTypeResponseBody;

use AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeOperatorListByTypeResponseBody\resultObject\operators;
use AlibabaCloud\Tea\Model;

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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->fieldType) {
            $res['fieldType'] = $this->fieldType;
        }
        if (null !== $this->operators) {
            $res['operators'] = [];
            if (null !== $this->operators && \is_array($this->operators)) {
                $n = 0;
                foreach ($this->operators as $item) {
                    $res['operators'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return resultObject
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['fieldType'])) {
            $model->fieldType = $map['fieldType'];
        }
        if (isset($map['operators'])) {
            if (!empty($map['operators'])) {
                $model->operators = [];
                $n                = 0;
                foreach ($map['operators'] as $item) {
                    $model->operators[$n++] = null !== $item ? operators::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
