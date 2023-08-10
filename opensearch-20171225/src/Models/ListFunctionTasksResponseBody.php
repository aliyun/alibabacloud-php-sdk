<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OpenSearch\V20171225\Models;

use AlibabaCloud\SDK\OpenSearch\V20171225\Models\ListFunctionTasksResponseBody\result;
use AlibabaCloud\Tea\Model;

class ListFunctionTasksResponseBody extends Model
{
    /**
     * @description The error code.
     *
     * @example 200
     *
     * @var string
     */
    public $code;

    /**
     * @description The HTTP status code.
     *
     * @example 200
     *
     * @var int
     */
    public $httpCode;

    /**
     * @description The time consumed for the request, in milliseconds.
     *
     * @example 123
     *
     * @var int
     */
    public $latency;

    /**
     * @description The error message.
     *
     * @example fail
     *
     * @var string
     */
    public $message;

    /**
     * @description The ID of the request.
     *
     * @example 1638157479281
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The returned result.
     *
     * @example [         {             "functionName": "ctr",             "progress": 100,             "status": "success",             "startTime": 100010,             "endTime": 200020,             "extendInfo": "{\"recall\":91,\"errors\":[]}",             "runId": "trigger__2021-03-05T12:18:41"         }     ]
     *
     * @var result[]
     */
    public $result;

    /**
     * @description The status of the request.
     *
     * @example 200
     *
     * @var string
     */
    public $status;

    /**
     * @description The total number of records that meet the requirements.
     *
     * @example 2
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'code'       => 'Code',
        'httpCode'   => 'HttpCode',
        'latency'    => 'Latency',
        'message'    => 'Message',
        'requestId'  => 'RequestId',
        'result'     => 'Result',
        'status'     => 'Status',
        'totalCount' => 'TotalCount',
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
        if (null !== $this->httpCode) {
            $res['HttpCode'] = $this->httpCode;
        }
        if (null !== $this->latency) {
            $res['Latency'] = $this->latency;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->result) {
            $res['Result'] = [];
            if (null !== $this->result && \is_array($this->result)) {
                $n = 0;
                foreach ($this->result as $item) {
                    $res['Result'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListFunctionTasksResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['HttpCode'])) {
            $model->httpCode = $map['HttpCode'];
        }
        if (isset($map['Latency'])) {
            $model->latency = $map['Latency'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Result'])) {
            if (!empty($map['Result'])) {
                $model->result = [];
                $n             = 0;
                foreach ($map['Result'] as $item) {
                    $model->result[$n++] = null !== $item ? result::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
