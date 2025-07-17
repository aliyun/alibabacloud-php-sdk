<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\Tea\Model;

class DeleteTraceAppResponseBody extends Model
{
    /**
     * @description The status code. The status code 200 indicates that the request was successful.
     *
     * @example 200
     *
     * @var int
     */
    public $code;

    /**
     * @description The response in JSON format, including the HTTP status code, error code, response message, and trace ID.
     *
     * @example "{\\\\"code\\\\":200,\\\\"data\\\\":\\\\"{\\\\\\\\\\"code\\\\\\\\\\":200,\\\\\\\\\\"data\\\\\\\\\\":true,\\\\\\\\\\"errorCode\\\\\\\\\\":\\\\\\\\\\"The application is deleted\\\\\\\\\\",\\\\\\\\\\"message\\\\\\\\\\":\\\\\\\\\\"The application is deleted\\\\\\\\\\",\\\\\\\\\\"success\\\\\\\\\\":true,\\\\\\\\\\"traceId\\\\\\\\\\":\\\\\\\\\\"0bc0594d15954826692915817e\\*\\*\\*\\*\\\\\\\\\\"}\\\\",\\\\"errorCode\\\\":\\\\"The application is deleted\\\\",\\\\"message\\\\":\\\\"The application is deleted\\\\",\\\\"success\\\\":true,\\\\"traceId\\\\":\\\\"0ab2646915954826692568137d\\*\\*\\*\\*\\\\"}
     *
     * @var string
     */
    public $data;

    /**
     * @description The returned message.
     *
     * @example Internal error. Please try again. Contact the DingTalk service account if the issue                              persists after multiple retries.
     *
     * @var string
     */
    public $message;

    /**
     * @description The ID of the request.
     *
     * @example 46355DD8-FC56-40C5-BFC6-269DE4F9****
     *
     * @var string
     */
    public $requestId;

    /**
     * @description Indicates whether the request was successful. Valid values:
     *
     * true: The request was successful.
     *
     * false: The request failed.
     *
     * @example true
     *
     * @var bool
     */
    public $success;
    protected $_name = [
        'code' => 'Code',
        'data' => 'Data',
        'message' => 'Message',
        'requestId' => 'RequestId',
        'success' => 'Success',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->data) {
            $res['Data'] = $this->data;
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
     * @return DeleteTraceAppResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['Data'])) {
            $model->data = $map['Data'];
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
