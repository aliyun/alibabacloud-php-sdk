<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20230930\Models;

use AlibabaCloud\Tea\Model;

class ProductPrice extends Model
{
    /**
     * @example 120
     *
     * @var string
     */
    public $fundAmountMoney;
    protected $_name = [
        'fundAmountMoney' => 'fundAmountMoney',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->fundAmountMoney) {
            $res['fundAmountMoney'] = $this->fundAmountMoney;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ProductPrice
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['fundAmountMoney'])) {
            $model->fundAmountMoney = $map['fundAmountMoney'];
        }

        return $model;
    }
}
