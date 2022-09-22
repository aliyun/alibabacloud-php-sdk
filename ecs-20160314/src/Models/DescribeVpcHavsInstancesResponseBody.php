<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20160314\Models;

use AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeVpcHavsInstancesResponseBody\vpcHavsInstances;
use AlibabaCloud\Tea\Model;

class DescribeVpcHavsInstancesResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var vpcHavsInstances
     */
    public $vpcHavsInstances;
    protected $_name = [
        'requestId'        => 'RequestId',
        'vpcHavsInstances' => 'VpcHavsInstances',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->vpcHavsInstances) {
            $res['VpcHavsInstances'] = null !== $this->vpcHavsInstances ? $this->vpcHavsInstances->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeVpcHavsInstancesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['VpcHavsInstances'])) {
            $model->vpcHavsInstances = vpcHavsInstances::fromMap($map['VpcHavsInstances']);
        }

        return $model;
    }
}
