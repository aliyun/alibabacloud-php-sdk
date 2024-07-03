<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ess\V20220222\Models\CreateScalingGroupRequest;

use AlibabaCloud\Tea\Model;

class serverGroups extends Model
{
    /**
     * @description The port number used by each ECS instance as backend server in the vServer group. Valid values: 1 to 65535.
     *
     * @example 22
     *
     * @var int
     */
    public $port;

    /**
     * @description The ID of the server group.
     *
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
     * @example ALB
     *
     * @var string
     */
    public $type;

    /**
     * @description The weight of each ECS instance as a backend server in the server group. Valid values: 0 to 100.
     *
     * If you increase the weight for an ECS instance, the number of requests that are forwarded to the ECS instance also increases. If you set the weight for an ECS instance to 0, no requests are forwarded to the ECS instance.
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
