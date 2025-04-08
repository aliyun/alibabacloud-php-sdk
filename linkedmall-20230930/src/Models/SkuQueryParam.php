<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20230930\Models;

use AlibabaCloud\Dara\Model;

class SkuQueryParam extends Model
{
    /**
     * @var int
     */
    public $buyAmount;

    /**
     * @var string
     */
    public $productId;

    /**
     * @var string
     */
    public $skuId;
    protected $_name = [
        'buyAmount' => 'buyAmount',
        'productId' => 'productId',
        'skuId' => 'skuId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->buyAmount) {
            $res['buyAmount'] = $this->buyAmount;
        }

        if (null !== $this->productId) {
            $res['productId'] = $this->productId;
        }

        if (null !== $this->skuId) {
            $res['skuId'] = $this->skuId;
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
        if (isset($map['buyAmount'])) {
            $model->buyAmount = $map['buyAmount'];
        }

        if (isset($map['productId'])) {
            $model->productId = $map['productId'];
        }

        if (isset($map['skuId'])) {
            $model->skuId = $map['skuId'];
        }

        return $model;
    }
}
