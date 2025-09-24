<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryAccountBalanceResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $availableAmount;

    /**
     * @var string
     */
    public $availableCashAmount;

    /**
     * @var string
     */
    public $creditAmount;

    /**
     * @var string
     */
    public $currency;

    /**
     * @var string
     */
    public $mybankCreditAmount;

    /**
     * @var string
     */
    public $quotaLimit;
    protected $_name = [
        'availableAmount' => 'AvailableAmount',
        'availableCashAmount' => 'AvailableCashAmount',
        'creditAmount' => 'CreditAmount',
        'currency' => 'Currency',
        'mybankCreditAmount' => 'MybankCreditAmount',
        'quotaLimit' => 'QuotaLimit',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
