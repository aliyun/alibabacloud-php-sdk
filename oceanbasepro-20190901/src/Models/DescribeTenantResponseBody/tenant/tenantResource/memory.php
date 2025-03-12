<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeTenantResponseBody\tenant\tenantResource;

use AlibabaCloud\Tea\Model;

class memory extends Model
{
    /**
     * @description The total memory size of the tenant, in GB.
     *
     * @example 64
     *
     * @var float
     */
    public $totalMemory;

    /**
     * @description The memory size of each resource unit of the tenant, in GB.
     *
     * @example 32
     *
     * @var float
     */
    public $unitMemory;

    /**
     * @description The size of used memory of the tenant, in GB.
     *
     * @example 30
     *
     * @var float
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
