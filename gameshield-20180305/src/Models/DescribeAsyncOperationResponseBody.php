<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gameshield\V20180305\Models;

use AlibabaCloud\SDK\Gameshield\V20180305\Models\DescribeAsyncOperationResponseBody\asyncOperation;
use AlibabaCloud\Tea\Model;

class DescribeAsyncOperationResponseBody extends Model
{
    /**
     * @var asyncOperation
     */
    public $asyncOperation;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var mixed[]
     */
    public $promptInfo;
    protected $_name = [
        'asyncOperation' => 'AsyncOperation',
        'requestId'      => 'RequestId',
        'promptInfo'     => 'PromptInfo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->asyncOperation) {
            $res['AsyncOperation'] = null !== $this->asyncOperation ? $this->asyncOperation->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->promptInfo) {
            $res['PromptInfo'] = $this->promptInfo;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeAsyncOperationResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AsyncOperation'])) {
            $model->asyncOperation = asyncOperation::fromMap($map['AsyncOperation']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['PromptInfo'])) {
            $model->promptInfo = $map['PromptInfo'];
        }

        return $model;
    }
}
