<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeVpcHavsInstancesResponseBody;

use AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeVpcHavsInstancesResponseBody\vpcHavsInstances\vpcHavsInstance;
use AlibabaCloud\Tea\Model;

class vpcHavsInstances extends Model
{
    /**
     * @var vpcHavsInstance[]
     */
    public $vpcHavsInstance;
    protected $_name = [
        'vpcHavsInstance' => 'VpcHavsInstance',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->vpcHavsInstance) {
            $res['VpcHavsInstance'] = [];
            if (null !== $this->vpcHavsInstance && \is_array($this->vpcHavsInstance)) {
                $n = 0;
                foreach ($this->vpcHavsInstance as $item) {
                    $res['VpcHavsInstance'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return vpcHavsInstances
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['VpcHavsInstance'])) {
            if (!empty($map['VpcHavsInstance'])) {
                $model->vpcHavsInstance = [];
                $n                      = 0;
                foreach ($map['VpcHavsInstance'] as $item) {
                    $model->vpcHavsInstance[$n++] = null !== $item ? vpcHavsInstance::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
