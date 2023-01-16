<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightOrderDetailInfoResponseBody;

use AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightOrderDetailInfoResponseBody\module\flightInfoList;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightOrderDetailInfoResponseBody\module\ticketInfoList;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightOrderDetailInfoResponseBody\module\travelerInfoList;
use AlibabaCloud\Tea\Model;

class module extends Model
{
    /**
     * @example 2389927372772
     *
     * @var string
     */
    public $alipayTradeNo;

    /**
     * @example 1223
     *
     * @var string
     */
    public $bookUserId;

    /**
     * @example 123
     *
     * @var int
     */
    public $btripOrderId;

    /**
     * @var string
     */
    public $contactName;

    /**
     * @example 12345678909
     *
     * @var string
     */
    public $contactPhone;

    /**
     * @example dis123
     *
     * @var string
     */
    public $disOrderId;

    /**
     * @example {}
     *
     * @var string
     */
    public $extra;

    /**
     * @var flightInfoList[]
     */
    public $flightInfoList;

    /**
     * @example 2000-00-00 00:00:00
     *
     * @var string
     */
    public $lastPayTime;

    /**
     * @example 0
     *
     * @var int
     */
    public $payStatus;

    /**
     * @example 2000-00-00 00:00:00
     *
     * @var string
     */
    public $payTime;

    /**
     * @example 1000
     *
     * @var int
     */
    public $promotionPrice;

    /**
     * @example 100
     *
     * @var int
     */
    public $settleAmount;

    /**
     * @example 0
     *
     * @var int
     */
    public $settleType;

    /**
     * @example 1
     *
     * @var int
     */
    public $status;

    /**
     * @var ticketInfoList[]
     */
    public $ticketInfoList;

    /**
     * @example 1000
     *
     * @var int
     */
    public $totalBuildPrice;

    /**
     * @example 1000
     *
     * @var int
     */
    public $totalOilPrice;

    /**
     * @example 1000
     *
     * @var int
     */
    public $totalOrderPrice;

