<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20230930\Models;

use AlibabaCloud\Dara\Model;

class ProductPrice extends Model
{
    /**
     * @var string
     */
    public $fundAmountMoney;
    protected $_name = [
        'fundAmountMoney' => 'fundAmountMoney',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->fundAmountMoney) {
            $res['fundAmountMoney'] = $this->fundAmountMoney;
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
        if (isset($map['fundAmountMoney'])) {
            $model->fundAmountMoney = $map['fundAmountMoney'];
        }

        return $model;
    }
}
