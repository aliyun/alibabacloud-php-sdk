<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Dara\Model;

class CreateRCDiskRequest extends Model
{
    /**
     * @var bool
     */
    public $autoPay;
    /**
     * @var bool
     */
    public $autoRenew;
    /**
     * @var string
     */
    public $description;
    /**
     * @var string
     */
    public $diskCategory;
    /**
     * @var string
     */
    public $diskName;
    /**
     * @var string
     */
    public $instanceChargeType;
    /**
     * @var string
     */
    public $performanceLevel;
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
    public $regionId;
    /**
     * @var int
     */
    public $size;
    /**
     * @var string
     */
    public $snapshotId;
    /**
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'autoPay'            => 'AutoPay',
        'autoRenew'          => 'AutoRenew',
        'description'        => 'Description',
        'diskCategory'       => 'DiskCategory',
        'diskName'           => 'DiskName',
        'instanceChargeType' => 'InstanceChargeType',
        'performanceLevel'   => 'PerformanceLevel',
        'period'             => 'Period',
        'periodUnit'         => 'PeriodUnit',
        'regionId'           => 'RegionId',
        'size'               => 'Size',
        'snapshotId'         => 'SnapshotId',
        'zoneId'             => 'ZoneId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->autoPay) {
            $res['AutoPay'] = $this->autoPay;
        }

        if (null !== $this->autoRenew) {
            $res['AutoRenew'] = $this->autoRenew;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->diskCategory) {
            $res['DiskCategory'] = $this->diskCategory;
        }

        if (null !== $this->diskName) {
            $res['DiskName'] = $this->diskName;
        }

        if (null !== $this->instanceChargeType) {
            $res['InstanceChargeType'] = $this->instanceChargeType;
        }

        if (null !== $this->performanceLevel) {
            $res['PerformanceLevel'] = $this->performanceLevel;
        }

        if (null !== $this->period) {
            $res['Period'] = $this->period;
        }

        if (null !== $this->periodUnit) {
            $res['PeriodUnit'] = $this->periodUnit;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->size) {
            $res['Size'] = $this->size;
        }

        if (null !== $this->snapshotId) {
            $res['SnapshotId'] = $this->snapshotId;
        }

        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
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
        if (isset($map['AutoPay'])) {
            $model->autoPay = $map['AutoPay'];
        }

        if (isset($map['AutoRenew'])) {
            $model->autoRenew = $map['AutoRenew'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['DiskCategory'])) {
            $model->diskCategory = $map['DiskCategory'];
        }

        if (isset($map['DiskName'])) {
            $model->diskName = $map['DiskName'];
        }

        if (isset($map['InstanceChargeType'])) {
            $model->instanceChargeType = $map['InstanceChargeType'];
        }

        if (isset($map['PerformanceLevel'])) {
            $model->performanceLevel = $map['PerformanceLevel'];
        }

        if (isset($map['Period'])) {
            $model->period = $map['Period'];
        }

        if (isset($map['PeriodUnit'])) {
            $model->periodUnit = $map['PeriodUnit'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['Size'])) {
            $model->size = $map['Size'];
        }

        if (isset($map['SnapshotId'])) {
            $model->snapshotId = $map['SnapshotId'];
        }

        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }

        return $model;
    }
}
