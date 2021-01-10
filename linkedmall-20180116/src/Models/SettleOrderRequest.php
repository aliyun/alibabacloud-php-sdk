<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20180116\Models;

use AlibabaCloud\Tea\Model;

class SettleOrderRequest extends Model
{
    /**
     * @var string
     */
    public $outRequestNo;

    /**
     * @var string
     */
    public $tradeNo;

    /**
     * @var string
     */
    public $royaltyParameters;

    /**
     * @var string
     */
    public $extInfo;

    /**
     * @var string
     */
    public $outTradeNo;

    /**
     * @var string
     */
    public $merchantId;
    protected $_name = [
        'outRequestNo'      => 'OutRequestNo',
        'tradeNo'           => 'TradeNo',
        'royaltyParameters' => 'RoyaltyParameters',
        'extInfo'           => 'ExtInfo',
        'outTradeNo'        => 'OutTradeNo',
        'merchantId'        => 'MerchantId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->outRequestNo) {
            $res['OutRequestNo'] = $this->outRequestNo;
        }
        if (null !== $this->tradeNo) {
            $res['TradeNo'] = $this->tradeNo;
        }
        if (null !== $this->royaltyParameters) {
            $res['RoyaltyParameters'] = $this->royaltyParameters;
        }
        if (null !== $this->extInfo) {
            $res['ExtInfo'] = $this->extInfo;
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
     * @return SettleOrderRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OutRequestNo'])) {
            $model->outRequestNo = $map['OutRequestNo'];
        }
        if (isset($map['TradeNo'])) {
            $model->tradeNo = $map['TradeNo'];
        }
        if (isset($map['RoyaltyParameters'])) {
            $model->royaltyParameters = $map['RoyaltyParameters'];
        }
        if (isset($map['ExtInfo'])) {
            $model->extInfo = $map['ExtInfo'];
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
