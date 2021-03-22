<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeDedicatedHostClustersResponseBody\dedicatedHostClusters\dedicatedHostCluster\dedicatedHostClusterCapacity\availableInstanceTypes;

use AlibabaCloud\Tea\Model;

class availableInstanceType extends Model
{
    /**
     * @var int
     */
    public $availableInstanceCapacity;

    /**
     * @var string
     */
    public $instanceType;
    protected $_name = [
        'availableInstanceCapacity' => 'AvailableInstanceCapacity',
        'instanceType'              => 'InstanceType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->availableInstanceCapacity) {
            $res['AvailableInstanceCapacity'] = $this->availableInstanceCapacity;
        }
        if (null !== $this->instanceType) {
            $res['InstanceType'] = $this->instanceType;
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
        if (isset($map['AvailableInstanceCapacity'])) {
            $model->availableInstanceCapacity = $map['AvailableInstanceCapacity'];
        }
        if (isset($map['InstanceType'])) {
            $model->instanceType = $map['InstanceType'];
        }

        return $model;
    }
}
