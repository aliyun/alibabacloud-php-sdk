<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ess\V20220222\Models\AttachVServerGroupsRequest\VServerGroups;

use AlibabaCloud\Dara\Model;

class VServerGroupAttributes extends Model
{
    /**
     * @var int
     */
    public $port;

    /**
     * @var string
     */
    public $VServerGroupId;

    /**
     * @var int
     */
    public $weight;
    protected $_name = [
        'port' => 'Port',
        'VServerGroupId' => 'VServerGroupId',
        'weight' => 'Weight',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
