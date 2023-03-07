<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models;

use AlibabaCloud\Tea\Model;

class GetHybridClusterConfigRequest extends Model
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
     * @description The name of the on-premises compute node. You can call this operation to query the configurations of the on-premises compute node.
     *
     * By default, the operation queries the configurations of a cluster.
     * @example testNode
     *
     * @var string
     */
    public $node;
    protected $_name = [
        'clusterId' => 'ClusterId',
        'node'      => 'Node',
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
        if (null !== $this->node) {
            $res['Node'] = $this->node;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetHybridClusterConfigRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['Node'])) {
            $model->node = $map['Node'];
        }

        return $model;
    }
}
