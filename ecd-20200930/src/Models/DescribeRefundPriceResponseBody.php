<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeRefundPriceResponseBody\priceInfo;
use AlibabaCloud\Tea\Model;

class DescribeRefundPriceResponseBody extends Model
{
    /**
     * @var priceInfo
     */
    public $priceInfo;

    /**
     * @example 1CBAFFAB-B697-4049-A9B1-67E1FC5F****
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'priceInfo' => 'PriceInfo',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->priceInfo) {
            $res['PriceInfo'] = null !== $this->priceInfo ? $this->priceInfo->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeRefundPriceResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PriceInfo'])) {
            $model->priceInfo = priceInfo::fromMap($map['PriceInfo']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
