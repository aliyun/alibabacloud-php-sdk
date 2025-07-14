<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflocontroller\V20221215\Models\CreateClusterRequest\nodeGroups;

use AlibabaCloud\Tea\Model;

class systemDisk extends Model
{
    /**
     * @description Disk type. The value range is:
     *
     * - cloud_essd: ESSD disk.
     *
     * @example cloud_essd
     *
     * @var string
     */
    public $category;

    /**
     * @description When creating an ESSD disk as the system disk, set the performance level of the disk. The value range is:
     * - PL0: Maximum random read/write IOPS for a single disk is 10,000.
     * - PL1: Maximum random read/write IOPS for a single disk is 50,000.
     *
     * @example PL1
     *
     * @var string
     */
    public $performanceLevel;

    /**
     * @description Unit: GB.
     *
     * @example 9999
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
