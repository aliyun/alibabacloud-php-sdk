<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInstanceTopologyResponseBody\topologys;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInstanceTopologyResponseBody\topologys\topology\networkNodes;

class topology extends Model
{
    /**
     * @var string
     */
    public $hostId;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var networkNodes
     */
    public $networkNodes;
    protected $_name = [
        'hostId' => 'HostId',
        'instanceId' => 'InstanceId',
        'networkNodes' => 'NetworkNodes',
    ];

    public function validate()
    {
        if (null !== $this->networkNodes) {
            $this->networkNodes->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->hostId) {
            $res['HostId'] = $this->hostId;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->networkNodes) {
            $res['NetworkNodes'] = null !== $this->networkNodes ? $this->networkNodes->toArray($noStream) : $this->networkNodes;
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
        if (isset($map['HostId'])) {
            $model->hostId = $map['HostId'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['NetworkNodes'])) {
            $model->networkNodes = networkNodes::fromMap($map['NetworkNodes']);
        }

        return $model;
    }
}
