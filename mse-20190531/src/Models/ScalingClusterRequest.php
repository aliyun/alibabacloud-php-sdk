<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models;

use AlibabaCloud\Tea\Model;

class ScalingClusterRequest extends Model
{
    /**
     * @var string
     */
    public $clusterSpecification;

    /**
     * @var int
     */
    public $cpu;

    /**
     * @var int
     */
    public $instanceCount;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var int
     */
    public $memoryCapacity;
    protected $_name = [
        'clusterSpecification' => 'ClusterSpecification',
        'cpu'                  => 'Cpu',
        'instanceCount'        => 'InstanceCount',
        'instanceId'           => 'InstanceId',
        'memoryCapacity'       => 'MemoryCapacity',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterSpecification) {
            $res['ClusterSpecification'] = $this->clusterSpecification;
        }
        if (null !== $this->cpu) {
            $res['Cpu'] = $this->cpu;
        }
        if (null !== $this->instanceCount) {
            $res['InstanceCount'] = $this->instanceCount;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->memoryCapacity) {
            $res['MemoryCapacity'] = $this->memoryCapacity;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ScalingClusterRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterSpecification'])) {
            $model->clusterSpecification = $map['ClusterSpecification'];
        }
        if (isset($map['Cpu'])) {
            $model->cpu = $map['Cpu'];
        }
        if (isset($map['InstanceCount'])) {
            $model->instanceCount = $map['InstanceCount'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['MemoryCapacity'])) {
            $model->memoryCapacity = $map['MemoryCapacity'];
        }

        return $model;
    }
}
