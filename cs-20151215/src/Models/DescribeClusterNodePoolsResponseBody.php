<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models;

use AlibabaCloud\SDK\CS\V20151215\Models\DescribeClusterNodePoolsResponseBody\nodepools;
use AlibabaCloud\Tea\Model;

class DescribeClusterNodePoolsResponseBody extends Model
{
    /**
     * @description A list of node pools.
     *
     * @var nodepools[]
     */
    public $nodepools;
    protected $_name = [
        'nodepools' => 'nodepools',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->nodepools) {
            $res['nodepools'] = [];
            if (null !== $this->nodepools && \is_array($this->nodepools)) {
                $n = 0;
                foreach ($this->nodepools as $item) {
                    $res['nodepools'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeClusterNodePoolsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['nodepools'])) {
            if (!empty($map['nodepools'])) {
                $model->nodepools = [];
                $n                = 0;
                foreach ($map['nodepools'] as $item) {
                    $model->nodepools[$n++] = null !== $item ? nodepools::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
