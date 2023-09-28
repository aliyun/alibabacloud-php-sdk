<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicecatalog\V20210901\Models;

use AlibabaCloud\SDK\Servicecatalog\V20210901\Models\GetProvisionedProductResponseBody\provisionedProductDetail;
use AlibabaCloud\Tea\Model;

class GetProvisionedProductResponseBody extends Model
{
    /**
     * @description The details of the product instance.
     *
     * @var provisionedProductDetail
     */
    public $provisionedProductDetail;

    /**
     * @description The ID of the request.
     *
     * @example 0FEEF92D-4052-5202-87D0-3D8EC16F81BF
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'provisionedProductDetail' => 'ProvisionedProductDetail',
        'requestId'                => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->provisionedProductDetail) {
            $res['ProvisionedProductDetail'] = null !== $this->provisionedProductDetail ? $this->provisionedProductDetail->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetProvisionedProductResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ProvisionedProductDetail'])) {
            $model->provisionedProductDetail = provisionedProductDetail::fromMap($map['ProvisionedProductDetail']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