    /**
     * @var travelerInfoList[]
     */
    public $travelerInfoList;
    protected $_name = [
        'alipayTradeNo'    => 'alipay_trade_no',
        'bookUserId'       => 'book_user_id',
        'btripOrderId'     => 'btrip_order_id',
        'contactName'      => 'contact_name',
        'contactPhone'     => 'contact_phone',
        'disOrderId'       => 'dis_order_id',
        'extra'            => 'extra',
        'flightInfoList'   => 'flight_info_list',
        'lastPayTime'      => 'last_pay_time',
        'payStatus'        => 'pay_status',
        'payTime'          => 'pay_time',
        'promotionPrice'   => 'promotion_price',
        'settleAmount'     => 'settle_amount',
        'settleType'       => 'settle_type',
        'status'           => 'status',
        'ticketInfoList'   => 'ticket_info_list',
        'totalBuildPrice'  => 'total_build_price',
        'totalOilPrice'    => 'total_oil_price',
        'totalOrderPrice'  => 'total_order_price',
        'travelerInfoList' => 'traveler_info_list',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->alipayTradeNo) {
            $res['alipay_trade_no'] = $this->alipayTradeNo;
        }
        if (null !== $this->bookUserId) {
            $res['book_user_id'] = $this->bookUserId;
        }
        if (null !== $this->btripOrderId) {
            $res['btrip_order_id'] = $this->btripOrderId;
        }
        if (null !== $this->contactName) {
            $res['contact_name'] = $this->contactName;
        }
        if (null !== $this->contactPhone) {
            $res['contact_phone'] = $this->contactPhone;
        }
        if (null !== $this->disOrderId) {
            $res['dis_order_id'] = $this->disOrderId;
        }
        if (null !== $this->extra) {
            $res['extra'] = $this->extra;
        }
        if (null !== $this->flightInfoList) {
            $res['flight_info_list'] = [];
            if (null !== $this->flightInfoList && \is_array($this->flightInfoList)) {
                $n = 0;
                foreach ($this->flightInfoList as $item) {
                    $res['flight_info_list'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->lastPayTime) {
            $res['last_pay_time'] = $this->lastPayTime;
        }
        if (null !== $this->payStatus) {
            $res['pay_status'] = $this->payStatus;
        }
        if (null !== $this->payTime) {
            $res['pay_time'] = $this->payTime;
        }
        if (null !== $this->promotionPrice) {
            $res['promotion_price'] = $this->promotionPrice;
        }
        if (null !== $this->settleAmount) {
            $res['settle_amount'] = $this->settleAmount;
        }
        if (null !== $this->settleType) {
            $res['settle_type'] = $this->settleType;
        }
        if (null !== $this->status) {
            $res['status'] = $this->status;
        }
        if (null !== $this->ticketInfoList) {
            $res['ticket_info_list'] = [];
            if (null !== $this->ticketInfoList && \is_array($this->ticketInfoList)) {
                $n = 0;
                foreach ($this->ticketInfoList as $item) {
                    $res['ticket_info_list'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->totalBuildPrice) {
            $res['total_build_price'] = $this->totalBuildPrice;
        }
        if (null !== $this->totalOilPrice) {
            $res['total_oil_price'] = $this->totalOilPrice;
        }
        if (null !== $this->totalOrderPrice) {
            $res['total_order_price'] = $this->totalOrderPrice;
        }
        if (null !== $this->travelerInfoList) {
            $res['traveler_info_list'] = [];
            if (null !== $this->travelerInfoList && \is_array($this->travelerInfoList)) {
                $n = 0;
                foreach ($this->travelerInfoList as $item) {
                    $res['traveler_info_list'][$n++] = null !== $item ? $item->toMap() : $item;
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
        if (isset($map['alipay_trade_no'])) {
            $model->alipayTradeNo = $map['alipay_trade_no'];
        }
        if (isset($map['book_user_id'])) {
            $model->bookUserId = $map['book_user_id'];
        }
        if (isset($map['btrip_order_id'])) {
            $model->btripOrderId = $map['btrip_order_id'];
        }
        if (isset($map['contact_name'])) {
            $model->contactName = $map['contact_name'];
        }
        if (isset($map['contact_phone'])) {
            $model->contactPhone = $map['contact_phone'];
        }
        if (isset($map['dis_order_id'])) {
            $model->disOrderId = $map['dis_order_id'];
        }
        if (isset($map['extra'])) {
            $model->extra = $map['extra'];
        }
        if (isset($map['flight_info_list'])) {
            if (!empty($map['flight_info_list'])) {
                $model->flightInfoList = [];
                $n                     = 0;
                foreach ($map['flight_info_list'] as $item) {
                    $model->flightInfoList[$n++] = null !== $item ? flightInfoList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['last_pay_time'])) {
            $model->lastPayTime = $map['last_pay_time'];
        }
        if (isset($map['pay_status'])) {
            $model->payStatus = $map['pay_status'];
        }
        if (isset($map['pay_time'])) {
            $model->payTime = $map['pay_time'];
        }
        if (isset($map['promotion_price'])) {
            $model->promotionPrice = $map['promotion_price'];
        }
        if (isset($map['settle_amount'])) {
            $model->settleAmount = $map['settle_amount'];
        }
        if (isset($map['settle_type'])) {
            $model->settleType = $map['settle_type'];
        }
        if (isset($map['status'])) {
            $model->status = $map['status'];
        }
        if (isset($map['ticket_info_list'])) {
            if (!empty($map['ticket_info_list'])) {
                $model->ticketInfoList = [];
                $n                     = 0;
                foreach ($map['ticket_info_list'] as $item) {
                    $model->ticketInfoList[$n++] = null !== $item ? ticketInfoList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['total_build_price'])) {
            $model->totalBuildPrice = $map['total_build_price'];
        }
        if (isset($map['total_oil_price'])) {
            $model->totalOilPrice = $map['total_oil_price'];
        }
        if (isset($map['total_order_price'])) {
            $model->totalOrderPrice = $map['total_order_price'];
        }
        if (isset($map['traveler_info_list'])) {
            if (!empty($map['traveler_info_list'])) {
                $model->travelerInfoList = [];
                $n                       = 0;
                foreach ($map['traveler_info_list'] as $item) {
                    $model->travelerInfoList[$n++] = null !== $item ? travelerInfoList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
