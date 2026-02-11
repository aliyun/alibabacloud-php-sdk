<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ListWuyingServerResponseBody\wuyingServerList;

use AlibabaCloud\Dara\Model;

class serverInstanceTypeInfo extends Model
{
    /**
     * @var string
     */
    public $cpu;

    /**
     * @var string
     */
    public $gpu;

    /**
     * @var int
     */
    public $gpuMemory;

    /**
     * @var string
     */
    public $gpuSpec;

    /**
     * @var int
     */
    public $memory;

    /**
     * @var string
     */
    public $serverInstanceType;
    protected $_name = [
        'cpu' => 'Cpu',
        'gpu' => 'Gpu',
        'gpuMemory' => 'GpuMemory',
        'gpuSpec' => 'GpuSpec',
        'memory' => 'Memory',
        'serverInstanceType' => 'ServerInstanceType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->cpu) {
            $res['Cpu'] = $this->cpu;
        }

        if (null !== $this->gpu) {
            $res['Gpu'] = $this->gpu;
        }

        if (null !== $this->gpuMemory) {
            $res['GpuMemory'] = $this->gpuMemory;
        }

        if (null !== $this->gpuSpec) {
            $res['GpuSpec'] = $this->gpuSpec;
        }

        if (null !== $this->memory) {
            $res['Memory'] = $this->memory;
        }

        if (null !== $this->serverInstanceType) {
            $res['ServerInstanceType'] = $this->serverInstanceType;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Cpu'])) {
            $model->cpu = $map['Cpu'];
        }

        if (isset($map['Gpu'])) {
            $model->gpu = $map['Gpu'];
        }

        if (isset($map['GpuMemory'])) {
            $model->gpuMemory = $map['GpuMemory'];
        }

        if (isset($map['GpuSpec'])) {
            $model->gpuSpec = $map['GpuSpec'];
        }

        if (isset($map['Memory'])) {
            $model->memory = $map['Memory'];
        }

        if (isset($map['ServerInstanceType'])) {
            $model->serverInstanceType = $map['ServerInstanceType'];
        }

        return $model;
    }
}
