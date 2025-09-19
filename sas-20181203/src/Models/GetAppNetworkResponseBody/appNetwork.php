<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\GetAppNetworkResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sas\V20181203\Models\GetAppNetworkResponseBody\appNetwork\edge;
use AlibabaCloud\SDK\Sas\V20181203\Models\GetAppNetworkResponseBody\appNetwork\namespace_;
use AlibabaCloud\SDK\Sas\V20181203\Models\GetAppNetworkResponseBody\appNetwork\node;

class appNetwork extends Model
{
    /**
     * @var edge[]
     */
    public $edge;

    /**
     * @var namespace_[]
     */
    public $namespace;

    /**
     * @var node[]
     */
    public $node;
    protected $_name = [
        'edge' => 'Edge',
        'namespace' => 'Namespace',
        'node' => 'Node',
    ];

    public function validate()
    {
        if (\is_array($this->edge)) {
            Model::validateArray($this->edge);
        }
        if (\is_array($this->namespace)) {
            Model::validateArray($this->namespace);
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
                $n1 = 0;
                foreach ($this->edge as $item1) {
                    $res['Edge'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->namespace) {
            if (\is_array($this->namespace)) {
                $res['Namespace'] = [];
                $n1 = 0;
                foreach ($this->namespace as $item1) {
                    $res['Namespace'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->node) {
            if (\is_array($this->node)) {
                $res['Node'] = [];
                $n1 = 0;
                foreach ($this->node as $item1) {
                    $res['Node'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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
                $n1 = 0;
                foreach ($map['Edge'] as $item1) {
                    $model->edge[$n1] = edge::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Namespace'])) {
            if (!empty($map['Namespace'])) {
                $model->namespace = [];
                $n1 = 0;
                foreach ($map['Namespace'] as $item1) {
                    $model->namespace[$n1] = namespace_::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Node'])) {
            if (!empty($map['Node'])) {
                $model->node = [];
                $n1 = 0;
                foreach ($map['Node'] as $item1) {
                    $model->node[$n1] = node::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
