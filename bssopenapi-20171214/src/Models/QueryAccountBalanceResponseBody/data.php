<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryAccountBalanceResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example 10000.00
     *
     * @var string
     */
    public $availableAmount;

    /**
     * @example 10000.00
     *
     * @var string
     */
    public $availableCashAmount;

    /**
     * @example 0.00
     *
     * @var string
     */
    public $creditAmount;

    /**
     * @example CNY
     *
     * @var string
     */
    public $currency;

    /**
     * @example 0.00
     *
     * @var string
     */
    public $mybankCreditAmount;
    protected $_name = [
        'availableAmount'     => 'AvailableAmount',
        'availableCashAmount' => 'AvailableCashAmount',
        'creditAmount'        => 'CreditAmount',
        'currency'            => 'Currency',
        'mybankCreditAmount'  => 'MybankCreditAmount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->availableAmount) {
            $res['AvailableAmount'] = $this->availableAmount;
        }
        if (null !== $this->availableCashAmount) {
            $res['AvailableCashAmount'] = $this->availableCashAmount;
        }
        if (null !== $this->creditAmount) {
            $res['CreditAmount'] = $this->creditAmount;
        }
        if (null !== $this->currency) {
            $res['Currency'] = $this->currency;
        }
        if (null !== $this->mybankCreditAmount) {
            $res['MybankCreditAmount'] = $this->mybankCreditAmount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AvailableAmount'])) {
            $model->availableAmount = $map['AvailableAmount'];
        }
        if (isset($map['AvailableCashAmount'])) {
            $model->availableCashAmount = $map['AvailableCashAmount'];
        }
        if (isset($map['CreditAmount'])) {
            $model->creditAmount = $map['CreditAmount'];
        }
        if (isset($map['Currency'])) {
            $model->currency = $map['Currency'];
        }
        if (isset($map['MybankCreditAmount'])) {
            $model->mybankCreditAmount = $map['MybankCreditAmount'];
        }

        return $model;
    }
}
