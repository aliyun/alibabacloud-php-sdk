<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\CreateLaunchTemplateRequest;

use AlibabaCloud\Tea\Model;

class dataDisk extends Model
{
    /**
     * @description The ID of the automatic snapshot policy to apply to data disk N.
     *
     * @example sp-m5e7fa9ute44ssa****
     *
     * @var string
     */
    public $autoSnapshotPolicyId;

    /**
     * @description Specifies whether to enable the performance burst feature for data disk N. Valid values:
     *
     *   true
     *   false
     *
     * @example true
     *
     * @var bool
     */
    public $burstingEnabled;

    /**
     * @description The category of data disk N. Valid values:
     *
     *   cloud: basic disk
     *   cloud_efficiency: ultra disk
     *   cloud_ssd: standard SSD
     *   cloud_essd: ESSD
     *   cloud_auto: ESSD AutoPL disk
     *   cloud_essd_entry: ESSD Entry disk
     *
     * For I/O optimized instances, the default value is cloud_efficiency. For non-I/O optimized instances, the default value is cloud.
     * @example cloud_ssd
     *
     * @var string
     */
    public $category;

    /**
     * @description Specifies whether to release data disk N when the instance is released. Valid values:
     *
     *   true
     *   false
     *
     * Default value: true.
     * @example true
     *
     * @var bool
     */
    public $deleteWithInstance;

    /**
     * @description The description of data disk N. The description must be 2 to 256 characters in length and cannot start with `http://` or `https://`.
     *
     * @example testDataDiskDescription
     *
     * @var string
     */
    public $description;

    /**
     * @description >  This parameter will be removed in the future. We recommend that you do not use this parameter to ensure future compatibility.
     *
     * @example null
     *
     * @var string
     */
    public $device;

    /**
     * @description The name of data disk N. The name must be 2 to 128 characters in length The name must start with a letter and cannot start with `http://` or `https://`. The name can contain letters, digits, colons (:), underscores (\_), and hyphens (-).
     *
     * @example testDataDiskName
     *
     * @var string
     */
    public $diskName;

    /**
     * @description Specifies whether to encrypt data disk N.
     *
     * @example false
     *
     * @var string
     */
    public $encrypted;

    /**
     * @description The performance level of the ESSD to use as data disk N. The value of N must be the same as that in `DataDisk.N.Category` when DataDisk.N.Category is set to cloud_essd. Valid values:
     *
     *   PL0: A single ESSD can deliver up to 10,000 random read/write IOPS.
     *   PL1 (default): A single ESSD can deliver up to 50,000 random read/write IOPS.
     *   PL2: A single ESSD can deliver up to 100,000 random read/write IOPS.
     *   PL3: A single ESSD can deliver up to 1,000,000 random read/write IOPS.
     *
     * For information about ESSD performance levels, see [ESSDs](~~122389~~).
     * @example PL1
     *
     * @var string
     */
    public $performanceLevel;

    /**
     * @description The provisioned read/write IOPS of the ESSD AutoPL disk. Valid values: 0 to min{50,000, 1,000 × Capacity - Baseline IOPS}.
     *
     * >  This parameter is available only if you set DataDisk.N.Category to cloud_auto. For more information, see [ESSD AutoPL disks](~~368372~~) and [Modify the performance configurations of an ESSD AutoPL disk](~~413275~~).
     * @example 50000
     *
     * @var int
     */
    public $provisionedIops;

    /**
     * @description The size of data disk N. Valid values of N: 1 to 16. Unit: GiB. Valid values:
     *
     *   Valid values if you set DataDisk.N.Category to cloud: 5 to 2000.
     *
     *   Valid values if you set DataDisk.N.Category to cloud_efficiency: 20 to 32768.
     *
     *   Valid values if you set DataDisk.N.Category to cloud_ssd: 20 to 32768.
     *
     *   Valid values if you set DataDisk.N.Category to cloud_essd: vary based on the value of `DataDisk.N.PerformanceLevel`.
     *
     *   Valid values if you set DataDisk.N.PerformanceLevel to PL0: 1 to 32768.
     *   Valid values if you set DataDisk.N.PerformanceLevel to PL1: 20 to 32768.
     *   Valid values if you set DataDisk.N.PerformanceLevel to PL2: 461 to 32768.
     *   Valid values if you set DataDisk.N.PerformanceLevel to PL3: 1261 to 32768.
     *
     *   Valid values if you set DataDisk.N.Category to cloud_auto: 1 to 32768.
     *
     *   Valid values if you set DataDisk.N.Category to cloud_essd_entry: 10 to 32768.
     *
     * The value of this parameter must be greater than or equal to the size of the snapshot specified by `DataDisk.N.SnapshotId`.
     * @example 2000
     *
     * @var int
     */
    public $size;

