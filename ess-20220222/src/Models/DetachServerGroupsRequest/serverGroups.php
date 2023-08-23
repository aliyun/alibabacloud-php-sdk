<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ess\V20220222\Models\DetachServerGroupsRequest;

use AlibabaCloud\Tea\Model;

class serverGroups extends Model
{
    /**
     * @description The port number that is used by an ECS instance after Auto Scaling adds the ECS instance to the server group.
     *
     * @example 22
     *
     * @var int
     */
    public $port;

    /**
     * @description The ID of the server group.
     *
     * @example sgp-1gv2uidn2msy****
     *
     * @var string
     */
    public $serverGroupId;

    /**
     * @description The type of the server group. Valid values:
     *
     *   ALB
     *   NLB
     *
     * @example ALB
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'port'          => 'Port',
        'serverGroupId' => 'ServerGroupId',
        'type'          => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->port) {
            $res['Port'] = $this->port;
        }
        if (null !== $this->serverGroupId) {
            $res['ServerGroupId'] = $this->serverGroupId;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return serverGroups
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Port'])) {
            $model->port = $map['Port'];
        }
        if (isset($map['ServerGroupId'])) {
            $model->serverGroupId = $map['ServerGroupId'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
