<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AirticketOpen\V20230117\Models\OrderDetailResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AirticketOpen\V20230117\Models\DataBaggageAllowanceMapValue;
use AlibabaCloud\SDK\AirticketOpen\V20230117\Models\DataRefundChangeRuleMapValue;
use AlibabaCloud\SDK\AirticketOpen\V20230117\Models\OrderDetailResponseBody\data\ancillaryItemDetailList;
use AlibabaCloud\SDK\AirticketOpen\V20230117\Models\OrderDetailResponseBody\data\flightItemDetailList;
use AlibabaCloud\SDK\AirticketOpen\V20230117\Models\OrderDetailResponseBody\data\passengerList;
use AlibabaCloud\SDK\AirticketOpen\V20230117\Models\OrderDetailResponseBody\data\solution;

class data extends Model
{
    /**
     * @var ancillaryItemDetailList[]
     */
    public $ancillaryItemDetailList;

    /**
     * @var DataBaggageAllowanceMapValue[]
     */
    public $baggageAllowanceMap;

    /**
     * @var int
     */
    public $bookTime;

    /**
     * @var flightItemDetailList[]
     */
    public $flightItemDetailList;

    /**
     * @var int
     */
    public $orderNum;

    /**
     * @var int
     */
    public $orderStatus;

    /**
     * @var string
     */
    public $outOrderNum;

    /**
     * @var passengerList[]
     */
    public $passengerList;

    /**
     * @var int
     */
    public $payStatus;

    /**
     * @var int
     */
    public $payTime;

    /**
     * @var float
     */
    public $promotionPrice;

    /**
     * @var float
     */
    public $realPayPrice;

    /**
     * @var DataRefundChangeRuleMapValue[]
     */
    public $refundChangeRuleMap;

    /**
     * @var string
     */
    public $sessionNick;

    /**
     * @var solution
     */
    public $solution;

    /**
     * @var int
     */
    public $succeedTime;

    /**
     * @var float
     */
    public $totalPrice;

    /**
     * @var string
     */
    public $transactionNo;
    protected $_name = [
        'ancillaryItemDetailList' => 'ancillary_item_detail_list',
        'baggageAllowanceMap' => 'baggage_allowance_map',
        'bookTime' => 'book_time',
        'flightItemDetailList' => 'flight_item_detail_list',
        'orderNum' => 'order_num',
        'orderStatus' => 'order_status',
        'outOrderNum' => 'out_order_num',
        'passengerList' => 'passenger_list',
        'payStatus' => 'pay_status',
        'payTime' => 'pay_time',
        'promotionPrice' => 'promotion_price',
        'realPayPrice' => 'real_pay_price',
        'refundChangeRuleMap' => 'refund_change_rule_map',
        'sessionNick' => 'session_nick',
        'solution' => 'solution',
        'succeedTime' => 'succeed_time',
        'totalPrice' => 'total_price',
        'transactionNo' => 'transaction_no',
    ];

