<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflocontroller\V20221215\Models;

use AlibabaCloud\SDK\Eflocontroller\V20221215\Models\ReimageNodesRequest\nodes;
use AlibabaCloud\Tea\Model;

class ReimageNodesRequest extends Model
{
    /**
     * @description Cluster ID
     *
     * @example i15dfa12e8f27c44f4a006c2c8bb
     *
     * @var string
     */
    public $clusterId;

    /**
     * @description Whether to allow skipping failed node tasks, default value is False
     *
     * @example False
     *
     * @var bool
     */
    public $ignoreFailedNodeTasks;

    /**
     * @description Node list
     *
     * @var nodes[]
     */
    public $nodes;

    /**
     * @description Custom data
     *
     * @example #!/bin/sh
     * echo "Hello World. The time is now $(date -R)!" | tee /root/userdata_test.txt
     * @var string
     */
    public $userData;
    protected $_name = [
        'clusterId'             => 'ClusterId',
        'ignoreFailedNodeTasks' => 'IgnoreFailedNodeTasks',
        'nodes'                 => 'Nodes',
        'userData'              => 'UserData',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->ignoreFailedNodeTasks) {
            $res['IgnoreFailedNodeTasks'] = $this->ignoreFailedNodeTasks;
        }
        if (null !== $this->nodes) {
            $res['Nodes'] = [];
            if (null !== $this->nodes && \is_array($this->nodes)) {
                $n = 0;
                foreach ($this->nodes as $item) {
                    $res['Nodes'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->userData) {
            $res['UserData'] = $this->userData;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ReimageNodesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['IgnoreFailedNodeTasks'])) {
            $model->ignoreFailedNodeTasks = $map['IgnoreFailedNodeTasks'];
        }
        if (isset($map['Nodes'])) {
            if (!empty($map['Nodes'])) {
                $model->nodes = [];
                $n            = 0;
                foreach ($map['Nodes'] as $item) {
                    $model->nodes[$n++] = null !== $item ? nodes::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['UserData'])) {
            $model->userData = $map['UserData'];
        }

        return $model;
    }
}
