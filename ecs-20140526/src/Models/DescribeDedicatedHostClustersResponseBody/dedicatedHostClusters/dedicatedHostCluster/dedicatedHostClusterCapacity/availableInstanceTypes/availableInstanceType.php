<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeDedicatedHostClustersResponseBody\dedicatedHostClusters\dedicatedHostCluster\dedicatedHostClusterCapacity\availableInstanceTypes;

use AlibabaCloud\Dara\Model;

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
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
