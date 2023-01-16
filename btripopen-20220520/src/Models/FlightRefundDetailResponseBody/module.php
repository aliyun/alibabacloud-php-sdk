<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightRefundDetailResponseBody;

use AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightRefundDetailResponseBody\module\refundFeeList;
use AlibabaCloud\Tea\Model;

class module extends Model
{
    /**
     * @example 123
     *
     * @var int
     */
    public $btripOrderId;

    /**
     * @example 123
     *
     * @var int
     */
    public $btripSubOrderId;

    /**
     * @example dis1234
     *
     * @var string
     */
    public $disOrderId;

    /**
     * @example refun123
     *
     * @var string
     */
    public $disSubOrderId;

    /**
     * @example 1
     *
     * @var int
     */
    public $isVoluntary;

    /**
     * @var string
     */
    public $reason;

    /**
     * @example 100
     *
     * @var int
     */
    public $refundFee;

    /**
     * @var refundFeeList[]
     */
    public $refundFeeList;

    /**
     * @example 100
     *
     * @var int
     */
    public $refundPrice;

    /**
     * @example 0
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'btripOrderId'    => 'btrip_order_id',
        'btripSubOrderId' => 'btrip_sub_order_id',
        'disOrderId'      => 'dis_order_id',
        'disSubOrderId'   => 'dis_sub_order_id',
        'isVoluntary'     => 'is_voluntary',
        'reason'          => 'reason',
        'refundFee'       => 'refund_fee',
        'refundFeeList'   => 'refund_fee_list',
        'refundPrice'     => 'refund_price',
        'status'          => 'status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->btripOrderId) {
            $res['btrip_order_id'] = $this->btripOrderId;
        }
        if (null !== $this->btripSubOrderId) {
            $res['btrip_sub_order_id'] = $this->btripSubOrderId;
        }
        if (null !== $this->disOrderId) {
            $res['dis_order_id'] = $this->disOrderId;
        }
        if (null !== $this->disSubOrderId) {
            $res['dis_sub_order_id'] = $this->disSubOrderId;
        }
        if (null !== $this->isVoluntary) {
            $res['is_voluntary'] = $this->isVoluntary;
        }
        if (null !== $this->reason) {
            $res['reason'] = $this->reason;
        }
        if (null !== $this->refundFee) {
            $res['refund_fee'] = $this->refundFee;
        }
        if (null !== $this->refundFeeList) {
            $res['refund_fee_list'] = [];
            if (null !== $this->refundFeeList && \is_array($this->refundFeeList)) {
                $n = 0;
                foreach ($this->refundFeeList as $item) {
                    $res['refund_fee_list'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->refundPrice) {
            $res['refund_price'] = $this->refundPrice;
        }
        if (null !== $this->status) {
            $res['status'] = $this->status;
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
        if (isset($map['btrip_order_id'])) {
            $model->btripOrderId = $map['btrip_order_id'];
        }
        if (isset($map['btrip_sub_order_id'])) {
            $model->btripSubOrderId = $map['btrip_sub_order_id'];
        }
        if (isset($map['dis_order_id'])) {
            $model->disOrderId = $map['dis_order_id'];
        }
        if (isset($map['dis_sub_order_id'])) {
            $model->disSubOrderId = $map['dis_sub_order_id'];
        }
        if (isset($map['is_voluntary'])) {
            $model->isVoluntary = $map['is_voluntary'];
        }
        if (isset($map['reason'])) {
            $model->reason = $map['reason'];
        }
        if (isset($map['refund_fee'])) {
            $model->refundFee = $map['refund_fee'];
        }
        if (isset($map['refund_fee_list'])) {
            if (!empty($map['refund_fee_list'])) {
                $model->refundFeeList = [];
                $n                    = 0;
                foreach ($map['refund_fee_list'] as $item) {
                    $model->refundFeeList[$n++] = null !== $item ? refundFeeList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['refund_price'])) {
            $model->refundPrice = $map['refund_price'];
        }
        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        return $model;
    }
}
