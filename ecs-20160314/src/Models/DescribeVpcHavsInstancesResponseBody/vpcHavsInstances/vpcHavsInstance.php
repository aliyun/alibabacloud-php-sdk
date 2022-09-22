<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeVpcHavsInstancesResponseBody\vpcHavsInstances;

use AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeVpcHavsInstancesResponseBody\vpcHavsInstances\vpcHavsInstance\havsInstances;
use AlibabaCloud\Tea\Model;

class vpcHavsInstance extends Model
{
    /**
     * @var havsInstances
     */
    public $havsInstances;

    /**
     * @var string
     */
    public $vpcId;
    protected $_name = [
        'havsInstances' => 'HavsInstances',
        'vpcId'         => 'VpcId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->havsInstances) {
            $res['HavsInstances'] = null !== $this->havsInstances ? $this->havsInstances->toMap() : null;
        }
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return vpcHavsInstance
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['HavsInstances'])) {
            $model->havsInstances = havsInstances::fromMap($map['HavsInstances']);
        }
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }

        return $model;
    }
}
