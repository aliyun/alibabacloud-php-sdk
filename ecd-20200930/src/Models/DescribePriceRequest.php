<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Tea\Model;

class DescribePriceRequest extends Model
{
    /**
     * @description The number of resources. Default value: 1.
     *
     * @example 1
     *
     * @var int
     */
    public $amount;

    /**
     * @description The maximum public bandwidth. Unit: Mbit/s.
     *
     *   Valid values if you set InternetChargeType to PayByBandwidth: 10 to 1000.
     *   Valid values if you set InternetChargeType to InternetChargeType: 10 to 200.
     *
     * @example 10
     *
     * @var int
     */
    public $bandwidth;

    /**
     * @description The type of hourly plan if you use the Monthly Subscription billing method. If you set `ResourceType` to `DesktopMonthPackage`, you must specify this parameter.
     *
     * Valid values:
     *
     *   120: the 120-hour computing plan.
     *   250: the 250-hour computing plan.
     *
     * @example 120
     *
     * @var int
     */
    public $duration;

    /**
     * @description The number of cloud computer shares. Default value: 1.
     *
     * >  This parameter takes effect only if you set `ResourceType` to `DesktopGroup`.
     *
     * @example 1
     *
     * @var int
     */
    public $groupDesktopCount;

    /**
     * @description The specifications of the resource.
     *
     *   This parameter is required if you set `ResourceType` to `Desktop`. You can call the [DescribeDesktopTypes](~~DescribeDesktopTypes~~) to query the available cloud computer types that correspond to the value of `DesktopTypeId`.
     *   If you set `ResourceType` to `DesktopGroup`, set the value of this parameter to `large`.
     *   If you set `ResourceType` to `Bandwidth`, you can leave this parameter empty.
     *
     * @example eds.general.2c2g
     *
     * @var string
     */
    public $instanceType;

    /**
     * @description The metering method for network traffic.
     *
     * Valid values:
     *
     *   PayByTraffic: You are charged for the actually consumed traffic.
     *   PayByBandwidth: You are charged by a fixed bandwidth.
     *
     * @example PayByTraffic
     *
     * @var string
     */
    public $internetChargeType;

    /**
     * @description The OS type.
     *
     * Valid values:
     *
     *   Linux
     *   Windows (default)
     *
     * @example Windows
     *
     * @var string
     */
    public $osType;

    /**
     * @description The subscription duration. The valid values of this parameter vary based on the value of `PeriodUnit`.
     *
     *   If you set `PeriodUnit` to `Hour`, set the value of this parameter to 1.
     *   If you set `PeriodUnit` to `Month`, set the value of this parameter to 1, 2, 3, or 6.
     *   If you set `PeriodUnit` to `Year`, set the value of this parameter to 1, 2, or 3.
     *
     * Default value: 1.
     *
     * @example 1
     *
     * @var int
     */
    public $period;

    /**
     * @description The billing cycle.
     *
     * Valid values:
     *
     *   Month
     *   Year
     *   Hour (default)
     *
     * @example Hour
     *
     * @var string
     */
    public $periodUnit;

    /**
     * @description The promotion ID.
     *
     * @example 123456
     *
     * @var string
     */
    public $promotionId;

    /**
     * @description The region ID. You can call the [DescribeRegions](~~DescribeRegions~~) operation to query the regions supported by EDS.
     *
     * This parameter is required.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @var int
     */
    public $resellerOwnerUid;

    /**
     * @description The type of the resource.
     *
     * Valid values:
     *
     *   DesktopMonthPackage: monthly subscription cloud computers that use hourly limit plans.
     *   Desktop (default): pay-as-you-go cloud computers/monthly subscription cloud computers that use unlimited plans.
     *   Bandwidth: premium bandwidth plans.
     *   DesktopGroup: cloud computer shares.
     *
     * @example Desktop
     *
     * @var string
     */
    public $resourceType;

    /**
     * @description The category of the system disk.
     *
     * Valid values:
     *
     *   cloud_efficiency: the ultra disk
     *   cloud_auto: the standard SSD.
     *   cloud_essd: the Enterprise SSD (ESSD). Take note that only specific cloud computer types support ESSDs.
     *
     * @example 40
     *
     * @var string
     */
    public $rootDiskCategory;

    /**
     * @description The size of the system disk. Unit: GiB. If you set `ResourceType` to `Desktop`, you must specify this parameter.
     *
     * @example 80
     *
     * @var int
     */
    public $rootDiskSizeGib;

