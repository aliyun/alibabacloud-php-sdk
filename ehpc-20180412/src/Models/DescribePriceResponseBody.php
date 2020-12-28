<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models;

use AlibabaCloud\SDK\EHPC\V20180412\Models\DescribePriceResponseBody\prices;
use AlibabaCloud\Tea\Model;

class DescribePriceResponseBody extends Model
{
    /**
     * @var prices[]
     */
    public $prices;

    /**
     * @var float
     */
    public $totalTradePrice;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'prices'          => 'Prices',
        'totalTradePrice' => 'TotalTradePrice',
        'requestId'       => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->prices) {
            $res['Prices'] = [];
            if (null !== $this->prices && \is_array($this->prices)) {
                $n = 0;
                foreach ($this->prices as $item) {
                    $res['Prices'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->totalTradePrice) {
            $res['TotalTradePrice'] = $this->totalTradePrice;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
            if (!empty($map['Prices'])) {
                $model->prices = [];
                $n             = 0;
                foreach ($map['Prices'] as $item) {
                    $model->prices[$n++] = null !== $item ? prices::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['TotalTradePrice'])) {
            $model->totalTradePrice = $map['TotalTradePrice'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
