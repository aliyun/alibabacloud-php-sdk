<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ess\V20220222\Models\AttachAlbServerGroupsRequest;

use AlibabaCloud\Tea\Model;

class albServerGroups extends Model
{
    /**
     * @description The ID of the ALB server group.
     *
     * You can associate only a limited number of ALB server groups with a scaling group. To view the quota or manually request a quota increase, go to [Quota Center](https://quotas.console.aliyun.com/products/ess/quotas).
     * @example sgp-ddwb0y0g6y9bjm****
     *
     * @var string
     */
    public $albServerGroupId;

    /**
     * @description The port number used by the ECS instance after the ECS instance is added to the ALB server group. Valid values: 1 to 65535.
     *
     * @example 22
     *
     * @var int
     */
    public $port;

    /**
     * @description The weight of the ECS instance as a backend server after the instance is added to the ALB server group.
     *
     * If you increase the weight of an ECS instance in an ALB server group, the number of access requests that are forwarded to the ECS instance increases. If you set the Weight parameter for an ECS instance to 0, no access requests are forwarded to the ECS instance. Valid values: 0 to 100.
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
