<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ess\V20220222\Models\CreateScalingConfigurationRequest;

use AlibabaCloud\Tea\Model;

class dataDisks extends Model
{
    /**
     * @description The ID of the automatic snapshot policy that you want to apply to the data disk.
     *
     * @example sp-bp19nq9enxqkomib****
     *
     * @var string
     */
    public $autoSnapshotPolicyId;

    /**
     * @description Specifies whether to enable the burst feature for the system disk. Valid values:
     *
     *   true
     *   false
     *
     * > This parameter is available only if you set `SystemDisk.Category` to `cloud_auto`.
     * @example false
     *
     * @var bool
     */
    public $burstingEnabled;

    /**
     * @description The categories of the data disks. If Auto Scaling cannot create instances by using the disk category that has the highest priority, Auto Scaling creates instances by using the disk category that has the next highest priority. Valid values:
     *
     *   cloud: basic disk. For a basic disk that is created together with the instance, DeleteWithInstance is set to true.
     *   cloud_efficiency: ultra disk.
     *   cloud_ssd: standard SSD.
     *   cloud_essd: ESSD.
     *
     * > If you specify Categories, you cannot specify `DataDisks.Category`.
     * @var string[]
     */
    public $categories;

    /**
     * @description The category of the data disk. Valid values:
     *
     *   cloud: basic disk
     *   cloud_efficiency: ultra disk
     *   cloud_ssd: standard SSD
     *   cloud_essd: ESSD
     *   ephemeral_ssd: local SSD
     *   cloud_auto: ESSD AutoPL disk
     *
     * If you specify this parameter, you cannot specify Categories. If you do not specify Category or Categories, the default value of Category is used.
     *
     *   For I/O optimized instances, the default value is cloud_efficiency.
     *   For non-I/O optimized instances, the default value is cloud.
     *
     * @example cloud_ssd
     *
     * @var string
     */
    public $category;

    /**
     * @description Specifies whether to release the data disk when the instance to which the data disk is attached is released. Valid values:
     *
     *   true
     *   false
     *
     * Default value: true
     * @example true
     *
     * @var bool
     */
    public $deleteWithInstance;

    /**
     * @description The description of the data disk. The description must be 2 to 256 characters in length. The description can contain letters and cannot start with `http://` or `https://`.
     *
     * @example Test data disk.
     *
     * @var string
     */
    public $description;

    /**
     * @description The mount target of the data disk. If you do not specify Device, a mount target is automatically assigned when Auto Scaling creates ECS instances. The names of mount targets range from /dev/xvdb to /dev/xvdz.
     *
     * @example /dev/xvdb
     *
     * @var string
     */
    public $device;

    /**
     * @description The name of the system disk. The name must be 2 to 128 characters in length and can contain letters, digits, colons (:), underscores (\_), and hyphens (-). The name must start with a letter but cannot start with `http://` or `https://`.
     *
     * @example cloud_ssdData
     *
     * @var string
     */
    public $diskName;

    /**
     * @description Specifies whether to encrypt the data disk. Valid values:
     *
     *   true
     *   false
     *
     * Default value: false
     * @example false
     *
     * @var string
     */
    public $encrypted;

    /**
     * @description The ID of the KMS key that you want to use to encrypt the data disk.
     *
     * @example 0e478b7a-4262-4802-b8cb-00d3fb40****
     *
     * @var string
     */
    public $KMSKeyId;

    /**
     * @description The PL of the data disk that is an ESSD. Valid values:
     *
     *   PL0: An ESSD can provide up to 10,000 random read/write IOPS.
     *   PL1: An ESSD can provide up to 50,000 random read/write IOPS.
     *   PL2: An ESSD can provide up to 100,000 random read/write IOPS.
     *   PL3: An ESSD can provide up to 1,000,000 random read/write IOPS.
     *
     * > For more information about how to select ESSD PLs, see [ESSD](~~122389~~).
     * @example PL0
     *
     * @var string
     */
    public $performanceLevel;

    /**
     * @description The IOPS metric that is preconfigured for the data disk.
     *
     * > IOPS measures the number of read and write operations that an EBS device can process per second.
     * @example 100
     *
     * @var int
     */
    public $provisionedIops;

    /**
     * @description The size of the data disk. Unit: GiB. Valid values:
     *
     *   If you set Categories to cloud: 5 to 2000.
     *   If you set Categories to cloud_efficiency: 20 to 32768.
     *   If you set Categories to cloud_essd: 20 to 32768.
     *   If you set Categories to ephemeral_ssd: 5 to 800.
     *
     * The size of the data disk must be greater than or equal to the size of the snapshot that is specified by SnapshotId.
     * @example 100
     *
     * @var int
     */
    public $size;

    /**
     * @description The ID of the snapshot that you want to use to create data disks. If you specify this parameter, DataDisks.Size is ignored. The size of the data disk is the same as the size of the specified snapshot.
     *
     * If you specify a snapshot that is created on or before July 15, 2013, the operation fails and the system returns InvalidSnapshot.TooOld.
     * @example s-280s7****
     *
     * @var string
     */
    public $snapshotId;
    protected $_name = [
        'autoSnapshotPolicyId' => 'AutoSnapshotPolicyId',
        'burstingEnabled'      => 'BurstingEnabled',
        'categories'           => 'Categories',
        'category'             => 'Category',
        'deleteWithInstance'   => 'DeleteWithInstance',
        'description'          => 'Description',
        'device'               => 'Device',
        'diskName'             => 'DiskName',
        'encrypted'            => 'Encrypted',
        'KMSKeyId'             => 'KMSKeyId',
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
        if (null !== $this->categories) {
            $res['Categories'] = $this->categories;
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
        if (null !== $this->KMSKeyId) {
            $res['KMSKeyId'] = $this->KMSKeyId;
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
     * @return dataDisks
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
        if (isset($map['Categories'])) {
            if (!empty($map['Categories'])) {
                $model->categories = $map['Categories'];
            }
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
        if (isset($map['KMSKeyId'])) {
            $model->KMSKeyId = $map['KMSKeyId'];
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
