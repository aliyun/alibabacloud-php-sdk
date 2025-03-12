<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeInstanceTopologyResponseBody\instanceTopology\replicas\replicaResource;

use AlibabaCloud\Tea\Model;

class memory extends Model
{
    /**
     * @description The total memory size of the replica, in GB.
     *
     * @example 32
     *
     * @var int
     */
    public $totalMemory;

    /**
     * @description The size of memory used by the replica, in GB.
     *
     * @example 16
     *
     * @var int
     */
    public $usedMemory;
    protected $_name = [
        'totalMemory' => 'TotalMemory',
        'usedMemory'  => 'UsedMemory',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->totalMemory) {
            $res['TotalMemory'] = $this->totalMemory;
        }
        if (null !== $this->usedMemory) {
            $res['UsedMemory'] = $this->usedMemory;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return memory
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TotalMemory'])) {
            $model->totalMemory = $map['TotalMemory'];
        }
        if (isset($map['UsedMemory'])) {
            $model->usedMemory = $map['UsedMemory'];
        }

        return $model;
    }
}
