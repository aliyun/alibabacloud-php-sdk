<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetTaskFlowGraphResponseBody\taskFlowGraph;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetTaskFlowGraphResponseBody\taskFlowGraph\nodes\node;

class nodes extends Model
{
    /**
     * @var node[]
     */
    public $node;
    protected $_name = [
        'node' => 'Node',
    ];

    public function validate()
    {
        if (\is_array($this->node)) {
            Model::validateArray($this->node);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->node) {
            if (\is_array($this->node)) {
                $res['Node'] = [];
                $n1 = 0;
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
        if (isset($map['Node'])) {
            if (!empty($map['Node'])) {
                $model->node = [];
                $n1 = 0;
                foreach ($map['Node'] as $item1) {
                    $model->node[$n1++] = node::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
