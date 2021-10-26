<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models;

use AlibabaCloud\SDK\EHPC\V20180412\Models\DescribePriceResponseBody\prices;
use AlibabaCloud\Tea\Model;

class DescribePriceResponseBody extends Model
{
    /**
     * @var prices
     */
    public $prices;

    /**
     * @var string
     */
    public $requestId;

    /**
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
