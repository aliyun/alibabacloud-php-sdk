<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightOrderDetailInfoResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightOrderDetailInfoResponseBody\module\flightInfoList;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightOrderDetailInfoResponseBody\module\ticketInfoList;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightOrderDetailInfoResponseBody\module\travelerInfoList;

class module extends Model
{
    /**
     * @var string
     */
    public $alipayTradeNo;

    /**
     * @var string
     */
    public $bookUserId;

    /**
     * @var int
     */
    public $btripOrderId;

    /**
     * @var string
     */
    public $contactName;

    /**
     * @var string
     */
    public $contactPhone;

    /**
     * @var string
     */
    public $disOrderId;

    /**
     * @var string
     */
    public $extra;

    /**
     * @var flightInfoList[]
     */
    public $flightInfoList;

    /**
     * @var string
     */
    public $lastPayTime;

    /**
     * @var int
     */
    public $payStatus;

    /**
     * @var string
     */
    public $payTime;

    /**
     * @var int
     */
    public $promotionPrice;

    /**
     * @var int
     */
    public $settleAmount;

    /**
     * @var int
     */
    public $settleType;

    /**
     * @var int
     */
    public $status;

    /**
     * @var ticketInfoList[]
     */
    public $ticketInfoList;

    /**
     * @var int
     */
    public $totalBuildPrice;

    /**
     * @var int
     */
    public $totalOilPrice;

    /**
     * @var int
     */
    public $totalOrderPrice;

    /**
     * @var travelerInfoList[]
     */
    public $travelerInfoList;
    protected $_name = [
        'alipayTradeNo' => 'alipay_trade_no',
        'bookUserId' => 'book_user_id',
        'btripOrderId' => 'btrip_order_id',
        'contactName' => 'contact_name',
        'contactPhone' => 'contact_phone',
        'disOrderId' => 'dis_order_id',
        'extra' => 'extra',
        'flightInfoList' => 'flight_info_list',
        'lastPayTime' => 'last_pay_time',
        'payStatus' => 'pay_status',
        'payTime' => 'pay_time',
        'promotionPrice' => 'promotion_price',
        'settleAmount' => 'settle_amount',
        'settleType' => 'settle_type',
        'status' => 'status',
        'ticketInfoList' => 'ticket_info_list',
        'totalBuildPrice' => 'total_build_price',
        'totalOilPrice' => 'total_oil_price',
        'totalOrderPrice' => 'total_order_price',
        'travelerInfoList' => 'traveler_info_list',
    ];

    public function validate()
    {
        if (\is_array($this->flightInfoList)) {
            Model::validateArray($this->flightInfoList);
        }
        if (\is_array($this->ticketInfoList)) {
            Model::validateArray($this->ticketInfoList);
        }
        if (\is_array($this->travelerInfoList)) {
            Model::validateArray($this->travelerInfoList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            if (\is_array($this->flightInfoList)) {
                $res['flight_info_list'] = [];
                $n1 = 0;
                foreach ($this->flightInfoList as $item1) {
                    $res['flight_info_list'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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
            if (\is_array($this->ticketInfoList)) {
                $res['ticket_info_list'] = [];
                $n1 = 0;
                foreach ($this->ticketInfoList as $item1) {
                    $res['ticket_info_list'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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
            if (\is_array($this->travelerInfoList)) {
                $res['traveler_info_list'] = [];
                $n1 = 0;
                foreach ($this->travelerInfoList as $item1) {
                    $res['traveler_info_list'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
                $n1 = 0;
                foreach ($map['flight_info_list'] as $item1) {
                    $model->flightInfoList[$n1] = flightInfoList::fromMap($item1);
                    ++$n1;
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
                $n1 = 0;
                foreach ($map['ticket_info_list'] as $item1) {
                    $model->ticketInfoList[$n1] = ticketInfoList::fromMap($item1);
                    ++$n1;
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
                $n1 = 0;
                foreach ($map['traveler_info_list'] as $item1) {
                    $model->travelerInfoList[$n1] = travelerInfoList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
