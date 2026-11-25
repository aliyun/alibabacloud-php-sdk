<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ListNodeInstanceTypeResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ListNodeInstanceTypeResponseBody\nodeInstanceTypeModels\wuyingServerModelMetaInfo;

class nodeInstanceTypeModels extends Model
{
    /**
     * @var string
     */
    public $cpu;

    /**
     * @var int
     */
    public $ecsGpuMemory;

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
    public $maxCapacity;

    /**
     * @var int
     */
    public $memory;

    /**
     * @var string
     */
    public $nodeInstanceType;

    /**
     * @var string
     */
    public $nodeInstanceTypeFamily;

    /**
     * @var string
     */
    public $nodeTypeName;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var wuyingServerModelMetaInfo
     */
    public $wuyingServerModelMetaInfo;
    protected $_name = [
        'cpu' => 'Cpu',
        'ecsGpuMemory' => 'EcsGpuMemory',
        'gpu' => 'Gpu',
        'gpuMemory' => 'GpuMemory',
        'gpuSpec' => 'GpuSpec',
        'maxCapacity' => 'MaxCapacity',
        'memory' => 'Memory',
        'nodeInstanceType' => 'NodeInstanceType',
        'nodeInstanceTypeFamily' => 'NodeInstanceTypeFamily',
        'nodeTypeName' => 'NodeTypeName',
        'requestId' => 'RequestId',
        'wuyingServerModelMetaInfo' => 'WuyingServerModelMetaInfo',
    ];

    public function validate()
    {
        if (null !== $this->wuyingServerModelMetaInfo) {
            $this->wuyingServerModelMetaInfo->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->cpu) {
            $res['Cpu'] = $this->cpu;
        }

        if (null !== $this->ecsGpuMemory) {
            $res['EcsGpuMemory'] = $this->ecsGpuMemory;
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

        if (null !== $this->maxCapacity) {
            $res['MaxCapacity'] = $this->maxCapacity;
        }

        if (null !== $this->memory) {
            $res['Memory'] = $this->memory;
        }

        if (null !== $this->nodeInstanceType) {
            $res['NodeInstanceType'] = $this->nodeInstanceType;
        }

        if (null !== $this->nodeInstanceTypeFamily) {
            $res['NodeInstanceTypeFamily'] = $this->nodeInstanceTypeFamily;
        }

        if (null !== $this->nodeTypeName) {
            $res['NodeTypeName'] = $this->nodeTypeName;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->wuyingServerModelMetaInfo) {
            $res['WuyingServerModelMetaInfo'] = null !== $this->wuyingServerModelMetaInfo ? $this->wuyingServerModelMetaInfo->toArray($noStream) : $this->wuyingServerModelMetaInfo;
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

        if (isset($map['EcsGpuMemory'])) {
            $model->ecsGpuMemory = $map['EcsGpuMemory'];
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

        if (isset($map['MaxCapacity'])) {
            $model->maxCapacity = $map['MaxCapacity'];
        }

        if (isset($map['Memory'])) {
            $model->memory = $map['Memory'];
        }

        if (isset($map['NodeInstanceType'])) {
            $model->nodeInstanceType = $map['NodeInstanceType'];
        }

        if (isset($map['NodeInstanceTypeFamily'])) {
            $model->nodeInstanceTypeFamily = $map['NodeInstanceTypeFamily'];
        }

        if (isset($map['NodeTypeName'])) {
            $model->nodeTypeName = $map['NodeTypeName'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['WuyingServerModelMetaInfo'])) {
            $model->wuyingServerModelMetaInfo = wuyingServerModelMetaInfo::fromMap($map['WuyingServerModelMetaInfo']);
        }

        return $model;
    }
}
