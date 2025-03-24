<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mhub\V20170825\Models;

use AlibabaCloud\Tea\Model;

class DeleteProductRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example 12345
     *
     * @var string
     */
    public $productId;
    protected $_name = [
        'productId' => 'ProductId',
    ];

    public function validate() {}

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
     * @return DeleteProductRequest
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
