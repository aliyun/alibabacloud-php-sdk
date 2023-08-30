<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SWASOPEN\V20200601\Models;

use AlibabaCloud\SDK\SWASOPEN\V20200601\Models\DescribeInvocationResultResponseBody\invocationResult;
use AlibabaCloud\Tea\Model;

class DescribeInvocationResultResponseBody extends Model
{
    /**
     * @description The execution results.
     *
     * @var invocationResult
     */
    public $invocationResult;

    /**
     * @description The request ID.
     *
     * @example 20758A-585D-4A41-A9B2-28DA8F4F****
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'invocationResult' => 'InvocationResult',
        'requestId'        => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->invocationResult) {
            $res['InvocationResult'] = null !== $this->invocationResult ? $this->invocationResult->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeInvocationResultResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InvocationResult'])) {
            $model->invocationResult = invocationResult::fromMap($map['InvocationResult']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
