<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Agency\V20221216\Models\GetCreditInfoResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $accountStatus;

    /**
     * @var string
     */
    public $alarmThreshold;

    /**
     * @var string
     */
    public $availableCredit;

    /**
     * @var string
     */
    public $consumedUndeductedValue;

    /**
     * @var string
     */
    public $creditLine;

    /**
     * @var string
     */
    public $outstandingBalance;

    /**
     * @var string
     */
    public $zeroCreditShutdownPolicy;

    /**
     * @var string
     */
    public $newBuyStatus;
    protected $_name = [
        'accountStatus' => 'AccountStatus',
        'alarmThreshold' => 'AlarmThreshold',
        'availableCredit' => 'AvailableCredit',
        'consumedUndeductedValue' => 'ConsumedUndeductedValue',
        'creditLine' => 'CreditLine',
        'outstandingBalance' => 'OutstandingBalance',
        'zeroCreditShutdownPolicy' => 'ZeroCreditShutdownPolicy',
        'newBuyStatus' => 'newBuyStatus',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accountStatus) {
            $res['AccountStatus'] = $this->accountStatus;
        }

        if (null !== $this->alarmThreshold) {
            $res['AlarmThreshold'] = $this->alarmThreshold;
        }

        if (null !== $this->availableCredit) {
            $res['AvailableCredit'] = $this->availableCredit;
        }

        if (null !== $this->consumedUndeductedValue) {
            $res['ConsumedUndeductedValue'] = $this->consumedUndeductedValue;
        }

        if (null !== $this->creditLine) {
            $res['CreditLine'] = $this->creditLine;
        }

        if (null !== $this->outstandingBalance) {
            $res['OutstandingBalance'] = $this->outstandingBalance;
        }

        if (null !== $this->zeroCreditShutdownPolicy) {
            $res['ZeroCreditShutdownPolicy'] = $this->zeroCreditShutdownPolicy;
        }

        if (null !== $this->newBuyStatus) {
            $res['newBuyStatus'] = $this->newBuyStatus;
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
        if (isset($map['AccountStatus'])) {
            $model->accountStatus = $map['AccountStatus'];
        }

        if (isset($map['AlarmThreshold'])) {
            $model->alarmThreshold = $map['AlarmThreshold'];
        }

        if (isset($map['AvailableCredit'])) {
            $model->availableCredit = $map['AvailableCredit'];
        }

        if (isset($map['ConsumedUndeductedValue'])) {
            $model->consumedUndeductedValue = $map['ConsumedUndeductedValue'];
        }

        if (isset($map['CreditLine'])) {
            $model->creditLine = $map['CreditLine'];
        }

        if (isset($map['OutstandingBalance'])) {
            $model->outstandingBalance = $map['OutstandingBalance'];
        }

        if (isset($map['ZeroCreditShutdownPolicy'])) {
            $model->zeroCreditShutdownPolicy = $map['ZeroCreditShutdownPolicy'];
        }

        if (isset($map['newBuyStatus'])) {
            $model->newBuyStatus = $map['newBuyStatus'];
        }

        return $model;
    }
}
