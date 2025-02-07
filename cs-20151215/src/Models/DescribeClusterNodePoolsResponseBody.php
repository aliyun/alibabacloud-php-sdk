<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\CS\V20151215\Models\DescribeClusterNodePoolsResponseBody\nodepools;

class DescribeClusterNodePoolsResponseBody extends Model
{
    /**
     * @var nodepools[]
     */
    public $nodepools;
    protected $_name = [
        'nodepools' => 'nodepools',
    ];

    public function validate()
    {
        if (\is_array($this->nodepools)) {
            Model::validateArray($this->nodepools);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->nodepools) {
            if (\is_array($this->nodepools)) {
                $res['nodepools'] = [];
                $n1               = 0;
                foreach ($this->nodepools as $item1) {
                    $res['nodepools'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['nodepools'])) {
            if (!empty($map['nodepools'])) {
                $model->nodepools = [];
                $n1               = 0;
                foreach ($map['nodepools'] as $item1) {
                    $model->nodepools[$n1++] = nodepools::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