    public function validate()
    {
        if (\is_array($this->ancillaryItemDetailList)) {
            Model::validateArray($this->ancillaryItemDetailList);
        }
        if (\is_array($this->baggageAllowanceMap)) {
            Model::validateArray($this->baggageAllowanceMap);
        }
        if (\is_array($this->flightItemDetailList)) {
            Model::validateArray($this->flightItemDetailList);
        }
        if (\is_array($this->passengerList)) {
            Model::validateArray($this->passengerList);
        }
        if (\is_array($this->refundChangeRuleMap)) {
            Model::validateArray($this->refundChangeRuleMap);
        }
        if (null !== $this->solution) {
            $this->solution->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->ancillaryItemDetailList) {
            if (\is_array($this->ancillaryItemDetailList)) {
                $res['ancillary_item_detail_list'] = [];
                $n1 = 0;
                foreach ($this->ancillaryItemDetailList as $item1) {
                    $res['ancillary_item_detail_list'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->baggageAllowanceMap) {
            if (\is_array($this->baggageAllowanceMap)) {
                $res['baggage_allowance_map'] = [];
                foreach ($this->baggageAllowanceMap as $key1 => $value1) {
                    $res['baggage_allowance_map'][$key1] = null !== $value1 ? $value1->toArray($noStream) : $value1;
                }
            }
        }

        if (null !== $this->bookTime) {
            $res['book_time'] = $this->bookTime;
        }

        if (null !== $this->flightItemDetailList) {
            if (\is_array($this->flightItemDetailList)) {
                $res['flight_item_detail_list'] = [];
                $n1 = 0;
                foreach ($this->flightItemDetailList as $item1) {
                    $res['flight_item_detail_list'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->orderNum) {
            $res['order_num'] = $this->orderNum;
        }

        if (null !== $this->orderStatus) {
            $res['order_status'] = $this->orderStatus;
        }

        if (null !== $this->outOrderNum) {
            $res['out_order_num'] = $this->outOrderNum;
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

        if (null !== $this->payStatus) {
            $res['pay_status'] = $this->payStatus;
        }

        if (null !== $this->payTime) {
            $res['pay_time'] = $this->payTime;
        }

        if (null !== $this->promotionPrice) {
            $res['promotion_price'] = $this->promotionPrice;
        }

        if (null !== $this->realPayPrice) {
            $res['real_pay_price'] = $this->realPayPrice;
        }

        if (null !== $this->refundChangeRuleMap) {
            if (\is_array($this->refundChangeRuleMap)) {
                $res['refund_change_rule_map'] = [];
                foreach ($this->refundChangeRuleMap as $key1 => $value1) {
                    $res['refund_change_rule_map'][$key1] = null !== $value1 ? $value1->toArray($noStream) : $value1;
                }
            }
        }

        if (null !== $this->sessionNick) {
            $res['session_nick'] = $this->sessionNick;
        }

        if (null !== $this->solution) {
            $res['solution'] = null !== $this->solution ? $this->solution->toArray($noStream) : $this->solution;
        }

        if (null !== $this->succeedTime) {
            $res['succeed_time'] = $this->succeedTime;
        }

        if (null !== $this->totalPrice) {
            $res['total_price'] = $this->totalPrice;
        }

        if (null !== $this->transactionNo) {
            $res['transaction_no'] = $this->transactionNo;
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
        if (isset($map['ancillary_item_detail_list'])) {
            if (!empty($map['ancillary_item_detail_list'])) {
                $model->ancillaryItemDetailList = [];
                $n1 = 0;
                foreach ($map['ancillary_item_detail_list'] as $item1) {
                    $model->ancillaryItemDetailList[$n1] = ancillaryItemDetailList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['baggage_allowance_map'])) {
            if (!empty($map['baggage_allowance_map'])) {
                $model->baggageAllowanceMap = [];
                foreach ($map['baggage_allowance_map'] as $key1 => $value1) {
                    $model->baggageAllowanceMap[$key1] = DataBaggageAllowanceMapValue::fromMap($value1);
                }
            }
        }

        if (isset($map['book_time'])) {
            $model->bookTime = $map['book_time'];
        }

        if (isset($map['flight_item_detail_list'])) {
            if (!empty($map['flight_item_detail_list'])) {
                $model->flightItemDetailList = [];
                $n1 = 0;
                foreach ($map['flight_item_detail_list'] as $item1) {
                    $model->flightItemDetailList[$n1] = flightItemDetailList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['order_num'])) {
            $model->orderNum = $map['order_num'];
        }

        if (isset($map['order_status'])) {
            $model->orderStatus = $map['order_status'];
        }

        if (isset($map['out_order_num'])) {
            $model->outOrderNum = $map['out_order_num'];
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

        if (isset($map['pay_status'])) {
            $model->payStatus = $map['pay_status'];
        }

        if (isset($map['pay_time'])) {
            $model->payTime = $map['pay_time'];
        }

        if (isset($map['promotion_price'])) {
            $model->promotionPrice = $map['promotion_price'];
        }

        if (isset($map['real_pay_price'])) {
            $model->realPayPrice = $map['real_pay_price'];
        }

        if (isset($map['refund_change_rule_map'])) {
            if (!empty($map['refund_change_rule_map'])) {
                $model->refundChangeRuleMap = [];
                foreach ($map['refund_change_rule_map'] as $key1 => $value1) {
                    $model->refundChangeRuleMap[$key1] = DataRefundChangeRuleMapValue::fromMap($value1);
                }
            }
        }

        if (isset($map['session_nick'])) {
            $model->sessionNick = $map['session_nick'];
        }

        if (isset($map['solution'])) {
            $model->solution = solution::fromMap($map['solution']);
        }

        if (isset($map['succeed_time'])) {
            $model->succeedTime = $map['succeed_time'];
        }

        if (isset($map['total_price'])) {
            $model->totalPrice = $map['total_price'];
        }

        if (isset($map['transaction_no'])) {
            $model->transactionNo = $map['transaction_no'];
        }

        return $model;
    }
}
