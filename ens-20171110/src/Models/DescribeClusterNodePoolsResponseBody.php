<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeClusterNodePoolsResponseBody\nodePools;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeClusterNodePoolsResponseBody\page;

class DescribeClusterNodePoolsResponseBody extends Model
{
    /**
     * @var nodePools[]
     */
    public $nodePools;

    /**
     * @var page
     */
    public $page;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'nodePools' => 'NodePools',
        'page' => 'Page',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->nodePools)) {
            Model::validateArray($this->nodePools);
        }
        if (null !== $this->page) {
            $this->page->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->nodePools) {
            if (\is_array($this->nodePools)) {
                $res['NodePools'] = [];
                $n1 = 0;
                foreach ($this->nodePools as $item1) {
                    $res['NodePools'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->page) {
            $res['Page'] = null !== $this->page ? $this->page->toArray($noStream) : $this->page;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['NodePools'])) {
            if (!empty($map['NodePools'])) {
                $model->nodePools = [];
                $n1 = 0;
                foreach ($map['NodePools'] as $item1) {
                    $model->nodePools[$n1] = nodePools::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Page'])) {
            $model->page = page::fromMap($map['Page']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