    /**
     * @description The category of the data disk.
     *
     * Valid values:
     *
     *   cloud_efficiency: the ultra disk
     *   cloud_auto: the standard SSD.
     *   cloud_essd: the ESSD. Take note that only specific cloud computer types support ESSDs.
     *
     * @example 80
     *
     * @var string
     */
    public $userDiskCategory;

    /**
     * @description The size of the data disk. Unit: GiB.
     *
     * @example 100
     *
     * @var int
     */
    public $userDiskSizeGib;
    protected $_name = [
        'amount' => 'Amount',
        'bandwidth' => 'Bandwidth',
        'duration' => 'Duration',
        'groupDesktopCount' => 'GroupDesktopCount',
        'instanceType' => 'InstanceType',
        'internetChargeType' => 'InternetChargeType',
        'osType' => 'OsType',
        'period' => 'Period',
        'periodUnit' => 'PeriodUnit',
        'promotionId' => 'PromotionId',
        'regionId' => 'RegionId',
        'resellerOwnerUid' => 'ResellerOwnerUid',
        'resourceType' => 'ResourceType',
        'rootDiskCategory' => 'RootDiskCategory',
        'rootDiskSizeGib' => 'RootDiskSizeGib',
        'userDiskCategory' => 'UserDiskCategory',
        'userDiskSizeGib' => 'UserDiskSizeGib',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->amount) {
            $res['Amount'] = $this->amount;
        }
        if (null !== $this->bandwidth) {
            $res['Bandwidth'] = $this->bandwidth;
        }
        if (null !== $this->duration) {
            $res['Duration'] = $this->duration;
        }
        if (null !== $this->groupDesktopCount) {
            $res['GroupDesktopCount'] = $this->groupDesktopCount;
        }
        if (null !== $this->instanceType) {
            $res['InstanceType'] = $this->instanceType;
        }
        if (null !== $this->internetChargeType) {
            $res['InternetChargeType'] = $this->internetChargeType;
        }
        if (null !== $this->osType) {
            $res['OsType'] = $this->osType;
        }
        if (null !== $this->period) {
            $res['Period'] = $this->period;
        }
        if (null !== $this->periodUnit) {
            $res['PeriodUnit'] = $this->periodUnit;
        }
        if (null !== $this->promotionId) {
            $res['PromotionId'] = $this->promotionId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resellerOwnerUid) {
            $res['ResellerOwnerUid'] = $this->resellerOwnerUid;
        }
        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
        }
        if (null !== $this->rootDiskCategory) {
            $res['RootDiskCategory'] = $this->rootDiskCategory;
        }
        if (null !== $this->rootDiskSizeGib) {
            $res['RootDiskSizeGib'] = $this->rootDiskSizeGib;
        }
        if (null !== $this->userDiskCategory) {
            $res['UserDiskCategory'] = $this->userDiskCategory;
        }
        if (null !== $this->userDiskSizeGib) {
            $res['UserDiskSizeGib'] = $this->userDiskSizeGib;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribePriceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Amount'])) {
            $model->amount = $map['Amount'];
        }
        if (isset($map['Bandwidth'])) {
            $model->bandwidth = $map['Bandwidth'];
        }
        if (isset($map['Duration'])) {
            $model->duration = $map['Duration'];
        }
        if (isset($map['GroupDesktopCount'])) {
            $model->groupDesktopCount = $map['GroupDesktopCount'];
        }
        if (isset($map['InstanceType'])) {
            $model->instanceType = $map['InstanceType'];
        }
        if (isset($map['InternetChargeType'])) {
            $model->internetChargeType = $map['InternetChargeType'];
        }
        if (isset($map['OsType'])) {
            $model->osType = $map['OsType'];
        }
        if (isset($map['Period'])) {
            $model->period = $map['Period'];
        }
        if (isset($map['PeriodUnit'])) {
            $model->periodUnit = $map['PeriodUnit'];
        }
        if (isset($map['PromotionId'])) {
            $model->promotionId = $map['PromotionId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResellerOwnerUid'])) {
            $model->resellerOwnerUid = $map['ResellerOwnerUid'];
        }
        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
        }
        if (isset($map['RootDiskCategory'])) {
            $model->rootDiskCategory = $map['RootDiskCategory'];
        }
        if (isset($map['RootDiskSizeGib'])) {
            $model->rootDiskSizeGib = $map['RootDiskSizeGib'];
        }
        if (isset($map['UserDiskCategory'])) {
            $model->userDiskCategory = $map['UserDiskCategory'];
        }
        if (isset($map['UserDiskSizeGib'])) {
            $model->userDiskSizeGib = $map['UserDiskSizeGib'];
        }

        return $model;
    }
}
