<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20180116\Models;

use AlibabaCloud\Tea\Model;

class SettleOrderRequest extends Model
{
    /**
     * @example {"key":"value"}
     *
     * @var string
     */
    public $extInfo;

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
    public $outRequestNo;

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
    public $royaltyParameters;

    /**
     * @example ""
     *
     * @var string
     */
    public $tradeNo;
    protected $_name = [
        'extInfo'           => 'ExtInfo',
        'merchantId'        => 'MerchantId',
        'outRequestNo'      => 'OutRequestNo',
        'outTradeNo'        => 'OutTradeNo',
        'royaltyParameters' => 'RoyaltyParameters',
        'tradeNo'           => 'TradeNo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->extInfo) {
            $res['ExtInfo'] = $this->extInfo;
        }
        if (null !== $this->merchantId) {
            $res['MerchantId'] = $this->merchantId;
        }
        if (null !== $this->outRequestNo) {
            $res['OutRequestNo'] = $this->outRequestNo;
        }
        if (null !== $this->outTradeNo) {
            $res['OutTradeNo'] = $this->outTradeNo;
        }
        if (null !== $this->royaltyParameters) {
            $res['RoyaltyParameters'] = $this->royaltyParameters;
        }
        if (null !== $this->tradeNo) {
            $res['TradeNo'] = $this->tradeNo;
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
        if (isset($map['ExtInfo'])) {
            $model->extInfo = $map['ExtInfo'];
        }
        if (isset($map['MerchantId'])) {
            $model->merchantId = $map['MerchantId'];
        }
        if (isset($map['OutRequestNo'])) {
            $model->outRequestNo = $map['OutRequestNo'];
        }
        if (isset($map['OutTradeNo'])) {
            $model->outTradeNo = $map['OutTradeNo'];
        }
        if (isset($map['RoyaltyParameters'])) {
            $model->royaltyParameters = $map['RoyaltyParameters'];
        }
        if (isset($map['TradeNo'])) {
            $model->tradeNo = $map['TradeNo'];
        }

        return $model;
    }
}
