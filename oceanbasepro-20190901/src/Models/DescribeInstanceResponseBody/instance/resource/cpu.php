<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeInstanceResponseBody\instance\resource;

use AlibabaCloud\Tea\Model;

class cpu extends Model
{
    /**
     * @description The series of the OceanBase cluster. Valid values:
     * - BASIC: the basic edition.
     * @example 14
     *
     * @var int
     */
    public $totalCpu;

    /**
     * @description The type of the storage disk where the cluster is deployed.
     *
     * The default value is cloud_essd_pl1, which indicates an ESSD cloud disk.
     * @example 10
     *
     * @var int
     */
    public $unitCpu;

    /**
     * @description Indicates whether automatic upgrade of the OBServer version is enabled.
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
