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
     * @description The information about the order.
     *
     * @var order
     */
    public $order;

    /**
     * @description The parameters of the order. This parameter is returned when OrderParamOut is set to `true`.
     *
     * @example String
     *
     * @var string
     */
    public $orderParams;

    /**
     * @description The ID of the request.
     *
     * @example 3A40BE4E-1890-4972-889C-FEFA37663635
     *
     * @var string
     */
    public $requestId;

    /**
     * @description Details about promotion rules.
     *
     * @var rules
     */
    public $rules;

    /**
     * @description Details about rules that match the coupon.
     *
     * @var subOrders
     */
    public $subOrders;
    protected $_name = [
        'order'       => 'Order',
        'orderParams' => 'OrderParams',
        'requestId'   => 'RequestId',
        'rules'       => 'Rules',
        'subOrders'   => 'SubOrders',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->order) {
            $res['Order'] = null !== $this->order ? $this->order->toMap() : null;
        }
        if (null !== $this->orderParams) {
            $res['OrderParams'] = $this->orderParams;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->rules) {
            $res['Rules'] = null !== $this->rules ? $this->rules->toMap() : null;
        }
        if (null !== $this->subOrders) {
            $res['SubOrders'] = null !== $this->subOrders ? $this->subOrders->toMap() : null;
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
        if (isset($map['Order'])) {
            $model->order = order::fromMap($map['Order']);
        }
        if (isset($map['OrderParams'])) {
            $model->orderParams = $map['OrderParams'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Rules'])) {
            $model->rules = rules::fromMap($map['Rules']);
        }
        if (isset($map['SubOrders'])) {
            $model->subOrders = subOrders::fromMap($map['SubOrders']);
        }

        return $model;
    }
}
