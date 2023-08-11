<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imarketing\V20220704\Models\QueryOrderResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @example 2023080922001195790515238438
     *
     * @var string
     */
    public $alipayTradeId;

    /**
     * @example 202308101
     *
     * @var string
     */
    public $channelTradeId;

    /**
     * @example 732766164666
     *
     * @var int
     */
    public $itemId;

    /**
     * @example 1691636782919
     *
     * @var int
     */
    public $modifiedTime;

    /**
     * @example 0
     *
     * @var int
     */
    public $orderStatus;

    /**
     * @example 50
     *
     * @var int
     */
    public $price;

    /**
     * @example 2BDF2EA5-DD3D-171D-AB54-A9EC7DA1008F
     *
     * @var string
     */
    public $requestId;

    /**
     * @example true
     *
     * @var bool
     */
    public $success;

    /**
     * @example 3469791531013613461
     *
     * @var string
     */
    public $taobaoTradeId;

    /**
     * @example bb7b39c7-4982-41af-8158-1a694b40cf2a
     *
     * @var string
     */
    public $tradeId;
    protected $_name = [
        'alipayTradeId'  => 'AlipayTradeId',
        'channelTradeId' => 'ChannelTradeId',
        'itemId'         => 'ItemId',
        'modifiedTime'   => 'ModifiedTime',
        'orderStatus'    => 'OrderStatus',
        'price'          => 'Price',
        'requestId'      => 'RequestId',
        'success'        => 'Success',
        'taobaoTradeId'  => 'TaobaoTradeId',
        'tradeId'        => 'TradeId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->alipayTradeId) {
            $res['AlipayTradeId'] = $this->alipayTradeId;
        }
        if (null !== $this->channelTradeId) {
            $res['ChannelTradeId'] = $this->channelTradeId;
        }
        if (null !== $this->itemId) {
            $res['ItemId'] = $this->itemId;
        }
        if (null !== $this->modifiedTime) {
            $res['ModifiedTime'] = $this->modifiedTime;
        }
        if (null !== $this->orderStatus) {
            $res['OrderStatus'] = $this->orderStatus;
        }
        if (null !== $this->price) {
            $res['Price'] = $this->price;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }
        if (null !== $this->taobaoTradeId) {
            $res['TaobaoTradeId'] = $this->taobaoTradeId;
        }
        if (null !== $this->tradeId) {
            $res['TradeId'] = $this->tradeId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AlipayTradeId'])) {
            $model->alipayTradeId = $map['AlipayTradeId'];
        }
        if (isset($map['ChannelTradeId'])) {
            $model->channelTradeId = $map['ChannelTradeId'];
        }
        if (isset($map['ItemId'])) {
            $model->itemId = $map['ItemId'];
        }
        if (isset($map['ModifiedTime'])) {
            $model->modifiedTime = $map['ModifiedTime'];
        }
        if (isset($map['OrderStatus'])) {
            $model->orderStatus = $map['OrderStatus'];
        }
        if (isset($map['Price'])) {
            $model->price = $map['Price'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }
        if (isset($map['TaobaoTradeId'])) {
            $model->taobaoTradeId = $map['TaobaoTradeId'];
        }
        if (isset($map['TradeId'])) {
            $model->tradeId = $map['TradeId'];
        }

        return $model;
    }
}
