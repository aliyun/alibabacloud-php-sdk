<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInvocationResultsResponseBody\invocation;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInvocationResultsResponseBody\invocation\invocationResults\invocationResult;

class invocationResults extends Model
{
    /**
     * @var invocationResult[]
     */
    public $invocationResult;
    protected $_name = [
        'invocationResult' => 'InvocationResult',
    ];

    public function validate()
    {
        if (\is_array($this->invocationResult)) {
            Model::validateArray($this->invocationResult);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->invocationResult) {
            if (\is_array($this->invocationResult)) {
                $res['InvocationResult'] = [];
                $n1 = 0;
                foreach ($this->invocationResult as $item1) {
                    $res['InvocationResult'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['InvocationResult'])) {
            if (!empty($map['InvocationResult'])) {
                $model->invocationResult = [];
                $n1 = 0;
                foreach ($map['InvocationResult'] as $item1) {
                    $model->invocationResult[$n1] = invocationResult::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
