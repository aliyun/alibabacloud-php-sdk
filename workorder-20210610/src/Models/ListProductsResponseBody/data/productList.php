<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Workorder\V20210610\Models\ListProductsResponseBody\data;

use AlibabaCloud\Tea\Model;

class productList extends Model
{
    /**
     * @var int
     */
    public $productId;

    /**
     * @var string
     */
    public $productName;
    protected $_name = [
        'productId'   => 'ProductId',
        'productName' => 'ProductName',
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
        if (null !== $this->productName) {
            $res['ProductName'] = $this->productName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return productList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ProductId'])) {
            $model->productId = $map['ProductId'];
        }
        if (isset($map['ProductName'])) {
            $model->productName = $map['ProductName'];
        }

        return $model;
    }
}
