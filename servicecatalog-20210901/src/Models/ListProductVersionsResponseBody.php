<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicecatalog\V20210901\Models;

use AlibabaCloud\SDK\Servicecatalog\V20210901\Models\ListProductVersionsResponseBody\productVersionDetails;
use AlibabaCloud\Tea\Model;

class ListProductVersionsResponseBody extends Model
{
    /**
     * @description The versions of the product.
     *
     * @var productVersionDetails[]
     */
    public $productVersionDetails;

    /**
     * @description The ID of the request.
     *
     * @example 0FEEF92D-4052-5202-87D0-3D8EC16F81BF
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'productVersionDetails' => 'ProductVersionDetails',
        'requestId'             => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->productVersionDetails) {
            $res['ProductVersionDetails'] = [];
            if (null !== $this->productVersionDetails && \is_array($this->productVersionDetails)) {
                $n = 0;
                foreach ($this->productVersionDetails as $item) {
                    $res['ProductVersionDetails'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListProductVersionsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ProductVersionDetails'])) {
            if (!empty($map['ProductVersionDetails'])) {
                $model->productVersionDetails = [];
                $n                            = 0;
                foreach ($map['ProductVersionDetails'] as $item) {
                    $model->productVersionDetails[$n++] = null !== $item ? productVersionDetails::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
