<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ess\V20140828\Models\CreateScalingConfigurationRequest;

use AlibabaCloud\Tea\Model;

class dataDisk extends Model
{
    /**
     * @var string
     */
    public $performanceLevel;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $snapshotId;

    /**
     * @var int
     */
    public $size;

    /**
     * @var string
     */
    public $device;

    /**
     * @var string
     */
    public $diskName;

    /**
     * @var string
     */
    public $autoSnapshotPolicyId;

    /**
     * @var string
     */
    public $category;

    /**
     * @var string
     */
    public $KMSKeyId;

    /**
     * @var bool
     */
    public $deleteWithInstance;

    /**
     * @var string
     */
    public $encrypted;
    protected $_name = [
        'performanceLevel'     => 'PerformanceLevel',
        'description'          => 'Description',
        'snapshotId'           => 'SnapshotId',
        'size'                 => 'Size',
        'device'               => 'Device',
        'diskName'             => 'DiskName',
        'autoSnapshotPolicyId' => 'AutoSnapshotPolicyId',
        'category'             => 'Category',
        'KMSKeyId'             => 'KMSKeyId',
        'deleteWithInstance'   => 'DeleteWithInstance',
        'encrypted'            => 'Encrypted',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->performanceLevel) {
            $res['PerformanceLevel'] = $this->performanceLevel;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->snapshotId) {
            $res['SnapshotId'] = $this->snapshotId;
        }
        if (null !== $this->size) {
            $res['Size'] = $this->size;
        }
        if (null !== $this->device) {
            $res['Device'] = $this->device;
        }
        if (null !== $this->diskName) {
            $res['DiskName'] = $this->diskName;
        }
        if (null !== $this->autoSnapshotPolicyId) {
            $res['AutoSnapshotPolicyId'] = $this->autoSnapshotPolicyId;
        }
        if (null !== $this->category) {
            $res['Category'] = $this->category;
        }
        if (null !== $this->KMSKeyId) {
            $res['KMSKeyId'] = $this->KMSKeyId;
        }
        if (null !== $this->deleteWithInstance) {
            $res['DeleteWithInstance'] = $this->deleteWithInstance;
        }
        if (null !== $this->encrypted) {
            $res['Encrypted'] = $this->encrypted;
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
        if (isset($map['PerformanceLevel'])) {
            $model->performanceLevel = $map['PerformanceLevel'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['SnapshotId'])) {
            $model->snapshotId = $map['SnapshotId'];
        }
        if (isset($map['Size'])) {
            $model->size = $map['Size'];
        }
        if (isset($map['Device'])) {
            $model->device = $map['Device'];
        }
        if (isset($map['DiskName'])) {
            $model->diskName = $map['DiskName'];
        }
        if (isset($map['AutoSnapshotPolicyId'])) {
            $model->autoSnapshotPolicyId = $map['AutoSnapshotPolicyId'];
        }
        if (isset($map['Category'])) {
            $model->category = $map['Category'];
        }
        if (isset($map['KMSKeyId'])) {
            $model->KMSKeyId = $map['KMSKeyId'];
        }
        if (isset($map['DeleteWithInstance'])) {
            $model->deleteWithInstance = $map['DeleteWithInstance'];
        }
        if (isset($map['Encrypted'])) {
            $model->encrypted = $map['Encrypted'];
        }

        return $model;
    }
}
