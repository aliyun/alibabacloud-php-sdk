<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInvocationResultsResponseBody\invocation;

class DescribeInvocationResultsResponseBody extends Model
{
    /**
     * @var invocation
     */
    public $invocation;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'invocation' => 'Invocation',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->invocation) {
            $this->invocation->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->invocation) {
            $res['Invocation'] = null !== $this->invocation ? $this->invocation->toArray($noStream) : $this->invocation;
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
        if (isset($map['Invocation'])) {
            $model->invocation = invocation::fromMap($map['Invocation']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
