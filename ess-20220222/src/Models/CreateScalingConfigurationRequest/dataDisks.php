<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ess\V20220222\Models\CreateScalingConfigurationRequest;

use AlibabaCloud\Dara\Model;

class dataDisks extends Model
{
    /**
     * @var string
     */
    public $autoSnapshotPolicyId;

    /**
     * @var bool
     */
    public $burstingEnabled;

    /**
     * @var string[]
     */
    public $categories;

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
    public $provisionedIops;

    /**
     * @var int
     */
    public $size;

    /**
     * @var string
     */
    public $snapshotId;
    protected $_name = [
        'autoSnapshotPolicyId' => 'AutoSnapshotPolicyId',
        'burstingEnabled' => 'BurstingEnabled',
        'categories' => 'Categories',
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

    public function validate()
    {
        if (\is_array($this->categories)) {
            Model::validateArray($this->categories);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->autoSnapshotPolicyId) {
            $res['AutoSnapshotPolicyId'] = $this->autoSnapshotPolicyId;
        }

        if (null !== $this->burstingEnabled) {
            $res['BurstingEnabled'] = $this->burstingEnabled;
        }

        if (null !== $this->categories) {
            if (\is_array($this->categories)) {
                $res['Categories'] = [];
                $n1 = 0;
                foreach ($this->categories as $item1) {
                    $res['Categories'][$n1++] = $item1;
                }
            }
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
                $model->categories = [];
                $n1 = 0;
                foreach ($map['Categories'] as $item1) {
                    $model->categories[$n1++] = $item1;
                }
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
