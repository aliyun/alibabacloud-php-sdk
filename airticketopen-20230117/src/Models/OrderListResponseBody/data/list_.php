<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AirticketOpen\V20230117\Models\OrderListResponseBody\data;

use AlibabaCloud\SDK\AirticketOpen\V20230117\Models\OrderListResponseBody\data\list_\passengerList;
use AlibabaCloud\Tea\Model;

class list_ extends Model
{
    /**
     * @description book time(timestamp)
     *
     * @example 1677210784000
     *
     * @var int
     */
    public $bookTime;

    /**
     * @description order number created by book
     *
     * @example 4966***617111
     *
     * @var int
     */
    public $orderNum;

    /**
     * @description order status
     *
     * 5: order closed
     * @example 4
     *
     * @var string
     */
    public $orderStatus;

    /**
     * @description external order number(customized by buyer when book)
     *
     * @example x091-2023-0220-j-0001
     *
     * @var string
     */
    public $outOrderNum;

    /**
     * @description the information about all passenger of current order
     *
     * @var passengerList[]
     */
    public $passengerList;

    /**
     * @description payment status
     *
     * 4: transaction closed
     * @example 2
     *
     * @var string
     */
    public $payStatus;

    /**
     * @description pay time(timestamp)
     *
     * @example 1677210788000
     *
     * @var int
     */
    public $payTime;

    /**
     * @description discount amount
     *
     * @example 10
     *
     * @var float
     */
    public $promotionPrice;

    /**
     * @description actual payment amount
     *
     * @example 3000
     *
     * @var float
     */
    public $realPayPrice;

    /**
     * @description buyer nickname
     *
     * @example nick
     *
     * @var string
     */
    public $sessionNick;

    /**
     * @description order success time(timestamp)
     *
     * @example 1677210786000
     *
     * @var int
     */
    public $succeedTime;

    /**
     * @description total price of current order
     *
     * @example 3000
     *
     * @var float
     */
    public $totalPrice;

    /**
     * @description transaction number
     *
     * @example hkduendkd-2023-dj0
     *
     * @var string
     */
    public $transactionNo;
    protected $_name = [
        'bookTime'       => 'book_time',
        'orderNum'       => 'order_num',
        'orderStatus'    => 'order_status',
        'outOrderNum'    => 'out_order_num',
        'passengerList'  => 'passenger_list',
        'payStatus'      => 'pay_status',
        'payTime'        => 'pay_time',
        'promotionPrice' => 'promotion_price',
        'realPayPrice'   => 'real_pay_price',
        'sessionNick'    => 'session_nick',
        'succeedTime'    => 'succeed_time',
        'totalPrice'     => 'total_price',
        'transactionNo'  => 'transaction_no',
    ];

    public function validate()
    {
    }

    public function toMap()
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
            $res['passenger_list'] = [];
            if (null !== $this->passengerList && \is_array($this->passengerList)) {
                $n = 0;
                foreach ($this->passengerList as $item) {
                    $res['passenger_list'][$n++] = null !== $item ? $item->toMap() : $item;
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

    /**
     * @param array $map
     *
     * @return list_
     */
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
                $n                    = 0;
                foreach ($map['passenger_list'] as $item) {
                    $model->passengerList[$n++] = null !== $item ? passengerList::fromMap($item) : $item;
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
