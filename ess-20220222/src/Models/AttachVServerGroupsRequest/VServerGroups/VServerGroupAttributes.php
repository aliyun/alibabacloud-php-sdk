<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ess\V20220222\Models\AttachVServerGroupsRequest\VServerGroups;

use AlibabaCloud\Tea\Model;

class VServerGroupAttributes extends Model
{
    /**
     * @example 22
     *
     * @var int
     */
    public $port;

    /**
     * @example lb-bp1u7etiogg38yvwz****
     *
     * @var string
     */
    public $VServerGroupId;

    /**
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
