<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Bss\V20140714\Models;

use AlibabaCloud\Tea\Model;

class DescribeCashDetailResponseBody extends Model
{
    /**
     * @var string
     */
    public $amountOwed;

    /**
     * @var string
     */
    public $availableCredit;

    /**
     * @var string
     */
    public $balanceAmount;

    /**
     * @var string
     */
    public $creditCardAmount;

    /**
     * @var string
     */
    public $creditLimit;

    /**
     * @var string
     */
    public $enableThresholdAlert;

    /**
     * @var string
     */
    public $frozenAmount;

    /**
     * @var int
     */
    public $miniAlertThreshold;

    /**
     * @var string
     */
    public $remmitanceAmount;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'amountOwed'           => 'AmountOwed',
        'availableCredit'      => 'AvailableCredit',
        'balanceAmount'        => 'BalanceAmount',
        'creditCardAmount'     => 'CreditCardAmount',
        'creditLimit'          => 'CreditLimit',
        'enableThresholdAlert' => 'EnableThresholdAlert',
        'frozenAmount'         => 'FrozenAmount',
        'miniAlertThreshold'   => 'MiniAlertThreshold',
        'remmitanceAmount'     => 'RemmitanceAmount',
        'requestId'            => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->amountOwed) {
            $res['AmountOwed'] = $this->amountOwed;
        }
        if (null !== $this->availableCredit) {
            $res['AvailableCredit'] = $this->availableCredit;
        }
        if (null !== $this->balanceAmount) {
            $res['BalanceAmount'] = $this->balanceAmount;
        }
        if (null !== $this->creditCardAmount) {
            $res['CreditCardAmount'] = $this->creditCardAmount;
        }
        if (null !== $this->creditLimit) {
            $res['CreditLimit'] = $this->creditLimit;
        }
        if (null !== $this->enableThresholdAlert) {
            $res['EnableThresholdAlert'] = $this->enableThresholdAlert;
        }
        if (null !== $this->frozenAmount) {
            $res['FrozenAmount'] = $this->frozenAmount;
        }
        if (null !== $this->miniAlertThreshold) {
            $res['MiniAlertThreshold'] = $this->miniAlertThreshold;
        }
        if (null !== $this->remmitanceAmount) {
            $res['RemmitanceAmount'] = $this->remmitanceAmount;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeCashDetailResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AmountOwed'])) {
            $model->amountOwed = $map['AmountOwed'];
        }
        if (isset($map['AvailableCredit'])) {
            $model->availableCredit = $map['AvailableCredit'];
        }
        if (isset($map['BalanceAmount'])) {
            $model->balanceAmount = $map['BalanceAmount'];
        }
        if (isset($map['CreditCardAmount'])) {
            $model->creditCardAmount = $map['CreditCardAmount'];
        }
        if (isset($map['CreditLimit'])) {
            $model->creditLimit = $map['CreditLimit'];
        }
        if (isset($map['EnableThresholdAlert'])) {
            $model->enableThresholdAlert = $map['EnableThresholdAlert'];
        }
        if (isset($map['FrozenAmount'])) {
            $model->frozenAmount = $map['FrozenAmount'];
        }
        if (isset($map['MiniAlertThreshold'])) {
            $model->miniAlertThreshold = $map['MiniAlertThreshold'];
        }
        if (isset($map['RemmitanceAmount'])) {
            $model->remmitanceAmount = $map['RemmitanceAmount'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
