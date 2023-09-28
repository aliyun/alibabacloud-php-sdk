<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicecatalog\V20210901\Models;

use AlibabaCloud\Tea\Model;

class ListLaunchOptionsRequest extends Model
{
    /**
     * @description The ID of the product.
     *
     * @example prod-bp18r7q127****
     *
     * @var string
     */
    public $productId;
    protected $_name = [
        'productId' => 'ProductId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->productId) {
            $res['ProductId'] = $this->productId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListLaunchOptionsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ProductId'])) {
            $model->productId = $map['ProductId'];
        }

        return $model;
    }
}
