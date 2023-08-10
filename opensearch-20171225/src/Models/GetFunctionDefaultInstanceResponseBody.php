<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OpenSearch\V20171225\Models;

use AlibabaCloud\SDK\OpenSearch\V20171225\Models\GetFunctionDefaultInstanceResponseBody\result;
use AlibabaCloud\Tea\Model;

class GetFunctionDefaultInstanceResponseBody extends Model
{
    /**
     * @description The error code.
     *
     * @example DefaultInstance.NotExist
     *
     * @var string
     */
    public $code;

    /**
     * @description The name of the feature.
     *
     * @example cdn_waf
     *
     * @var string
     */
    public $functionName;

    /**
     * @description The HTTP status code.
     *
     * @example 200
     *
     * @var int
     */
    public $httpCode;

    /**
     * @description The name of the instance.
     *
     * @example sh-bp1oi31w1jn4ctdyv
     *
     * @var string
     */
    public $instanceName;

    /**
     * @description The default running time.
     *
     * @example 123
     *
     * @var int
     */
    public $latency;

    /**
     * @description The error message.
     *
     * @example default instance not set.
     *
     * @var string
     */
    public $message;

    /**
     * @description The ID of the request.
     *
     * @example 062BA91F-A568-5779-8A5B-9E62C9BB3DC1
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The result of the request.
     *
     * @example {\"Pagination\": {\"TotalCount\": 0, \"PageNumber\": 1, \"PageSize\": 10}, \"AntConsortiums\": []}
     *
     * @var result
     */
    public $result;

    /**
     * @description The status of the request.
     *
     * @example OK
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'code'         => 'Code',
        'functionName' => 'FunctionName',
        'httpCode'     => 'HttpCode',
        'instanceName' => 'InstanceName',
        'latency'      => 'Latency',
        'message'      => 'Message',
        'requestId'    => 'RequestId',
        'result'       => 'Result',
        'status'       => 'Status',
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
        if (null !== $this->functionName) {
            $res['FunctionName'] = $this->functionName;
        }
        if (null !== $this->httpCode) {
            $res['HttpCode'] = $this->httpCode;
        }
        if (null !== $this->instanceName) {
            $res['InstanceName'] = $this->instanceName;
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
            $res['Result'] = null !== $this->result ? $this->result->toMap() : null;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetFunctionDefaultInstanceResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['FunctionName'])) {
            $model->functionName = $map['FunctionName'];
        }
        if (isset($map['HttpCode'])) {
            $model->httpCode = $map['HttpCode'];
        }
        if (isset($map['InstanceName'])) {
            $model->instanceName = $map['InstanceName'];
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
            $model->result = result::fromMap($map['Result']);
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
