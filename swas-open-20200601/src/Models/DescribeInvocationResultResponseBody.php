<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SWASOPEN\V20200601\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\SWASOPEN\V20200601\Models\DescribeInvocationResultResponseBody\invocationResult;

class DescribeInvocationResultResponseBody extends Model
{
    /**
     * @var invocationResult
     */
    public $invocationResult;
    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'invocationResult' => 'InvocationResult',
        'requestId'        => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->invocationResult) {
            $this->invocationResult->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->invocationResult) {
            $res['InvocationResult'] = null !== $this->invocationResult ? $this->invocationResult->toArray($noStream) : $this->invocationResult;
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
        if (isset($map['InvocationResult'])) {
            $model->invocationResult = invocationResult::fromMap($map['InvocationResult']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
