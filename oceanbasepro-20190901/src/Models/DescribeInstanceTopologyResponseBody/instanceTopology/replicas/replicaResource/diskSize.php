<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeInstanceTopologyResponseBody\instanceTopology\replicas\replicaResource;

use AlibabaCloud\Tea\Model;

class diskSize extends Model
{
    /**
     * @description The total disk space of the replica, in GB.
     *
     * @example 100
     *
     * @var int
     */
    public $totalDiskSize;

    /**
     * @description The disk space used by the replica, in GB.
     *
     * @example 50
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
