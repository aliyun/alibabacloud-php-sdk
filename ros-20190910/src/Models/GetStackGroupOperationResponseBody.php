<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models;

use AlibabaCloud\SDK\ROS\V20190910\Models\GetStackGroupOperationResponseBody\stackGroupOperation;
use AlibabaCloud\Tea\Model;

class GetStackGroupOperationResponseBody extends Model
{
    /**
     * @description The ID of the request.
     *
     * @example 14A07460-EBE7-47CA-9757-12CC4761D47A
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The details of the operation on the stack group.
     *
     * @var stackGroupOperation
     */
    public $stackGroupOperation;
    protected $_name = [
        'requestId'           => 'RequestId',
        'stackGroupOperation' => 'StackGroupOperation',
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
        if (null !== $this->stackGroupOperation) {
            $res['StackGroupOperation'] = null !== $this->stackGroupOperation ? $this->stackGroupOperation->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetStackGroupOperationResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['StackGroupOperation'])) {
            $model->stackGroupOperation = stackGroupOperation::fromMap($map['StackGroupOperation']);
        }

        return $model;
    }
}
