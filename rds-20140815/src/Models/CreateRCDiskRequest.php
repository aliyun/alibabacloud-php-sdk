<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Tea\Model;

class CreateRCDiskRequest extends Model
{
    /**
     * @description Specifies whether to enable automatic payment. Valid values:
     *
     *   **true**: enables the feature. You must make sure that your account balance is sufficient.
     *   **false**: disables the feature. An unpaid order is generated.
     *
     * >  Default value: true. If your account balance is insufficient, you can set AutoPay to false to generate an unpaid order. Then, you can log on to the ApsaraDB RDS console to complete the payment.
     * @example true
     *
     * @var bool
     */
    public $autoPay;

    /**
     * @description Specifies whether to enable auto-renewal. You must specify this parameter only when the data disk uses the subscription billing method. Valid values:
     *
     *   **true**
     *   **false**
     *
     * >  The auto-renewal cycle is one month for a monthly subscription. The auto-renewal cycle is one year for a yearly subscription.
     * @example false
     *
     * @var bool
     */
    public $autoRenew;

    /**
     * @description The disk description. The description must be 2 to 256 characters in length and cannot start with `http://` or `https://`. By default, this parameter is left empty.
     *
     * @example test
     *
     * @var string
     */
    public $description;

    /**
     * @description The category of the data disk. Valid values:
     *
     *   **cloud** (default): basic disk
     *   **cloud_efficiency**: ultra disk
     *   **cloud_ssd**: standard SSD
     *   **cloud_essd**: Enterprise SSD (ESSD)
     *   **cloud_auto**: ESSD AutoPL disk
     *   **cloud_essd_entry**: ESSD Entry disk
     *   **elastic_ephemeral_disk_standard**: standard elastic ephemeral disk
     *   **elastic_ephemeral_disk_premium**: premium elastic ephemeral disk
     *
     * @example cloud_ssd
     *
     * @var string
     */
    public $diskCategory;

    /**
     * @description The disk name. The name must be 2 to 128 characters in length and can contain letters and digits. The name can contain colons (:), underscores (_), periods (.), and hyphens (-).
     *
     * By default, this parameter is left empty.
     * @example ZStack-Hybrid-Test-ECS-Instance
     *
     * @var string
     */
    public $diskName;

    /**
     * @description The billing method. Set the value to **Postpaid**, which specifies the pay-as-you-go billing method.
     *
     * @example Postpaid
     *
     * @var string
     */
    public $instanceChargeType;

    /**
     * @description The performance level (PL) of the disk if the disk is an ESSD. Valid values:
     *
     *   **PL0**: A single ESSD delivers up to 10,000 random read/write IOPS.
     *   **PL1** (default): A single ESSD can deliver up to 50,000 random read/write IOPS.
     *   **PL2**: A single ESSD delivers up to 100,000 random read/write IOPS.
     *   **PL3**: A single ESSD delivers up to 1,000,000 random read/write IOPS.
     *
     * For information about ESSD PLs, see [ESSDs](https://help.aliyun.com/document_detail/122389.html).
     * @example PL1
     *
     * @var string
     */
    public $performanceLevel;

    /**
     * @description A reserved parameter. You do not need to specify this parameter.
     *
     * @example none
     *
     * @var int
     */
    public $period;

    /**
     * @description A reserved parameter. You do not need to specify this parameter.
     *
     * @example none
     *
     * @var string
     */
    public $periodUnit;

    /**
     * @description The region ID. You can call the DescribeRegions operation to query the most recent region list.
     *
     * This parameter is required.
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The disk size. Unit: GiB. This parameter is required. Valid values:
     *
     *   Valid values if you set DiskCategory to **cloud**: 5 to 2000.
     *
     *   Valid values if you set DiskCategory to **cloud_efficiency**: 20 to 32768.
     *
     *   Valid values if you set DiskCategory to **cloud_ssd**: 20 to 32768.
     *
     *   Valid values if you set DiskCategory to **cloud_essd**: depend on the value of PerformanceLevel.
     *
     *   Valid values if PerformanceLevel is set to PL0: 1 to 65536
     *   Valid values if PerformanceLevel is set to PL1: 20 to 65536
     *   Valid values if PerformanceLevel is set to PL2: 461 to 65536
     *   Valid values if PerformanceLevel is set to PL3: 1261 to 65536
     *
     *   Valid values if you set DiskCategory to **cloud_auto**: 1 to 65536.
     *
     *   Valid values if you set DiskCategory to **cloud_essd_entry**: 10 to 32768.
     *
     *   Valid values if you set DiskCategory to **elastic_ephemeral_disk_standard**: 64 to 8192.
     *
     *   Valid values if you set DiskCategory to **elastic_ephemeral_disk_premium**: 64 to 8192.
     *
     * If `SnapshotId` is specified, the following limits apply to `SnapshotId` and `Size`:
     *
     *   If the size of the snapshot specified by `SnapshotId` is larger than the value of `Size`, the size of the created disk is equal to the size of the snapshot.
     *   If the size of the snapshot specified by `SnapshotId` is smaller than the value of `Size`, the size of the created disk is equal to the value of `Size`.
     *
     * @example 2000
     *
     * @var int
     */
    public $size;

    /**
     * @description The snapshot that you want to use to create the disk. Snapshots that were created on or before July 15, 2013 cannot be used to create disks. The following limits apply to `SnapshotId` and `Size`:
     *
     *   If the size of the snapshot specified by `SnapshotId` is larger than the value of `Size`, the size of the created disk is equal to the specified snapshot size.
     *   If the size of the snapshot specified by `SnapshotId` is smaller than the value of `Size`, the size of the created disk is equal to the value of `Size`.
     *   You cannot create elastic ephemeral disks from snapshots.
     *
     * @example rcds-umtnkvevqbu****
     *
     * @var string
     */
    public $snapshotId;

    /**
     * @description The zone ID.
     *
     * @example cn-hangzhou-a
     *
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
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return CreateRCDiskRequest
     */
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
