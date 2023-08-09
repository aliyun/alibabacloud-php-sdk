<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dds\V20151201\Models;

use AlibabaCloud\SDK\Dds\V20151201\Models\DescribePriceResponseBody\order;
use AlibabaCloud\SDK\Dds\V20151201\Models\DescribePriceResponseBody\rules;
use AlibabaCloud\SDK\Dds\V20151201\Models\DescribePriceResponseBody\subOrders;
use AlibabaCloud\Tea\Model;

class DescribePriceResponseBody extends Model
{
    /**
     * @description The order.
     *
     * @var order
     */
    public $order;

    /**
     * @description The order parameters.
     *
     * > This parameter is returned only when the **OrderParamOut** parameter is set to **true**.
     * @example {\"autoPay\":false}"
     *
     * @var string
     */
    public $orderParams;

    /**
     * @description The request ID.
     *
     * @example 27227A3D-6B86-56F3-9E03-9E60F001CE12
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The promotion rules.
     *
     * @var rules
     */
    public $rules;

    /**
     * @description The coupon rules.
     *
     * @var subOrders
     */
    public $subOrders;

    /**
     * @description The ID of the trace.
     *
     * @example 27227A3D-6B87-56F3-9E03-9E60F001****
     *
     * @var string
     */
    public $traceId;
    protected $_name = [
        'order'       => 'Order',
        'orderParams' => 'OrderParams',
        'requestId'   => 'RequestId',
        'rules'       => 'Rules',
        'subOrders'   => 'SubOrders',
        'traceId'     => 'TraceId',
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
        if (null !== $this->traceId) {
            $res['TraceId'] = $this->traceId;
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
        if (isset($map['TraceId'])) {
            $model->traceId = $map['TraceId'];
        }

        return $model;
    }
}
