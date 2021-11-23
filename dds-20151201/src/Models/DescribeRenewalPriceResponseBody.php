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
     * @var order
     */
    public $order;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var rules
     */
    public $rules;

    /**
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
