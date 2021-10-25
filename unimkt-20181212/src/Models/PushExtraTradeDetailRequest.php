<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\UniMkt\V20181212\Models;

use AlibabaCloud\Tea\Model;

class PushExtraTradeDetailRequest extends Model
{
    /**
     * @var string
     */
    public $channelId;

    /**
     * @var string
     */
    public $deviceSn;

    /**
     * @var int
     */
    public $tradeTime;

    /**
     * @var string
     */
    public $orderId;

    /**
     * @var string
     */
    public $commodityId;

    /**
     * @var string
     */
    public $commodityName;

    /**
     * @var float
     */
    public $salePrice;

    /**
     * @var float
     */
    public $tradePrice;

    /**
     * @var int
     */
    public $tradeStatus;
    protected $_name = [
        'channelId'     => 'ChannelId',
        'deviceSn'      => 'DeviceSn',
        'tradeTime'     => 'TradeTime',
        'orderId'       => 'OrderId',
        'commodityId'   => 'CommodityId',
        'commodityName' => 'CommodityName',
        'salePrice'     => 'SalePrice',
        'tradePrice'    => 'TradePrice',
        'tradeStatus'   => 'TradeStatus',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->channelId) {
            $res['ChannelId'] = $this->channelId;
        }
        if (null !== $this->deviceSn) {
            $res['DeviceSn'] = $this->deviceSn;
        }
        if (null !== $this->tradeTime) {
            $res['TradeTime'] = $this->tradeTime;
        }
        if (null !== $this->orderId) {
            $res['OrderId'] = $this->orderId;
        }
        if (null !== $this->commodityId) {
            $res['CommodityId'] = $this->commodityId;
        }
        if (null !== $this->commodityName) {
            $res['CommodityName'] = $this->commodityName;
        }
        if (null !== $this->salePrice) {
            $res['SalePrice'] = $this->salePrice;
        }
        if (null !== $this->tradePrice) {
            $res['TradePrice'] = $this->tradePrice;
        }
        if (null !== $this->tradeStatus) {
            $res['TradeStatus'] = $this->tradeStatus;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return PushExtraTradeDetailRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ChannelId'])) {
            $model->channelId = $map['ChannelId'];
        }
        if (isset($map['DeviceSn'])) {
            $model->deviceSn = $map['DeviceSn'];
        }
        if (isset($map['TradeTime'])) {
            $model->tradeTime = $map['TradeTime'];
        }
        if (isset($map['OrderId'])) {
            $model->orderId = $map['OrderId'];
        }
        if (isset($map['CommodityId'])) {
            $model->commodityId = $map['CommodityId'];
        }
        if (isset($map['CommodityName'])) {
            $model->commodityName = $map['CommodityName'];
        }
        if (isset($map['SalePrice'])) {
            $model->salePrice = $map['SalePrice'];
        }
        if (isset($map['TradePrice'])) {
            $model->tradePrice = $map['TradePrice'];
        }
        if (isset($map['TradeStatus'])) {
            $model->tradeStatus = $map['TradeStatus'];
        }

        return $model;
    }
}
