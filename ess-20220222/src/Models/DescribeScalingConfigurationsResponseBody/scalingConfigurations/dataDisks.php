<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ess\V20220222\Models\DescribeScalingConfigurationsResponseBody\scalingConfigurations;

use AlibabaCloud\Tea\Model;

class dataDisks extends Model
{
    /**
     * @description The ID of the automatic snapshot policy that is applied to the data disk.
     *
     * @example sp-bp19nq9enxqkomib****
     *
     * @var string
     */
    public $autoSnapshotPolicyId;

    /**
     * @description Indicates whether the burst feature is enabled for the data disk. Valid values:
     *
     *   true
     *   false
     *
     * For more information, see the [ESSD AutoPL disks](~~368372~~) topic.
     * @example false
     *
     * @var bool
     */
    public $burstingEnabled;

    /**
     * @description The categories of the data disks. The values are sorted based on their priorities. The first value has the highest priority. If Auto Scaling cannot create instances by using the disk that has the highest priority, Auto Scaling creates instances by using the disk that has the next highest priority. Valid values:
     *
     *   cloud: basic disk. The DeleteWithInstance parameter of a basic disk that is created together with the instance is set to true.
     *   cloud_efficiency: ultra disk.
     *   cloud_ssd: standard SSD.
     *   cloud_essd: ESSD.
     *
     * @var string[]
     */
    public $categories;

    /**
     * @description The category of the data disk. Valid values:
     *
     *   cloud: basic disk. The DeleteWithInstance parameter of a basic disk that is created together with the instance is set to true.
     *   cloud_efficiency: ultra disk.
     *   cloud_ssd: standard SSD.
     *   ephemeral_ssd: local standard SSD.
     *   cloud_essd: ESSD.
     *   cloud_auto: ESSD AutoPL disk.
     *
     * @example cloud
     *
     * @var string
     */
    public $category;

    /**
     * @description Indicates whether the data disk is released if the instance to which the data disk is attached is released. Valid values:
     *
     *   true
     *   false
     *
     * @example true
     *
     * @var bool
     */
    public $deleteWithInstance;

    /**
     * @description The description of the data disk.
     *
     * @example FinanceDept
     *
     * @var string
     */
    public $description;

    /**
     * @description The mount target of the data disk.
     *
     * @example /dev/xvdb
     *
     * @var string
     */
    public $device;

    /**
     * @description The name of the data disk.
     *
     * @example cloud_ssdData
     *
     * @var string
     */
    public $diskName;

    /**
     * @description Indicates whether the data disk is encrypted. Valid values:
     *
     *   true
     *   false
     *
     * Default value: false.
     * @example false
     *
     * @var string
     */
    public $encrypted;

    /**
     * @description The ID of the Key Management Service (KMS) key that is used to encrypt the data disk.
     *
     * @example 0e478b7a-4262-4802-b8cb-00d3fb40****
     *
     * @var string
     */
    public $KMSKeyId;

    /**
     * @description The PL of the data disk of the ESSD category.
     *
     * @example PL1
     *
     * @var string
     */
    public $performanceLevel;

    /**
     * @description The provisioned input/output operations per second (IOPS) for the data disk.
     *
     * > IOPS measures the number of read and write operations that an Elastic Block Storage (EBS) device can process per second.
     * @example 100
     *
     * @var int
     */
    public $provisionedIops;

    /**
     * @description The size of the data disk. Unit: GiB.
     *
     *   Valid values if you set the Category parameter to cloud: 5 to 2000.
     *   Valid values if you set the Category parameter to cloud_efficiency: 20 to 32768.
     *   Valid values if you set the Category parameter to cloud_ssd: 20 to 32768.
     *   Valid values if you set the Category parameter to cloud_essd: 20 to 32768.
     *   Valid values if you set the Category parameter to ephemeral_ssd: 5 to 800.
     *
     * @example 200
     *
     * @var int
     */
    public $size;

    /**
     * @description The ID of the snapshot that is used to create the data disk.
     *
     * @example s-23f2i****
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
