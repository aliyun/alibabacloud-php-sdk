<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflocnp\V20230828\Models\GetResourceResponseBody;

use AlibabaCloud\SDK\Eflocnp\V20230828\Models\GetResourceResponseBody\data\machineType;
use AlibabaCloud\SDK\Eflocnp\V20230828\Models\GetResourceResponseBody\data\resourceNodes;
use AlibabaCloud\SDK\Eflocnp\V20230828\Models\GetResourceResponseBody\data\userAccessParam;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description Cluster description
     *
     * @example test
     *
     * @var string
     */
    public $clusterDesc;

    /**
     * @description Cluster ID
     *
     * @example 3123121223
     *
     * @var string
     */
    public $clusterId;

    /**
     * @description Cluster name
     *
     * @example main_cluster
     *
     * @var string
     */
    public $clusterName;

    /**
     * @description Used CPU
     *
     * @example 90
     *
     * @var int
     */
    public $cpuCoreLimit;

    /**
     * @description Used GPU
     *
     * @example 8
     *
     * @var int
     */
    public $gpuLimit;

    /**
     * @description Machine type
     *
     * @var machineType
     */
    public $machineType;

    /**
     * @description Used memory
     *
     * @example 90
     *
     * @var int
     */
    public $maxCpuCore;

    /**
     * @description Used memory
     *
     * @example 8
     *
     * @var int
     */
    public $maxGpu;

    /**
     * @description Used memory
     *
     * @example 500
     *
     * @var int
     */
    public $maxMemory;

    /**
     * @description Used memory
     *
     * @example 500
     *
     * @var int
     */
    public $memoryLimit;

    /**
     * @description Cluster ID
     *
     * @example 189
     *
     * @var int
     */
    public $resourceId;

    /**
     * @description Cluster name
     *
     * @example ecs.g6.4xlarge
     *
     * @var string
     */
    public $resourceName;

    /**
     * @description List of resource nodes
     *
     * @var resourceNodes[]
     */
    public $resourceNodes;

    /**
     * @description User authorization parameters
     *
     * @var userAccessParam
     */
    public $userAccessParam;
    protected $_name = [
        'clusterDesc'     => 'ClusterDesc',
        'clusterId'       => 'ClusterId',
        'clusterName'     => 'ClusterName',
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
     * @return data
     */
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
