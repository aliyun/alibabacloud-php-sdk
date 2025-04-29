<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\IFlightOrderDetailQueryResponseBody\module;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\IFlightOrderDetailQueryResponseBody\module\flightSaleOrder\bookerInfo;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\IFlightOrderDetailQueryResponseBody\module\flightSaleOrder\flightOrderInsureList;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\IFlightOrderDetailQueryResponseBody\module\flightSaleOrder\flightOrderTicketList;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\IFlightOrderDetailQueryResponseBody\module\flightSaleOrder\flightSegmentList;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\IFlightOrderDetailQueryResponseBody\module\flightSaleOrder\passengerList;

class flightSaleOrder extends Model
{
    /**
     * @var int
     */
    public $applyId;

    /**
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
     * @var string
     */
    public $orderCreateTime;

    /**
     * @var string
     */
    public $orderId;

    /**
     * @var string
     */
    public $orderPayTime;

    /**
     * @var int
     */
    public $orderReservePrice;

    /**
     * @var int
     */
    public $orderStatus;

    /**
     * @var string
     */
    public $orderStatusDesc;

    /**
     * @var int
     */
    public $orderType;

    /**
     * @var passengerList[]
     */
    public $passengerList;

    /**
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
     * @var string
     */
    public $thirdPartApplyId;

    /**
     * @var int
     */
    public $tripType;
    protected $_name = [
        'applyId' => 'apply_id',
        'bookType' => 'book_type',
        'bookerInfo' => 'booker_info',
        'corpPayPrice' => 'corp_pay_price',
        'exceedApplyId' => 'exceed_apply_id',
        'flightOrderInsureList' => 'flight_order_insure_list',
        'flightOrderTicketList' => 'flight_order_ticket_list',
        'flightSegmentList' => 'flight_segment_list',
        'mixPay' => 'mix_pay',
        'orderCreateTime' => 'order_create_time',
        'orderId' => 'order_id',
        'orderPayTime' => 'order_pay_time',
        'orderReservePrice' => 'order_reserve_price',
        'orderStatus' => 'order_status',
        'orderStatusDesc' => 'order_status_desc',
        'orderType' => 'order_type',
        'passengerList' => 'passenger_list',
        'payType' => 'pay_type',
        'personPayPrice' => 'person_pay_price',
        'serviceFee' => 'service_fee',
        'thirdPartApplyId' => 'third_part_apply_id',
        'tripType' => 'trip_type',
    ];

    public function validate()
    {
        if (null !== $this->bookerInfo) {
            $this->bookerInfo->validate();
        }
        if (\is_array($this->flightOrderInsureList)) {
            Model::validateArray($this->flightOrderInsureList);
        }
        if (\is_array($this->flightOrderTicketList)) {
            Model::validateArray($this->flightOrderTicketList);
        }
        if (\is_array($this->flightSegmentList)) {
            Model::validateArray($this->flightSegmentList);
        }
        if (\is_array($this->passengerList)) {
            Model::validateArray($this->passengerList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->applyId) {
            $res['apply_id'] = $this->applyId;
        }

        if (null !== $this->bookType) {
            $res['book_type'] = $this->bookType;
        }

        if (null !== $this->bookerInfo) {
            $res['booker_info'] = null !== $this->bookerInfo ? $this->bookerInfo->toArray($noStream) : $this->bookerInfo;
        }

        if (null !== $this->corpPayPrice) {
            $res['corp_pay_price'] = $this->corpPayPrice;
        }

        if (null !== $this->exceedApplyId) {
            $res['exceed_apply_id'] = $this->exceedApplyId;
        }

        if (null !== $this->flightOrderInsureList) {
            if (\is_array($this->flightOrderInsureList)) {
                $res['flight_order_insure_list'] = [];
                $n1 = 0;
                foreach ($this->flightOrderInsureList as $item1) {
                    $res['flight_order_insure_list'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->flightOrderTicketList) {
            if (\is_array($this->flightOrderTicketList)) {
                $res['flight_order_ticket_list'] = [];
                $n1 = 0;
                foreach ($this->flightOrderTicketList as $item1) {
                    $res['flight_order_ticket_list'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->flightSegmentList) {
            if (\is_array($this->flightSegmentList)) {
                $res['flight_segment_list'] = [];
                $n1 = 0;
                foreach ($this->flightSegmentList as $item1) {
                    $res['flight_segment_list'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
            if (\is_array($this->passengerList)) {
                $res['passenger_list'] = [];
                $n1 = 0;
                foreach ($this->passengerList as $item1) {
                    $res['passenger_list'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
                $n1 = 0;
                foreach ($map['flight_order_insure_list'] as $item1) {
                    $model->flightOrderInsureList[$n1++] = flightOrderInsureList::fromMap($item1);
                }
            }
        }

        if (isset($map['flight_order_ticket_list'])) {
            if (!empty($map['flight_order_ticket_list'])) {
                $model->flightOrderTicketList = [];
                $n1 = 0;
                foreach ($map['flight_order_ticket_list'] as $item1) {
                    $model->flightOrderTicketList[$n1++] = flightOrderTicketList::fromMap($item1);
                }
            }
        }

        if (isset($map['flight_segment_list'])) {
            if (!empty($map['flight_segment_list'])) {
                $model->flightSegmentList = [];
                $n1 = 0;
                foreach ($map['flight_segment_list'] as $item1) {
                    $model->flightSegmentList[$n1++] = flightSegmentList::fromMap($item1);
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
                $n1 = 0;
                foreach ($map['passenger_list'] as $item1) {
                    $model->passengerList[$n1++] = passengerList::fromMap($item1);
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
