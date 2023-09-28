<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicecatalog\V20210901\Models;

use AlibabaCloud\SDK\Servicecatalog\V20210901\Models\GetProductAsEndUserResponseBody\productSummary;
use AlibabaCloud\Tea\Model;

class GetProductAsEndUserResponseBody extends Model
{
    /**
     * @description The information about the product.
     *
     * @var productSummary
     */
    public $productSummary;

    /**
     * @description The ID of the request.
     *
     * @example 0FEEF92D-4052-5202-87D0-3D8EC16F81BF
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'productSummary' => 'ProductSummary',
        'requestId'      => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->productSummary) {
            $res['ProductSummary'] = null !== $this->productSummary ? $this->productSummary->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetProductAsEndUserResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ProductSummary'])) {
            $model->productSummary = productSummary::fromMap($map['ProductSummary']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
