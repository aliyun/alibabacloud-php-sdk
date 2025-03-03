<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AIWorkSpace\V20210204\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AIWorkSpace\V20210204\Models\CreateProductOrdersRequest\products;

class CreateProductOrdersRequest extends Model
{
    /**
     * @var bool
     */
    public $autoPay;
    /**
     * @var products[]
     */
    public $products;
    protected $_name = [
        'autoPay'  => 'AutoPay',
        'products' => 'Products',
    ];

    public function validate()
    {
        if (\is_array($this->products)) {
            Model::validateArray($this->products);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->autoPay) {
            $res['AutoPay'] = $this->autoPay;
        }

        if (null !== $this->products) {
            if (\is_array($this->products)) {
                $res['Products'] = [];
                $n1              = 0;
                foreach ($this->products as $item1) {
                    $res['Products'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['AutoPay'])) {
            $model->autoPay = $map['AutoPay'];
        }

        if (isset($map['Products'])) {
            if (!empty($map['Products'])) {
                $model->products = [];
                $n1              = 0;
                foreach ($map['Products'] as $item1) {
                    $model->products[$n1++] = products::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
