<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflocontroller\V20221215\Models\DescribeInvocationsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Eflocontroller\V20221215\Models\DescribeInvocationsResponseBody\invocations\invocation;

class invocations extends Model
{
    /**
     * @var invocation[]
     */
    public $invocation;
    protected $_name = [
        'invocation' => 'Invocation',
    ];

    public function validate()
    {
        if (\is_array($this->invocation)) {
            Model::validateArray($this->invocation);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->invocation) {
            if (\is_array($this->invocation)) {
                $res['Invocation'] = [];
                $n1                = 0;
                foreach ($this->invocation as $item1) {
                    $res['Invocation'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['Invocation'])) {
            if (!empty($map['Invocation'])) {
                $model->invocation = [];
                $n1                = 0;
                foreach ($map['Invocation'] as $item1) {
                    $model->invocation[$n1++] = invocation::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
