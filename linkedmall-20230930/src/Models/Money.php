<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20230930\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Linkedmall\V20230930\Models\Money\currency;

class Money extends Model
{
    /**
     * @var int
     */
    public $amount;
    /**
     * @var string
     */
    public $amountAsString;
    /**
     * @var string
     */
    public $amountString;
    /**
     * @var int
     */
    public $cent;
    /**
     * @var currency
     */
    public $currency;
    /**
     * @var string
     */
    public $currencyCode;
    /**
     * @var bool
     */
    public $positive;
    protected $_name = [
        'amount'         => 'amount',
        'amountAsString' => 'amountAsString',
        'amountString'   => 'amountString',
        'cent'           => 'cent',
        'currency'       => 'currency',
        'currencyCode'   => 'currencyCode',
        'positive'       => 'positive',
    ];

    public function validate()
    {
        if (null !== $this->currency) {
            $this->currency->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->amount) {
            $res['amount'] = $this->amount;
        }

        if (null !== $this->amountAsString) {
            $res['amountAsString'] = $this->amountAsString;
        }

        if (null !== $this->amountString) {
            $res['amountString'] = $this->amountString;
        }

        if (null !== $this->cent) {
            $res['cent'] = $this->cent;
        }

        if (null !== $this->currency) {
            $res['currency'] = null !== $this->currency ? $this->currency->toArray($noStream) : $this->currency;
        }

        if (null !== $this->currencyCode) {
            $res['currencyCode'] = $this->currencyCode;
        }

        if (null !== $this->positive) {
            $res['positive'] = $this->positive;
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
        if (isset($map['amount'])) {
            $model->amount = $map['amount'];
        }

        if (isset($map['amountAsString'])) {
            $model->amountAsString = $map['amountAsString'];
        }

        if (isset($map['amountString'])) {
            $model->amountString = $map['amountString'];
        }

        if (isset($map['cent'])) {
            $model->cent = $map['cent'];
        }

        if (isset($map['currency'])) {
            $model->currency = currency::fromMap($map['currency']);
        }

        if (isset($map['currencyCode'])) {
            $model->currencyCode = $map['currencyCode'];
        }

        if (isset($map['positive'])) {
            $model->positive = $map['positive'];
        }

        return $model;
    }
}
