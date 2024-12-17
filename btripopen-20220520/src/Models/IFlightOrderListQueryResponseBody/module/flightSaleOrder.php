<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\IFlightOrderListQueryResponseBody\module;

use AlibabaCloud\SDK\BtripOpen\V20220520\Models\IFlightOrderListQueryResponseBody\module\flightSaleOrder\bookerInfo;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\IFlightOrderListQueryResponseBody\module\flightSaleOrder\flightOrderInsureList;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\IFlightOrderListQueryResponseBody\module\flightSaleOrder\flightOrderTicketList;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\IFlightOrderListQueryResponseBody\module\flightSaleOrder\flightSegmentList;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\IFlightOrderListQueryResponseBody\module\flightSaleOrder\passengerList;
use AlibabaCloud\Tea\Model;

class flightSaleOrder extends Model
{
    /**
     * @example 82587500
     *
     * @var int
     */
    public $applyId;

    /**
     * @example 0
     *
     * @var int
     */
    public $bookType;

    /**
     * @var bookerInfo
     */
    public $bookerInfo;

    /**
     * @var int
     */
    public $corpPayPrice;

    /**
     * @example 123
     *
     * @var string
     */
    public $exceedApplyId;

    /**
     * @var flightOrderInsureList[]
     */
    public $flightOrderInsureList;

    /**
     * @var flightOrderTicketList[]
     */
    public $flightOrderTicketList;

    /**
     * @var flightSegmentList[]
     */
    public $flightSegmentList;

    /**
     * @var bool
     */
    public $mixPay;

    /**
     * @example yyyy-MM-dd HH:mm:ss
     *
     * @var string
     */
    public $orderCreateTime;

    /**
     * @example 1003038200110661039
     *
     * @var string
     */
    public $orderId;

    /**
     * @example yyyy-MM-dd HH:mm:ss
     *
     * @var string
     */
    public $orderPayTime;

    /**
     * @var int
     */
    public $orderReservePrice;

    /**
     * @example 5
     *
     * @var int
     */
    public $orderStatus;

    /**
     * @var string
     */
    public $orderStatusDesc;

    /**
     * @example 1
     *
     * @var int
     */
    public $orderType;

    /**
     * @var passengerList[]
     */
    public $passengerList;

    /**
     * @example 2
     *
     * @var int
     */
    public $payType;

    /**
     * @var int
     */
    public $personPayPrice;

    /**
     * @var int
     */
    public $serviceFee;

    /**
     * @example business_trip_api_000001
     *
     * @var string
     */
    public $thirdPartApplyId;

