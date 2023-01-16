<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\TicketChangingPayResponseBody;

use AlibabaCloud\Tea\Model;

class module extends Model
{
    /**
     * @example true
     *
     * @var bool
     */
    public $canRetry;

    /**
     * @example 1000
     *
     * @var int
     */
    public $payPrice;

    /**
     * @var int
     */
    public $payStatus;

    /**
     * @example 0000-00-00 00:00:00
     *
     * @var string
     */
    public $payTime;

    /**
     * @example 23098276578908765
     *
     * @var string
     */
    public $tradeNo;
    protected $_name = [
        'canRetry'  => 'can_retry',
        'payPrice'  => 'pay_price',
        'payStatus' => 'pay_status',
        'payTime'   => 'pay_time',
        'tradeNo'   => 'trade_no',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->canRetry) {
            $res['can_retry'] = $this->canRetry;
        }
        if (null !== $this->payPrice) {
            $res['pay_price'] = $this->payPrice;
        }
        if (null !== $this->payStatus) {
            $res['pay_status'] = $this->payStatus;
        }
        if (null !== $this->payTime) {
            $res['pay_time'] = $this->payTime;
        }
        if (null !== $this->tradeNo) {
            $res['trade_no'] = $this->tradeNo;
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
        if (isset($map['can_retry'])) {
            $model->canRetry = $map['can_retry'];
        }
        if (isset($map['pay_price'])) {
            $model->payPrice = $map['pay_price'];
        }
        if (isset($map['pay_status'])) {
            $model->payStatus = $map['pay_status'];
        }
        if (isset($map['pay_time'])) {
            $model->payTime = $map['pay_time'];
        }
        if (isset($map['trade_no'])) {
            $model->tradeNo = $map['trade_no'];
        }

        return $model;
    }
}
