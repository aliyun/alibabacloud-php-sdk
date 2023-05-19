<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models;

use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\DescribeResourceUsageTotalResponseBody\data;
use AlibabaCloud\Tea\Model;

class DescribeResourceUsageTotalResponseBody extends Model
{
    /**
     * @description The total savings.
     *
     * @example Success
     *
     * @var string
     */
    public $code;

    /**
     * @description The usage of deduction plans within the specified period.
     *
     * @var data
     */
    public $data;

    /**
     * @description The total costs of pay-as-you-go instances.
     *
     * @example Successful!
     *
     * @var string
     */
    public $message;

    /**
     * @description The status code.
     *
     * @example 364C7C81-5E5E-51A0-B738-1969D2671B05
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The operation that you want to perform. Set the value to DescribeResourceUsageTotal.
     *
     * @example True
     *
     * @var bool
     */
    public $success;
    protected $_name = [
        'code'      => 'Code',
        'data'      => 'Data',
        'message'   => 'Message',
        'requestId' => 'RequestId',
        'success'   => 'Success',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->data) {
            $res['Data'] = null !== $this->data ? $this->data->toMap() : null;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeResourceUsageTotalResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['Data'])) {
            $model->data = data::fromMap($map['Data']);
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        return $model;
    }
}
