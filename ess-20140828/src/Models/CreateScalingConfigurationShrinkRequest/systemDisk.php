<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ess\V20140828\Models\CreateScalingConfigurationShrinkRequest;

use AlibabaCloud\Tea\Model;

class systemDisk extends Model
{
    /**
     * @var string
     */
    public $category;

    /**
     * @var int
     */
    public $size;

    /**
     * @var string
     */
    public $diskName;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $autoSnapshotPolicyId;

    /**
     * @var string
     */
    public $performanceLevel;
    protected $_name = [
        'category'             => 'Category',
        'size'                 => 'Size',
        'diskName'             => 'DiskName',
        'description'          => 'Description',
        'autoSnapshotPolicyId' => 'AutoSnapshotPolicyId',
        'performanceLevel'     => 'PerformanceLevel',
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
        if (null !== $this->size) {
            $res['Size'] = $this->size;
        }
        if (null !== $this->diskName) {
            $res['DiskName'] = $this->diskName;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->autoSnapshotPolicyId) {
            $res['AutoSnapshotPolicyId'] = $this->autoSnapshotPolicyId;
        }
        if (null !== $this->performanceLevel) {
            $res['PerformanceLevel'] = $this->performanceLevel;
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
        if (isset($map['Category'])) {
            $model->category = $map['Category'];
        }
        if (isset($map['Size'])) {
            $model->size = $map['Size'];
        }
        if (isset($map['DiskName'])) {
            $model->diskName = $map['DiskName'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['AutoSnapshotPolicyId'])) {
            $model->autoSnapshotPolicyId = $map['AutoSnapshotPolicyId'];
        }
        if (isset($map['PerformanceLevel'])) {
            $model->performanceLevel = $map['PerformanceLevel'];
        }

        return $model;
    }
}
