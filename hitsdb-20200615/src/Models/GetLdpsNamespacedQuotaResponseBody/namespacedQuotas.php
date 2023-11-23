<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hitsdb\V20200615\Models\GetLdpsNamespacedQuotaResponseBody;

use AlibabaCloud\Tea\Model;

class namespacedQuotas extends Model
{
    /**
     * @var string
     */
    public $cpuAmount;

    /**
     * @var string
     */
    public $memoryAmount;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $usedCpu;

    /**
     * @var string
     */
    public $usedMemory;
    protected $_name = [
        'cpuAmount'    => 'CpuAmount',
        'memoryAmount' => 'MemoryAmount',
        'name'         => 'Name',
        'usedCpu'      => 'UsedCpu',
        'usedMemory'   => 'UsedMemory',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cpuAmount) {
            $res['CpuAmount'] = $this->cpuAmount;
        }
        if (null !== $this->memoryAmount) {
            $res['MemoryAmount'] = $this->memoryAmount;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->usedCpu) {
            $res['UsedCpu'] = $this->usedCpu;
        }
        if (null !== $this->usedMemory) {
            $res['UsedMemory'] = $this->usedMemory;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return namespacedQuotas
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CpuAmount'])) {
            $model->cpuAmount = $map['CpuAmount'];
        }
        if (isset($map['MemoryAmount'])) {
            $model->memoryAmount = $map['MemoryAmount'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['UsedCpu'])) {
            $model->usedCpu = $map['UsedCpu'];
        }
        if (isset($map['UsedMemory'])) {
            $model->usedMemory = $map['UsedMemory'];
        }

        return $model;
    }
}
