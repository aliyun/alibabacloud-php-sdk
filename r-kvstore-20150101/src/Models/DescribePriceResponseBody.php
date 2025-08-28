<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rkvstore\V20150101\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribePriceResponseBody\order;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribePriceResponseBody\rules;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribePriceResponseBody\subOrders;

class DescribePriceResponseBody extends Model
{
    /**
     * @var order
     */
    public $order;

    /**
     * @var string
     */
    public $orderParams;

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
        'orderParams' => 'OrderParams',
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

        if (null !== $this->orderParams) {
            $res['OrderParams'] = $this->orderParams;
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
