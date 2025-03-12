<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeClusterNetworkResponseBody;

use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeClusterNetworkResponseBody\clusterNetwork\edge;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeClusterNetworkResponseBody\clusterNetwork\node;
use AlibabaCloud\Tea\Model;

class clusterNetwork extends Model
{
    /**
     * @description An array that consists of information about the topology edge.
     *
     * @var edge[]
     */
    public $edge;

    /**
     * @description An array that consists of information about the node.
     *
     * @var node[]
     */
    public $node;
    protected $_name = [
        'edge' => 'Edge',
        'node' => 'Node',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->edge) {
            $res['Edge'] = [];
            if (null !== $this->edge && \is_array($this->edge)) {
                $n = 0;
                foreach ($this->edge as $item) {
                    $res['Edge'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->node) {
            $res['Node'] = [];
            if (null !== $this->node && \is_array($this->node)) {
                $n = 0;
                foreach ($this->node as $item) {
                    $res['Node'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return clusterNetwork
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Edge'])) {
            if (!empty($map['Edge'])) {
                $model->edge = [];
                $n           = 0;
                foreach ($map['Edge'] as $item) {
                    $model->edge[$n++] = null !== $item ? edge::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Node'])) {
            if (!empty($map['Node'])) {
                $model->node = [];
                $n           = 0;
                foreach ($map['Node'] as $item) {
                    $model->node[$n++] = null !== $item ? node::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
