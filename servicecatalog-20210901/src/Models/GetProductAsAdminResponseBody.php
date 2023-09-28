<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicecatalog\V20210901\Models;

use AlibabaCloud\SDK\Servicecatalog\V20210901\Models\GetProductAsAdminResponseBody\productDetail;
use AlibabaCloud\SDK\Servicecatalog\V20210901\Models\GetProductAsAdminResponseBody\tagOptions;
use AlibabaCloud\Tea\Model;

class GetProductAsAdminResponseBody extends Model
{
    /**
     * @description The information about the product.
     *
     * @var productDetail
     */
    public $productDetail;

    /**
     * @description The ID of the request.
     *
     * @example 0FEEF92D-4052-5202-87D0-3D8EC16F81BF
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The tag options associated with the product.
     *
     * @var tagOptions[]
     */
    public $tagOptions;
    protected $_name = [
        'productDetail' => 'ProductDetail',
        'requestId'     => 'RequestId',
        'tagOptions'    => 'TagOptions',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->productDetail) {
            $res['ProductDetail'] = null !== $this->productDetail ? $this->productDetail->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->tagOptions) {
            $res['TagOptions'] = [];
            if (null !== $this->tagOptions && \is_array($this->tagOptions)) {
                $n = 0;
                foreach ($this->tagOptions as $item) {
                    $res['TagOptions'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetProductAsAdminResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ProductDetail'])) {
            $model->productDetail = productDetail::fromMap($map['ProductDetail']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TagOptions'])) {
            if (!empty($map['TagOptions'])) {
                $model->tagOptions = [];
                $n                 = 0;
                foreach ($map['TagOptions'] as $item) {
                    $model->tagOptions[$n++] = null !== $item ? tagOptions::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
