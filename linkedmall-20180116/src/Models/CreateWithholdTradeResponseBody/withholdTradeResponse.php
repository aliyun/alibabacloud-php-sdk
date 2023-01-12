<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20180116\Models\CreateWithholdTradeResponseBody;

use AlibabaCloud\Tea\Model;

class withholdTradeResponse extends Model
{
    /**
     * @example 57E4FE52-0750-4456-AA8F-ECC9FA0F8DF0
     *
     * @var string
     */
    public $outRequestNo;

    /**
     * @example 23******274
     *
     * @var string
     */
    public $outTradeNo;

    /**
     * @example 2022-04-01 12:00:00
     *
     * @var string
     */
    public $paymentDate;

    /**
     * @example 32******372
     *
     * @var string
     */
    public $tradeNo;
    protected $_name = [
        'outRequestNo' => 'OutRequestNo',
        'outTradeNo'   => 'OutTradeNo',
        'paymentDate'  => 'PaymentDate',
        'tradeNo'      => 'TradeNo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->outRequestNo) {
            $res['OutRequestNo'] = $this->outRequestNo;
        }
        if (null !== $this->outTradeNo) {
            $res['OutTradeNo'] = $this->outTradeNo;
        }
        if (null !== $this->paymentDate) {
            $res['PaymentDate'] = $this->paymentDate;
        }
        if (null !== $this->tradeNo) {
            $res['TradeNo'] = $this->tradeNo;
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
        if (isset($map['OutRequestNo'])) {
            $model->outRequestNo = $map['OutRequestNo'];
        }
        if (isset($map['OutTradeNo'])) {
            $model->outTradeNo = $map['OutTradeNo'];
        }
        if (isset($map['PaymentDate'])) {
            $model->paymentDate = $map['PaymentDate'];
        }
        if (isset($map['TradeNo'])) {
            $model->tradeNo = $map['TradeNo'];
        }

        return $model;
    }
}
