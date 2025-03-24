<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mhub\V20170825\Models;

use AlibabaCloud\SDK\Mhub\V20170825\Models\QueryProductInfoResponseBody\productInfo;
use AlibabaCloud\Tea\Model;

class QueryProductInfoResponseBody extends Model
{
    /**
     * @var productInfo
     */
    public $productInfo;

    /**
     * @example 126D4DDD-05A5-49B1-B18C-39C4A929BFB2
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'productInfo' => 'ProductInfo',
        'requestId' => 'RequestId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->productInfo) {
            $res['ProductInfo'] = null !== $this->productInfo ? $this->productInfo->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryProductInfoResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ProductInfo'])) {
            $model->productInfo = productInfo::fromMap($map['ProductInfo']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
