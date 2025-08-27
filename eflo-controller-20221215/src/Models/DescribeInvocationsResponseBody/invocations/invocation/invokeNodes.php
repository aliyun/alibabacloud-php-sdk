<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflocontroller\V20221215\Models\DescribeInvocationsResponseBody\invocations\invocation;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Eflocontroller\V20221215\Models\DescribeInvocationsResponseBody\invocations\invocation\invokeNodes\invokeNode;

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
        if (\is_array($this->invokeNode)) {
            Model::validateArray($this->invokeNode);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->invokeNode) {
            if (\is_array($this->invokeNode)) {
                $res['InvokeNode'] = [];
                $n1 = 0;
                foreach ($this->invokeNode as $item1) {
                    $res['InvokeNode'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['InvokeNode'])) {
            if (!empty($map['InvokeNode'])) {
                $model->invokeNode = [];
                $n1 = 0;
                foreach ($map['InvokeNode'] as $item1) {
                    $model->invokeNode[$n1] = invokeNode::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
