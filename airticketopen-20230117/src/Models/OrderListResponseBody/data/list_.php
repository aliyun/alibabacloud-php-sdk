<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AirticketOpen\V20230117\Models\OrderListResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AirticketOpen\V20230117\Models\OrderListResponseBody\data\list_\passengerList;

class list_ extends Model
{
    /**
     * @var int
     */
    public $bookTime;

    /**
     * @var int
     */
    public $orderNum;

    /**
     * @var string
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
     * @var string
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
     * @var string
     */
    public $sessionNick;

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
        'bookTime' => 'book_time',
        'orderNum' => 'order_num',
        'orderStatus' => 'order_status',
        'outOrderNum' => 'out_order_num',
        'passengerList' => 'passenger_list',
        'payStatus' => 'pay_status',
        'payTime' => 'pay_time',
        'promotionPrice' => 'promotion_price',
        'realPayPrice' => 'real_pay_price',
        'sessionNick' => 'session_nick',
        'succeedTime' => 'succeed_time',
        'totalPrice' => 'total_price',
        'transactionNo' => 'transaction_no',
    ];

    public function validate()
    {
        if (\is_array($this->passengerList)) {
            Model::validateArray($this->passengerList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bookTime) {
            $res['book_time'] = $this->bookTime;
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

        if (null !== $this->sessionNick) {
            $res['session_nick'] = $this->sessionNick;
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
        if (isset($map['book_time'])) {
            $model->bookTime = $map['book_time'];
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

        if (isset($map['session_nick'])) {
            $model->sessionNick = $map['session_nick'];
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
