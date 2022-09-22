<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20160314\Models;

use AlibabaCloud\SDK\Ecs\V20160314\Models\CreateOrderResponseBody\orderParams;
use AlibabaCloud\SDK\Ecs\V20160314\Models\CreateOrderResponseBody\relatedOrderItemSets;
use AlibabaCloud\Tea\Model;

class CreateOrderResponseBody extends Model
{
    /**
     * @var string
     */
    public $orderId;

    /**
     * @var orderParams
     */
    public $orderParams;

    /**
     * @var relatedOrderItemSets
     */
    public $relatedOrderItemSets;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $taskId;

    /**
     * @var float
     */
    public $tradePrice;
    protected $_name = [
        'orderId'              => 'OrderId',
        'orderParams'          => 'OrderParams',
        'relatedOrderItemSets' => 'RelatedOrderItemSets',
        'requestId'            => 'RequestId',
        'taskId'               => 'TaskId',
        'tradePrice'           => 'TradePrice',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->orderId) {
            $res['OrderId'] = $this->orderId;
        }
        if (null !== $this->orderParams) {
            $res['OrderParams'] = null !== $this->orderParams ? $this->orderParams->toMap() : null;
        }
        if (null !== $this->relatedOrderItemSets) {
            $res['RelatedOrderItemSets'] = null !== $this->relatedOrderItemSets ? $this->relatedOrderItemSets->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }
        if (null !== $this->tradePrice) {
            $res['TradePrice'] = $this->tradePrice;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateOrderResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OrderId'])) {
            $model->orderId = $map['OrderId'];
        }
        if (isset($map['OrderParams'])) {
            $model->orderParams = orderParams::fromMap($map['OrderParams']);
        }
        if (isset($map['RelatedOrderItemSets'])) {
            $model->relatedOrderItemSets = relatedOrderItemSets::fromMap($map['RelatedOrderItemSets']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }
        if (isset($map['TradePrice'])) {
            $model->tradePrice = $map['TradePrice'];
        }

        return $model;
    }
}
