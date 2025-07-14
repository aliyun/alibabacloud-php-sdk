<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeLaunchTemplateVersionsResponseBody\launchTemplateVersionSets\launchTemplateVersionSet\launchTemplateData\dataDisks;

use AlibabaCloud\Tea\Model;

class dataDisk extends Model
{
    /**
     * @description The ID of the automatic snapshot policy.
     *
     * @example sp-wz91dz3ghear2a5s****
     *
     * @var string
     */
    public $autoSnapshotPolicyId;

    /**
     * @description Indicates whether the performance burst feature is enabled. Valid values:
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
     * @description The category of the data disk.
     *
     * @example cloud_ssd
     *
     * @var string
     */
    public $category;

    /**
     * @description Indicates whether to release the data disk when the instance is released.
     *
     * @example true
     *
     * @var bool
     */
    public $deleteWithInstance;

    /**
     * @description The description of the data disk.
     *
     * @example testDiskDescription
     *
     * @var string
     */
    public $description;

    /**
     * @description The mount point of the data disk. The mount points are named based on the number of data disks:
     *
     *   1st to 25th data disks: /dev/xvd`[b-z]`.
     *   From the 26th data disk on: /dev/xvd`[aa-zz]`. For example, the 26th data disk is named /dev/xvdaa, the 27th data disk is named /dev/xvdab, and so on.
     *
     * >  This parameter is applicable to scenarios in which a full image is used to create instances. A full image is an image that contains an operating system, application software, and business data. For these scenarios, you can set the parameter to the mount point of data disk N contained in the full image and modify `DataDisk.N.Size` and `DataDisk.N.Category` to change the category and size of data disk N created based on the image.
     *
     * @example /dev/xvda
     *
     * @var string
     */
    public $device;

    /**
     * @description The name of the data disk.
     *
     * @example testDiskName
     *
     * @var string
     */
    public $diskName;

    /**
     * @description Indicates whether the data disk is encrypted.
     *
     * @example false
     *
     * @var string
     */
    public $encrypted;

    /**
     * @description The ID of the KMS key used for the data disk.
     *
     * @example 0e478b7a-4262-4802-b8cb-00d3fb40****
     *
     * @var string
     */
    public $KMSKeyId;

    /**
     * @description The performance level of the ESSD to use as a data disk. This parameter is returned only when the value of `Category` is cloud_essd. Valid values:
     *
     *   PL0: A single ESSD can deliver up to 10,000 random read/write IOPS.
     *   PL1: A single ESSD can deliver up to 50,000 random read/write IOPS.
     *   PL2: A single ESSD can deliver up to 100,000 random read/write IOPS.
     *   PL3: A single ESSD can deliver up to 1,000,000 random read/write IOPS.
     *
     * @example PL1
     *
     * @var string
     */
    public $performanceLevel;

    /**
     * @description The provisioned read/write IOPS of the ESSD AutoPL disk. Valid values: 0 to min{50,000, 1,000 × Capacity - Baseline IOPS}.
     *
     * Baseline IOPS = min{1,800 + 50 × Capacity, 50,000}.
     *
     * >  This parameter is available only if you set DataDisk.N.Category to cloud_auto. For more information, see [ESSD AutoPL disks](https://help.aliyun.com/document_detail/368372.html) and [Modify the performance configurations of an ESSD AutoPL disk](https://help.aliyun.com/document_detail/413275.html).
     *
     * @example 50000
     *
     * @var int
     */
    public $provisionedIops;

    /**
     * @description The size of the data disk.
     *
     * @example 2000
     *
     * @var int
     */
    public $size;

    /**
     * @description The ID of the snapshot to use to create the data disk.
     *
     * @example s-bp67acfmxazb4p****
     *
     * @var string
     */
    public $snapshotId;
    protected $_name = [
        'autoSnapshotPolicyId' => 'AutoSnapshotPolicyId',
        'burstingEnabled' => 'BurstingEnabled',
        'category' => 'Category',
        'deleteWithInstance' => 'DeleteWithInstance',
        'description' => 'Description',
        'device' => 'Device',
        'diskName' => 'DiskName',
        'encrypted' => 'Encrypted',
        'KMSKeyId' => 'KMSKeyId',
        'performanceLevel' => 'PerformanceLevel',
        'provisionedIops' => 'ProvisionedIops',
        'size' => 'Size',
        'snapshotId' => 'SnapshotId',
    ];

    public function validate() {}

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
