<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Tea\Model;

class DescribePriceRequest extends Model
{
    /**
     * @var int
     */
    public $amount;

    /**
     * @var int
     */
    public $bandwidth;

    /**
     * @var string
     */
    public $hardwareVersion;

    /**
     * @var string
     */
    public $instanceType;

    /**
     * @var string
     */
    public $internetChargeType;

    /**
     * @var string
     */
    public $osType;

    /**
     * @var int
     */
    public $packageSize;

    /**
     * @var int
     */
    public $period;

    /**
     * @var string
     */
    public $periodUnit;

    /**
     * @var string
     */
    public $promotionId;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $resourceType;

    /**
     * @var string
     */
    public $rootDiskPerformanceLevel;

    /**
     * @var int
     */
    public $rootDiskSizeGib;

    /**
     * @var string
     */
    public $userDiskPerformanceLevel;

    /**
     * @var int
     */
    public $userDiskSizeGib;
    protected $_name = [
        'amount'                   => 'Amount',
        'bandwidth'                => 'Bandwidth',
        'hardwareVersion'          => 'HardwareVersion',
        'instanceType'             => 'InstanceType',
        'internetChargeType'       => 'InternetChargeType',
        'osType'                   => 'OsType',
        'packageSize'              => 'PackageSize',
        'period'                   => 'Period',
        'periodUnit'               => 'PeriodUnit',
        'promotionId'              => 'PromotionId',
        'regionId'                 => 'RegionId',
        'resourceType'             => 'ResourceType',
        'rootDiskPerformanceLevel' => 'RootDiskPerformanceLevel',
        'rootDiskSizeGib'          => 'RootDiskSizeGib',
        'userDiskPerformanceLevel' => 'UserDiskPerformanceLevel',
        'userDiskSizeGib'          => 'UserDiskSizeGib',
    ];

    public function validate()
    {
        Model::validateRequired('regionId', $this->regionId, true);
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
        if (null !== $this->hardwareVersion) {
            $res['HardwareVersion'] = $this->hardwareVersion;
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
        if (isset($map['HardwareVersion'])) {
            $model->hardwareVersion = $map['HardwareVersion'];
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
        if (isset($map['UserDiskPerformanceLevel'])) {
            $model->userDiskPerformanceLevel = $map['UserDiskPerformanceLevel'];
        }
        if (isset($map['UserDiskSizeGib'])) {
            $model->userDiskSizeGib = $map['UserDiskSizeGib'];
        }

        return $model;
    }
}
