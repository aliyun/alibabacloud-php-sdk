<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInvocationResultsResponseBody\invocation;
use AlibabaCloud\Tea\Model;

class DescribeInvocationResultsResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var invocation
     */
    public $invocation;
    protected $_name = [
        'requestId'  => 'RequestId',
        'invocation' => 'Invocation',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->invocation) {
            $res['Invocation'] = null !== $this->invocation ? $this->invocation->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeInvocationResultsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Invocation'])) {
            $model->invocation = invocation::fromMap($map['Invocation']);
        }

        return $model;
    }
}
