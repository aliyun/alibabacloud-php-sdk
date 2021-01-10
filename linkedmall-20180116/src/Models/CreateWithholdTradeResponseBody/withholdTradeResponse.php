<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20180116\Models\CreateWithholdTradeResponseBody;

use AlibabaCloud\Tea\Model;

class withholdTradeResponse extends Model
{
    /**
     * @var string
     */
    public $paymentDate;

    /**
     * @var string
     */
    public $tradeNo;

    /**
     * @var string
     */
    public $outRequestNo;

    /**
     * @var string
     */
    public $outTradeNo;
    protected $_name = [
        'paymentDate'  => 'PaymentDate',
        'tradeNo'      => 'TradeNo',
        'outRequestNo' => 'OutRequestNo',
        'outTradeNo'   => 'OutTradeNo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->paymentDate) {
            $res['PaymentDate'] = $this->paymentDate;
        }
        if (null !== $this->tradeNo) {
            $res['TradeNo'] = $this->tradeNo;
        }
        if (null !== $this->outRequestNo) {
            $res['OutRequestNo'] = $this->outRequestNo;
        }
        if (null !== $this->outTradeNo) {
            $res['OutTradeNo'] = $this->outTradeNo;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return withholdTradeResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PaymentDate'])) {
            $model->paymentDate = $map['PaymentDate'];
        }
        if (isset($map['TradeNo'])) {
            $model->tradeNo = $map['TradeNo'];
        }
        if (isset($map['OutRequestNo'])) {
            $model->outRequestNo = $map['OutRequestNo'];
        }
        if (isset($map['OutTradeNo'])) {
            $model->outTradeNo = $map['OutTradeNo'];
        }

        return $model;
    }
}
