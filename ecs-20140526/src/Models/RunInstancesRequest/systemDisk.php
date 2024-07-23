<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\RunInstancesRequest;

use AlibabaCloud\Tea\Model;

class systemDisk extends Model
{
    /**
     * @description The ID of the automatic snapshot policy to apply to the system disk.
     *
     * @example sp-bp67acfmxazb4p****
     *
     * @var string
     */
    public $autoSnapshotPolicyId;

    /**
     * @description The category of the system disk. Valid values:
     *
     *   cloud_efficiency: utra disk
     *   cloud_ssd: standard SSD
     *   cloud_essd: enhanced SSD (ESSD)
     *   cloud: basic disk
     *   cloud_auto: ESSD AutoPL disk
     *   cloud_essd_entry: ESSD Entry disk
     *
     * For non-I/O optimized instances of retired instance types, the default value is cloud. For other types of instances, the default value is cloud_efficiency.
     * @example cloud_ssd
     *
     * @var string
     */
    public $category;

    /**
     * @description The description of the system disk. The description must be 2 to 256 characters in length. The description can contain letters but cannot start with `http://` or `https://`.
     *
     * @example SystemDisk_Description
     *
     * @var string
     */
    public $description;

    /**
     * @description The name of the system disk. The name must be 2 to 128 characters in length and support Unicode characters under the Decimal Number category and the categories whose names contain Letter. The name can contain colons (:), underscores (_), periods (.), and hyphens (-).
     *
     * @example cloud_ssdSystem
     *
     * @var string
     */
    public $diskName;

    /**
     * @description The performance level of the ESSD to use as the system disk. Default value: PL1. Valid values:
     *
     *   PL0: A single ESSD can deliver up to 10,000 random read/write IOPS.
     *   PL1: A single ESSD can deliver up to 50,000 random read/write IOPS.
     *   PL2: A single ESSD can deliver up to 100,000 random read/write IOPS.
     *   PL3: A single ESSD can deliver up to 1,000,000 random read/write IOPS.
     *
     * For more information about ESSD performance levels, see [ESSDs](https://help.aliyun.com/document_detail/122389.html).
     * @example PL0
     *
     * @var string
     */
    public $performanceLevel;

    /**
     * @description The size of the system disk. Unit: GiB. Valid values:
     *
     *   Basic disk: 20 to 500.
     *
     *   ESSD: Valid values vary based on the performance level of the ESSD.
     *
     *   PL0 ESSD: 1 to 2048.
     *   PL1 ESSD: 20 to 2048.
     *   PL2 ESSD: 461 to 2048.
     *   PL3 ESSD: 1261 to 2048.
     *
     *   ESSD AutoPL disk: 1 to 2048.
     *
     *   Other disk categories: 20 to 2048.
     *
     * Default value: 40 or the image size, whichever is greater.
     * @example 40
     *
     * @var string
     */
    public $size;

    /**
     * @description Specifies whether to enable the performance burst feature for the system disk. Valid values:
     *
     *   true: enables the performance burst feature for the system disk.
     *   false: disables the performance burst feature for the system disk.
     *
     * >  This parameter is available only if you set `SystemDisk.Category` to `cloud_auto`. For more information, see [ESSD AutoPL disks](https://help.aliyun.com/document_detail/368372.html).
     * @example false
     *
     * @var bool
     */
    public $burstingEnabled;

    /**
     * @description >  This parameter is not publicly available.
     *
     * @example ase-256
     *
     * @var string
     */
    public $encryptAlgorithm;

    /**
     * @description Specifies whether to encrypt the system disk. Valid values:
     *
     *   true: encrypts the system disk.
     *   false: does not encrypt the system disk.
     *
     * >  The system disks of instances cannot be encrypted during instance creation in Hong Kong Zone D or Singapore Zone A.
     * @example false
     *
     * @var string
     */
    public $encrypted;

