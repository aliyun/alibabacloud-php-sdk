<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeVpcHavsInstancesResponseBody\vpcHavsInstances\vpcHavsInstance;

use AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeVpcHavsInstancesResponseBody\vpcHavsInstances\vpcHavsInstance\havsInstances\havsInstance;
use AlibabaCloud\Tea\Model;

class havsInstances extends Model
{
    /**
     * @var havsInstance[]
     */
    public $havsInstance;
    protected $_name = [
        'havsInstance' => 'HavsInstance',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->havsInstance) {
            $res['HavsInstance'] = [];
            if (null !== $this->havsInstance && \is_array($this->havsInstance)) {
                $n = 0;
                foreach ($this->havsInstance as $item) {
                    $res['HavsInstance'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return havsInstances
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['HavsInstance'])) {
            if (!empty($map['HavsInstance'])) {
                $model->havsInstance = [];
                $n                   = 0;
                foreach ($map['HavsInstance'] as $item) {
                    $model->havsInstance[$n++] = null !== $item ? havsInstance::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
