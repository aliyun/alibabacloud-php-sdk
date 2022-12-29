<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dds\V20151201\Models;

use AlibabaCloud\SDK\Dds\V20151201\Models\DescribeRenewalPriceResponseBody\order;
use AlibabaCloud\SDK\Dds\V20151201\Models\DescribeRenewalPriceResponseBody\rules;
use AlibabaCloud\SDK\Dds\V20151201\Models\DescribeRenewalPriceResponseBody\subOrders;
use AlibabaCloud\Tea\Model;

class DescribeRenewalPriceResponseBody extends Model
{
    /**
     * @description The list of orders.
     *
     * @var order
     */
    public $order;

    /**
     * @description The ID of the request.
     *
     * @example EFD65226-08CC-4C4D-B6A4-CB3C382F67B0
     *
     * @var string
     */
    public $requestId;

    /**
     * @description Details about the promotion rules.
     *
     * @var rules
     */
    public $rules;

    /**
     * @description The rules matching the coupons.
     *
     * @var subOrders
     */
    public $subOrders;
    protected $_name = [
        'order'     => 'Order',
        'requestId' => 'RequestId',
        'rules'     => 'Rules',
        'subOrders' => 'SubOrders',
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
     * @return DescribeRenewalPriceResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Order'])) {
            $model->order = order::fromMap($map['Order']);
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
