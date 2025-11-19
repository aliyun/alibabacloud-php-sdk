<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wuyingpersonalpc\V20251111\Models\DescribeImageDetailResponseBody\data;

use AlibabaCloud\Dara\Model;

class currentImageCodeInfo extends Model
{
    /**
     * @var string
     */
    public $currentPassword;

    /**
     * @var string
     */
    public $expireTime;

    /**
     * @var string
     */
    public $gmtCreated;

    /**
     * @var string
     */
    public $gmtModified;

    /**
     * @var string
     */
    public $imageCode;

    /**
     * @var bool
     */
    public $isCopyPassword;

    /**
     * @var bool
     */
    public $isEncrypted;

    /**
     * @var bool
     */
    public $isFree;

    /**
     * @var int
     */
    public $periodDays;

    /**
     * @var int
     */
    public $redeemCount;

    /**
     * @var int
     */
    public $redeemQuota;
    protected $_name = [
        'currentPassword' => 'CurrentPassword',
        'expireTime' => 'ExpireTime',
        'gmtCreated' => 'GmtCreated',
        'gmtModified' => 'GmtModified',
        'imageCode' => 'ImageCode',
        'isCopyPassword' => 'IsCopyPassword',
        'isEncrypted' => 'IsEncrypted',
        'isFree' => 'IsFree',
        'periodDays' => 'PeriodDays',
        'redeemCount' => 'RedeemCount',
        'redeemQuota' => 'RedeemQuota',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->currentPassword) {
            $res['CurrentPassword'] = $this->currentPassword;
        }

        if (null !== $this->expireTime) {
            $res['ExpireTime'] = $this->expireTime;
        }

        if (null !== $this->gmtCreated) {
            $res['GmtCreated'] = $this->gmtCreated;
        }

        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }

        if (null !== $this->imageCode) {
            $res['ImageCode'] = $this->imageCode;
        }

        if (null !== $this->isCopyPassword) {
            $res['IsCopyPassword'] = $this->isCopyPassword;
        }

        if (null !== $this->isEncrypted) {
            $res['IsEncrypted'] = $this->isEncrypted;
        }

        if (null !== $this->isFree) {
            $res['IsFree'] = $this->isFree;
        }

        if (null !== $this->periodDays) {
            $res['PeriodDays'] = $this->periodDays;
        }

        if (null !== $this->redeemCount) {
            $res['RedeemCount'] = $this->redeemCount;
        }

        if (null !== $this->redeemQuota) {
            $res['RedeemQuota'] = $this->redeemQuota;
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
        if (isset($map['CurrentPassword'])) {
            $model->currentPassword = $map['CurrentPassword'];
        }

        if (isset($map['ExpireTime'])) {
            $model->expireTime = $map['ExpireTime'];
        }

        if (isset($map['GmtCreated'])) {
            $model->gmtCreated = $map['GmtCreated'];
        }

        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }

        if (isset($map['ImageCode'])) {
            $model->imageCode = $map['ImageCode'];
        }

        if (isset($map['IsCopyPassword'])) {
            $model->isCopyPassword = $map['IsCopyPassword'];
        }

        if (isset($map['IsEncrypted'])) {
            $model->isEncrypted = $map['IsEncrypted'];
        }

        if (isset($map['IsFree'])) {
            $model->isFree = $map['IsFree'];
        }

        if (isset($map['PeriodDays'])) {
            $model->periodDays = $map['PeriodDays'];
        }

        if (isset($map['RedeemCount'])) {
            $model->redeemCount = $map['RedeemCount'];
        }

        if (isset($map['RedeemQuota'])) {
            $model->redeemQuota = $map['RedeemQuota'];
        }

        return $model;
    }
}
