<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AirticketOpen\V20230117\Models\ChangeDetailListOfBuyerResponseBody\data;

use AlibabaCloud\Tea\Model;

class list_ extends Model
{
    /**
     * @example 4988430***950
     *
     * @var int
     */
    public $changeOrderNum;

    /**
     * @example 4988430***971
     *
     * @var int
     */
    public $orderNum;

    /**
     * @example 2
     *
     * @var int
     */
    public $orderStatus;

    /**
     * @example 2
     *
     * @var int
     */
    public $payStatus;

    /**
     * @example hkduendkd-2023-dj0
     *
     * @var string
     */
    public $transactionNo;

    /**
     * @example 1677415274000
     *
     * @var int
     */
    public $utcCreateTime;
    protected $_name = [
        'changeOrderNum' => 'change_order_num',
        'orderNum'       => 'order_num',
        'orderStatus'    => 'order_status',
        'payStatus'      => 'pay_status',
        'transactionNo'  => 'transaction_no',
        'utcCreateTime'  => 'utc_create_time',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->changeOrderNum) {
            $res['change_order_num'] = $this->changeOrderNum;
        }
        if (null !== $this->orderNum) {
            $res['order_num'] = $this->orderNum;
        }
        if (null !== $this->orderStatus) {
            $res['order_status'] = $this->orderStatus;
        }
        if (null !== $this->payStatus) {
            $res['pay_status'] = $this->payStatus;
        }
        if (null !== $this->transactionNo) {
            $res['transaction_no'] = $this->transactionNo;
        }
        if (null !== $this->utcCreateTime) {
            $res['utc_create_time'] = $this->utcCreateTime;
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
        if (isset($map['change_order_num'])) {
            $model->changeOrderNum = $map['change_order_num'];
        }
        if (isset($map['order_num'])) {
            $model->orderNum = $map['order_num'];
        }
        if (isset($map['order_status'])) {
            $model->orderStatus = $map['order_status'];
        }
        if (isset($map['pay_status'])) {
            $model->payStatus = $map['pay_status'];
        }
        if (isset($map['transaction_no'])) {
            $model->transactionNo = $map['transaction_no'];
        }
        if (isset($map['utc_create_time'])) {
            $model->utcCreateTime = $map['utc_create_time'];
        }

        return $model;
    }
}
