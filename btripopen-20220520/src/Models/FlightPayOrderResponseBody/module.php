<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightPayOrderResponseBody;

use AlibabaCloud\Tea\Model;

class module extends Model
{
    /**
     * @example 1000
     *
     * @var int
     */
    public $actualPayPrice;

    /**
     * @example 12989127316726531726
     *
     * @var string
     */
    public $alipayTradeNo;

    /**
     * @example 0000-00-00 00:00:00
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
    protected $_name = [
        'actualPayPrice' => 'actual_pay_price',
        'alipayTradeNo'  => 'alipay_trade_no',
        'lastPayTime'    => 'last_pay_time',
        'payStatus'      => 'pay_status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->actualPayPrice) {
            $res['actual_pay_price'] = $this->actualPayPrice;
        }
        if (null !== $this->alipayTradeNo) {
            $res['alipay_trade_no'] = $this->alipayTradeNo;
        }
        if (null !== $this->lastPayTime) {
            $res['last_pay_time'] = $this->lastPayTime;
        }
        if (null !== $this->payStatus) {
            $res['pay_status'] = $this->payStatus;
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
        if (isset($map['actual_pay_price'])) {
            $model->actualPayPrice = $map['actual_pay_price'];
        }
        if (isset($map['alipay_trade_no'])) {
            $model->alipayTradeNo = $map['alipay_trade_no'];
        }
        if (isset($map['last_pay_time'])) {
            $model->lastPayTime = $map['last_pay_time'];
        }
        if (isset($map['pay_status'])) {
            $model->payStatus = $map['pay_status'];
        }

        return $model;
    }
}
