<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\CreateAutoProvisioningGroupRequest\launchConfiguration;

use AlibabaCloud\Tea\Model;

class dataDisk extends Model
{
    /**
     * @description The category of data disk N. Valid values of N: 1 to 16. Valid values:
     *
     * For I/O optimized instances, the default value is cloud_efficiency. For non-I/O optimized instances, the default value is cloud.
     *
     * If both the LaunchTemplateId and LaunchConfiguration.* parameters are specified, the LaunchTemplateId parameter takes precedence.
     * @example cloud_ssd
     *
     * @var string
     */
    public $category;

    /**
     * @description Specifies whether to release the data disk after the instance with which the disk is associated is released. Valid values:
     *
     * Default value: true.
     *
     * If both the LaunchTemplateId and LaunchConfiguration.* parameters are specified, the LaunchTemplateId parameter takes precedence.
     * @example true
     *
     * @var bool
     */
    public $deleteWithInstance;

    /**
     * @description The description of data disk N. The description must be 2 to 256 characters in length. The description can contain letters but cannot start with `http://` or `https://`. If both the LaunchTemplateId and LaunchConfiguration.* parameters are specified, the LaunchTemplateId parameter takes precedence.
     *
     * @example DataDisk_Description
     *
     * @var string
     */
    public $description;

    /**
     * @description The mount target of the data disk. If both the LaunchTemplateId and LaunchConfiguration.* parameters are specified, the LaunchTemplateId parameter takes precedence.
     *
     * @example /dev/vd1
     *
     * @var string
     */
    public $device;

    /**
     * @description The name of the data disk. The name must be 2 to 128 characters in length, and can contain letters, digits, periods (.), colons (:), underscores (_), and hyphens (-). The name must start with a letter but cannot start with `http://` or `https://`.
     *
     * This parameter is empty by default.
     *
     * If both the LaunchTemplateId and LaunchConfiguration.* parameters are specified, the LaunchTemplateId parameter takes precedence.
     * @example cloud_ssdData
     *
     * @var string
     */
    public $diskName;

    /**
     * @description Specifies whether to encrypt data disk N. Valid values:
     *
     * Default value: false.
     *
     * If both the LaunchTemplateId and LaunchConfiguration.* parameters are specified, the LaunchTemplateId parameter takes precedence.
     * @example false
     *
     * @var bool
     */
    public $encrypted;

    /**
     * @description The ID of the Key Management Service (KMS) key to be used for the data disk. If both the LaunchTemplateId and LaunchConfiguration.* parameters are specified, the LaunchTemplateId parameter takes precedence.
     *
     * @example 0e478b7a-4262-4802-b8cb-00d3fb40****
     *
     * @var string
     */
    public $kmsKeyId;

    /**
     * @description The performance level of the ESSD. Valid values:
     *
     *   PL0: A single ESSD can deliver up to 10,000 random read/write IOPS.
     *   PL1: A single ESSD can deliver up to 50,000 random read/write IOPS.
     *   PL2: A single ESSD can deliver up to 100,000 random read/write IOPS.
     *   PL3: A single ESSD can deliver up to 1,000,000 random read/write IOPS.
     *
     * For more information about ESSD performance levels, see [ESSDs](~~122389~~).
     *
     * If both the LaunchTemplateId and LaunchConfiguration.* parameters are specified, the LaunchTemplateId parameter takes precedence.
     * @example PL1
     *
     * @var string
     */
    public $performanceLevel;

    /**
     * @description The size of data disk N. Valid values of N: 1 to 16. Unit: GiB. Valid values:
     *
     * >The parameter value must be greater than or equal to the size of the snapshot specified by the `LaunchConfiguration.DataDisk.N.SnapshotId` parameter.
     *
     * If both the LaunchTemplateId and LaunchConfiguration.* parameters are specified, the LaunchTemplateId parameter takes precedence.
     * @example 20
     *
     * @var int
     */
    public $size;

    /**
     * @description The ID of the snapshot that you want to use to create the data disk. Valid values of N: 1 to 16.
     *
     * After this parameter is specified, the `LaunchConfiguration.DataDisk.N.Size` parameter is ignored. The size of the data disk is the same as that of the snapshot specified by this parameter. Use snapshots created after July 15, 2013. Otherwise, an error is returned and your request is rejected.
     *
     * If both the LaunchTemplateId and LaunchConfiguration.* parameters are specified, the LaunchTemplateId parameter takes precedence.
     * @example s-bp17441ohwka0yuh****
     *
     * @var string
     */
    public $snapshotId;
    protected $_name = [
        'category'           => 'Category',
        'deleteWithInstance' => 'DeleteWithInstance',
        'description'        => 'Description',
        'device'             => 'Device',
        'diskName'           => 'DiskName',
        'encrypted'          => 'Encrypted',
        'kmsKeyId'           => 'KmsKeyId',
        'performanceLevel'   => 'PerformanceLevel',
        'size'               => 'Size',
        'snapshotId'         => 'SnapshotId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
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
        if (null !== $this->kmsKeyId) {
            $res['KmsKeyId'] = $this->kmsKeyId;
        }
        if (null !== $this->performanceLevel) {
            $res['PerformanceLevel'] = $this->performanceLevel;
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
        if (isset($map['KmsKeyId'])) {
            $model->kmsKeyId = $map['KmsKeyId'];
        }
        if (isset($map['PerformanceLevel'])) {
            $model->performanceLevel = $map['PerformanceLevel'];
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
