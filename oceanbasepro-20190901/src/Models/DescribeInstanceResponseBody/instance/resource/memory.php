<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeInstanceResponseBody\instance\resource;

use AlibabaCloud\Tea\Model;

class memory extends Model
{
    /**
     * @description Indicates whether trusted ECS instances are used.
     *
     * @example 70
     *
     * @var int
     */
    public $totalMemory;

    /**
     * @description The log disk space of each replica node in the cluster. Unit: GB.
     *
     * @example 10
     *
     * @var int
     */
    public $unitMemory;

    /**
     * @description The time in UTC when the cluster was created.
     *
     * @example 10
     *
     * @var int
     */
    public $usedMemory;
    protected $_name = [
        'totalMemory' => 'TotalMemory',
        'unitMemory'  => 'UnitMemory',
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
