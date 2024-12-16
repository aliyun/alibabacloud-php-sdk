<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Tea\Model;

class DescribePriceRequest extends Model
{
    /**
     * @description The number of the resources. Default value: 1.
     *
     * @example 1
     *
     * @var int
     */
    public $amount;

    /**
     * @description The maximum public bandwidth. Unit: Mbit/s.
     *
     *   Valid values if the PayByTraffic parameter is set to PayByBandwidth: 10 to 1000
     *   Valid values if the PayByTraffic parameter is set to PayByTraffic: 10 to 200
     *
     * @example 10
     *
     * @var int
     */
    public $bandwidth;

    /**
     * @var int
     */
    public $duration;

    /**
     * @var int
     */
    public $groupDesktopCount;

    /**
     * @description The resource specifications.
     *
     *   If you set ResourceType to Desktop, set this parameter to one of the following values:
     *
     *   ecd.basic.small
     *   ecd.basic.large
     *   ecd.advanced.large
     *   ecd.advanced.xlarge
     *   ecd.performance.2xlarge
     *   ecd.graphics.xlarge
     *   ecd.graphics.2xlarge
     *   ecd.advanced.xlarge_s8d2
     *   ecd.advanced.xlarge_s8d7
     *   ecd.graphics.1g72c
     *   eds.general.2c2g
     *   eds.general.2c4g
     *   eds.general.2c8g
     *   eds.general.4c8g
     *   eds.general.4c16g
     *   eds.general.8c16g
     *   eds.general.8c32g
     *   eds.general.16c32g
     *
     *   If you set ResourceType to OfficeSite, set this parameter to large.
     *
     *   If you set ResourceType to Bandwidth, leave this parameter empty.
     *
     * @example eds.general.2c2g
     *
     * @var string
     */
    public $instanceType;

    /**
     * @description The metering method of the Internet access package. Valid values:
     *
     *   PayByBandwidth: pay-by-bandwidth
     *   PayByTraffic: pay-by-data-transfer
     *
     * @example PayByTraffic
     *
     * @var string
     */
    public $internetChargeType;

    /**
     * @description The OS. Valid values:
     *
     *   Windows
     *   Linux
     *
     * Default value: Windows.
     * @example Windows
     *
     * @var string
     */
    public $osType;

    /**
     * @description The subscription duration. Default value: 1.
     *
     * @example 1
     *
     * @var int
     */
    public $period;

    /**
     * @description The unit of the billing cycle. Valid values:
     *
     *   Hour
     *   Month
     *   Year
     *
     * Default value: Hour.
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
     * @description The region ID.
     *
     * This parameter is required.
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The resource type. Valid values:
     *
     *   Desktop: cloud desktop
     *   OfficeSite: workspace
     *   Bandwidth: network bandwidth
     *
     * Default value: Desktop.
     * @example Desktop
     *
     * @var string
     */
    public $resourceType;

    /**
     * @var string
     */
    public $rootDiskCategory;

    /**
     * @description The system disk size. Unit: GiB.
     *
     * @example 80
     *
     * @var int
     */
    public $rootDiskSizeGib;

    /**
     * @var string
     */
    public $userDiskCategory;

    /**
     * @description The data disk size. Unit: GiB.
     *
     * @example 100
     *
     * @var int
     */
    public $userDiskSizeGib;
    protected $_name = [
        'amount'             => 'Amount',
        'bandwidth'          => 'Bandwidth',
        'duration'           => 'Duration',
        'groupDesktopCount'  => 'GroupDesktopCount',
        'instanceType'       => 'InstanceType',
        'internetChargeType' => 'InternetChargeType',
        'osType'             => 'OsType',
        'period'             => 'Period',
        'periodUnit'         => 'PeriodUnit',
        'promotionId'        => 'PromotionId',
        'regionId'           => 'RegionId',
        'resourceType'       => 'ResourceType',
        'rootDiskCategory'   => 'RootDiskCategory',
        'rootDiskSizeGib'    => 'RootDiskSizeGib',
        'userDiskCategory'   => 'UserDiskCategory',
        'userDiskSizeGib'    => 'UserDiskSizeGib',
    ];

    public function validate()
    {
    }

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
