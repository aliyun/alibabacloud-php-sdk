<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hsm\V20231113\Models\GetClusterResponseBody\cluster;

use AlibabaCloud\Tea\Model;

class instances extends Model
{
    /**
     * @example hsm-cn-g6z3v0uf****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example true
     *
     * @var bool
     */
    public $master;

    /**
     * @example 1
     *
     * @var int
     */
    public $nodeId;
    protected $_name = [
        'instanceId' => 'InstanceId',
        'master'     => 'Master',
        'nodeId'     => 'NodeId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->master) {
            $res['Master'] = $this->master;
        }
        if (null !== $this->nodeId) {
            $res['NodeId'] = $this->nodeId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return instances
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['Master'])) {
            $model->master = $map['Master'];
        }
        if (isset($map['NodeId'])) {
            $model->nodeId = $map['NodeId'];
        }

        return $model;
    }
}
