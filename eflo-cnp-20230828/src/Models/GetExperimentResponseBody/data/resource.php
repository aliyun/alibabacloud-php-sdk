<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflocnp\V20230828\Models\GetExperimentResponseBody\data;

use AlibabaCloud\SDK\Eflocnp\V20230828\Models\GetExperimentResponseBody\data\resource\machineType;
use AlibabaCloud\SDK\Eflocnp\V20230828\Models\GetExperimentResponseBody\data\resource\resourceNodes;
use AlibabaCloud\SDK\Eflocnp\V20230828\Models\GetExperimentResponseBody\data\resource\userAccessParam;
use AlibabaCloud\Tea\Model;

class resource extends Model
{
    /**
     * @example 90
     *
     * @var int
     */
    public $cpuCoreLimit;

    /**
     * @example 8
     *
     * @var int
     */
    public $gpuLimit;

    /**
     * @var machineType
     */
    public $machineType;

    /**
     * @example 90
     *
     * @var int
     */
    public $maxCpuCore;

    /**
     * @example 8
     *
     * @var int
     */
    public $maxGpu;

    /**
     * @example 500
     *
     * @var int
     */
    public $maxMemory;

    /**
     * @example 500
     *
     * @var int
     */
    public $memoryLimit;

    /**
     * @example 189
     *
     * @var int
     */
    public $resourceId;

    /**
     * @example ecs.r8y.4xlarge
     *
     * @var string
     */
    public $resourceName;

    /**
     * @var resourceNodes[]
     */
    public $resourceNodes;

    /**
     * @var userAccessParam
     */
    public $userAccessParam;
    protected $_name = [
        'cpuCoreLimit'    => 'CpuCoreLimit',
        'gpuLimit'        => 'GpuLimit',
        'machineType'     => 'MachineType',
        'maxCpuCore'      => 'MaxCpuCore',
        'maxGpu'          => 'MaxGpu',
        'maxMemory'       => 'MaxMemory',
        'memoryLimit'     => 'MemoryLimit',
        'resourceId'      => 'ResourceId',
        'resourceName'    => 'ResourceName',
        'resourceNodes'   => 'ResourceNodes',
        'userAccessParam' => 'UserAccessParam',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cpuCoreLimit) {
            $res['CpuCoreLimit'] = $this->cpuCoreLimit;
        }
        if (null !== $this->gpuLimit) {
            $res['GpuLimit'] = $this->gpuLimit;
        }
        if (null !== $this->machineType) {
            $res['MachineType'] = null !== $this->machineType ? $this->machineType->toMap() : null;
        }
        if (null !== $this->maxCpuCore) {
            $res['MaxCpuCore'] = $this->maxCpuCore;
        }
        if (null !== $this->maxGpu) {
            $res['MaxGpu'] = $this->maxGpu;
        }
        if (null !== $this->maxMemory) {
            $res['MaxMemory'] = $this->maxMemory;
        }
        if (null !== $this->memoryLimit) {
            $res['MemoryLimit'] = $this->memoryLimit;
        }
        if (null !== $this->resourceId) {
            $res['ResourceId'] = $this->resourceId;
        }
        if (null !== $this->resourceName) {
            $res['ResourceName'] = $this->resourceName;
        }
        if (null !== $this->resourceNodes) {
            $res['ResourceNodes'] = [];
            if (null !== $this->resourceNodes && \is_array($this->resourceNodes)) {
                $n = 0;
                foreach ($this->resourceNodes as $item) {
                    $res['ResourceNodes'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->userAccessParam) {
            $res['UserAccessParam'] = null !== $this->userAccessParam ? $this->userAccessParam->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return resource
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CpuCoreLimit'])) {
            $model->cpuCoreLimit = $map['CpuCoreLimit'];
        }
        if (isset($map['GpuLimit'])) {
            $model->gpuLimit = $map['GpuLimit'];
        }
        if (isset($map['MachineType'])) {
            $model->machineType = machineType::fromMap($map['MachineType']);
        }
        if (isset($map['MaxCpuCore'])) {
            $model->maxCpuCore = $map['MaxCpuCore'];
        }
        if (isset($map['MaxGpu'])) {
            $model->maxGpu = $map['MaxGpu'];
        }
        if (isset($map['MaxMemory'])) {
            $model->maxMemory = $map['MaxMemory'];
        }
        if (isset($map['MemoryLimit'])) {
            $model->memoryLimit = $map['MemoryLimit'];
        }
        if (isset($map['ResourceId'])) {
            $model->resourceId = $map['ResourceId'];
        }
        if (isset($map['ResourceName'])) {
            $model->resourceName = $map['ResourceName'];
        }
        if (isset($map['ResourceNodes'])) {
            if (!empty($map['ResourceNodes'])) {
                $model->resourceNodes = [];
                $n                    = 0;
                foreach ($map['ResourceNodes'] as $item) {
                    $model->resourceNodes[$n++] = null !== $item ? resourceNodes::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['UserAccessParam'])) {
            $model->userAccessParam = userAccessParam::fromMap($map['UserAccessParam']);
        }

        return $model;
    }
}
