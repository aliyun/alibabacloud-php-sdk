<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightRefundDetailV2ResponseBody;

use AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightRefundDetailV2ResponseBody\module\contactInfoDTO;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightRefundDetailV2ResponseBody\module\flightInfoDTOS;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightRefundDetailV2ResponseBody\module\travelerInfoDTOS;
use AlibabaCloud\Tea\Model;

class module extends Model
{
    /**
     * @example 2023-08-19 17:18:19
     *
     * @var string
     */
    public $applyTime;

    /**
     * @var contactInfoDTO
     */
    public $contactInfoDTO;

    /**
     * @var flightInfoDTOS[]
     */
    public $flightInfoDTOS;

    /**
     * @example 1002039195025156700
     *
     * @var int
     */
    public $orderId;

    /**
     * @example 1002039195025156700
     *
     * @var string
     */
    public $outOrderId;

    /**
     * @example 1019195836916039
     *
     * @var string
     */
    public $outSubOrderId;

    /**
     * @var string
     */
    public $reason;

    /**
     * @example 1
     *
     * @var string
     */
    public $reasonCode;

    /**
     * @var string
     */
    public $refundFailReason;

    /**
     * @example 100
     *
     * @var int
     */
    public $refundHandlingFee;

    /**
     * @example 10000
     *
     * @var int
     */
    public $refundMoney;

    /**
     * @example 1
     *
     * @var int
     */
    public $status;

    /**
     * @example 1000000000297003
     *
     * @var int
     */
    public $subOrderId;

    /**
     * @var travelerInfoDTOS[]
     */
    public $travelerInfoDTOS;
    protected $_name = [
        'applyTime'         => 'apply_time',
        'contactInfoDTO'    => 'contact_info_d_t_o',
        'flightInfoDTOS'    => 'flight_info_d_t_o_s',
        'orderId'           => 'order_id',
        'outOrderId'        => 'out_order_id',
        'outSubOrderId'     => 'out_sub_order_id',
        'reason'            => 'reason',
        'reasonCode'        => 'reason_code',
        'refundFailReason'  => 'refund_fail_reason',
        'refundHandlingFee' => 'refund_handling_fee',
        'refundMoney'       => 'refund_money',
        'status'            => 'status',
        'subOrderId'        => 'sub_order_id',
        'travelerInfoDTOS'  => 'traveler_info_d_t_o_s',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->applyTime) {
            $res['apply_time'] = $this->applyTime;
        }
        if (null !== $this->contactInfoDTO) {
            $res['contact_info_d_t_o'] = null !== $this->contactInfoDTO ? $this->contactInfoDTO->toMap() : null;
        }
        if (null !== $this->flightInfoDTOS) {
            $res['flight_info_d_t_o_s'] = [];
            if (null !== $this->flightInfoDTOS && \is_array($this->flightInfoDTOS)) {
                $n = 0;
                foreach ($this->flightInfoDTOS as $item) {
                    $res['flight_info_d_t_o_s'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->orderId) {
            $res['order_id'] = $this->orderId;
        }
        if (null !== $this->outOrderId) {
            $res['out_order_id'] = $this->outOrderId;
        }
        if (null !== $this->outSubOrderId) {
            $res['out_sub_order_id'] = $this->outSubOrderId;
        }
        if (null !== $this->reason) {
            $res['reason'] = $this->reason;
        }
        if (null !== $this->reasonCode) {
            $res['reason_code'] = $this->reasonCode;
        }
        if (null !== $this->refundFailReason) {
            $res['refund_fail_reason'] = $this->refundFailReason;
        }
        if (null !== $this->refundHandlingFee) {
            $res['refund_handling_fee'] = $this->refundHandlingFee;
        }
        if (null !== $this->refundMoney) {
            $res['refund_money'] = $this->refundMoney;
        }
        if (null !== $this->status) {
            $res['status'] = $this->status;
        }
        if (null !== $this->subOrderId) {
            $res['sub_order_id'] = $this->subOrderId;
        }
        if (null !== $this->travelerInfoDTOS) {
            $res['traveler_info_d_t_o_s'] = [];
            if (null !== $this->travelerInfoDTOS && \is_array($this->travelerInfoDTOS)) {
                $n = 0;
                foreach ($this->travelerInfoDTOS as $item) {
                    $res['traveler_info_d_t_o_s'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
        if (isset($map['apply_time'])) {
            $model->applyTime = $map['apply_time'];
        }
        if (isset($map['contact_info_d_t_o'])) {
            $model->contactInfoDTO = contactInfoDTO::fromMap($map['contact_info_d_t_o']);
        }
        if (isset($map['flight_info_d_t_o_s'])) {
            if (!empty($map['flight_info_d_t_o_s'])) {
                $model->flightInfoDTOS = [];
                $n                     = 0;
                foreach ($map['flight_info_d_t_o_s'] as $item) {
                    $model->flightInfoDTOS[$n++] = null !== $item ? flightInfoDTOS::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['order_id'])) {
            $model->orderId = $map['order_id'];
        }
        if (isset($map['out_order_id'])) {
            $model->outOrderId = $map['out_order_id'];
        }
        if (isset($map['out_sub_order_id'])) {
            $model->outSubOrderId = $map['out_sub_order_id'];
        }
        if (isset($map['reason'])) {
            $model->reason = $map['reason'];
        }
        if (isset($map['reason_code'])) {
            $model->reasonCode = $map['reason_code'];
        }
        if (isset($map['refund_fail_reason'])) {
            $model->refundFailReason = $map['refund_fail_reason'];
        }
        if (isset($map['refund_handling_fee'])) {
            $model->refundHandlingFee = $map['refund_handling_fee'];
        }
        if (isset($map['refund_money'])) {
            $model->refundMoney = $map['refund_money'];
        }
        if (isset($map['status'])) {
            $model->status = $map['status'];
        }
        if (isset($map['sub_order_id'])) {
            $model->subOrderId = $map['sub_order_id'];
        }
        if (isset($map['traveler_info_d_t_o_s'])) {
            if (!empty($map['traveler_info_d_t_o_s'])) {
                $model->travelerInfoDTOS = [];
                $n                       = 0;
                foreach ($map['traveler_info_d_t_o_s'] as $item) {
                    $model->travelerInfoDTOS[$n++] = null !== $item ? travelerInfoDTOS::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
