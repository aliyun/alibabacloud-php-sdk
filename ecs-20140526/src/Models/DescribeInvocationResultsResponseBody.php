<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInvocationResultsResponseBody\invocation;
use AlibabaCloud\Tea\Model;

class DescribeInvocationResultsResponseBody extends Model
{
    /**
     * @description The time when the command stopped being run on the instance. If you called the `StopInvocation` operation to manually stop the execution, the value is the time when you called the operation.
     *
     * @var invocation
     */
    public $invocation;

    /**
     * @description The size of the text that is truncated and discarded when the `Output` value exceeds 24 KB in size.
     *
     * @example 473469C7-AA6F-4DC5-B3DB-A3DC0DE*****
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'invocation' => 'Invocation',
        'requestId'  => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->invocation) {
            $res['Invocation'] = null !== $this->invocation ? $this->invocation->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['Invocation'])) {
            $model->invocation = invocation::fromMap($map['Invocation']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