    /**
     * @example 1
     *
     * @var int
     */
    public $tripType;
    protected $_name = [
        'applyId'               => 'apply_id',
        'bookType'              => 'book_type',
        'bookerInfo'            => 'booker_info',
        'corpPayPrice'          => 'corp_pay_price',
        'exceedApplyId'         => 'exceed_apply_id',
        'flightOrderInsureList' => 'flight_order_insure_list',
        'flightOrderTicketList' => 'flight_order_ticket_list',
        'flightSegmentList'     => 'flight_segment_list',
        'mixPay'                => 'mix_pay',
        'orderCreateTime'       => 'order_create_time',
        'orderId'               => 'order_id',
        'orderPayTime'          => 'order_pay_time',
        'orderReservePrice'     => 'order_reserve_price',
        'orderStatus'           => 'order_status',
        'orderStatusDesc'       => 'order_status_desc',
        'orderType'             => 'order_type',
        'passengerList'         => 'passenger_list',
        'payType'               => 'pay_type',
        'personPayPrice'        => 'person_pay_price',
        'serviceFee'            => 'service_fee',
        'thirdPartApplyId'      => 'third_part_apply_id',
        'tripType'              => 'trip_type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->applyId) {
            $res['apply_id'] = $this->applyId;
        }
        if (null !== $this->bookType) {
            $res['book_type'] = $this->bookType;
        }
        if (null !== $this->bookerInfo) {
            $res['booker_info'] = null !== $this->bookerInfo ? $this->bookerInfo->toMap() : null;
        }
        if (null !== $this->corpPayPrice) {
            $res['corp_pay_price'] = $this->corpPayPrice;
        }
        if (null !== $this->exceedApplyId) {
            $res['exceed_apply_id'] = $this->exceedApplyId;
        }
        if (null !== $this->flightOrderInsureList) {
            $res['flight_order_insure_list'] = [];
            if (null !== $this->flightOrderInsureList && \is_array($this->flightOrderInsureList)) {
                $n = 0;
                foreach ($this->flightOrderInsureList as $item) {
                    $res['flight_order_insure_list'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->flightOrderTicketList) {
            $res['flight_order_ticket_list'] = [];
            if (null !== $this->flightOrderTicketList && \is_array($this->flightOrderTicketList)) {
                $n = 0;
                foreach ($this->flightOrderTicketList as $item) {
                    $res['flight_order_ticket_list'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->flightSegmentList) {
            $res['flight_segment_list'] = [];
            if (null !== $this->flightSegmentList && \is_array($this->flightSegmentList)) {
                $n = 0;
                foreach ($this->flightSegmentList as $item) {
                    $res['flight_segment_list'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->mixPay) {
            $res['mix_pay'] = $this->mixPay;
        }
        if (null !== $this->orderCreateTime) {
            $res['order_create_time'] = $this->orderCreateTime;
        }
        if (null !== $this->orderId) {
            $res['order_id'] = $this->orderId;
        }
        if (null !== $this->orderPayTime) {
            $res['order_pay_time'] = $this->orderPayTime;
        }
        if (null !== $this->orderReservePrice) {
            $res['order_reserve_price'] = $this->orderReservePrice;
        }
        if (null !== $this->orderStatus) {
            $res['order_status'] = $this->orderStatus;
        }
        if (null !== $this->orderStatusDesc) {
            $res['order_status_desc'] = $this->orderStatusDesc;
        }
        if (null !== $this->orderType) {
            $res['order_type'] = $this->orderType;
        }
        if (null !== $this->passengerList) {
            $res['passenger_list'] = [];
            if (null !== $this->passengerList && \is_array($this->passengerList)) {
                $n = 0;
                foreach ($this->passengerList as $item) {
                    $res['passenger_list'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->payType) {
            $res['pay_type'] = $this->payType;
        }
        if (null !== $this->personPayPrice) {
            $res['person_pay_price'] = $this->personPayPrice;
        }
        if (null !== $this->serviceFee) {
            $res['service_fee'] = $this->serviceFee;
        }
        if (null !== $this->thirdPartApplyId) {
            $res['third_part_apply_id'] = $this->thirdPartApplyId;
        }
        if (null !== $this->tripType) {
            $res['trip_type'] = $this->tripType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return flightSaleOrder
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['apply_id'])) {
            $model->applyId = $map['apply_id'];
        }
        if (isset($map['book_type'])) {
            $model->bookType = $map['book_type'];
        }
        if (isset($map['booker_info'])) {
            $model->bookerInfo = bookerInfo::fromMap($map['booker_info']);
        }
        if (isset($map['corp_pay_price'])) {
            $model->corpPayPrice = $map['corp_pay_price'];
        }
        if (isset($map['exceed_apply_id'])) {
            $model->exceedApplyId = $map['exceed_apply_id'];
        }
        if (isset($map['flight_order_insure_list'])) {
            if (!empty($map['flight_order_insure_list'])) {
                $model->flightOrderInsureList = [];
                $n                            = 0;
                foreach ($map['flight_order_insure_list'] as $item) {
                    $model->flightOrderInsureList[$n++] = null !== $item ? flightOrderInsureList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['flight_order_ticket_list'])) {
            if (!empty($map['flight_order_ticket_list'])) {
                $model->flightOrderTicketList = [];
                $n                            = 0;
                foreach ($map['flight_order_ticket_list'] as $item) {
                    $model->flightOrderTicketList[$n++] = null !== $item ? flightOrderTicketList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['flight_segment_list'])) {
            if (!empty($map['flight_segment_list'])) {
                $model->flightSegmentList = [];
                $n                        = 0;
                foreach ($map['flight_segment_list'] as $item) {
                    $model->flightSegmentList[$n++] = null !== $item ? flightSegmentList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['mix_pay'])) {
            $model->mixPay = $map['mix_pay'];
        }
        if (isset($map['order_create_time'])) {
            $model->orderCreateTime = $map['order_create_time'];
        }
        if (isset($map['order_id'])) {
            $model->orderId = $map['order_id'];
        }
        if (isset($map['order_pay_time'])) {
            $model->orderPayTime = $map['order_pay_time'];
        }
        if (isset($map['order_reserve_price'])) {
            $model->orderReservePrice = $map['order_reserve_price'];
        }
        if (isset($map['order_status'])) {
            $model->orderStatus = $map['order_status'];
        }
        if (isset($map['order_status_desc'])) {
            $model->orderStatusDesc = $map['order_status_desc'];
        }
        if (isset($map['order_type'])) {
            $model->orderType = $map['order_type'];
        }
        if (isset($map['passenger_list'])) {
            if (!empty($map['passenger_list'])) {
                $model->passengerList = [];
                $n                    = 0;
                foreach ($map['passenger_list'] as $item) {
                    $model->passengerList[$n++] = null !== $item ? passengerList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['pay_type'])) {
            $model->payType = $map['pay_type'];
        }
        if (isset($map['person_pay_price'])) {
            $model->personPayPrice = $map['person_pay_price'];
        }
        if (isset($map['service_fee'])) {
            $model->serviceFee = $map['service_fee'];
        }
        if (isset($map['third_part_apply_id'])) {
            $model->thirdPartApplyId = $map['third_part_apply_id'];
        }
        if (isset($map['trip_type'])) {
            $model->tripType = $map['trip_type'];
        }

        return $model;
    }
}
