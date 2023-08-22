<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightModifyOrderDetailV2ResponseBody;

use AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightModifyOrderDetailV2ResponseBody\module\contactInfoDTO;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightModifyOrderDetailV2ResponseBody\module\destFlightInfoDTOS;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightModifyOrderDetailV2ResponseBody\module\travelerInfoDTOS;
use AlibabaCloud\Tea\Model;

class module extends Model
{
    /**
     * @example 2023-08-14 11:28:01
     *
     * @var string
     */
    public $applyTime;

    /**
     * @example 17635462345@163.com
     *
     * @var string
     */
    public $bookUserEmail;

    /**
     * @var string
     */
    public $bookUserName;

    /**
     * @example 17635462345
     *
     * @var string
     */
    public $bookuserPhone;

    /**
     * @var string
     */
    public $changeFailReason;

    /**
     * @var contactInfoDTO
     */
    public $contactInfoDTO;

    /**
     * @var destFlightInfoDTOS[]
     */
    public $destFlightInfoDTOS;

    /**
     * @example 2023-08-14 11:48:01
     *
     * @var string
     */
    public $lastPayTime;

    /**
     * @example 1017124195788186048
     *
     * @var int
     */
    public $orderId;

    /**
     * @example 1017124195788186048
     *
     * @var string
     */
    public $outOrderId;

    /**
     * @example 1019195836916029
     *
     * @var string
     */
    public $outSubOrderId;

    /**
     * @example 2023-08-14 11:38:01
     *
     * @var string
     */
    public $payTime;

    /**
     * @var string
     */
    public $reason;

    /**
     * @example 1
     *
     * @var int
     */
    public $status;

    /**
     * @example 1019195836916029
     *
     * @var int
     */
    public $subOrderId;

    /**
     * @example 2023-08-19 15:24:08
     *
     * @var string
     */
    public $ticketTime;

    /**
     * @example 100
     *
     * @var int
     */
    public $totalPrice;

    /**
     * @example 0
     *
     * @var int
     */
    public $totalServiceFeePrice;

    /**
     * @var travelerInfoDTOS[]
     */
    public $travelerInfoDTOS;
    protected $_name = [
        'applyTime'            => 'apply_time',
        'bookUserEmail'        => 'book_user_email',
        'bookUserName'         => 'book_user_name',
        'bookuserPhone'        => 'bookuser_phone',
        'changeFailReason'     => 'change_fail_reason',
        'contactInfoDTO'       => 'contact_info_d_t_o',
        'destFlightInfoDTOS'   => 'dest_flight_info_d_t_o_s',
        'lastPayTime'          => 'last_pay_time',
        'orderId'              => 'order_id',
        'outOrderId'           => 'out_order_id',
        'outSubOrderId'        => 'out_sub_order_id',
        'payTime'              => 'pay_time',
        'reason'               => 'reason',
        'status'               => 'status',
        'subOrderId'           => 'sub_order_id',
        'ticketTime'           => 'ticket_time',
        'totalPrice'           => 'total_price',
        'totalServiceFeePrice' => 'total_service_fee_price',
        'travelerInfoDTOS'     => 'traveler_info_d_t_o_s',
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
        if (null !== $this->bookUserEmail) {
            $res['book_user_email'] = $this->bookUserEmail;
        }
        if (null !== $this->bookUserName) {
            $res['book_user_name'] = $this->bookUserName;
        }
        if (null !== $this->bookuserPhone) {
            $res['bookuser_phone'] = $this->bookuserPhone;
        }
        if (null !== $this->changeFailReason) {
            $res['change_fail_reason'] = $this->changeFailReason;
        }
        if (null !== $this->contactInfoDTO) {
            $res['contact_info_d_t_o'] = null !== $this->contactInfoDTO ? $this->contactInfoDTO->toMap() : null;
        }
        if (null !== $this->destFlightInfoDTOS) {
            $res['dest_flight_info_d_t_o_s'] = [];
            if (null !== $this->destFlightInfoDTOS && \is_array($this->destFlightInfoDTOS)) {
                $n = 0;
                foreach ($this->destFlightInfoDTOS as $item) {
                    $res['dest_flight_info_d_t_o_s'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->lastPayTime) {
            $res['last_pay_time'] = $this->lastPayTime;
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
        if (null !== $this->payTime) {
            $res['pay_time'] = $this->payTime;
        }
        if (null !== $this->reason) {
            $res['reason'] = $this->reason;
        }
        if (null !== $this->status) {
            $res['status'] = $this->status;
        }
        if (null !== $this->subOrderId) {
            $res['sub_order_id'] = $this->subOrderId;
        }
        if (null !== $this->ticketTime) {
            $res['ticket_time'] = $this->ticketTime;
        }
        if (null !== $this->totalPrice) {
            $res['total_price'] = $this->totalPrice;
        }
        if (null !== $this->totalServiceFeePrice) {
            $res['total_service_fee_price'] = $this->totalServiceFeePrice;
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
        if (isset($map['book_user_email'])) {
            $model->bookUserEmail = $map['book_user_email'];
        }
        if (isset($map['book_user_name'])) {
            $model->bookUserName = $map['book_user_name'];
        }
        if (isset($map['bookuser_phone'])) {
            $model->bookuserPhone = $map['bookuser_phone'];
        }
        if (isset($map['change_fail_reason'])) {
            $model->changeFailReason = $map['change_fail_reason'];
        }
        if (isset($map['contact_info_d_t_o'])) {
            $model->contactInfoDTO = contactInfoDTO::fromMap($map['contact_info_d_t_o']);
        }
        if (isset($map['dest_flight_info_d_t_o_s'])) {
            if (!empty($map['dest_flight_info_d_t_o_s'])) {
                $model->destFlightInfoDTOS = [];
                $n                         = 0;
                foreach ($map['dest_flight_info_d_t_o_s'] as $item) {
                    $model->destFlightInfoDTOS[$n++] = null !== $item ? destFlightInfoDTOS::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['last_pay_time'])) {
            $model->lastPayTime = $map['last_pay_time'];
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
        if (isset($map['pay_time'])) {
            $model->payTime = $map['pay_time'];
        }
        if (isset($map['reason'])) {
            $model->reason = $map['reason'];
        }
        if (isset($map['status'])) {
            $model->status = $map['status'];
        }
        if (isset($map['sub_order_id'])) {
            $model->subOrderId = $map['sub_order_id'];
        }
        if (isset($map['ticket_time'])) {
            $model->ticketTime = $map['ticket_time'];
        }
        if (isset($map['total_price'])) {
            $model->totalPrice = $map['total_price'];
        }
        if (isset($map['total_service_fee_price'])) {
            $model->totalServiceFeePrice = $map['total_service_fee_price'];
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
