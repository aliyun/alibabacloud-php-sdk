<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ess\V20220222\Models\CreateScalingConfigurationRequest;

use AlibabaCloud\Tea\Model;

class systemDisk extends Model
{
    /**
     * @description The ID of the automatic snapshot policy that you want to apply to the system disk.
     *
     * @example sp-bp12m37ccmxvbmi5****
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
     * @description The category of the system disk. Valid values:
     *
     *   cloud: basic disk
     *   cloud_efficiency: ultra disk
     *   cloud_ssd: standard SSD
     *   ephemeral_ssd: local SSD
     *   cloud_essd: enhanced SSD (ESSD)
     *   cloud_auto: ESSD AutoPL disk
     *
     * If you specify SystemDisk.Category, you cannot specify `SystemDiskCategories`. If you do not specify SystemDisk.Category or `SystemDiskCategories`, the default value of SystemDisk.Category is used.
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
     * @description The description of the system disk. The description must be 2 to 256 characters in length. The description can contain letters and cannot start with `http://` or `https://`.
     *
     * @example Test system disk.
     *
     * @var string
     */
    public $description;

    /**
     * @description The name of the system disk. The name must be 2 to 128 characters in length. The name can contain letters, digits, colons (:), underscores (\_), and hyphens (-). The name must start with a letter but cannot start with `http://` or `https://`.
     *
     * @example cloud_ssdSystem
     *
     * @var string
     */
    public $diskName;

    /**
     * @description The encryption algorithm that you want to use to encrypt the system disk. Valid values:
     *
     *   AES-256
     *   SM4-128
     *
     * Default value: AES-256
     * @example AES-256
     *
     * @var string
     */
    public $encryptAlgorithm;

    /**
     * @description Specifies whether to encrypt the system disk. Valid values:
     *
     *   true
     *   false
     *
     * Default value: false
     * @example false
     *
     * @var bool
     */
    public $encrypted;

    /**
     * @description The ID of the KMS key that you want to use to encrypt the system disk.
     *
     * @example 0e478b7a-4262-4802-b8cb-00d3fb40****
     *
     * @var string
     */
    public $KMSKeyId;

    /**
     * @description The performance level (PL) of the system disk that is an ESSD. Valid values:
     *
     *   PL0: An ESSD can provide up to 10,000 random read/write IOPS.
     *   PL1: An ESSD can provide up to 50,000 random read/write IOPS.
     *   PL2: An ESSD can provide up to 100,000 random read/write IOPS.
     *   PL3: An ESSD can provide up to 1,000,000 random read/write IOPS.
     *
     * Default value: PL0
     * @example PL0
     *
     * @var string
     */
    public $performanceLevel;

    /**
     * @description The IOPS metric that is preconfigured for the system disk.
     *
     * > IOPS measures the number of read and write operations that an EBS device can process per second.
     * @example 100
     *
     * @var int
     */
    public $provisionedIops;

    /**
     * @description The size of the system disk. Unit: GiB.
     *
     *   If you set SystemDisk.Category cloud: 20 to 500.
     *   If you set SystemDisk.Category to cloud_efficiency: 20 to 500.
     *   If you set SystemDisk.Category to cloud_ssd: 20 to 500.
     *   If you set SystemDisk.Category to cloud_essd: 20 to 500.
     *   If you set SystemDisk.Category to cloud_essd: 20 to 500.
     *
     * Default value: 40 or the size of the image, whichever is greater.
     * @example 100
     *
     * @var int
     */
    public $size;
    protected $_name = [
        'autoSnapshotPolicyId' => 'AutoSnapshotPolicyId',
        'burstingEnabled'      => 'BurstingEnabled',
        'category'             => 'Category',
        'description'          => 'Description',
        'diskName'             => 'DiskName',
        'encryptAlgorithm'     => 'EncryptAlgorithm',
        'encrypted'            => 'Encrypted',
        'KMSKeyId'             => 'KMSKeyId',
        'performanceLevel'     => 'PerformanceLevel',
        'provisionedIops'      => 'ProvisionedIops',
        'size'                 => 'Size',
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
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->diskName) {
            $res['DiskName'] = $this->diskName;
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
        if (null !== $this->performanceLevel) {
            $res['PerformanceLevel'] = $this->performanceLevel;
        }
        if (null !== $this->provisionedIops) {
            $res['ProvisionedIops'] = $this->provisionedIops;
        }
        if (null !== $this->size) {
            $res['Size'] = $this->size;
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
        if (isset($map['BurstingEnabled'])) {
            $model->burstingEnabled = $map['BurstingEnabled'];
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
        if (isset($map['EncryptAlgorithm'])) {
            $model->encryptAlgorithm = $map['EncryptAlgorithm'];
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

        return $model;
    }
}
