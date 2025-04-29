<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightRefundDetailV2ResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightRefundDetailV2ResponseBody\module\contactInfoDTO;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightRefundDetailV2ResponseBody\module\flightInfoDTOS;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightRefundDetailV2ResponseBody\module\travelerInfoDTOS;

class module extends Model
{
    /**
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
     * @var int
     */
    public $nonRefundableChangeServicePrice;

    /**
     * @var int
     */
    public $nonRefundableChangeUpgradePrice;

    /**
     * @var int
     */
    public $orderId;

    /**
     * @var string
     */
    public $outOrderId;

    /**
     * @var string
     */
    public $outSubOrderId;

    /**
     * @var string
     */
    public $reason;

    /**
     * @var string
     */
    public $reasonCode;

    /**
     * @var string
     */
    public $refundFailReason;

    /**
     * @var int
     */
    public $refundHandlingFee;

    /**
     * @var int
     */
    public $refundMoney;

    /**
     * @var int
     */
    public $status;

    /**
     * @var int
     */
    public $subOrderId;

    /**
     * @var travelerInfoDTOS[]
     */
    public $travelerInfoDTOS;
    protected $_name = [
        'applyTime' => 'apply_time',
        'contactInfoDTO' => 'contact_info_d_t_o',
        'flightInfoDTOS' => 'flight_info_d_t_o_s',
        'nonRefundableChangeServicePrice' => 'non_refundable_change_service_price',
        'nonRefundableChangeUpgradePrice' => 'non_refundable_change_upgrade_price',
        'orderId' => 'order_id',
        'outOrderId' => 'out_order_id',
        'outSubOrderId' => 'out_sub_order_id',
        'reason' => 'reason',
        'reasonCode' => 'reason_code',
        'refundFailReason' => 'refund_fail_reason',
        'refundHandlingFee' => 'refund_handling_fee',
        'refundMoney' => 'refund_money',
        'status' => 'status',
        'subOrderId' => 'sub_order_id',
        'travelerInfoDTOS' => 'traveler_info_d_t_o_s',
    ];

    public function validate()
    {
        if (null !== $this->contactInfoDTO) {
            $this->contactInfoDTO->validate();
        }
        if (\is_array($this->flightInfoDTOS)) {
            Model::validateArray($this->flightInfoDTOS);
        }
        if (\is_array($this->travelerInfoDTOS)) {
            Model::validateArray($this->travelerInfoDTOS);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->applyTime) {
            $res['apply_time'] = $this->applyTime;
        }

        if (null !== $this->contactInfoDTO) {
            $res['contact_info_d_t_o'] = null !== $this->contactInfoDTO ? $this->contactInfoDTO->toArray($noStream) : $this->contactInfoDTO;
        }

        if (null !== $this->flightInfoDTOS) {
            if (\is_array($this->flightInfoDTOS)) {
                $res['flight_info_d_t_o_s'] = [];
                $n1 = 0;
                foreach ($this->flightInfoDTOS as $item1) {
                    $res['flight_info_d_t_o_s'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->nonRefundableChangeServicePrice) {
            $res['non_refundable_change_service_price'] = $this->nonRefundableChangeServicePrice;
        }

        if (null !== $this->nonRefundableChangeUpgradePrice) {
            $res['non_refundable_change_upgrade_price'] = $this->nonRefundableChangeUpgradePrice;
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
            if (\is_array($this->travelerInfoDTOS)) {
                $res['traveler_info_d_t_o_s'] = [];
                $n1 = 0;
                foreach ($this->travelerInfoDTOS as $item1) {
                    $res['traveler_info_d_t_o_s'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['apply_time'])) {
            $model->applyTime = $map['apply_time'];
        }

        if (isset($map['contact_info_d_t_o'])) {
            $model->contactInfoDTO = contactInfoDTO::fromMap($map['contact_info_d_t_o']);
        }

        if (isset($map['flight_info_d_t_o_s'])) {
            if (!empty($map['flight_info_d_t_o_s'])) {
                $model->flightInfoDTOS = [];
                $n1 = 0;
                foreach ($map['flight_info_d_t_o_s'] as $item1) {
                    $model->flightInfoDTOS[$n1++] = flightInfoDTOS::fromMap($item1);
                }
            }
        }

        if (isset($map['non_refundable_change_service_price'])) {
            $model->nonRefundableChangeServicePrice = $map['non_refundable_change_service_price'];
        }

        if (isset($map['non_refundable_change_upgrade_price'])) {
            $model->nonRefundableChangeUpgradePrice = $map['non_refundable_change_upgrade_price'];
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
                $n1 = 0;
                foreach ($map['traveler_info_d_t_o_s'] as $item1) {
                    $model->travelerInfoDTOS[$n1++] = travelerInfoDTOS::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
