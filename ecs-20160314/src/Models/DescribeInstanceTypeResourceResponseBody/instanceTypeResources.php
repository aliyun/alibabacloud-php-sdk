<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeInstanceTypeResourceResponseBody;

use AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeInstanceTypeResourceResponseBody\instanceTypeResources\instanceTypeResource;
use AlibabaCloud\Tea\Model;

class instanceTypeResources extends Model
{
    /**
     * @var instanceTypeResource[]
     */
    public $instanceTypeResource;
    protected $_name = [
        'instanceTypeResource' => 'InstanceTypeResource',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceTypeResource) {
            $res['InstanceTypeResource'] = [];
            if (null !== $this->instanceTypeResource && \is_array($this->instanceTypeResource)) {
                $n = 0;
                foreach ($this->instanceTypeResource as $item) {
                    $res['InstanceTypeResource'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return instanceTypeResources
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceTypeResource'])) {
            if (!empty($map['InstanceTypeResource'])) {
                $model->instanceTypeResource = [];
                $n                           = 0;
                foreach ($map['InstanceTypeResource'] as $item) {
                    $model->instanceTypeResource[$n++] = null !== $item ? instanceTypeResource::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
