<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eventbridge\V20200401\Models;

use AlibabaCloud\Tea\Model;

class StartEventStreamingResponseBody extends Model
{
    /**
     * @description The returned response code. The value Success indicates that the request is successful. Other values indicate that the request failed. For more information about error codes, see Error codes.
     *
     * @example Success
     *
     * @var string
     */
    public $code;

    /**
     * @description The error message that is returned if the request failed.
     *
     * @example The event streaming [xxxx] not existed!
     *
     * @var string
     */
    public $message;

    /**
     * @description The request ID.
     *
     * @example 8CEAD24D-328D-5539-9D30-FD2D33204FBB
     *
     * @var string
     */
    public $requestId;

    /**
     * @description Indicates whether the operation is successful. The value true indicates that the operation is successful.
     *
     * @example true
     *
     * @var bool
     */
    public $success;
    protected $_name = [
        'code' => 'Code',
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
     * @return StartEventStreamingResponseBody
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
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        return $model;
    }
}
