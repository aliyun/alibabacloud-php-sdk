<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models\QueryClusterSpecificationResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $clusterSpecificationName;

    /**
     * @var string
     */
    public $cpuCapacity;

    /**
     * @var string
     */
    public $diskCapacity;

    /**
     * @var string
     */
    public $instanceCount;

    /**
     * @var string
     */
    public $maxCon;

    /**
     * @var string
     */
    public $maxTps;

    /**
     * @var string
     */
    public $memoryCapacity;
    protected $_name = [
        'clusterSpecificationName' => 'ClusterSpecificationName',
        'cpuCapacity'              => 'CpuCapacity',
        'diskCapacity'             => 'DiskCapacity',
        'instanceCount'            => 'InstanceCount',
        'maxCon'                   => 'MaxCon',
        'maxTps'                   => 'MaxTps',
        'memoryCapacity'           => 'MemoryCapacity',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterSpecificationName) {
            $res['ClusterSpecificationName'] = $this->clusterSpecificationName;
        }
        if (null !== $this->cpuCapacity) {
            $res['CpuCapacity'] = $this->cpuCapacity;
        }
        if (null !== $this->diskCapacity) {
            $res['DiskCapacity'] = $this->diskCapacity;
        }
        if (null !== $this->instanceCount) {
            $res['InstanceCount'] = $this->instanceCount;
        }
        if (null !== $this->maxCon) {
            $res['MaxCon'] = $this->maxCon;
        }
        if (null !== $this->maxTps) {
            $res['MaxTps'] = $this->maxTps;
        }
        if (null !== $this->memoryCapacity) {
            $res['MemoryCapacity'] = $this->memoryCapacity;
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
        if (isset($map['ClusterSpecificationName'])) {
            $model->clusterSpecificationName = $map['ClusterSpecificationName'];
        }
        if (isset($map['CpuCapacity'])) {
            $model->cpuCapacity = $map['CpuCapacity'];
        }
        if (isset($map['DiskCapacity'])) {
            $model->diskCapacity = $map['DiskCapacity'];
        }
        if (isset($map['InstanceCount'])) {
            $model->instanceCount = $map['InstanceCount'];
        }
        if (isset($map['MaxCon'])) {
            $model->maxCon = $map['MaxCon'];
        }
        if (isset($map['MaxTps'])) {
            $model->maxTps = $map['MaxTps'];
        }
        if (isset($map['MemoryCapacity'])) {
            $model->memoryCapacity = $map['MemoryCapacity'];
        }

        return $model;
    }
}
