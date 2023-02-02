<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeInstanceTopologyResponseBody\instanceTopology\zones\nodes\nodeResource;

use AlibabaCloud\Tea\Model;

class cpu extends Model
{
    /**
     * @description The total number of CPU cores for the node.
     *
     * @example 14
     *
     * @var int
     */
    public $totalCpu;

    /**
     * @description The number of CPU cores used by the node.
     *
     * @example 4
     *
     * @var float
     */
    public $usedCpu;
    protected $_name = [
        'totalCpu' => 'TotalCpu',
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
        if (isset($map['UsedCpu'])) {
            $model->usedCpu = $map['UsedCpu'];
        }

        return $model;
    }
}
