<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeClusterNetworkResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeClusterNetworkResponseBody\clusterNetwork\edge;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeClusterNetworkResponseBody\clusterNetwork\node;

class clusterNetwork extends Model
{
    /**
     * @var edge[]
     */
    public $edge;
    /**
     * @var node[]
     */
    public $node;
    protected $_name = [
        'edge' => 'Edge',
        'node' => 'Node',
    ];

    public function validate()
    {
        if (\is_array($this->edge)) {
            Model::validateArray($this->edge);
        }
        if (\is_array($this->node)) {
            Model::validateArray($this->node);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->edge) {
            if (\is_array($this->edge)) {
                $res['Edge'] = [];
                $n1          = 0;
                foreach ($this->edge as $item1) {
                    $res['Edge'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->node) {
            if (\is_array($this->node)) {
                $res['Node'] = [];
                $n1          = 0;
                foreach ($this->node as $item1) {
                    $res['Node'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
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
        if (isset($map['Edge'])) {
            if (!empty($map['Edge'])) {
                $model->edge = [];
                $n1          = 0;
                foreach ($map['Edge'] as $item1) {
                    $model->edge[$n1++] = edge::fromMap($item1);
                }
            }
        }

        if (isset($map['Node'])) {
            if (!empty($map['Node'])) {
                $model->node = [];
                $n1          = 0;
                foreach ($map['Node'] as $item1) {
                    $model->node[$n1++] = node::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
