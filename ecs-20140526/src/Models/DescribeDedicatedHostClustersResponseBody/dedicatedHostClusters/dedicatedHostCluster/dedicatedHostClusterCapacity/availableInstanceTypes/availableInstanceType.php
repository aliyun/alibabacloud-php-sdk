<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeDedicatedHostClustersResponseBody\dedicatedHostClusters\dedicatedHostCluster\dedicatedHostClusterCapacity\availableInstanceTypes;

use AlibabaCloud\Tea\Model;

class availableInstanceType extends Model
{
    /**
     * @var string
     */
    public $instanceType;

    /**
     * @var int
     */
    public $availableInstanceCapacity;
    protected $_name = [
        'instanceType'              => 'InstanceType',
        'availableInstanceCapacity' => 'AvailableInstanceCapacity',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceType) {
            $res['InstanceType'] = $this->instanceType;
        }
        if (null !== $this->availableInstanceCapacity) {
            $res['AvailableInstanceCapacity'] = $this->availableInstanceCapacity;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return availableInstanceType
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceType'])) {
            $model->instanceType = $map['InstanceType'];
        }
        if (isset($map['AvailableInstanceCapacity'])) {
            $model->availableInstanceCapacity = $map['AvailableInstanceCapacity'];
        }

        return $model;
    }
}
