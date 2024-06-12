<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ess\V20220222\Models\AttachServerGroupsRequest;

use AlibabaCloud\Tea\Model;

class serverGroups extends Model
{
    /**
     * @description The port used by ECS instances or elastic container instances after being added as backend servers to the server group.
     *
     * This parameter is required.
     * @example 22
     *
     * @var int
     */
    public $port;

    /**
     * @description The ID of the server group.
     *
     * This parameter is required.
     * @example sgp-5yc3bd9lfyh*****
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
     * This parameter is required.
     * @example ALB
     *
     * @var string
     */
    public $type;

    /**
     * @description The weight of an ECS instance or elastic container instance as a backend server of the server group. Valid values: 0 to 100.
     *
     * This parameter is required.
     * @example 100
     *
     * @var int
     */
    public $weight;
    protected $_name = [
        'port'          => 'Port',
        'serverGroupId' => 'ServerGroupId',
        'type'          => 'Type',
        'weight'        => 'Weight',
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
        if (null !== $this->weight) {
            $res['Weight'] = $this->weight;
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
        if (isset($map['Weight'])) {
            $model->weight = $map['Weight'];
        }

        return $model;
    }
}
