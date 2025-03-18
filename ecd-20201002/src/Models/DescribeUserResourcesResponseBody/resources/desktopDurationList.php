<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20201002\Models\DescribeUserResourcesResponseBody\resources;

use AlibabaCloud\Tea\Model;

class desktopDurationList extends Model
{
    /**
     * @example mdp-0bxls4qpi6bl6****
     *
     * @var string
     */
    public $orderInstanceId;

    /**
     * @example 2025-01-17T07:01Z
     *
     * @var string
     */
    public $packageCreationTime;

    /**
     * @example 2025-02-17T15:59Z
     *
     * @var string
     */
    public $packageExpiredTime;

    /**
     * @example mdp-0bxls4qpi6bl6****
     *
     * @var string
     */
    public $packageId;

    /**
     * @example Available
     *
     * @var string
     */
    public $packageStatus;

    /**
     * @example NORMAL_PACKAGE
     *
     * @var string
     */
    public $packageType;

    /**
     * @example Postpaid
     *
     * @var string
     */
    public $packageUsedUpStrategy;

    /**
     * @example 2025-02-17T15:59Z
     *
     * @var string
     */
    public $periodEndTime;

    /**
     * @example 2025-01-17T07:01Z
     *
     * @var string
     */
    public $periodStartTime;

    /**
     * @example 199
     *
     * @var float
     */
    public $postPaidLimitFee;

    /**
     * @example 432000
     *
     * @var int
     */
    public $totalDuration;

    /**
     * @example 16850
     *
     * @var int
     */
    public $usedDuration;
    protected $_name = [
        'orderInstanceId' => 'OrderInstanceId',
        'packageCreationTime' => 'PackageCreationTime',
        'packageExpiredTime' => 'PackageExpiredTime',
        'packageId' => 'PackageId',
        'packageStatus' => 'PackageStatus',
        'packageType' => 'PackageType',
        'packageUsedUpStrategy' => 'PackageUsedUpStrategy',
        'periodEndTime' => 'PeriodEndTime',
        'periodStartTime' => 'PeriodStartTime',
        'postPaidLimitFee' => 'PostPaidLimitFee',
        'totalDuration' => 'TotalDuration',
        'usedDuration' => 'UsedDuration',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->orderInstanceId) {
            $res['OrderInstanceId'] = $this->orderInstanceId;
        }
        if (null !== $this->packageCreationTime) {
            $res['PackageCreationTime'] = $this->packageCreationTime;
        }
        if (null !== $this->packageExpiredTime) {
            $res['PackageExpiredTime'] = $this->packageExpiredTime;
        }
        if (null !== $this->packageId) {
            $res['PackageId'] = $this->packageId;
        }
        if (null !== $this->packageStatus) {
            $res['PackageStatus'] = $this->packageStatus;
        }
        if (null !== $this->packageType) {
            $res['PackageType'] = $this->packageType;
        }
        if (null !== $this->packageUsedUpStrategy) {
            $res['PackageUsedUpStrategy'] = $this->packageUsedUpStrategy;
        }
        if (null !== $this->periodEndTime) {
            $res['PeriodEndTime'] = $this->periodEndTime;
        }
        if (null !== $this->periodStartTime) {
            $res['PeriodStartTime'] = $this->periodStartTime;
        }
        if (null !== $this->postPaidLimitFee) {
            $res['PostPaidLimitFee'] = $this->postPaidLimitFee;
        }
        if (null !== $this->totalDuration) {
            $res['TotalDuration'] = $this->totalDuration;
        }
        if (null !== $this->usedDuration) {
            $res['UsedDuration'] = $this->usedDuration;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return desktopDurationList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OrderInstanceId'])) {
            $model->orderInstanceId = $map['OrderInstanceId'];
        }
        if (isset($map['PackageCreationTime'])) {
            $model->packageCreationTime = $map['PackageCreationTime'];
        }
        if (isset($map['PackageExpiredTime'])) {
            $model->packageExpiredTime = $map['PackageExpiredTime'];
        }
        if (isset($map['PackageId'])) {
            $model->packageId = $map['PackageId'];
        }
        if (isset($map['PackageStatus'])) {
            $model->packageStatus = $map['PackageStatus'];
        }
        if (isset($map['PackageType'])) {
            $model->packageType = $map['PackageType'];
        }
        if (isset($map['PackageUsedUpStrategy'])) {
            $model->packageUsedUpStrategy = $map['PackageUsedUpStrategy'];
        }
        if (isset($map['PeriodEndTime'])) {
            $model->periodEndTime = $map['PeriodEndTime'];
        }
        if (isset($map['PeriodStartTime'])) {
            $model->periodStartTime = $map['PeriodStartTime'];
        }
        if (isset($map['PostPaidLimitFee'])) {
            $model->postPaidLimitFee = $map['PostPaidLimitFee'];
        }
        if (isset($map['TotalDuration'])) {
            $model->totalDuration = $map['TotalDuration'];
        }
        if (isset($map['UsedDuration'])) {
            $model->usedDuration = $map['UsedDuration'];
        }

        return $model;
    }
}
