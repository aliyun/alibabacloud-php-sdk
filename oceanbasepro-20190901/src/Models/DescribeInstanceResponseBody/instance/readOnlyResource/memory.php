<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeInstanceResponseBody\instance\readOnlyResource;

use AlibabaCloud\Tea\Model;

class memory extends Model
{
    /**
     * @description The original memory size of the cluster.
     *
     * @example 72
     *
     * @var int
     */
    public $originalTotalMemory;

    /**
     * @description The total memory size of the cluster, in GB.
     *
     * @example 70
     *
     * @var int
     */
    public $totalMemory;

    /**
     * @description The memory size of each replica node in the cluster, in GB.
     *
     * @example 10
     *
     * @var int
     */
    public $unitMemory;

    /**
     * @description The size of memory used by the cluster, in GB.
     *
     * @example 10
     *
     * @var int
     */
    public $usedMemory;
    protected $_name = [
        'originalTotalMemory' => 'OriginalTotalMemory',
        'totalMemory'         => 'TotalMemory',
        'unitMemory'          => 'UnitMemory',
        'usedMemory'          => 'UsedMemory',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->originalTotalMemory) {
            $res['OriginalTotalMemory'] = $this->originalTotalMemory;
        }
        if (null !== $this->totalMemory) {
            $res['TotalMemory'] = $this->totalMemory;
        }
        if (null !== $this->unitMemory) {
            $res['UnitMemory'] = $this->unitMemory;
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
        if (isset($map['OriginalTotalMemory'])) {
            $model->originalTotalMemory = $map['OriginalTotalMemory'];
        }
        if (isset($map['TotalMemory'])) {
            $model->totalMemory = $map['TotalMemory'];
        }
        if (isset($map['UnitMemory'])) {
            $model->unitMemory = $map['UnitMemory'];
        }
        if (isset($map['UsedMemory'])) {
            $model->usedMemory = $map['UsedMemory'];
        }

        return $model;
    }
}
