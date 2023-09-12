<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20230930\Models;

use AlibabaCloud\Tea\Model;

class SkuQueryParam extends Model
{
    /**
     * @example 660460842235822080
     *
     * @var string
     */
    public $productId;

    /**
     * @example 660460842235822081
     *
     * @var string
     */
    public $skuId;
    protected $_name = [
        'productId' => 'productId',
        'skuId'     => 'skuId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
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
        if (isset($map['productId'])) {
            $model->productId = $map['productId'];
        }
        if (isset($map['skuId'])) {
            $model->skuId = $map['skuId'];
        }

        return $model;
    }
}
