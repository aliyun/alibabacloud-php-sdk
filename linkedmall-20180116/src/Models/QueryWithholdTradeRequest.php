<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20180116\Models;

use AlibabaCloud\Tea\Model;

class QueryWithholdTradeRequest extends Model
{
    /**
     * @example 64******721
     *
     * @var string
     */
    public $merchantId;

    /**
     * @example ""
     *
     * @var string
     */
    public $outTradeNo;

    /**
     * @example ""
     *
     * @var string
     */
    public $tradeNo;
    protected $_name = [
        'merchantId' => 'MerchantId',
        'outTradeNo' => 'OutTradeNo',
        'tradeNo'    => 'TradeNo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->merchantId) {
            $res['MerchantId'] = $this->merchantId;
        }
        if (null !== $this->outTradeNo) {
            $res['OutTradeNo'] = $this->outTradeNo;
        }
        if (null !== $this->tradeNo) {
            $res['TradeNo'] = $this->tradeNo;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryWithholdTradeRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MerchantId'])) {
            $model->merchantId = $map['MerchantId'];
        }
        if (isset($map['OutTradeNo'])) {
            $model->outTradeNo = $map['OutTradeNo'];
        }
        if (isset($map['TradeNo'])) {
            $model->tradeNo = $map['TradeNo'];
        }

        return $model;
    }
}
