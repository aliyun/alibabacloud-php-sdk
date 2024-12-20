<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Httpdns\V20160201\Models\GetAccountInfoResponseBody;

use AlibabaCloud\Tea\Model;

class accountInfo extends Model
{
    /**
     * @example 1337****
     *
     * @var string
     */
    public $accountId;

    /**
     * @var bool
     */
    public $dohEnabled;

    /**
     * @var bool
     */
    public $dohResolveAllEnabled;

    /**
     * @var int
     */
    public $monthDohResolveCount;

    /**
     * @example 1500000
     *
     * @var int
     */
    public $monthFreeCount;

    /**
     * @example 3
     *
     * @var int
     */
    public $monthHttpsResolveCount;

    /**
     * @example 9927326
     *
     * @var int
     */
    public $monthResolveCount;

    /**
     * @example 0
     *
     * @var int
     */
    public $packageCount;

    /**
     * @example 50F9C40E****
     *
     * @var string
     */
    public $signSecret;

    /**
     * @example 611523
     *
     * @var int
     */
    public $signedCount;

    /**
     * @example 1523
     *
     * @var int
     */
    public $unsignedCount;

    /**
     * @example true
     *
     * @var bool
     */
    public $unsignedEnabled;

    /**
     * @example 1
     *
     * @var int
     */
    public $userStatus;
    protected $_name = [
        'accountId'              => 'AccountId',
        'dohEnabled'             => 'DohEnabled',
        'dohResolveAllEnabled'   => 'DohResolveAllEnabled',
        'monthDohResolveCount'   => 'MonthDohResolveCount',
        'monthFreeCount'         => 'MonthFreeCount',
        'monthHttpsResolveCount' => 'MonthHttpsResolveCount',
        'monthResolveCount'      => 'MonthResolveCount',
        'packageCount'           => 'PackageCount',
        'signSecret'             => 'SignSecret',
        'signedCount'            => 'SignedCount',
        'unsignedCount'          => 'UnsignedCount',
        'unsignedEnabled'        => 'UnsignedEnabled',
        'userStatus'             => 'UserStatus',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accountId) {
            $res['AccountId'] = $this->accountId;
        }
        if (null !== $this->dohEnabled) {
            $res['DohEnabled'] = $this->dohEnabled;
        }
        if (null !== $this->dohResolveAllEnabled) {
            $res['DohResolveAllEnabled'] = $this->dohResolveAllEnabled;
        }
        if (null !== $this->monthDohResolveCount) {
            $res['MonthDohResolveCount'] = $this->monthDohResolveCount;
        }
        if (null !== $this->monthFreeCount) {
            $res['MonthFreeCount'] = $this->monthFreeCount;
        }
        if (null !== $this->monthHttpsResolveCount) {
            $res['MonthHttpsResolveCount'] = $this->monthHttpsResolveCount;
        }
        if (null !== $this->monthResolveCount) {
            $res['MonthResolveCount'] = $this->monthResolveCount;
        }
        if (null !== $this->packageCount) {
            $res['PackageCount'] = $this->packageCount;
        }
        if (null !== $this->signSecret) {
            $res['SignSecret'] = $this->signSecret;
        }
        if (null !== $this->signedCount) {
            $res['SignedCount'] = $this->signedCount;
        }
        if (null !== $this->unsignedCount) {
            $res['UnsignedCount'] = $this->unsignedCount;
        }
        if (null !== $this->unsignedEnabled) {
            $res['UnsignedEnabled'] = $this->unsignedEnabled;
        }
        if (null !== $this->userStatus) {
            $res['UserStatus'] = $this->userStatus;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return accountInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccountId'])) {
            $model->accountId = $map['AccountId'];
        }
        if (isset($map['DohEnabled'])) {
            $model->dohEnabled = $map['DohEnabled'];
        }
        if (isset($map['DohResolveAllEnabled'])) {
            $model->dohResolveAllEnabled = $map['DohResolveAllEnabled'];
        }
        if (isset($map['MonthDohResolveCount'])) {
            $model->monthDohResolveCount = $map['MonthDohResolveCount'];
        }
        if (isset($map['MonthFreeCount'])) {
            $model->monthFreeCount = $map['MonthFreeCount'];
        }
        if (isset($map['MonthHttpsResolveCount'])) {
            $model->monthHttpsResolveCount = $map['MonthHttpsResolveCount'];
        }
        if (isset($map['MonthResolveCount'])) {
            $model->monthResolveCount = $map['MonthResolveCount'];
        }
        if (isset($map['PackageCount'])) {
            $model->packageCount = $map['PackageCount'];
        }
        if (isset($map['SignSecret'])) {
            $model->signSecret = $map['SignSecret'];
        }
        if (isset($map['SignedCount'])) {
            $model->signedCount = $map['SignedCount'];
        }
        if (isset($map['UnsignedCount'])) {
            $model->unsignedCount = $map['UnsignedCount'];
        }
        if (isset($map['UnsignedEnabled'])) {
            $model->unsignedEnabled = $map['UnsignedEnabled'];
        }
        if (isset($map['UserStatus'])) {
            $model->userStatus = $map['UserStatus'];
        }

        return $model;
    }
}
