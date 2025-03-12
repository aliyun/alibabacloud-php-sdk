<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeTenantResponseBody\tenant\tenantResource;

use AlibabaCloud\Tea\Model;

class cpu extends Model
{
    /**
     * @description The total number of CPU cores of the tenant.
     *
     * @example 10
     *
     * @var float
     */
    public $totalCpu;

    /**
     * @description The number of CPU cores in each resource unit of the tenant.
     *
     * @example 8
     *
     * @var float
     */
    public $unitCpu;

    /**
     * @description The number of used CPU cores of the tenant.
     *
     * @example 8
     *
     * @var float
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
