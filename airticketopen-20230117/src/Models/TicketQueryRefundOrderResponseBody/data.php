<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AirticketOpen\V20230117\Models\TicketQueryRefundOrderResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AirticketOpen\V20230117\Models\TicketQueryRefundOrderResponseBody\data\refundOrders;

class data extends Model
{
    /**
     * @var refundOrders[]
     */
    public $refundOrders;
    protected $_name = [
        'refundOrders' => 'RefundOrders',
    ];

    public function validate()
    {
        if (\is_array($this->refundOrders)) {
            Model::validateArray($this->refundOrders);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->refundOrders) {
            if (\is_array($this->refundOrders)) {
                $res['RefundOrders'] = [];
                $n1 = 0;
                foreach ($this->refundOrders as $item1) {
                    $res['RefundOrders'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['RefundOrders'])) {
            if (!empty($map['RefundOrders'])) {
                $model->refundOrders = [];
                $n1 = 0;
                foreach ($map['RefundOrders'] as $item1) {
                    $model->refundOrders[$n1] = refundOrders::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
