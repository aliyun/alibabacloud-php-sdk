<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Quickbipublic\V20220101\Models;

use AlibabaCloud\SDK\Quickbipublic\V20220101\Models\QueryDataServiceResponseBody\result;
use AlibabaCloud\Tea\Model;

class QueryDataServiceResponseBody extends Model
{
    /**
     * @description The list of parameter names of the returned parameters. The value is a string of the List type.
     *
     * @example 78C1AA2D-9201-599E-A0BA-6FC462E57A95
     *
     * @var string
     */
    public $requestId;

    /**
     * @description Indicates whether the request is successful. Valid values:
     *
     *   true: The request was successful.
     *   false: The request failed.
     *
     * @var result
     */
    public $result;

    /**
     * @description { "area": ["East China", "North China"], "shopping_date": "2019Q1", }
     *
     * @example true
     *
     * @var bool
     */
    public $success;
    protected $_name = [
        'requestId' => 'RequestId',
        'result'    => 'Result',
        'success'   => 'Success',
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
        if (null !== $this->result) {
            $res['Result'] = null !== $this->result ? $this->result->toMap() : null;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryDataServiceResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Result'])) {
            $model->result = result::fromMap($map['Result']);
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        return $model;
    }
}
