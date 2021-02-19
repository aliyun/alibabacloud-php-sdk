<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ess\V20140828\Models\DetachVServerGroupsRequest\VServerGroup;

use AlibabaCloud\Tea\Model;

class VServerGroupAttribute extends Model
{
    /**
     * @var string
     */
    public $VServerGroupId;

    /**
     * @var int
     */
    public $port;
    protected $_name = [
        'VServerGroupId' => 'VServerGroupId',
        'port'           => 'Port',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->VServerGroupId) {
            $res['VServerGroupId'] = $this->VServerGroupId;
        }
        if (null !== $this->port) {
            $res['Port'] = $this->port;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return VServerGroupAttribute
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['VServerGroupId'])) {
            $model->VServerGroupId = $map['VServerGroupId'];
        }
        if (isset($map['Port'])) {
            $model->port = $map['Port'];
        }

        return $model;
    }
}
