<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\Tea\Model;

class DeleteAppListResponseBody extends Model
{
    /**
     * @description The HTTP status code. 2XX indicates that the request was successful. 3XX indicates that the request was redirected. 4XX indicates that a request error occurred. 5XX indicates that a server error occurred.
     *
     * @example 200
     *
     * @var int
     */
    public $code;

    /**
     * @description The returned message.
     *
     * @example "{\\"code\\":200,\\"data\\":\\"{\\\\\\"code\\\\\\":200,\\\\\\"data\\\\\\":true,\\\\\\"errorCode\\\\ \\":\\\\\\"Deletion of application successful\\\\\\",\\\\\\"Message\\\\\\":\\\\\\"Deletion of application successful\\\\\\",\\\\\\"Successful\\\\\\":true,\\ \\\\"traceId\\\\\\":\\\\\\"0bc1667516940677164677396d0088\\\\\\"}\\",\\"errorCode\\":\\"Batch deletion of applications successful\\",\\"message\\":\\"Batch deletion of applications successful\\ ",\\"Success\\":true,\\"traceId\\":\\"210f470416940677161213505e0e7a\\"}"
     *
     * @var string
     */
    public $data;

    /**
     * @description The error message returned when the request parameters are invalid.
     *
     * @example "Deletion of application successful"
     *
     * @var string
     */
    public $message;

    /**
     * @description The request ID.
     *
     * @example 4B446DF2-3DDD-4B5B-8E3F-D5225120****
     *
     * @var string
     */
    public $requestId;

    /**
     * @description Indicates whether the specified applications are deleted. Valid values:
     *
     *   `true`: The applications are deleted.
     *   `false`: The applications failed to be deleted.
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
     * @return DeleteAppListResponseBody
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
