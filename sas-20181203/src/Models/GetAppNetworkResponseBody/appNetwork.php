<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\GetAppNetworkResponseBody;

use AlibabaCloud\SDK\Sas\V20181203\Models\GetAppNetworkResponseBody\appNetwork\edge;
use AlibabaCloud\SDK\Sas\V20181203\Models\GetAppNetworkResponseBody\appNetwork\namespace_;
use AlibabaCloud\SDK\Sas\V20181203\Models\GetAppNetworkResponseBody\appNetwork\node;
use AlibabaCloud\Tea\Model;

class appNetwork extends Model
{
    /**
     * @description The information about the topology edge.
     *
     * @var edge[]
     */
    public $edge;

    /**
     * @description The namespace.
     *
     * @var namespace_[]
     */
    public $namespace;

    /**
     * @description The information about the application node.
     *
     * @var node[]
     */
    public $node;
    protected $_name = [
        'edge'      => 'Edge',
        'namespace' => 'Namespace',
        'node'      => 'Node',
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
        if (null !== $this->namespace) {
            $res['Namespace'] = [];
            if (null !== $this->namespace && \is_array($this->namespace)) {
                $n = 0;
                foreach ($this->namespace as $item) {
                    $res['Namespace'][$n++] = null !== $item ? $item->toMap() : $item;
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
     * @return appNetwork
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
        if (isset($map['Namespace'])) {
            if (!empty($map['Namespace'])) {
                $model->namespace = [];
                $n                = 0;
                foreach ($map['Namespace'] as $item) {
                    $model->namespace[$n++] = null !== $item ? namespace_::fromMap($item) : $item;
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
