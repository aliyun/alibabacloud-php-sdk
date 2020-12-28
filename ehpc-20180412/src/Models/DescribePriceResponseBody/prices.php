<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models\DescribePriceResponseBody;

use AlibabaCloud\Tea\Model;

class prices extends Model
{
    /**
     * @var string
     */
    public $nodeType;

    /**
     * @var float
     */
    public $tradePrice;

    /**
     * @var float
     */
    public $originalPrice;

    /**
     * @var string
     */
    public $currency;
    protected $_name = [
        'nodeType'      => 'NodeType',
        'tradePrice'    => 'TradePrice',
        'originalPrice' => 'OriginalPrice',
        'currency'      => 'Currency',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->nodeType) {
            $res['NodeType'] = $this->nodeType;
        }
        if (null !== $this->tradePrice) {
            $res['TradePrice'] = $this->tradePrice;
        }
        if (null !== $this->originalPrice) {
            $res['OriginalPrice'] = $this->originalPrice;
        }
        if (null !== $this->currency) {
            $res['Currency'] = $this->currency;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return prices
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NodeType'])) {
            $model->nodeType = $map['NodeType'];
        }
        if (isset($map['TradePrice'])) {
            $model->tradePrice = $map['TradePrice'];
        }
        if (isset($map['OriginalPrice'])) {
            $model->originalPrice = $map['OriginalPrice'];
        }
        if (isset($map['Currency'])) {
            $model->currency = $map['Currency'];
        }

        return $model;
    }
}
