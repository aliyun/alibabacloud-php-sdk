<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Agency\V20221216\Models\GetCreditInfoResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example normal
     *
     * @var string
     */
    public $accountStatus;

    /**
     * @example 20
     *
     * @var string
     */
    public $alarmThreshold;

    /**
     * @example 800
     *
     * @var string
     */
    public $availableCredit;

    /**
     * @example 1000
     *
     * @var string
     */
    public $creditLine;

    /**
     * @example 200
     *
     * @var string
     */
    public $outstandingBalance;

    /**
     * @example delayStop
     *
     * @var string
     */
    public $zeroCreditShutdownPolicy;

    /**
     * @example ban
     *
     * @var string
     */
    public $newBuyStatus;
    protected $_name = [
        'accountStatus'            => 'AccountStatus',
        'alarmThreshold'           => 'AlarmThreshold',
        'availableCredit'          => 'AvailableCredit',
        'creditLine'               => 'CreditLine',
        'outstandingBalance'       => 'OutstandingBalance',
        'zeroCreditShutdownPolicy' => 'ZeroCreditShutdownPolicy',
        'newBuyStatus'             => 'newBuyStatus',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return data
     */
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
