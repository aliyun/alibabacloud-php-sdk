<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeInstanceResponseBody\instance\resource;

use AlibabaCloud\Tea\Model;

class cpu extends Model
{
    /**
     * @description The total number of CPU cores of the cluster.
     *
     * @example 14
     *
     * @var int
     */
    public $totalCpu;

    /**
     * @description The number of CPU cores of each replica node in the cluster.
     *
     * @example 10
     *
     * @var int
     */
    public $unitCpu;

    /**
     * @description The number of CPU cores used in the cluster.
     *
     * @example 10
     *
     * @var int
     */
    public $usedCpu;
    protected $_name = [
        'totalCpu' => 'TotalCpu',
        'unitCpu'  => 'UnitCpu',
        'usedCpu'  => 'UsedCpu',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->totalCpu) {
            $res['TotalCpu'] = $this->totalCpu;
        }
        if (null !== $this->unitCpu) {
            $res['UnitCpu'] = $this->unitCpu;
        }
        if (null !== $this->usedCpu) {
            $res['UsedCpu'] = $this->usedCpu;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return cpu
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TotalCpu'])) {
            $model->totalCpu = $map['TotalCpu'];
        }
        if (isset($map['UnitCpu'])) {
            $model->unitCpu = $map['UnitCpu'];
        }
        if (isset($map['UsedCpu'])) {
            $model->usedCpu = $map['UsedCpu'];
        }

        return $model;
    }
}
