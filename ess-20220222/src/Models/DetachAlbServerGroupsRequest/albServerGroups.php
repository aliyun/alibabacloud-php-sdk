<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ess\V20220222\Models\DetachAlbServerGroupsRequest;

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
     * @description The port number used by the ECS instances in the ALB server group.
     *
     * This parameter is required.
     * @example 22
     *
     * @var int
     */
    public $port;
    protected $_name = [
        'albServerGroupId' => 'AlbServerGroupId',
        'port'             => 'Port',
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

        return $model;
    }
}
