<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20230930\Models;

use AlibabaCloud\Tea\Model;

class SkuQueryParam extends Model
{
    /**
     * @example 1
     *
     * @var int
     */
    public $buyAmount;

    /**
     * @description This parameter is required.
     *
     * @example 660460842235822080
     *
     * @var string
     */
    public $productId;

    /**
     * @description This parameter is required.
     *
     * @example 660460842235822081
     *
     * @var string
     */
    public $skuId;
    protected $_name = [
        'buyAmount' => 'buyAmount',
        'productId' => 'productId',
        'skuId' => 'skuId',
    ];

    public function validate() {}

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return SkuQueryParam
     */
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
