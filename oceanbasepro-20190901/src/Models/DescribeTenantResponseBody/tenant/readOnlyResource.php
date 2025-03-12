<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeTenantResponseBody\tenant;

use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeTenantResponseBody\tenant\readOnlyResource\capacityUnit;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeTenantResponseBody\tenant\readOnlyResource\cpu;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeTenantResponseBody\tenant\readOnlyResource\diskSize;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeTenantResponseBody\tenant\readOnlyResource\logDiskSize;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeTenantResponseBody\tenant\readOnlyResource\memory;
use AlibabaCloud\Tea\Model;

class readOnlyResource extends Model
{
    /**
     * @description The information about capacity units.
     *
     * @var capacityUnit
     */
    public $capacityUnit;

    /**
     * @description The number of CPU cores of each replica node in the cluster.
     *
     * @var cpu
     */
    public $cpu;

    /**
     * @description The size of the data disk.
     *
     * @var diskSize
     */
    public $diskSize;

    /**
     * @description The information about the log disk resources of the tenant.
     *
     * @var logDiskSize
     */
    public $logDiskSize;

    /**
     * @description The information about the memory resources of the cluster.
     *
     * @var memory
     */
    public $memory;

    /**
     * @description The number of resource units in the tenant.
     *
     * @example 2
     *
     * @var int
     */
    public $unitNum;
    protected $_name = [
        'capacityUnit' => 'CapacityUnit',
        'cpu'          => 'Cpu',
        'diskSize'     => 'DiskSize',
        'logDiskSize'  => 'LogDiskSize',
        'memory'       => 'Memory',
        'unitNum'      => 'UnitNum',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->capacityUnit) {
            $res['CapacityUnit'] = null !== $this->capacityUnit ? $this->capacityUnit->toMap() : null;
        }
        if (null !== $this->cpu) {
            $res['Cpu'] = null !== $this->cpu ? $this->cpu->toMap() : null;
        }
        if (null !== $this->diskSize) {
            $res['DiskSize'] = null !== $this->diskSize ? $this->diskSize->toMap() : null;
        }
        if (null !== $this->logDiskSize) {
            $res['LogDiskSize'] = null !== $this->logDiskSize ? $this->logDiskSize->toMap() : null;
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
     * @return readOnlyResource
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CapacityUnit'])) {
            $model->capacityUnit = capacityUnit::fromMap($map['CapacityUnit']);
        }
        if (isset($map['Cpu'])) {
            $model->cpu = cpu::fromMap($map['Cpu']);
        }
        if (isset($map['DiskSize'])) {
            $model->diskSize = diskSize::fromMap($map['DiskSize']);
        }
        if (isset($map['LogDiskSize'])) {
            $model->logDiskSize = logDiskSize::fromMap($map['LogDiskSize']);
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
