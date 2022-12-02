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
     * @var cpu
     */
    public $cpu;

    /**
     * @var diskSize
     */
    public $diskSize;

    /**
     * @var memory
     */
    public $memory;

    /**
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
