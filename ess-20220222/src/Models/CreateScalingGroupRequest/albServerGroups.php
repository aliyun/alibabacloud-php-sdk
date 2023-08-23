<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ess\V20220222\Models\CreateScalingGroupRequest;

use AlibabaCloud\Tea\Model;

class albServerGroups extends Model
{
    /**
     * @description The ID of the ALB server group that you want to associate with the scaling group.
     *
     * You can associate only a limited number of ALB server groups with a scaling group. Go to [Quota Center](https://quotas.console.aliyun.com/products/ess/quotas) to check the maximum number of ALB server groups that you can associate with a scaling group.
     * @example sgp-ddwb0y0g6y9bjm****
     *
     * @var string
     */
    public $albServerGroupId;

    /**
     * @description The port number that is used by an ECS instance after Auto Scaling adds the ECS instance to the ALB server group. Valid values: 1 to 65535.
     *
     * @example 22
     *
     * @var int
     */
    public $port;

    /**
     * @description The weight of an ECS instance after Auto Scaling adds the ECS instance to the ALB server group as a backend server. If you increase the weight of an ECS instance in the ALB server group, the number of access requests that are forwarded to the ECS instance increases. If you set the Weight parameter for an ECS instance in the ALB server group to 0, no access requests are forwarded to the ECS instance. Valid values: 0 to 100.
     *
     * @example 100
     *
     * @var int
     */
    public $weight;
    protected $_name = [
        'albServerGroupId' => 'AlbServerGroupId',
        'port'             => 'Port',
        'weight'           => 'Weight',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->albServerGroupId) {
            $res['AlbServerGroupId'] = $this->albServerGroupId;
        }
        if (null !== $this->port) {
            $res['Port'] = $this->port;
        }
        if (null !== $this->weight) {
            $res['Weight'] = $this->weight;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return albServerGroups
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AlbServerGroupId'])) {
            $model->albServerGroupId = $map['AlbServerGroupId'];
        }
        if (isset($map['Port'])) {
            $model->port = $map['Port'];
        }
        if (isset($map['Weight'])) {
            $model->weight = $map['Weight'];
        }

        return $model;
    }
}
