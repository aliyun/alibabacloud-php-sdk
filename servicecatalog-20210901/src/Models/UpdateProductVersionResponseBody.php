<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicecatalog\V20210901\Models;

use AlibabaCloud\Tea\Model;

class UpdateProductVersionResponseBody extends Model
{
    /**
     * @description The ID of the product version.
     *
     * @example pv-bp15e79d26****
     *
     * @var string
     */
    public $productVersionId;

    /**
     * @description The ID of the request.
     *
     * @example 0FEEF92D-4052-5202-87D0-3D8EC16F81BF
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'productVersionId' => 'ProductVersionId',
        'requestId'        => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->productVersionId) {
            $res['ProductVersionId'] = $this->productVersionId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateProductVersionResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ProductVersionId'])) {
            $model->productVersionId = $map['ProductVersionId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