    /**
     * @description The ID of the KMS key to use for the system disk.
     *
     * @example 0e478b7a-4262-4802-b8cb-00d3fb40****
     *
     * @var string
     */
    public $KMSKeyId;

    /**
     * @description The provisioned read/write IOPS of the ESSD AutoPL disk to use as the system disk. Valid values: 0 to min{50,000, 1,000 × Capacity - Baseline IOPS}.
     *
     * >  This parameter is available only if you set `SystemDisk.Category` to `cloud_auto`. For more information, see [ESSD AutoPL disks](https://help.aliyun.com/document_detail/368372.html).
     * @example 40000
     *
     * @var int
     */
    public $provisionedIops;

    /**
     * @description The ID of the dedicated block storage cluster to which the system disk belongs. If you want to use disks in a dedicated block storage cluster as system disks when you create instances, specify this parameter.
     *
     * @example dbsc-j5e1sf2vaf5he8m2****
     *
     * @var string
     */
    public $storageClusterId;
    protected $_name = [
        'autoSnapshotPolicyId' => 'AutoSnapshotPolicyId',
        'category'             => 'Category',
        'description'          => 'Description',
        'diskName'             => 'DiskName',
        'performanceLevel'     => 'PerformanceLevel',
        'size'                 => 'Size',
        'burstingEnabled'      => 'BurstingEnabled',
        'encryptAlgorithm'     => 'EncryptAlgorithm',
        'encrypted'            => 'Encrypted',
        'KMSKeyId'             => 'KMSKeyId',
        'provisionedIops'      => 'ProvisionedIops',
        'storageClusterId'     => 'StorageClusterId',
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
        if (null !== $this->category) {
            $res['Category'] = $this->category;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->diskName) {
            $res['DiskName'] = $this->diskName;
        }
        if (null !== $this->performanceLevel) {
            $res['PerformanceLevel'] = $this->performanceLevel;
        }
        if (null !== $this->size) {
            $res['Size'] = $this->size;
        }
        if (null !== $this->burstingEnabled) {
            $res['BurstingEnabled'] = $this->burstingEnabled;
        }
        if (null !== $this->encryptAlgorithm) {
            $res['EncryptAlgorithm'] = $this->encryptAlgorithm;
        }
        if (null !== $this->encrypted) {
            $res['Encrypted'] = $this->encrypted;
        }
        if (null !== $this->KMSKeyId) {
            $res['KMSKeyId'] = $this->KMSKeyId;
        }
        if (null !== $this->provisionedIops) {
            $res['ProvisionedIops'] = $this->provisionedIops;
        }
        if (null !== $this->storageClusterId) {
            $res['StorageClusterId'] = $this->storageClusterId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return systemDisk
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AutoSnapshotPolicyId'])) {
            $model->autoSnapshotPolicyId = $map['AutoSnapshotPolicyId'];
        }
        if (isset($map['Category'])) {
            $model->category = $map['Category'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['DiskName'])) {
            $model->diskName = $map['DiskName'];
        }
        if (isset($map['PerformanceLevel'])) {
            $model->performanceLevel = $map['PerformanceLevel'];
        }
        if (isset($map['Size'])) {
            $model->size = $map['Size'];
        }
        if (isset($map['BurstingEnabled'])) {
            $model->burstingEnabled = $map['BurstingEnabled'];
        }
        if (isset($map['EncryptAlgorithm'])) {
            $model->encryptAlgorithm = $map['EncryptAlgorithm'];
        }
        if (isset($map['Encrypted'])) {
            $model->encrypted = $map['Encrypted'];
        }
        if (isset($map['KMSKeyId'])) {
            $model->KMSKeyId = $map['KMSKeyId'];
        }
        if (isset($map['ProvisionedIops'])) {
            $model->provisionedIops = $map['ProvisionedIops'];
        }
        if (isset($map['StorageClusterId'])) {
            $model->storageClusterId = $map['StorageClusterId'];
        }

        return $model;
    }
}
