<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models;

use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\GetFunctionResponseBody\function_;
use AlibabaCloud\Tea\Model;

class GetFunctionResponseBody extends Model
{
    /**
     * @description The information about the UDF.
     *
     * @var function_
     */
    public $function;

    /**
     * @description The request ID.
     *
     * @example 6CF95929-6D12-5A88-8CC3-4B2F4C2EXXXX
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'function' => 'Function',
        'requestId' => 'RequestId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->function) {
            $res['Function'] = null !== $this->function ? $this->function->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetFunctionResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Function'])) {
            $model->function = function_::fromMap($map['Function']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
