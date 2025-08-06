<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\CreateInstanceRequest;

use AlibabaCloud\Dara\Model;

class dataDisk extends Model
{
    /**
     * @var string
     */
    public $category;

    /**
     * @var bool
     */
    public $deleteWithInstance;

    /**
     * @var string
     */
    public $description;

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
    public $encryptAlgorithm;

    /**
     * @var bool
     */
    public $encrypted;

    /**
     * @var string
     */
    public $KMSKeyId;

    /**
     * @var string
     */
    public $performanceLevel;

    /**
     * @var int
     */
    public $size;

    /**
     * @var string
     */
    public $snapshotId;

    /**
     * @var string
     */
    public $storageClusterId;
    protected $_name = [
        'category' => 'Category',
        'deleteWithInstance' => 'DeleteWithInstance',
        'description' => 'Description',
        'device' => 'Device',
        'diskName' => 'DiskName',
        'encryptAlgorithm' => 'EncryptAlgorithm',
        'encrypted' => 'Encrypted',
        'KMSKeyId' => 'KMSKeyId',
        'performanceLevel' => 'PerformanceLevel',
        'size' => 'Size',
        'snapshotId' => 'SnapshotId',
        'storageClusterId' => 'StorageClusterId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
