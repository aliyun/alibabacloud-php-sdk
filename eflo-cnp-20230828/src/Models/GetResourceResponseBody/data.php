<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflocnp\V20230828\Models\GetResourceResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Eflocnp\V20230828\Models\GetResourceResponseBody\data\machineType;
use AlibabaCloud\SDK\Eflocnp\V20230828\Models\GetResourceResponseBody\data\resourceNodes;
use AlibabaCloud\SDK\Eflocnp\V20230828\Models\GetResourceResponseBody\data\userAccessParam;

class data extends Model
{
    /**
     * @var string
     */
    public $clusterDesc;

    /**
     * @var string
     */
    public $clusterId;

    /**
     * @var string
     */
    public $clusterName;

    /**
     * @var int
     */
    public $cpuCoreLimit;

    /**
     * @var int
     */
    public $gpuLimit;

    /**
     * @var machineType
     */
    public $machineType;

    /**
     * @var int
     */
    public $maxCpuCore;

    /**
     * @var int
     */
    public $maxGpu;

    /**
     * @var int
     */
    public $maxMemory;

    /**
     * @var int
     */
    public $memoryLimit;

    /**
     * @var int
     */
    public $resourceId;

    /**
     * @var resourceNodes[]
     */
    public $resourceNodes;

    /**
     * @var userAccessParam
     */
    public $userAccessParam;
    protected $_name = [
        'clusterDesc' => 'ClusterDesc',
        'clusterId' => 'ClusterId',
        'clusterName' => 'ClusterName',
        'cpuCoreLimit' => 'CpuCoreLimit',
        'gpuLimit' => 'GpuLimit',
        'machineType' => 'MachineType',
        'maxCpuCore' => 'MaxCpuCore',
        'maxGpu' => 'MaxGpu',
        'maxMemory' => 'MaxMemory',
        'memoryLimit' => 'MemoryLimit',
        'resourceId' => 'ResourceId',
        'resourceNodes' => 'ResourceNodes',
        'userAccessParam' => 'UserAccessParam',
    ];

    public function validate()
    {
        if (null !== $this->machineType) {
            $this->machineType->validate();
        }
        if (\is_array($this->resourceNodes)) {
            Model::validateArray($this->resourceNodes);
        }
        if (null !== $this->userAccessParam) {
            $this->userAccessParam->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clusterDesc) {
            $res['ClusterDesc'] = $this->clusterDesc;
        }

        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }

        if (null !== $this->clusterName) {
            $res['ClusterName'] = $this->clusterName;
        }

        if (null !== $this->cpuCoreLimit) {
            $res['CpuCoreLimit'] = $this->cpuCoreLimit;
        }

        if (null !== $this->gpuLimit) {
            $res['GpuLimit'] = $this->gpuLimit;
        }

        if (null !== $this->machineType) {
            $res['MachineType'] = null !== $this->machineType ? $this->machineType->toArray($noStream) : $this->machineType;
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

        if (null !== $this->resourceNodes) {
            if (\is_array($this->resourceNodes)) {
                $res['ResourceNodes'] = [];
                $n1 = 0;
                foreach ($this->resourceNodes as $item1) {
                    $res['ResourceNodes'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->userAccessParam) {
            $res['UserAccessParam'] = null !== $this->userAccessParam ? $this->userAccessParam->toArray($noStream) : $this->userAccessParam;
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
        if (isset($map['ClusterDesc'])) {
            $model->clusterDesc = $map['ClusterDesc'];
        }

        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }

        if (isset($map['ClusterName'])) {
            $model->clusterName = $map['ClusterName'];
        }

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

        if (isset($map['ResourceNodes'])) {
            if (!empty($map['ResourceNodes'])) {
                $model->resourceNodes = [];
                $n1 = 0;
                foreach ($map['ResourceNodes'] as $item1) {
                    $model->resourceNodes[$n1++] = resourceNodes::fromMap($item1);
                }
            }
        }

        if (isset($map['UserAccessParam'])) {
            $model->userAccessParam = userAccessParam::fromMap($map['UserAccessParam']);
        }

        return $model;
    }
}
