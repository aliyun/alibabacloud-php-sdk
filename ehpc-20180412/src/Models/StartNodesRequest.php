<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models;

use AlibabaCloud\SDK\EHPC\V20180412\Models\StartNodesRequest\instance;
use AlibabaCloud\Tea\Model;

class StartNodesRequest extends Model
{
    /**
     * @description The ID of the cluster.
     *
     * You can call the [ListClusters](~~87116~~) operation to query the cluster ID.
     * @example ehpc-hz-FYUr32****
     *
     * @var string
     */
    public $clusterId;

    /**
     * @var instance[]
     */
    public $instance;

    /**
     * @description The role of the node. Valid values:
     *
     *   Manager: management node
     *   Login: logon node
     *   Compute: compute node
     *
     * Default value: Compute
     * @example Compute
     *
     * @var string
     */
    public $role;
    protected $_name = [
        'clusterId' => 'ClusterId',
        'instance'  => 'Instance',
        'role'      => 'Role',
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
        if (null !== $this->instance) {
            $res['Instance'] = [];
            if (null !== $this->instance && \is_array($this->instance)) {
                $n = 0;
                foreach ($this->instance as $item) {
                    $res['Instance'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->role) {
            $res['Role'] = $this->role;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return StartNodesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['Instance'])) {
            if (!empty($map['Instance'])) {
                $model->instance = [];
                $n               = 0;
                foreach ($map['Instance'] as $item) {
                    $model->instance[$n++] = null !== $item ? instance::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Role'])) {
            $model->role = $map['Role'];
        }

        return $model;
    }
}