    /**
     * @description The ID of the snapshot to use to create data disk N. Valid values of N: 1 to 16. If you specify `DataDisk.N.SnapshotId`, `DataDisk.N.Size` is ignored. The data disk is created with the size of the specified snapshot.
     *
     * >  Use snapshots created on or after July 15, 2013. Otherwise, an error is returned and your request is rejected.
     * @example s-bp17441ohwka0yuh****
     *
     * @var string
     */
    public $snapshotId;
    protected $_name = [
        'autoSnapshotPolicyId' => 'AutoSnapshotPolicyId',
        'burstingEnabled'      => 'BurstingEnabled',
        'category'             => 'Category',
        'deleteWithInstance'   => 'DeleteWithInstance',
        'description'          => 'Description',
        'device'               => 'Device',
        'diskName'             => 'DiskName',
        'encrypted'            => 'Encrypted',
        'performanceLevel'     => 'PerformanceLevel',
        'provisionedIops'      => 'ProvisionedIops',
        'size'                 => 'Size',
        'snapshotId'           => 'SnapshotId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->autoSnapshotPolicyId) {
            $res['AutoSnapshotPolicyId'] = $this->autoSnapshotPolicyId;
        }
        if (null !== $this->burstingEnabled) {
            $res['BurstingEnabled'] = $this->burstingEnabled;
        }
        if (null !== $this->category) {
            $res['Category'] = $this->category;
        }
        if (null !== $this->deleteWithInstance) {
            $res['DeleteWithInstance'] = $this->deleteWithInstance;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->device) {
            $res['Device'] = $this->device;
        }
        if (null !== $this->diskName) {
            $res['DiskName'] = $this->diskName;
        }
        if (null !== $this->encrypted) {
            $res['Encrypted'] = $this->encrypted;
        }
        if (null !== $this->performanceLevel) {
            $res['PerformanceLevel'] = $this->performanceLevel;
        }
        if (null !== $this->provisionedIops) {
            $res['ProvisionedIops'] = $this->provisionedIops;
        }
        if (null !== $this->size) {
            $res['Size'] = $this->size;
        }
        if (null !== $this->snapshotId) {
            $res['SnapshotId'] = $this->snapshotId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return dataDisk
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AutoSnapshotPolicyId'])) {
            $model->autoSnapshotPolicyId = $map['AutoSnapshotPolicyId'];
        }
        if (isset($map['BurstingEnabled'])) {
            $model->burstingEnabled = $map['BurstingEnabled'];
        }
        if (isset($map['Category'])) {
            $model->category = $map['Category'];
        }
        if (isset($map['DeleteWithInstance'])) {
            $model->deleteWithInstance = $map['DeleteWithInstance'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Device'])) {
            $model->device = $map['Device'];
        }
        if (isset($map['DiskName'])) {
            $model->diskName = $map['DiskName'];
        }
        if (isset($map['Encrypted'])) {
            $model->encrypted = $map['Encrypted'];
        }
        if (isset($map['PerformanceLevel'])) {
            $model->performanceLevel = $map['PerformanceLevel'];
        }
        if (isset($map['ProvisionedIops'])) {
            $model->provisionedIops = $map['ProvisionedIops'];
        }
        if (isset($map['Size'])) {
            $model->size = $map['Size'];
        }
        if (isset($map['SnapshotId'])) {
            $model->snapshotId = $map['SnapshotId'];
        }

        return $model;
    }
}
