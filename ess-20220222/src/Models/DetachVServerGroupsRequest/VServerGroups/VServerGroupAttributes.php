<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ess\V20220222\Models\DetachVServerGroupsRequest\VServerGroups;

use AlibabaCloud\Tea\Model;

class VServerGroupAttributes extends Model
{
    /**
     * @description The port number that Auto Scaling employs to incorporate instances into the vServer group. Valid values: 1 to 65535.
     *
     * @example 22
     *
     * @var int
     */
    public $port;

    /**
     * @description The ID of the backend vServer group.
     *
     * @example rsp-bp1jp1rge****
     *
     * @var string
     */
    public $VServerGroupId;
    protected $_name = [
        'port'           => 'Port',
        'VServerGroupId' => 'VServerGroupId',
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

        return $model;
    }
}
