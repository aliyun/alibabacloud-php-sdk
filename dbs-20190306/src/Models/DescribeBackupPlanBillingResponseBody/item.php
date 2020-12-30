<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dbs\V20190306\Models\DescribeBackupPlanBillingResponseBody;

use AlibabaCloud\Tea\Model;

class item extends Model
{
    /**
     * @var int
     */
    public $fullStorageSize;

    /**
     * @var int
     */
    public $buyCreateTimestamp;

    /**
     * @var int
     */
    public $buyExpiredTimestamp;

    /**
     * @var int
     */
    public $quotaEndTimestamp;

    /**
     * @var string
     */
    public $buySpec;

    /**
     * @var int
     */
    public $quotaStartTimestamp;

    /**
     * @var bool
     */
    public $isExpired;

    /**
     * @var int
     */
    public $paiedBytes;

    /**
     * @var int
     */
    public $totalFreeBytes;

    /**
     * @var int
     */
    public $usedFullBytes;

    /**
     * @var bool
     */
    public $isFreeBytesUnlimited;

    /**
     * @var int
     */
    public $contStorageSize;

    /**
     * @var string
     */
    public $buyChargeType;

    /**
     * @var int
     */
    public $usedIncrementBytes;
    protected $_name = [
        'fullStorageSize'      => 'FullStorageSize',
        'buyCreateTimestamp'   => 'BuyCreateTimestamp',
        'buyExpiredTimestamp'  => 'BuyExpiredTimestamp',
        'quotaEndTimestamp'    => 'QuotaEndTimestamp',
        'buySpec'              => 'BuySpec',
        'quotaStartTimestamp'  => 'QuotaStartTimestamp',
        'isExpired'            => 'IsExpired',
        'paiedBytes'           => 'PaiedBytes',
        'totalFreeBytes'       => 'TotalFreeBytes',
        'usedFullBytes'        => 'UsedFullBytes',
        'isFreeBytesUnlimited' => 'IsFreeBytesUnlimited',
        'contStorageSize'      => 'ContStorageSize',
        'buyChargeType'        => 'BuyChargeType',
        'usedIncrementBytes'   => 'UsedIncrementBytes',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->fullStorageSize) {
            $res['FullStorageSize'] = $this->fullStorageSize;
        }
        if (null !== $this->buyCreateTimestamp) {
            $res['BuyCreateTimestamp'] = $this->buyCreateTimestamp;
        }
        if (null !== $this->buyExpiredTimestamp) {
            $res['BuyExpiredTimestamp'] = $this->buyExpiredTimestamp;
        }
        if (null !== $this->quotaEndTimestamp) {
            $res['QuotaEndTimestamp'] = $this->quotaEndTimestamp;
        }
        if (null !== $this->buySpec) {
            $res['BuySpec'] = $this->buySpec;
        }
        if (null !== $this->quotaStartTimestamp) {
            $res['QuotaStartTimestamp'] = $this->quotaStartTimestamp;
        }
        if (null !== $this->isExpired) {
            $res['IsExpired'] = $this->isExpired;
        }
        if (null !== $this->paiedBytes) {
            $res['PaiedBytes'] = $this->paiedBytes;
        }
        if (null !== $this->totalFreeBytes) {
            $res['TotalFreeBytes'] = $this->totalFreeBytes;
        }
        if (null !== $this->usedFullBytes) {
            $res['UsedFullBytes'] = $this->usedFullBytes;
        }
        if (null !== $this->isFreeBytesUnlimited) {
            $res['IsFreeBytesUnlimited'] = $this->isFreeBytesUnlimited;
        }
        if (null !== $this->contStorageSize) {
            $res['ContStorageSize'] = $this->contStorageSize;
        }
        if (null !== $this->buyChargeType) {
            $res['BuyChargeType'] = $this->buyChargeType;
        }
        if (null !== $this->usedIncrementBytes) {
            $res['UsedIncrementBytes'] = $this->usedIncrementBytes;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return item
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FullStorageSize'])) {
            $model->fullStorageSize = $map['FullStorageSize'];
        }
        if (isset($map['BuyCreateTimestamp'])) {
            $model->buyCreateTimestamp = $map['BuyCreateTimestamp'];
        }
        if (isset($map['BuyExpiredTimestamp'])) {
            $model->buyExpiredTimestamp = $map['BuyExpiredTimestamp'];
        }
        if (isset($map['QuotaEndTimestamp'])) {
            $model->quotaEndTimestamp = $map['QuotaEndTimestamp'];
        }
        if (isset($map['BuySpec'])) {
            $model->buySpec = $map['BuySpec'];
        }
        if (isset($map['QuotaStartTimestamp'])) {
            $model->quotaStartTimestamp = $map['QuotaStartTimestamp'];
        }
        if (isset($map['IsExpired'])) {
            $model->isExpired = $map['IsExpired'];
        }
        if (isset($map['PaiedBytes'])) {
            $model->paiedBytes = $map['PaiedBytes'];
        }
        if (isset($map['TotalFreeBytes'])) {
            $model->totalFreeBytes = $map['TotalFreeBytes'];
        }
        if (isset($map['UsedFullBytes'])) {
            $model->usedFullBytes = $map['UsedFullBytes'];
        }
        if (isset($map['IsFreeBytesUnlimited'])) {
            $model->isFreeBytesUnlimited = $map['IsFreeBytesUnlimited'];
        }
        if (isset($map['ContStorageSize'])) {
            $model->contStorageSize = $map['ContStorageSize'];
        }
        if (isset($map['BuyChargeType'])) {
            $model->buyChargeType = $map['BuyChargeType'];
        }
        if (isset($map['UsedIncrementBytes'])) {
            $model->usedIncrementBytes = $map['UsedIncrementBytes'];
        }

        return $model;
    }
}
