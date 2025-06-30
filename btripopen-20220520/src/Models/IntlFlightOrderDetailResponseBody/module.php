<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\IntlFlightOrderDetailResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\IntlFlightOrderDetailResponseBody\module\contactInfo;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\IntlFlightOrderDetailResponseBody\module\journeyList;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\IntlFlightOrderDetailResponseBody\module\orderItemList;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\IntlFlightOrderDetailResponseBody\module\passengerList;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\IntlFlightOrderDetailResponseBody\module\passengerTicketList;

class module extends Model
{
    /**
     * @var string
     */
    public $bookerUserId;

    /**
     * @var string
     */
    public $bookerUserName;

    /**
     * @var string
     */
    public $closeReason;

    /**
     * @var string
     */
    public $closeTime;

    /**
     * @var contactInfo
     */
    public $contactInfo;

    /**
     * @var journeyList[]
     */
    public $journeyList;

    /**
     * @var string
     */
    public $orderId;

    /**
     * @var orderItemList[]
     */
    public $orderItemList;

    /**
     * @var int
     */
    public $orderStatus;

    /**
     * @var string
     */
    public $outOrderId;

    /**
     * @var passengerList[]
     */
    public $passengerList;

    /**
     * @var passengerTicketList[]
     */
    public $passengerTicketList;

    /**
     * @var string
     */
    public $payLatestTime;

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
    public $payType;

    /**
     * @var string
     */
    public $successTime;

    /**
     * @var int
     */
    public $totalPrice;

    /**
     * @var int
     */
    public $totalTaxPrice;

    /**
     * @var int
     */
    public $totalTicketPrice;

    /**
     * @var int
     */
    public $tripType;
    protected $_name = [
        'bookerUserId' => 'booker_user_id',
        'bookerUserName' => 'booker_user_name',
        'closeReason' => 'close_reason',
        'closeTime' => 'close_time',
        'contactInfo' => 'contact_info',
        'journeyList' => 'journey_list',
        'orderId' => 'order_id',
        'orderItemList' => 'order_item_list',
        'orderStatus' => 'order_status',
        'outOrderId' => 'out_order_id',
        'passengerList' => 'passenger_list',
        'passengerTicketList' => 'passenger_ticket_list',
        'payLatestTime' => 'pay_latest_time',
        'payStatus' => 'pay_status',
        'payTime' => 'pay_time',
        'payType' => 'pay_type',
        'successTime' => 'success_time',
        'totalPrice' => 'total_price',
        'totalTaxPrice' => 'total_tax_price',
        'totalTicketPrice' => 'total_ticket_price',
        'tripType' => 'trip_type',
    ];

