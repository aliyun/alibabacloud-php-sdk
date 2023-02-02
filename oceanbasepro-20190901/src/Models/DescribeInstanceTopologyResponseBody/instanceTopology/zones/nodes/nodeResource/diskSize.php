<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeInstanceTopologyResponseBody\instanceTopology\zones\nodes\nodeResource;

use AlibabaCloud\Tea\Model;

class diskSize extends Model
{
    /**
     * @description The total storage space of the node, in GB.
     *
     * @example 400
     *
     * @var float
     */
    public $totalDiskSize;

    /**
     * @description The size of used storage space of the node, in GB.
     *
     * @example 200
     *
     * @var float
     */
    public $usedDiskSize;
    protected $_name = [
        'totalDiskSize' => 'TotalDiskSize',
        'usedDiskSize'  => 'UsedDiskSize',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->totalDiskSize) {
            $res['TotalDiskSize'] = $this->totalDiskSize;
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
        if (isset($map['TotalDiskSize'])) {
            $model->totalDiskSize = $map['TotalDiskSize'];
        }
        if (isset($map['UsedDiskSize'])) {
            $model->usedDiskSize = $map['UsedDiskSize'];
        }

        return $model;
    }
}
