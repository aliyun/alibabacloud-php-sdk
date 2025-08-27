<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dds\V20151201\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dds\V20151201\Models\DescribeRenewalPriceResponseBody\order;
use AlibabaCloud\SDK\Dds\V20151201\Models\DescribeRenewalPriceResponseBody\rules;
use AlibabaCloud\SDK\Dds\V20151201\Models\DescribeRenewalPriceResponseBody\subOrders;

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
        'order' => 'Order',
        'requestId' => 'RequestId',
        'rules' => 'Rules',
        'subOrders' => 'SubOrders',
    ];

    public function validate()
    {
        if (null !== $this->order) {
            $this->order->validate();
        }
        if (null !== $this->rules) {
            $this->rules->validate();
        }
        if (null !== $this->subOrders) {
            $this->subOrders->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->order) {
            $res['Order'] = null !== $this->order ? $this->order->toArray($noStream) : $this->order;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->rules) {
            $res['Rules'] = null !== $this->rules ? $this->rules->toArray($noStream) : $this->rules;
        }

        if (null !== $this->subOrders) {
            $res['SubOrders'] = null !== $this->subOrders ? $this->subOrders->toArray($noStream) : $this->subOrders;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
