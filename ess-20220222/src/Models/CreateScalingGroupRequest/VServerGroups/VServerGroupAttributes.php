<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ess\V20220222\Models\CreateScalingGroupRequest\VServerGroups;

use AlibabaCloud\Tea\Model;

class VServerGroupAttributes extends Model
{
    /**
     * @description The port number that is used by an ECS instance after Auto Scaling adds the ECS instance to the backend vServer group. Valid values: 1 to 65535.
     *
     * @example 22
     *
     * @var int
     */
    public $port;

    /**
     * @description The ID of the backend vServer group.
     *
     * @example rsp-bp1443g77****
     *
     * @var string
     */
    public $VServerGroupId;

    /**
     * @description The weight of an ECS instance after Auto Scaling adds the ECS instance to the backend vServer group as a backend server. If you increase the weight of an ECS instance in the backend vServer group, the number of access requests that are forwarded to the ECS instance also increases. If you set the Weight parameter of an ECS instance in the backend vServer group to 0, no access requests are forwarded to the ECS instance. Valid values: 0 to 100. Default value: 50.
     *
     * @example 100
     *
     * @var int
     */
    public $weight;
    protected $_name = [
        'port'           => 'Port',
        'VServerGroupId' => 'VServerGroupId',
        'weight'         => 'Weight',
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
        if (null !== $this->VServerGroupId) {
            $res['VServerGroupId'] = $this->VServerGroupId;
        }
        if (null !== $this->weight) {
            $res['Weight'] = $this->weight;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return VServerGroupAttributes
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Port'])) {
            $model->port = $map['Port'];
        }
        if (isset($map['VServerGroupId'])) {
            $model->VServerGroupId = $map['VServerGroupId'];
        }
        if (isset($map['Weight'])) {
            $model->weight = $map['Weight'];
        }

        return $model;
    }
}
