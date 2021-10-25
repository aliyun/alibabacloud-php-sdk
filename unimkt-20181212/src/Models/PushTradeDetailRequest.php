<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\UniMkt\V20181212\Models;

use AlibabaCloud\Tea\Model;

class PushTradeDetailRequest extends Model
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
     * @var string
     */
    public $outerTradeId;

    /**
     * @var int
     */
    public $tradeTime;

    /**
     * @var string
     */
    public $tradeOrderId;

    /**
     * @var string
     */
    public $alipayOrderId;

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

    /**
     * @var int
     */
    public $verificationStatus;

    /**
     * @var int
     */
    public $startTime;

    /**
     * @var int
     */
    public $endTime;
    protected $_name = [
        'channelId'          => 'ChannelId',
        'deviceSn'           => 'DeviceSn',
        'outerTradeId'       => 'OuterTradeId',
        'tradeTime'          => 'TradeTime',
        'tradeOrderId'       => 'TradeOrderId',
        'alipayOrderId'      => 'AlipayOrderId',
        'commodityId'        => 'CommodityId',
        'commodityName'      => 'CommodityName',
        'salePrice'          => 'SalePrice',
        'tradePrice'         => 'TradePrice',
        'tradeStatus'        => 'TradeStatus',
        'verificationStatus' => 'VerificationStatus',
        'startTime'          => 'StartTime',
        'endTime'            => 'EndTime',
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
        if (null !== $this->outerTradeId) {
            $res['OuterTradeId'] = $this->outerTradeId;
        }
        if (null !== $this->tradeTime) {
            $res['TradeTime'] = $this->tradeTime;
        }
        if (null !== $this->tradeOrderId) {
            $res['TradeOrderId'] = $this->tradeOrderId;
        }
        if (null !== $this->alipayOrderId) {
            $res['AlipayOrderId'] = $this->alipayOrderId;
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
        if (null !== $this->verificationStatus) {
            $res['VerificationStatus'] = $this->verificationStatus;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return PushTradeDetailRequest
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
        if (isset($map['OuterTradeId'])) {
            $model->outerTradeId = $map['OuterTradeId'];
        }
        if (isset($map['TradeTime'])) {
            $model->tradeTime = $map['TradeTime'];
        }
        if (isset($map['TradeOrderId'])) {
            $model->tradeOrderId = $map['TradeOrderId'];
        }
        if (isset($map['AlipayOrderId'])) {
            $model->alipayOrderId = $map['AlipayOrderId'];
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
        if (isset($map['VerificationStatus'])) {
            $model->verificationStatus = $map['VerificationStatus'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }

        return $model;
    }
}
