<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeSceneResourceRecommendResponseBody\recommendProducts\recommendProduct\recommendInstanceSpecs;

use AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeSceneResourceRecommendResponseBody\recommendProducts\recommendProduct\recommendInstanceSpecs\recommendInstanceSpec\instanceTypes;
use AlibabaCloud\Tea\Model;

class recommendInstanceSpec extends Model
{
    /**
     * @var int
     */
    public $cores;

    /**
     * @var instanceTypes
     */
    public $instanceTypes;

    /**
     * @var float
     */
    public $memory;
    protected $_name = [
        'cores'         => 'Cores',
        'instanceTypes' => 'InstanceTypes',
        'memory'        => 'Memory',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cores) {
            $res['Cores'] = $this->cores;
        }
        if (null !== $this->instanceTypes) {
            $res['InstanceTypes'] = null !== $this->instanceTypes ? $this->instanceTypes->toMap() : null;
        }
        if (null !== $this->memory) {
            $res['Memory'] = $this->memory;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return recommendInstanceSpec
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Cores'])) {
            $model->cores = $map['Cores'];
        }
        if (isset($map['InstanceTypes'])) {
            $model->instanceTypes = instanceTypes::fromMap($map['InstanceTypes']);
        }
        if (isset($map['Memory'])) {
            $model->memory = $map['Memory'];
        }

        return $model;
    }
}
