<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mhub\V20170825\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Mhub\V20170825\Models\QueryProductInfoResponseBody\productInfo;

class QueryProductInfoResponseBody extends Model
{
    /**
     * @var productInfo
     */
    public $productInfo;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'productInfo' => 'ProductInfo',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->productInfo) {
            $this->productInfo->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->productInfo) {
            $res['ProductInfo'] = null !== $this->productInfo ? $this->productInfo->toArray($noStream) : $this->productInfo;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
