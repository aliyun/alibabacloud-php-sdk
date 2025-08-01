<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiLLMTrace\V20240311\Models;

use AlibabaCloud\Tea\Model;

class ListTracesDatasResponseBody extends Model
{
    /**
     * @description The internal error code. This parameter is returned only when an error occurs.
     *
     * @example ExecutionFailure
     *
     * @var string
     */
    public $code;

    /**
     * @description The error message. This parameter is returned only when an error occurs.
     *
     * @example failed to get trace data
     *
     * @var string
     */
    public $message;

    /**
     * @description POP request id
     *
     * @example 6A87228C-969A-1381-98CF-AE07AE630FA5
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The total number of traces that meet the condition.
     *
     * @example 22
     *
     * @var int
     */
    public $totalCount;

    /**
     * @description The JSON array with each element being a trace\\"s JSON string. Length of the array is equal to or less than the page size parameter value.
     *
     * @var mixed[]
     */
    public $traces;
    protected $_name = [
        'code' => 'Code',
        'message' => 'Message',
        'requestId' => 'RequestId',
        'totalCount' => 'TotalCount',
        'traces' => 'Traces',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }
        if (null !== $this->traces) {
            $res['Traces'] = $this->traces;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListTracesDatasResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }
        if (isset($map['Traces'])) {
            if (!empty($map['Traces'])) {
                $model->traces = $map['Traces'];
            }
        }

        return $model;
    }
}
