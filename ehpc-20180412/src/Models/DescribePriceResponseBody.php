<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models;

use AlibabaCloud\SDK\EHPC\V20180412\Models\DescribePriceResponseBody\prices;
use AlibabaCloud\Tea\Model;

class DescribePriceResponseBody extends Model
{
    /**
     * @description The array of cluster prices. If you query the prices of multiple nodes in the cluster, the sequence of the prices in the returned value of PriceInfo is the same as that of the nodes in the request parameters. For example, the first price in the value of PriceInfo is the price of the first node specified in the request parameters.
     *
     * @var prices
     */
    public $prices;

    /**
     * @description The ID of the request.
     *
     * @example 54FF9025-2C2F-42EB-870D-0DF5B0ACF24E
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The total price.
     *
     * Unit: USD
     * @example 1258
     *
     * @var float
     */
    public $totalTradePrice;
    protected $_name = [
        'prices'          => 'Prices',
        'requestId'       => 'RequestId',
        'totalTradePrice' => 'TotalTradePrice',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->prices) {
            $res['Prices'] = null !== $this->prices ? $this->prices->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->totalTradePrice) {
            $res['TotalTradePrice'] = $this->totalTradePrice;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribePriceResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Prices'])) {
            $model->prices = prices::fromMap($map['Prices']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TotalTradePrice'])) {
            $model->totalTradePrice = $map['TotalTradePrice'];
        }

        return $model;
    }
}
