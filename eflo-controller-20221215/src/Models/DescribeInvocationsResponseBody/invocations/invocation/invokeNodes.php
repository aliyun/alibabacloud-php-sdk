<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflocontroller\V20221215\Models\DescribeInvocationsResponseBody\invocations\invocation;

use AlibabaCloud\SDK\Eflocontroller\V20221215\Models\DescribeInvocationsResponseBody\invocations\invocation\invokeNodes\invokeNode;
use AlibabaCloud\Tea\Model;

class invokeNodes extends Model
{
    /**
     * @var invokeNode[]
     */
    public $invokeNode;
    protected $_name = [
        'invokeNode' => 'InvokeNode',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->invokeNode) {
            $res['InvokeNode'] = [];
            if (null !== $this->invokeNode && \is_array($this->invokeNode)) {
                $n = 0;
                foreach ($this->invokeNode as $item) {
                    $res['InvokeNode'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return invokeNodes
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InvokeNode'])) {
            if (!empty($map['InvokeNode'])) {
                $model->invokeNode = [];
                $n                 = 0;
                foreach ($map['InvokeNode'] as $item) {
                    $model->invokeNode[$n++] = null !== $item ? invokeNode::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