    public function validate()
    {
        if (null !== $this->contactInfo) {
            $this->contactInfo->validate();
        }
        if (\is_array($this->journeyList)) {
            Model::validateArray($this->journeyList);
        }
        if (\is_array($this->orderItemList)) {
            Model::validateArray($this->orderItemList);
        }
        if (\is_array($this->passengerList)) {
            Model::validateArray($this->passengerList);
        }
        if (\is_array($this->passengerTicketList)) {
            Model::validateArray($this->passengerTicketList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bookerUserId) {
            $res['booker_user_id'] = $this->bookerUserId;
        }

        if (null !== $this->bookerUserName) {
            $res['booker_user_name'] = $this->bookerUserName;
        }

        if (null !== $this->closeReason) {
            $res['close_reason'] = $this->closeReason;
        }

        if (null !== $this->closeTime) {
            $res['close_time'] = $this->closeTime;
        }

        if (null !== $this->contactInfo) {
            $res['contact_info'] = null !== $this->contactInfo ? $this->contactInfo->toArray($noStream) : $this->contactInfo;
        }

        if (null !== $this->journeyList) {
            if (\is_array($this->journeyList)) {
                $res['journey_list'] = [];
                $n1 = 0;
                foreach ($this->journeyList as $item1) {
                    $res['journey_list'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->orderId) {
            $res['order_id'] = $this->orderId;
        }

        if (null !== $this->orderItemList) {
            if (\is_array($this->orderItemList)) {
                $res['order_item_list'] = [];
                $n1 = 0;
                foreach ($this->orderItemList as $item1) {
                    $res['order_item_list'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->orderStatus) {
            $res['order_status'] = $this->orderStatus;
        }

        if (null !== $this->outOrderId) {
            $res['out_order_id'] = $this->outOrderId;
        }

        if (null !== $this->passengerList) {
            if (\is_array($this->passengerList)) {
                $res['passenger_list'] = [];
                $n1 = 0;
                foreach ($this->passengerList as $item1) {
                    $res['passenger_list'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->passengerTicketList) {
            if (\is_array($this->passengerTicketList)) {
                $res['passenger_ticket_list'] = [];
                $n1 = 0;
                foreach ($this->passengerTicketList as $item1) {
                    $res['passenger_ticket_list'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->payLatestTime) {
            $res['pay_latest_time'] = $this->payLatestTime;
        }

        if (null !== $this->payStatus) {
            $res['pay_status'] = $this->payStatus;
        }

        if (null !== $this->payTime) {
            $res['pay_time'] = $this->payTime;
        }

        if (null !== $this->payType) {
            $res['pay_type'] = $this->payType;
        }

        if (null !== $this->successTime) {
            $res['success_time'] = $this->successTime;
        }

        if (null !== $this->totalPrice) {
            $res['total_price'] = $this->totalPrice;
        }

        if (null !== $this->totalTaxPrice) {
            $res['total_tax_price'] = $this->totalTaxPrice;
        }

        if (null !== $this->totalTicketPrice) {
            $res['total_ticket_price'] = $this->totalTicketPrice;
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
        if (isset($map['booker_user_id'])) {
            $model->bookerUserId = $map['booker_user_id'];
        }

        if (isset($map['booker_user_name'])) {
            $model->bookerUserName = $map['booker_user_name'];
        }

        if (isset($map['close_reason'])) {
            $model->closeReason = $map['close_reason'];
        }

        if (isset($map['close_time'])) {
            $model->closeTime = $map['close_time'];
        }

        if (isset($map['contact_info'])) {
            $model->contactInfo = contactInfo::fromMap($map['contact_info']);
        }

        if (isset($map['journey_list'])) {
            if (!empty($map['journey_list'])) {
                $model->journeyList = [];
                $n1 = 0;
                foreach ($map['journey_list'] as $item1) {
                    $model->journeyList[$n1] = journeyList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['order_id'])) {
            $model->orderId = $map['order_id'];
        }

        if (isset($map['order_item_list'])) {
            if (!empty($map['order_item_list'])) {
                $model->orderItemList = [];
                $n1 = 0;
                foreach ($map['order_item_list'] as $item1) {
                    $model->orderItemList[$n1] = orderItemList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['order_status'])) {
            $model->orderStatus = $map['order_status'];
        }

        if (isset($map['out_order_id'])) {
            $model->outOrderId = $map['out_order_id'];
        }

        if (isset($map['passenger_list'])) {
            if (!empty($map['passenger_list'])) {
                $model->passengerList = [];
                $n1 = 0;
                foreach ($map['passenger_list'] as $item1) {
                    $model->passengerList[$n1] = passengerList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['passenger_ticket_list'])) {
            if (!empty($map['passenger_ticket_list'])) {
                $model->passengerTicketList = [];
                $n1 = 0;
                foreach ($map['passenger_ticket_list'] as $item1) {
                    $model->passengerTicketList[$n1] = passengerTicketList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['pay_latest_time'])) {
            $model->payLatestTime = $map['pay_latest_time'];
        }

        if (isset($map['pay_status'])) {
            $model->payStatus = $map['pay_status'];
        }

        if (isset($map['pay_time'])) {
            $model->payTime = $map['pay_time'];
        }

        if (isset($map['pay_type'])) {
            $model->payType = $map['pay_type'];
        }

        if (isset($map['success_time'])) {
            $model->successTime = $map['success_time'];
        }

        if (isset($map['total_price'])) {
            $model->totalPrice = $map['total_price'];
        }

        if (isset($map['total_tax_price'])) {
            $model->totalTaxPrice = $map['total_tax_price'];
        }

        if (isset($map['total_ticket_price'])) {
            $model->totalTicketPrice = $map['total_ticket_price'];
        }

        if (isset($map['trip_type'])) {
            $model->tripType = $map['trip_type'];
        }

        return $model;
    }
}
