<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\CS\V20151215\Models\DescribeClusterNodesResponseBody\nodes;
use AlibabaCloud\SDK\CS\V20151215\Models\DescribeClusterNodesResponseBody\page;

class DescribeClusterNodesResponseBody extends Model
{
    /**
     * @var nodes[]
     */
    public $nodes;
    /**
     * @var page
     */
    public $page;
    protected $_name = [
        'nodes' => 'nodes',
        'page'  => 'page',
    ];

    public function validate()
    {
        if (\is_array($this->nodes)) {
            Model::validateArray($this->nodes);
        }
        if (null !== $this->page) {
            $this->page->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->nodes) {
            if (\is_array($this->nodes)) {
                $res['nodes'] = [];
                $n1           = 0;
                foreach ($this->nodes as $item1) {
                    $res['nodes'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->page) {
            $res['page'] = null !== $this->page ? $this->page->toArray($noStream) : $this->page;
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
        if (isset($map['nodes'])) {
            if (!empty($map['nodes'])) {
                $model->nodes = [];
                $n1           = 0;
                foreach ($map['nodes'] as $item1) {
                    $model->nodes[$n1++] = nodes::fromMap($item1);
                }
            }
        }

        if (isset($map['page'])) {
            $model->page = page::fromMap($map['page']);
        }

        return $model;
    }
}
