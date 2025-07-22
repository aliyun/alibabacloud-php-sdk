<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Paidsw\V20220101\Models\GetInstanceResponseBody;

use AlibabaCloud\Tea\Model;

class requestedResource extends Model
{
    /**
     * @description The number of CPU cores.
     *
     * @example 32
     *
     * @var string
     */
    public $CPU;

    /**
     * @description The number of GPUs.
     *
     * @example 4
     *
     * @var string
     */
    public $GPU;

    /**
     * @description The GPU type. Valid values:
     *
     *   V100
     *   A100
     *   T4
     *   A10
     *   P100
     *
     * @example v100
     *
     * @var string
     */
    public $GPUType;

    /**
     * @description The memory size. Unit: GB.
     *
     * @example 32
     *
     * @var string
     */
    public $memory;

    /**
     * @description The shared memory size. Unit: GB.
     *
     * @example 32
     *
     * @var string
     */
    public $sharedMemory;
    protected $_name = [
        'CPU' => 'CPU',
        'GPU' => 'GPU',
        'GPUType' => 'GPUType',
        'memory' => 'Memory',
        'sharedMemory' => 'SharedMemory',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->CPU) {
            $res['CPU'] = $this->CPU;
        }
        if (null !== $this->GPU) {
            $res['GPU'] = $this->GPU;
        }
        if (null !== $this->GPUType) {
            $res['GPUType'] = $this->GPUType;
        }
        if (null !== $this->memory) {
            $res['Memory'] = $this->memory;
        }
        if (null !== $this->sharedMemory) {
            $res['SharedMemory'] = $this->sharedMemory;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return requestedResource
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CPU'])) {
            $model->CPU = $map['CPU'];
        }
        if (isset($map['GPU'])) {
            $model->GPU = $map['GPU'];
        }
        if (isset($map['GPUType'])) {
            $model->GPUType = $map['GPUType'];
        }
        if (isset($map['Memory'])) {
            $model->memory = $map['Memory'];
        }
        if (isset($map['SharedMemory'])) {
            $model->sharedMemory = $map['SharedMemory'];
        }

        return $model;
    }
}
