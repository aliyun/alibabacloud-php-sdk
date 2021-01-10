<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20180116\Models;

use AlibabaCloud\Tea\Model;

class QueryWithholdTradeRequest extends Model
{
    /**
     * @var string
     */
    public $tradeNo;

    /**
     * @var string
     */
    public $outTradeNo;

    /**
     * @var string
     */
    public $merchantId;
    protected $_name = [
        'tradeNo'    => 'TradeNo',
        'outTradeNo' => 'OutTradeNo',
        'merchantId' => 'MerchantId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->tradeNo) {
            $res['TradeNo'] = $this->tradeNo;
        }
        if (null !== $this->outTradeNo) {
            $res['OutTradeNo'] = $this->outTradeNo;
        }
        if (null !== $this->merchantId) {
            $res['MerchantId'] = $this->merchantId;
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
        if (isset($map['TradeNo'])) {
            $model->tradeNo = $map['TradeNo'];
        }
        if (isset($map['OutTradeNo'])) {
            $model->outTradeNo = $map['OutTradeNo'];
        }
        if (isset($map['MerchantId'])) {
            $model->merchantId = $map['MerchantId'];
        }

        return $model;
    }
}
