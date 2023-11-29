<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeInstancesResponseBody\instances\resource;

use AlibabaCloud\Tea\Model;

class memory extends Model
{
    /**
     * @example 72
     *
     * @var int
     */
    public $originalTotalMemory;

    /**
     * @description The number of CPU cores of the cluster.
     *
     * @example 70
     *
     * @var int
     */
    public $totalMemory;

    /**
     * @description The size of used storage space of the cluster, in GB.
     *
     * @example 10
     *
     * @var int
     */
    public $unitMemory;

    /**
     * @description The size of used memory in the cluster, in GB.
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
