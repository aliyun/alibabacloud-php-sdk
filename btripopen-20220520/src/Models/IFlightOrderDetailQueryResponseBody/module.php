<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\IFlightOrderDetailQueryResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\IFlightOrderDetailQueryResponseBody\module\flightModifyOrderList;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\IFlightOrderDetailQueryResponseBody\module\flightRefundOrderList;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\IFlightOrderDetailQueryResponseBody\module\flightSaleOrder;

class module extends Model
{
    /**
     * @var flightModifyOrderList[]
     */
    public $flightModifyOrderList;

    /**
     * @var flightRefundOrderList[]
     */
    public $flightRefundOrderList;

    /**
     * @var flightSaleOrder
     */
    public $flightSaleOrder;
    protected $_name = [
        'flightModifyOrderList' => 'flight_modify_order_list',
        'flightRefundOrderList' => 'flight_refund_order_list',
        'flightSaleOrder' => 'flight_sale_order',
    ];

    public function validate()
    {
        if (\is_array($this->flightModifyOrderList)) {
            Model::validateArray($this->flightModifyOrderList);
        }
        if (\is_array($this->flightRefundOrderList)) {
            Model::validateArray($this->flightRefundOrderList);
        }
        if (null !== $this->flightSaleOrder) {
            $this->flightSaleOrder->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->flightModifyOrderList) {
            if (\is_array($this->flightModifyOrderList)) {
                $res['flight_modify_order_list'] = [];
                $n1 = 0;
                foreach ($this->flightModifyOrderList as $item1) {
                    $res['flight_modify_order_list'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->flightRefundOrderList) {
            if (\is_array($this->flightRefundOrderList)) {
                $res['flight_refund_order_list'] = [];
                $n1 = 0;
                foreach ($this->flightRefundOrderList as $item1) {
                    $res['flight_refund_order_list'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->flightSaleOrder) {
            $res['flight_sale_order'] = null !== $this->flightSaleOrder ? $this->flightSaleOrder->toArray($noStream) : $this->flightSaleOrder;
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
        if (isset($map['flight_modify_order_list'])) {
            if (!empty($map['flight_modify_order_list'])) {
                $model->flightModifyOrderList = [];
                $n1 = 0;
                foreach ($map['flight_modify_order_list'] as $item1) {
                    $model->flightModifyOrderList[$n1++] = flightModifyOrderList::fromMap($item1);
                }
            }
        }

        if (isset($map['flight_refund_order_list'])) {
            if (!empty($map['flight_refund_order_list'])) {
                $model->flightRefundOrderList = [];
                $n1 = 0;
                foreach ($map['flight_refund_order_list'] as $item1) {
                    $model->flightRefundOrderList[$n1++] = flightRefundOrderList::fromMap($item1);
                }
            }
        }

        if (isset($map['flight_sale_order'])) {
            $model->flightSaleOrder = flightSaleOrder::fromMap($map['flight_sale_order']);
        }

        return $model;
    }
}
