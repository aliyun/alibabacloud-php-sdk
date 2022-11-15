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
    public $memoryCapacity;
    protected $_name = [
        'clusterSpecificationName' => 'ClusterSpecificationName',
        'cpuCapacity'              => 'CpuCapacity',
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
        if (isset($map['MemoryCapacity'])) {
            $model->memoryCapacity = $map['MemoryCapacity'];
        }

        return $model;
    }
}
