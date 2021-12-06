<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Httpdns\V20160201\Models\GetAccountInfoResponseBody;

use AlibabaCloud\Tea\Model;

class accountInfo extends Model
{
    /**
     * @var string
     */
    public $accountId;

    /**
     * @var int
     */
    public $monthFreeCount;

    /**
     * @var int
     */
    public $monthHttpsResolveCount;

    /**
     * @var int
     */
    public $monthResolveCount;

    /**
     * @var string
     */
    public $signSecret;

    /**
     * @var int
     */
    public $signedCount;

    /**
     * @var int
     */
    public $unsignedCount;

    /**
     * @var bool
     */
    public $unsignedEnabled;
    protected $_name = [
        'accountId'              => 'AccountId',
        'monthFreeCount'         => 'MonthFreeCount',
        'monthHttpsResolveCount' => 'MonthHttpsResolveCount',
        'monthResolveCount'      => 'MonthResolveCount',
        'signSecret'             => 'SignSecret',
        'signedCount'            => 'SignedCount',
        'unsignedCount'          => 'UnsignedCount',
        'unsignedEnabled'        => 'UnsignedEnabled',
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
        if (null !== $this->monthFreeCount) {
            $res['MonthFreeCount'] = $this->monthFreeCount;
        }
        if (null !== $this->monthHttpsResolveCount) {
            $res['MonthHttpsResolveCount'] = $this->monthHttpsResolveCount;
        }
        if (null !== $this->monthResolveCount) {
            $res['MonthResolveCount'] = $this->monthResolveCount;
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
        if (isset($map['MonthFreeCount'])) {
            $model->monthFreeCount = $map['MonthFreeCount'];
        }
        if (isset($map['MonthHttpsResolveCount'])) {
            $model->monthHttpsResolveCount = $map['MonthHttpsResolveCount'];
        }
        if (isset($map['MonthResolveCount'])) {
            $model->monthResolveCount = $map['MonthResolveCount'];
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

        return $model;
    }
}
