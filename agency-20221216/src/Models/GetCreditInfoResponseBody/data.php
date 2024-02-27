<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Agency\V20221216\Models\GetCreditInfoResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The Credit Control status, Value Range:</br>
     * 3. shutdown -  Sub Account status is down.
     * @example normal
     *
     * @var string
     */
    public $accountStatus;

    /**
     * @description Percentage value, when the available credit limit is lower than this credit limit percentage, a notification E-mail will be sent to the main account.
     *
     * @example 20
     *
     * @var string
     */
    public $alarmThreshold;

    /**
     * @description The Credit available to consume.
     *
     * @example 800
     *
     * @var string
     */
    public $availableCredit;

    /**
     * @description Obtain total unpaid amount on demo bill before simulated deduction.
     *
     * @example 0.000000
     *
     * @var string
     */
    public $consumedUndeductedValue;

    /**
     * @description The Credit Line of Sub Account
     *
     * @example 1000
     *
     * @var string
     */
    public $creditLine;

    /**
     * @description The Credit have been consumed by Sub Account, and haven\"t be paid.
     *
     * @example 200
     *
     * @var string
     */
    public $outstandingBalance;

    /**
     * @description The systematic controlling policy for resource management, specifically when the available Credit of Sub Account falls to 0 or less.</br>
     *
     * - 3: immediatelyStop. Once valid quota of Sub Account falls below 0 and be identified as defaulting account, it will trigger the instance shutdown immediately.</br>
     * @example delayStop
     *
     * @var string
     */
    public $zeroCreditShutdownPolicy;

    /**
     * @description Manage order operation.
     * - normal：The account could raise new purchase order as usual.
     * @example ban
     *
     * @var string
     */
    public $newBuyStatus;
    protected $_name = [
        'accountStatus'            => 'AccountStatus',
        'alarmThreshold'           => 'AlarmThreshold',
        'availableCredit'          => 'AvailableCredit',
        'consumedUndeductedValue'  => 'ConsumedUndeductedValue',
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
