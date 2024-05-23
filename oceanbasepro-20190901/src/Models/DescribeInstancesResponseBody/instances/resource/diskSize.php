<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeInstancesResponseBody\instances\resource;

use AlibabaCloud\Tea\Model;

class diskSize extends Model
{
    /**
     * @description The original size of the disk.
     *
     * @example 200
     *
     * @var float
     */
    public $originalTotalDiskSize;

    /**
     * @description The total storage space of the cluster, in GB.
     *
     * @example 200
     *
     * @var float
     */
    public $totalDiskSize;

    /**
     * @description The storage space of each replica node in the cluster, in GB.
     *
     * @example 200
     *
     * @var float
     */
    public $unitDiskSize;

    /**
     * @description The size of used storage space of the cluster, in GB.
     *
     * @example 100
     *
     * @var int
     */
    public $usedDiskSize;
    protected $_name = [
        'originalTotalDiskSize' => 'OriginalTotalDiskSize',
        'totalDiskSize'         => 'TotalDiskSize',
        'unitDiskSize'          => 'UnitDiskSize',
        'usedDiskSize'          => 'UsedDiskSize',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->originalTotalDiskSize) {
            $res['OriginalTotalDiskSize'] = $this->originalTotalDiskSize;
        }
        if (null !== $this->totalDiskSize) {
            $res['TotalDiskSize'] = $this->totalDiskSize;
        }
        if (null !== $this->unitDiskSize) {
            $res['UnitDiskSize'] = $this->unitDiskSize;
        }
        if (null !== $this->usedDiskSize) {
            $res['UsedDiskSize'] = $this->usedDiskSize;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return diskSize
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OriginalTotalDiskSize'])) {
            $model->originalTotalDiskSize = $map['OriginalTotalDiskSize'];
        }
        if (isset($map['TotalDiskSize'])) {
            $model->totalDiskSize = $map['TotalDiskSize'];
        }
        if (isset($map['UnitDiskSize'])) {
            $model->unitDiskSize = $map['UnitDiskSize'];
        }
        if (isset($map['UsedDiskSize'])) {
            $model->usedDiskSize = $map['UsedDiskSize'];
        }

        return $model;
    }
}
