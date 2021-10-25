<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models;

use AlibabaCloud\SDK\EHPC\V20180412\Models\DescribePriceResponseBody\prices;
use AlibabaCloud\Tea\Model;

class DescribePriceResponseBody extends Model
{
    /**
     * @var float
     */
    public $totalTradePrice;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var prices
     */
    public $prices;
    protected $_name = [
        'totalTradePrice' => 'TotalTradePrice',
        'requestId'       => 'RequestId',
        'prices'          => 'Prices',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->totalTradePrice) {
            $res['TotalTradePrice'] = $this->totalTradePrice;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->prices) {
            $res['Prices'] = null !== $this->prices ? $this->prices->toMap() : null;
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
        if (isset($map['TotalTradePrice'])) {
            $model->totalTradePrice = $map['TotalTradePrice'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Prices'])) {
            $model->prices = prices::fromMap($map['Prices']);
        }

        return $model;
    }
}
