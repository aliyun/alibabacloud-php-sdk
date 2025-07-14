<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflocontroller\V20221215\Models\CreateNodeGroupRequest\nodeGroup;

use AlibabaCloud\Tea\Model;

class systemDisk extends Model
{
    /**
     * @description Disk type. Value range:
     *
     * - cloud_essd: ESSD cloud disk.
     *
     * @example clou_essd
     *
     * @var string
     */
    public $category;

    /**
     * @description When creating an ESSD cloud disk as a system disk, set the performance level of the cloud disk. Value range:
     * - PL0: Maximum random read/write IOPS per disk 10,000.
     * - PL1: Maximum random read/write IOPS per disk 50,000.
     *
     * @example PL1
     *
     * @var string
     */
    public $performanceLevel;

    /**
     * @description Unit: GB.
     *
     * @example 1000
     *
     * @var int
     */
    public $size;
    protected $_name = [
        'category' => 'Category',
        'performanceLevel' => 'PerformanceLevel',
        'size' => 'Size',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->category) {
            $res['Category'] = $this->category;
        }
        if (null !== $this->performanceLevel) {
            $res['PerformanceLevel'] = $this->performanceLevel;
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
        if (isset($map['Category'])) {
            $model->category = $map['Category'];
        }
        if (isset($map['PerformanceLevel'])) {
            $model->performanceLevel = $map['PerformanceLevel'];
        }
        if (isset($map['Size'])) {
            $model->size = $map['Size'];
        }

        return $model;
    }
}
