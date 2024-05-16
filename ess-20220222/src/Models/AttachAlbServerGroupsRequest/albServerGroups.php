<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ess\V20220222\Models\AttachAlbServerGroupsRequest;

use AlibabaCloud\Tea\Model;

class albServerGroups extends Model
{
    /**
     * @description The ID of the ALB server group.
     *
     * This parameter is required.
     * @example sgp-ddwb0y0g6y9bjm****
     *
     * @var string
     */
    public $albServerGroupId;

    /**
     * @description The port number used by the ECS instance after the ECS instance is added to the ALB server group. Valid values: 1 to 65535.
     *
     * This parameter is required.
     * @example 22
     *
     * @var int
     */
    public $port;

    /**
     * @description The weight of the ECS instance as a backend server after the instance is added to the ALB server group.
     *
     * This parameter is required.
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
