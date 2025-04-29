<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightPayOrderResponseBody;

use AlibabaCloud\Dara\Model;

class module extends Model
{
    /**
     * @var int
     */
    public $actualPayPrice;

    /**
     * @var string
     */
    public $alipayTradeNo;

    /**
     * @var string
     */
    public $lastPayTime;

    /**
     * @var int
     */
    public $payStatus;
    protected $_name = [
        'actualPayPrice' => 'actual_pay_price',
        'alipayTradeNo' => 'alipay_trade_no',
        'lastPayTime' => 'last_pay_time',
        'payStatus' => 'pay_status',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
