<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\EHPC\V20180412\Models\DescribePriceResponseBody\prices;

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
        'prices' => 'Prices',
        'requestId' => 'RequestId',
        'totalTradePrice' => 'TotalTradePrice',
    ];

    public function validate()
    {
        if (null !== $this->prices) {
            $this->prices->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->prices) {
            $res['Prices'] = null !== $this->prices ? $this->prices->toArray($noStream) : $this->prices;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->totalTradePrice) {
            $res['TotalTradePrice'] = $this->totalTradePrice;
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
