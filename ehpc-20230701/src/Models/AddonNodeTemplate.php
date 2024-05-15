<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20230701\Models;

use AlibabaCloud\SDK\EHPC\V20230701\Models\AddonNodeTemplate\dataDisks;
use AlibabaCloud\SDK\EHPC\V20230701\Models\AddonNodeTemplate\systemDisk;
use AlibabaCloud\Tea\Model;

class AddonNodeTemplate extends Model
{
    /**
     * @example false
     *
     * @var bool
     */
    public $autoRenew;

    /**
     * @example 1
     *
     * @var int
     */
    public $autoRenewPeriod;

    /**
     * @var dataDisks[]
     */
    public $dataDisks;

    /**
     * @example 1
     *
     * @var int
     */
    public $duration;

    /**
     * @example true
     *
     * @var bool
     */
    public $enableHT;

    /**
     * @description This parameter is required.
     *
     * @example aliyun_3_x64_20G_alibase_20221102.vhd
     *
     * @var string
     */
    public $imageId;

    /**
     * @example PostPaid
     *
     * @var string
     */
    public $instanceChargeType;

    /**
     * @description This parameter is required.
     *
     * @example ecs.c7.4xlarge
     *
     * @var string
     */
    public $instanceType;

    /**
     * @description This parameter is required.
     *
     * @example CentOS  7.6 64 位
     *
     * @var string
     */
    public $osName;

    /**
     * @description This parameter is required.
     *
     * @example CentOS  7.6 64 bit
     *
     * @var string
     */
    public $osNameEN;

    /**
     * @example 1
     *
     * @var int
     */
    public $period;

    /**
     * @example Month
     *
     * @var string
     */
    public $periodUnit;

    /**
     * @example 0.97
     *
     * @var float
     */
    public $spotPriceLimit;

    /**
     * @example NoSpot
     *
     * @var string
     */
    public $spotStrategy;

    /**
     * @var systemDisk
     */
    public $systemDisk;
    protected $_name = [
        'autoRenew'          => 'AutoRenew',
        'autoRenewPeriod'    => 'AutoRenewPeriod',
        'dataDisks'          => 'DataDisks',
        'duration'           => 'Duration',
        'enableHT'           => 'EnableHT',
        'imageId'            => 'ImageId',
        'instanceChargeType' => 'InstanceChargeType',
        'instanceType'       => 'InstanceType',
        'osName'             => 'OsName',
        'osNameEN'           => 'OsNameEN',
        'period'             => 'Period',
        'periodUnit'         => 'PeriodUnit',
        'spotPriceLimit'     => 'SpotPriceLimit',
        'spotStrategy'       => 'SpotStrategy',
        'systemDisk'         => 'SystemDisk',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->autoRenew) {
            $res['AutoRenew'] = $this->autoRenew;
        }
        if (null !== $this->autoRenewPeriod) {
            $res['AutoRenewPeriod'] = $this->autoRenewPeriod;
        }
        if (null !== $this->dataDisks) {
            $res['DataDisks'] = [];
            if (null !== $this->dataDisks && \is_array($this->dataDisks)) {
                $n = 0;
                foreach ($this->dataDisks as $item) {
                    $res['DataDisks'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->duration) {
            $res['Duration'] = $this->duration;
        }
        if (null !== $this->enableHT) {
            $res['EnableHT'] = $this->enableHT;
        }
        if (null !== $this->imageId) {
            $res['ImageId'] = $this->imageId;
        }
        if (null !== $this->instanceChargeType) {
            $res['InstanceChargeType'] = $this->instanceChargeType;
        }
        if (null !== $this->instanceType) {
            $res['InstanceType'] = $this->instanceType;
        }
        if (null !== $this->osName) {
            $res['OsName'] = $this->osName;
        }
        if (null !== $this->osNameEN) {
            $res['OsNameEN'] = $this->osNameEN;
        }
        if (null !== $this->period) {
            $res['Period'] = $this->period;
        }
        if (null !== $this->periodUnit) {
            $res['PeriodUnit'] = $this->periodUnit;
        }
        if (null !== $this->spotPriceLimit) {
            $res['SpotPriceLimit'] = $this->spotPriceLimit;
        }
        if (null !== $this->spotStrategy) {
            $res['SpotStrategy'] = $this->spotStrategy;
        }
        if (null !== $this->systemDisk) {
            $res['SystemDisk'] = null !== $this->systemDisk ? $this->systemDisk->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AddonNodeTemplate
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AutoRenew'])) {
            $model->autoRenew = $map['AutoRenew'];
        }
        if (isset($map['AutoRenewPeriod'])) {
            $model->autoRenewPeriod = $map['AutoRenewPeriod'];
        }
        if (isset($map['DataDisks'])) {
            if (!empty($map['DataDisks'])) {
                $model->dataDisks = [];
                $n                = 0;
                foreach ($map['DataDisks'] as $item) {
                    $model->dataDisks[$n++] = null !== $item ? dataDisks::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Duration'])) {
            $model->duration = $map['Duration'];
        }
        if (isset($map['EnableHT'])) {
            $model->enableHT = $map['EnableHT'];
        }
        if (isset($map['ImageId'])) {
            $model->imageId = $map['ImageId'];
        }
        if (isset($map['InstanceChargeType'])) {
            $model->instanceChargeType = $map['InstanceChargeType'];
        }
        if (isset($map['InstanceType'])) {
            $model->instanceType = $map['InstanceType'];
        }
        if (isset($map['OsName'])) {
            $model->osName = $map['OsName'];
        }
        if (isset($map['OsNameEN'])) {
            $model->osNameEN = $map['OsNameEN'];
        }
        if (isset($map['Period'])) {
            $model->period = $map['Period'];
        }
        if (isset($map['PeriodUnit'])) {
            $model->periodUnit = $map['PeriodUnit'];
        }
        if (isset($map['SpotPriceLimit'])) {
            $model->spotPriceLimit = $map['SpotPriceLimit'];
        }
        if (isset($map['SpotStrategy'])) {
            $model->spotStrategy = $map['SpotStrategy'];
        }
        if (isset($map['SystemDisk'])) {
            $model->systemDisk = systemDisk::fromMap($map['SystemDisk']);
        }

        return $model;
    }
}
