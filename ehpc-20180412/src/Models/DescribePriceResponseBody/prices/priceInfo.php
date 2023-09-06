<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models\DescribePriceResponseBody\prices;

use AlibabaCloud\Tea\Model;

class priceInfo extends Model
{
    /**
     * @description The currency that is used to measure the price. Valid values:
     *
     * USD
     * @example USD
     *
     * @var string
     */
    public $currency;

    /**
     * @description The type of the node. Valid values:
     *
     *   Manager: management node
     *   Login: logon node
     *   Compute: compute node
     *
     * @example Compute
     *
     * @var string
     */
    public $nodeType;

    /**
     * @description The original price of the image.
     *
     * Unit: USD.
     * @example 1258
     *
     * @var float
     */
    public $originalPrice;

    /**
     * @description The final price.
     *
     * Unit: USD.
     * @example 1258
     *
     * @var float
     */
    public $tradePrice;
    protected $_name = [
        'currency'      => 'Currency',
        'nodeType'      => 'NodeType',
        'originalPrice' => 'OriginalPrice',
        'tradePrice'    => 'TradePrice',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->currency) {
            $res['Currency'] = $this->currency;
        }
        if (null !== $this->nodeType) {
            $res['NodeType'] = $this->nodeType;
        }
        if (null !== $this->originalPrice) {
            $res['OriginalPrice'] = $this->originalPrice;
        }
        if (null !== $this->tradePrice) {
            $res['TradePrice'] = $this->tradePrice;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return priceInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Currency'])) {
            $model->currency = $map['Currency'];
        }
        if (isset($map['NodeType'])) {
            $model->nodeType = $map['NodeType'];
        }
        if (isset($map['OriginalPrice'])) {
            $model->originalPrice = $map['OriginalPrice'];
        }
        if (isset($map['TradePrice'])) {
            $model->tradePrice = $map['TradePrice'];
        }

        return $model;
    }
}
