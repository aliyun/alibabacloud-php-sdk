<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rkvstore\V20150101\Models;

use AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribePriceResponseBody\order;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribePriceResponseBody\rules;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribePriceResponseBody\subOrders;
use AlibabaCloud\Tea\Model;

class DescribePriceResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $orderParams;

    /**
     * @var rules
     */
    public $rules;

    /**
     * @var subOrders
     */
    public $subOrders;

    /**
     * @var order
     */
    public $order;
    protected $_name = [
        'requestId'   => 'RequestId',
        'orderParams' => 'OrderParams',
        'rules'       => 'Rules',
        'subOrders'   => 'SubOrders',
        'order'       => 'Order',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->orderParams) {
            $res['OrderParams'] = $this->orderParams;
        }
        if (null !== $this->rules) {
            $res['Rules'] = null !== $this->rules ? $this->rules->toMap() : null;
        }
        if (null !== $this->subOrders) {
            $res['SubOrders'] = null !== $this->subOrders ? $this->subOrders->toMap() : null;
        }
        if (null !== $this->order) {
            $res['Order'] = null !== $this->order ? $this->order->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribePriceResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['OrderParams'])) {
            $model->orderParams = $map['OrderParams'];
        }
        if (isset($map['Rules'])) {
            $model->rules = rules::fromMap($map['Rules']);
        }
        if (isset($map['SubOrders'])) {
            $model->subOrders = subOrders::fromMap($map['SubOrders']);
        }
        if (isset($map['Order'])) {
            $model->order = order::fromMap($map['Order']);
        }

        return $model;
    }
}
