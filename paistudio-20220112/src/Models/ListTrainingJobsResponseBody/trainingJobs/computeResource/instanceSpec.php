<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiStudio\V20220112\Models\ListTrainingJobsResponseBody\trainingJobs\computeResource;

use AlibabaCloud\Tea\Model;

class instanceSpec extends Model
{
    /**
     * @example 8
     *
     * @var string
     */
    public $CPU;

    /**
     * @example 1
     *
     * @var string
     */
    public $GPU;

    /**
     * @example V100
     *
     * @var string
     */
    public $GPUType;

    /**
     * @example 32
     *
     * @var string
     */
    public $memory;

    /**
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
     * @return instanceSpec
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
