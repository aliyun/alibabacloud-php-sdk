<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AirticketOpen\V20230117\Models\BookResponseBody\errorData\orderList\orderAttribute;

use AlibabaCloud\Dara\Model;

class abaPayLockRateInfo extends Model
{
    /**
     * @var string
     */
    public $payIntendedAmount;

    /**
     * @var string
     */
    public $payIntendedCurrencyCode;

    /**
     * @var string
     */
    public $quotationCurrencyCode;

    /**
     * @var string
     */
    public $toPayCurrencyRate;
    protected $_name = [
        'payIntendedAmount' => 'pay_intended_amount',
        'payIntendedCurrencyCode' => 'pay_intended_currency_code',
        'quotationCurrencyCode' => 'quotation_currency_code',
        'toPayCurrencyRate' => 'to_pay_currency_rate',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->payIntendedAmount) {
            $res['pay_intended_amount'] = $this->payIntendedAmount;
        }

        if (null !== $this->payIntendedCurrencyCode) {
            $res['pay_intended_currency_code'] = $this->payIntendedCurrencyCode;
        }

        if (null !== $this->quotationCurrencyCode) {
            $res['quotation_currency_code'] = $this->quotationCurrencyCode;
        }

        if (null !== $this->toPayCurrencyRate) {
            $res['to_pay_currency_rate'] = $this->toPayCurrencyRate;
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
        if (isset($map['pay_intended_amount'])) {
            $model->payIntendedAmount = $map['pay_intended_amount'];
        }

        if (isset($map['pay_intended_currency_code'])) {
            $model->payIntendedCurrencyCode = $map['pay_intended_currency_code'];
        }

        if (isset($map['quotation_currency_code'])) {
            $model->quotationCurrencyCode = $map['quotation_currency_code'];
        }

        if (isset($map['to_pay_currency_rate'])) {
            $model->toPayCurrencyRate = $map['to_pay_currency_rate'];
        }

        return $model;
    }
}
