<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models;

use AlibabaCloud\Tea\Model;

class AddLocalNodesRequest extends Model
{
    /**
     * @description The ID of the cluster.
     *
     * @example ehpc-hz-FYUr32****
     *
     * @var string
     */
    public $clusterId;

    /**
     * @description The information of the local node. A JSON string that contains the HostName, IpAddress, CpuCores, and Memory (Unit: MB) of the local node.
     *
     * @example [{"HostName":"test-HostName","IpAddress":"192.168.**.**"},{"CpuCores":2,"Memory":1024}]
     *
     * @var string
     */
    public $nodes;

    /**
     * @description The queue to which to add the local node.
     *
     * @example test.q
     *
     * @var string
     */
    public $queue;
    protected $_name = [
        'clusterId' => 'ClusterId',
        'nodes'     => 'Nodes',
        'queue'     => 'Queue',
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
        if (null !== $this->nodes) {
            $res['Nodes'] = $this->nodes;
        }
        if (null !== $this->queue) {
            $res['Queue'] = $this->queue;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AddLocalNodesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['Nodes'])) {
            $model->nodes = $map['Nodes'];
        }
        if (isset($map['Queue'])) {
            $model->queue = $map['Queue'];
        }

        return $model;
    }
}
