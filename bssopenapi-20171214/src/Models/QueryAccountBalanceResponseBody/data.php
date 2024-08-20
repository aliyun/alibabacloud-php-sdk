<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryAccountBalanceResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The available balance of the account.
     *
     * @example 10000.00
     *
     * @var string
     */
    public $availableAmount;

    /**
     * @description The available balance in cash.
     *
     * @example 10000.00
     *
     * @var string
     */
    public $availableCashAmount;

    /**
     * @description The credit balance of the account.
     *
     * @example 0.00
     *
     * @var string
     */
    public $creditAmount;

    /**
     * @description The type of the currency. Valid values:
     *
     *   CNY: Chinese Yuan
     *   USD: US dollar
     *   JPY: Japanese Yen
     *
     * @example CNY
     *
     * @var string
     */
    public $currency;

    /**
     * @description The credit line controlled by MYbank.
     *
     * @example 0.00
     *
     * @var string
     */
    public $mybankCreditAmount;

    /**
     * @description The quota limit for eco customers.
     *
     * @example 10000.00
     *
     * @var string
     */
    public $quotaLimit;
    protected $_name = [
        'availableAmount'     => 'AvailableAmount',
        'availableCashAmount' => 'AvailableCashAmount',
        'creditAmount'        => 'CreditAmount',
        'currency'            => 'Currency',
        'mybankCreditAmount'  => 'MybankCreditAmount',
        'quotaLimit'          => 'QuotaLimit',
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
        if (null !== $this->quotaLimit) {
            $res['QuotaLimit'] = $this->quotaLimit;
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
        if (isset($map['QuotaLimit'])) {
            $model->quotaLimit = $map['QuotaLimit'];
        }

        return $model;
    }
}
