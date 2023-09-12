<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20230930\Models;

use AlibabaCloud\Tea\Model;

class ProductSpecValue extends Model
{
    /**
     * @example 白色
     *
     * @var string
     */
    public $value;

    /**
     * @example 1000
     *
     * @var int
     */
    public $valueId;
    protected $_name = [
        'value'   => 'value',
        'valueId' => 'valueId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->value) {
            $res['value'] = $this->value;
        }
        if (null !== $this->valueId) {
            $res['valueId'] = $this->valueId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ProductSpecValue
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['value'])) {
            $model->value = $map['value'];
        }
        if (isset($map['valueId'])) {
            $model->valueId = $map['valueId'];
        }

        return $model;
    }
}
