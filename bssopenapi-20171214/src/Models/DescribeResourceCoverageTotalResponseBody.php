<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models;

use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\DescribeResourceCoverageTotalResponseBody\data;
use AlibabaCloud\Tea\Model;

class DescribeResourceCoverageTotalResponseBody extends Model
{
    /**
     * @description The operation that you want to perform. Set the value to DescribeResourceCoverageTotal.
     *
     * @example Success
     *
     * @var string
     */
    public $code;

    /**
     * @description The information about the total coverage data of deduction plans.
     *
     * @var data
     */
    public $data;

    /**
     * @description The type of deduction plans whose total coverage data is queried. Valid values: RI and SCU.
     *
     * @example Successful!
     *
     * @var string
     */
    public $message;

    /**
     * @description The coverage rate of deduction plans within the specified period.
     *
     * @example 79EE7556-0CFD-44EB-9CD6-B3B526E3A85F
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The beginning of the time range to query. The beginning is included in the time range. Specify the time in the format of yyyy-MM-dd HH:mm:ss.
     *
     * @example true
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
     * @return DescribeResourceCoverageTotalResponseBody
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
