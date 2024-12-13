<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OnsMqtt\V20200420\Models;

use AlibabaCloud\Tea\Model;

class CloseConnectionResponseBody extends Model
{
    /**
     * @description Return code of the interface: 200 indicates success. Other values indicate error codes. For details about the error codes, see Error Codes.
     *
     * @example 200
     *
     * @var int
     */
    public $code;

    /**
     * @description Call result information
     *
     * @example operation success.
     *
     * @var string
     */
    public $message;

    /**
     * @description Id of the request
     *
     * @example 82B9E503-F4A1-4F30-976F-C6999FF9****
     *
     * @var string
     */
    public $requestId;

    /**
     * @description Indicates whether the operation was successful. true means success, false means failure.
     *
     * @example True
     *
     * @var bool
     */
    public $success;
    protected $_name = [
        'code'      => 'Code',
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
     * @return CloseConnectionResponseBody
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
