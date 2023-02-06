<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\RunInstancesRequest;

use AlibabaCloud\Tea\Model;

class dataDisk extends Model
{
    /**
     * @description The ID of the automatic snapshot policy to apply to data disk N.
     *
     * @example sp-bp67acfmxazb4p****
     *
     * @var string
     */
    public $autoSnapshotPolicyId;

    /**
     * @description > This parameter is in invitational preview and is unavailable.
     *
     * @example false
     *
     * @var bool
     */
    public $burstingEnabled;

    /**
     * @description The category of data disk N. Valid values:
     *
     *   cloud_efficiency: ultra disk
     *   cloud_ssd: standard SSD
     *   cloud_essd: ESSD
     *   cloud: basic disk
     *   cloud_auto: ESSD AutoPL disk
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
     *   true: releases data disk N when the instance is released.
     *   false: does not release data disk N when the instance is released.
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
     * @example DataDisk_Description
     *
     * @var string
     */
    public $description;

    /**
     * @description The mount point of data disk N.
     *
     * > This parameter is applicable to scenarios in which a full image is used to create instances. A full image is an image that contains an operating system, application software, and business data. For these scenarios, you can set this parameter to the mount point of data disk N contained in the full image and modify the `DataDisk.N.Size` and `DataDisk.N.Category` parameters to change the category and size of data disk N created based on the image.
     * @example /dev/xvdb
     *
     * @var string
     */
    public $device;

    /**
     * @description The name of data disk N. The name must be 2 to 128 characters in length. It must start with a letter and cannot start with `http://` or `https://`. It can contain letters, digits, periods (.), colons (:), underscores (\_), and hyphens (-).
     *
     * @example cloud_ssdData
     *
     * @var string
     */
    public $diskName;

    /**
     * @description The algorithm to use to encrypt data disk N. Valid values:
     *
     *   aes-256
     *   sm4-128
     *
     * Default value: aes-256.
     * @example aes-256
     *
     * @var string
     */
    public $encryptAlgorithm;

    /**
     * @description Specifies whether to encrypt data disk N. Valid values:
     *
     *   true: encrypts the data disk.
     *   false: does not encrypt the data disk.
     *
     * Default value: false.
     * @example false
     *
     * @var string
     */
    public $encrypted;

    /**
     * @description The ID of the Key Management Service (KMS) key that is used for the data disk.
     *
     * @example 0e478b7a-4262-4802-b8cb-00d3fb40****
     *
     * @var string
     */
    public $KMSKeyId;

    /**
     * @description The performance level of the ESSD to use as data disk N. The value of N must be the same as that in `DataDisk.N.Category` when DataDisk.N.Category is set to cloud_essd. Default value: PL1. Valid values:
     *
     *   PL0: A single ESSD can deliver up to 10,000 random read/write IOPS.
     *   PL1: A single ESSD can deliver up to 50,000 random read/write IOPS.
     *   PL2: A single ESSD can deliver up to 100,000 random read/write IOPS.
     *   PL3: A single ESSD can deliver up to 1,000,000 random read/write IOPS.
     *
     * For more information about ESSD performance levels, see [ESSDs](~~122389~~).
     * @example PL1
     *
     * @var string
     */
    public $performanceLevel;

    /**
     * @description > This parameter is in invitational preview and is unavailable.
     *
     * @example 40000
     *
     * @var int
     */
    public $provisionedIops;

    /**
     * @description The size of data disk N. Valid values of N: 1 to 16. Unit: GiB. Valid values of this parameter:
     *
     *   Valid values when DataDisk.N.Category is set to cloud_efficiency: 20 to 32768.
     *
     *   Valid values when DataDisk.N.Category is set to cloud_ssd: 20 to 32768.
     *
     *   Valid values when DataDisk.N.Category is set to cloud_essd: depend on the `DataDisk.N.PerformanceLevel` value.
     *
     *   Valid values when DataDisk.N.PerformanceLevel is set to PL0: 40 to 32768.
     *   Valid values when DataDisk.N.PerformanceLevel is set to PL1: 20 to 32768.
     *   Valid values when DataDisk.N.PerformanceLevel is set to PL2: 461 to 32768.
     *   Valid values when DataDisk.N.PerformanceLevel is set to PL3: 1261 to 32768.
     *
     *   Valid values when DataDisk.N.Category is set to cloud: 5 to 2000.
     *
     *   Valid values when DataDisk.N.Category is set to cloud_auto: 40 to 32768.
     *
     * The value of this parameter must be greater than or equal to the size of the snapshot specified by the `SnapshotId` parameter.
     * @example 2000
     *
     * @var int
     */
    public $size;

    /**
     * @description The ID of the snapshot to use to create data disk N. Valid values of N: 1 to 16.
     *
     * If the `DataDisk.N.SnapshotId` parameter is specified, the `DataDisk.N.Size` parameter is ignored. The data disk is created with the size of the specified snapshot. Use snapshots created after July 15, 2013. Otherwise, an error is returned and your request is rejected.
     * @example s-bp17441ohwka0yuh****
     *
     * @var string
     */
    public $snapshotId;

    /**
     * @description The ID of the dedicated block storage cluster. If you want to use a disk in a dedicated block storage cluster as data disk N when you create instances, you must specify this parameter.
     *
     * @example dbsc-j5e1sf2vaf5he8m2****
     *
     * @var string
     */
    public $storageClusterId;
    protected $_name = [
        'autoSnapshotPolicyId' => 'AutoSnapshotPolicyId',
        'burstingEnabled'      => 'BurstingEnabled',
        'category'             => 'Category',
        'deleteWithInstance'   => 'DeleteWithInstance',
        'description'          => 'Description',
        'device'               => 'Device',
        'diskName'             => 'DiskName',
        'encryptAlgorithm'     => 'EncryptAlgorithm',
        'encrypted'            => 'Encrypted',
        'KMSKeyId'             => 'KMSKeyId',
        'performanceLevel'     => 'PerformanceLevel',
        'provisionedIops'      => 'ProvisionedIops',
        'size'                 => 'Size',
        'snapshotId'           => 'SnapshotId',
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
        if (null !== $this->snapshotId) {
            $res['SnapshotId'] = $this->snapshotId;
        }
        if (null !== $this->storageClusterId) {
            $res['StorageClusterId'] = $this->storageClusterId;
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
        if (isset($map['SnapshotId'])) {
            $model->snapshotId = $map['SnapshotId'];
        }
        if (isset($map['StorageClusterId'])) {
            $model->storageClusterId = $map['StorageClusterId'];
        }

        return $model;
    }
}
