<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\IFlightOrderDetailQueryResponseBody;

use AlibabaCloud\SDK\BtripOpen\V20220520\Models\IFlightOrderDetailQueryResponseBody\module\flightModifyOrderList;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\IFlightOrderDetailQueryResponseBody\module\flightRefundOrderList;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\IFlightOrderDetailQueryResponseBody\module\flightSaleOrder;
use AlibabaCloud\Tea\Model;

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
        'flightSaleOrder'       => 'flight_sale_order',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->flightModifyOrderList) {
            $res['flight_modify_order_list'] = [];
            if (null !== $this->flightModifyOrderList && \is_array($this->flightModifyOrderList)) {
                $n = 0;
                foreach ($this->flightModifyOrderList as $item) {
                    $res['flight_modify_order_list'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->flightRefundOrderList) {
            $res['flight_refund_order_list'] = [];
            if (null !== $this->flightRefundOrderList && \is_array($this->flightRefundOrderList)) {
                $n = 0;
                foreach ($this->flightRefundOrderList as $item) {
                    $res['flight_refund_order_list'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->flightSaleOrder) {
            $res['flight_sale_order'] = null !== $this->flightSaleOrder ? $this->flightSaleOrder->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return module
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['flight_modify_order_list'])) {
            if (!empty($map['flight_modify_order_list'])) {
                $model->flightModifyOrderList = [];
                $n                            = 0;
                foreach ($map['flight_modify_order_list'] as $item) {
                    $model->flightModifyOrderList[$n++] = null !== $item ? flightModifyOrderList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['flight_refund_order_list'])) {
            if (!empty($map['flight_refund_order_list'])) {
                $model->flightRefundOrderList = [];
                $n                            = 0;
                foreach ($map['flight_refund_order_list'] as $item) {
                    $model->flightRefundOrderList[$n++] = null !== $item ? flightRefundOrderList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['flight_sale_order'])) {
            $model->flightSaleOrder = flightSaleOrder::fromMap($map['flight_sale_order']);
        }

        return $model;
    }
}
