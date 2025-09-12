<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ess\V20220222\Models\DescribeScalingGroupsResponseBody\scalingGroups;

use AlibabaCloud\Dara\Model;

class albServerGroups extends Model
{
    /**
     * @var string
     */
    public $albServerGroupId;

    /**
     * @var int
     */
    public $port;

    /**
     * @var int
     */
    public $weight;
    protected $_name = [
        'albServerGroupId' => 'AlbServerGroupId',
        'port' => 'Port',
        'weight' => 'Weight',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
