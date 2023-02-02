<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeTenantResponseBody\tenant;

use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeTenantResponseBody\tenant\tenantResource\cpu;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeTenantResponseBody\tenant\tenantResource\diskSize;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeTenantResponseBody\tenant\tenantResource\memory;
use AlibabaCloud\Tea\Model;

class tenantResource extends Model
{
    /**
     * @description The information about the CPU resources of the tenant.
     *
     * @var cpu
     */
    public $cpu;

    /**
     * @description The information about the disk resources of the tenant.
     *
     * @var diskSize
     */
    public $diskSize;

    /**
     * @description The information about the memory resources of the tenant.
     *
     * @var memory
     */
    public $memory;

    /**
     * @description The number of resource units in the tenant.
     *
     * @example 1
     *
     * @var int
     */
    public $unitNum;
    protected $_name = [
        'cpu'      => 'Cpu',
        'diskSize' => 'DiskSize',
        'memory'   => 'Memory',
        'unitNum'  => 'UnitNum',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cpu) {
            $res['Cpu'] = null !== $this->cpu ? $this->cpu->toMap() : null;
        }
        if (null !== $this->diskSize) {
            $res['DiskSize'] = null !== $this->diskSize ? $this->diskSize->toMap() : null;
        }
        if (null !== $this->memory) {
            $res['Memory'] = null !== $this->memory ? $this->memory->toMap() : null;
        }
        if (null !== $this->unitNum) {
            $res['UnitNum'] = $this->unitNum;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return tenantResource
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Cpu'])) {
            $model->cpu = cpu::fromMap($map['Cpu']);
        }
        if (isset($map['DiskSize'])) {
            $model->diskSize = diskSize::fromMap($map['DiskSize']);
        }
        if (isset($map['Memory'])) {
            $model->memory = memory::fromMap($map['Memory']);
        }
        if (isset($map['UnitNum'])) {
            $model->unitNum = $map['UnitNum'];
        }

        return $model;
    }
}
