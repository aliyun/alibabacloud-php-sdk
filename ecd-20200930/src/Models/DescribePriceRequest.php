<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribePriceRequest\bundleModels;
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
     * @var bundleModels[]
     */
    public $bundleModels;

    /**
     * @var string
     */
    public $eduCdsEnable;

    /**
     * @var int
     */
    public $eduCdsSize;

    /**
     * @var int
     */
    public $eduCommittedTime;

    /**
     * @var string
     */
    public $eduDesktopBundleId;

    /**
     * @var int
     */
    public $eduDesktopNum;

    /**
     * @var string
     */
    public $eduRoomClassify;

    /**
     * @var string
     */
    public $eduStudentBundleId;

    /**
     * @var int
     */
    public $eduStudentNum;

    /**
     * @var string
     */
    public $eduTeacherBundleId;

    /**
     * @var int
     */
    public $eduTeacherNum;

    /**
     * @var int
     */
    public $groupDesktopCount;

    /**
     * @description The model of the WUYING hardware client.
     *
     * @example hide
     *
     * @var string
     */
    public $hardwareVersion;

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
     * @var string
     */
    public $networkType;

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
     * @var int
     */
    public $packageSize;

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
     * @description The performance level (PL) of the system disk. Valid values:
     *
     *   PL0
     *   PL1
     *   PL2
     *   PL3
     *
     * @example PL0
     *
     * @var string
     */
    public $rootDiskPerformanceLevel;

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
    public $spPeriodInfo;

    /**
     * @var bool
     */
    public $spPrice;

    /**
     * @var string
     */
    public $spType;

    /**
     * @description The PL of the data disk. Valid values:
     *
     *   PL0
     *   PL1
     *   PL2
     *   PL3
     *
     * @example PL0
     *
     * @var string
     */
    public $userDiskPerformanceLevel;

    /**
     * @description The data disk size. Unit: GiB.
     *
     * @example 100
     *
     * @var int
     */
    public $userDiskSizeGib;
    protected $_name = [
        'amount'                   => 'Amount',
        'bandwidth'                => 'Bandwidth',
        'bundleModels'             => 'BundleModels',
        'eduCdsEnable'             => 'EduCdsEnable',
        'eduCdsSize'               => 'EduCdsSize',
        'eduCommittedTime'         => 'EduCommittedTime',
        'eduDesktopBundleId'       => 'EduDesktopBundleId',
        'eduDesktopNum'            => 'EduDesktopNum',
        'eduRoomClassify'          => 'EduRoomClassify',
        'eduStudentBundleId'       => 'EduStudentBundleId',
        'eduStudentNum'            => 'EduStudentNum',
        'eduTeacherBundleId'       => 'EduTeacherBundleId',
        'eduTeacherNum'            => 'EduTeacherNum',
        'groupDesktopCount'        => 'GroupDesktopCount',
        'hardwareVersion'          => 'HardwareVersion',
        'instanceType'             => 'InstanceType',
        'internetChargeType'       => 'InternetChargeType',
        'networkType'              => 'NetworkType',
        'osType'                   => 'OsType',
        'packageSize'              => 'PackageSize',
        'period'                   => 'Period',
        'periodUnit'               => 'PeriodUnit',
        'promotionId'              => 'PromotionId',
        'regionId'                 => 'RegionId',
        'resourceType'             => 'ResourceType',
        'rootDiskPerformanceLevel' => 'RootDiskPerformanceLevel',
        'rootDiskSizeGib'          => 'RootDiskSizeGib',
        'spPeriodInfo'             => 'SpPeriodInfo',
        'spPrice'                  => 'SpPrice',
        'spType'                   => 'SpType',
        'userDiskPerformanceLevel' => 'UserDiskPerformanceLevel',
        'userDiskSizeGib'          => 'UserDiskSizeGib',
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
        if (null !== $this->bundleModels) {
            $res['BundleModels'] = [];
            if (null !== $this->bundleModels && \is_array($this->bundleModels)) {
                $n = 0;
                foreach ($this->bundleModels as $item) {
                    $res['BundleModels'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->eduCdsEnable) {
            $res['EduCdsEnable'] = $this->eduCdsEnable;
        }
        if (null !== $this->eduCdsSize) {
            $res['EduCdsSize'] = $this->eduCdsSize;
        }
        if (null !== $this->eduCommittedTime) {
            $res['EduCommittedTime'] = $this->eduCommittedTime;
        }
        if (null !== $this->eduDesktopBundleId) {
            $res['EduDesktopBundleId'] = $this->eduDesktopBundleId;
        }
        if (null !== $this->eduDesktopNum) {
            $res['EduDesktopNum'] = $this->eduDesktopNum;
        }
        if (null !== $this->eduRoomClassify) {
            $res['EduRoomClassify'] = $this->eduRoomClassify;
        }
        if (null !== $this->eduStudentBundleId) {
            $res['EduStudentBundleId'] = $this->eduStudentBundleId;
        }
        if (null !== $this->eduStudentNum) {
            $res['EduStudentNum'] = $this->eduStudentNum;
        }
        if (null !== $this->eduTeacherBundleId) {
            $res['EduTeacherBundleId'] = $this->eduTeacherBundleId;
        }
        if (null !== $this->eduTeacherNum) {
            $res['EduTeacherNum'] = $this->eduTeacherNum;
        }
        if (null !== $this->groupDesktopCount) {
            $res['GroupDesktopCount'] = $this->groupDesktopCount;
        }
        if (null !== $this->hardwareVersion) {
            $res['HardwareVersion'] = $this->hardwareVersion;
        }
        if (null !== $this->instanceType) {
            $res['InstanceType'] = $this->instanceType;
        }
        if (null !== $this->internetChargeType) {
            $res['InternetChargeType'] = $this->internetChargeType;
        }
        if (null !== $this->networkType) {
            $res['NetworkType'] = $this->networkType;
        }
        if (null !== $this->osType) {
            $res['OsType'] = $this->osType;
        }
        if (null !== $this->packageSize) {
            $res['PackageSize'] = $this->packageSize;
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
        if (null !== $this->rootDiskPerformanceLevel) {
            $res['RootDiskPerformanceLevel'] = $this->rootDiskPerformanceLevel;
        }
        if (null !== $this->rootDiskSizeGib) {
            $res['RootDiskSizeGib'] = $this->rootDiskSizeGib;
        }
        if (null !== $this->spPeriodInfo) {
            $res['SpPeriodInfo'] = $this->spPeriodInfo;
        }
        if (null !== $this->spPrice) {
            $res['SpPrice'] = $this->spPrice;
        }
        if (null !== $this->spType) {
            $res['SpType'] = $this->spType;
        }
        if (null !== $this->userDiskPerformanceLevel) {
            $res['UserDiskPerformanceLevel'] = $this->userDiskPerformanceLevel;
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
        if (isset($map['BundleModels'])) {
            if (!empty($map['BundleModels'])) {
                $model->bundleModels = [];
                $n                   = 0;
                foreach ($map['BundleModels'] as $item) {
                    $model->bundleModels[$n++] = null !== $item ? bundleModels::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['EduCdsEnable'])) {
            $model->eduCdsEnable = $map['EduCdsEnable'];
        }
        if (isset($map['EduCdsSize'])) {
            $model->eduCdsSize = $map['EduCdsSize'];
        }
        if (isset($map['EduCommittedTime'])) {
            $model->eduCommittedTime = $map['EduCommittedTime'];
        }
        if (isset($map['EduDesktopBundleId'])) {
            $model->eduDesktopBundleId = $map['EduDesktopBundleId'];
        }
        if (isset($map['EduDesktopNum'])) {
            $model->eduDesktopNum = $map['EduDesktopNum'];
        }
        if (isset($map['EduRoomClassify'])) {
            $model->eduRoomClassify = $map['EduRoomClassify'];
        }
        if (isset($map['EduStudentBundleId'])) {
            $model->eduStudentBundleId = $map['EduStudentBundleId'];
        }
        if (isset($map['EduStudentNum'])) {
            $model->eduStudentNum = $map['EduStudentNum'];
        }
        if (isset($map['EduTeacherBundleId'])) {
            $model->eduTeacherBundleId = $map['EduTeacherBundleId'];
        }
        if (isset($map['EduTeacherNum'])) {
            $model->eduTeacherNum = $map['EduTeacherNum'];
        }
        if (isset($map['GroupDesktopCount'])) {
            $model->groupDesktopCount = $map['GroupDesktopCount'];
        }
        if (isset($map['HardwareVersion'])) {
            $model->hardwareVersion = $map['HardwareVersion'];
        }
        if (isset($map['InstanceType'])) {
            $model->instanceType = $map['InstanceType'];
        }
        if (isset($map['InternetChargeType'])) {
            $model->internetChargeType = $map['InternetChargeType'];
        }
        if (isset($map['NetworkType'])) {
            $model->networkType = $map['NetworkType'];
        }
        if (isset($map['OsType'])) {
            $model->osType = $map['OsType'];
        }
        if (isset($map['PackageSize'])) {
            $model->packageSize = $map['PackageSize'];
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
        if (isset($map['RootDiskPerformanceLevel'])) {
            $model->rootDiskPerformanceLevel = $map['RootDiskPerformanceLevel'];
        }
        if (isset($map['RootDiskSizeGib'])) {
            $model->rootDiskSizeGib = $map['RootDiskSizeGib'];
        }
        if (isset($map['SpPeriodInfo'])) {
            $model->spPeriodInfo = $map['SpPeriodInfo'];
        }
        if (isset($map['SpPrice'])) {
            $model->spPrice = $map['SpPrice'];
        }
        if (isset($map['SpType'])) {
            $model->spType = $map['SpType'];
        }
        if (isset($map['UserDiskPerformanceLevel'])) {
            $model->userDiskPerformanceLevel = $map['UserDiskPerformanceLevel'];
        }
        if (isset($map['UserDiskSizeGib'])) {
            $model->userDiskSizeGib = $map['UserDiskSizeGib'];
        }

        return $model;
    }
}
