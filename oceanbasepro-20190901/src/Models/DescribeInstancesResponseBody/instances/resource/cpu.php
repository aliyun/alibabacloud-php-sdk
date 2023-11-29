<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeInstancesResponseBody\instances\resource;

use AlibabaCloud\Tea\Model;

class cpu extends Model
{
    /**
     * @example 14
     *
     * @var int
     */
    public $originalTotalCpu;

    /**
     * @description The name of the OceanBase cluster.
     * If this parameter is not specified, the value is the instance ID of the cluster by default.
     * @example 14
     *
     * @var int
     */
    public $totalCpu;

    /**
     * @description The data replica distribution mode of the cluster. Valid values:
     *
     * - n-n-n: indicates the multi-IDC mode. The integer n represents the number of OBServer nodes in each IDC.
     * @example 10
     *
     * @var int
     */
    public $unitCpu;

    /**
     * @description The search keyword.
     *
     * @example 10
     *
     * @var int
     */
    public $usedCpu;
    protected $_name = [
        'originalTotalCpu' => 'OriginalTotalCpu',
        'totalCpu'         => 'TotalCpu',
        'unitCpu'          => 'UnitCpu',
        'usedCpu'          => 'UsedCpu',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->originalTotalCpu) {
            $res['OriginalTotalCpu'] = $this->originalTotalCpu;
        }
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
        if (isset($map['OriginalTotalCpu'])) {
            $model->originalTotalCpu = $map['OriginalTotalCpu'];
        }
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
