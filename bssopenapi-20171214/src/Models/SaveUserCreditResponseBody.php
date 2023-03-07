<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models;

use AlibabaCloud\Tea\Model;

class SaveUserCreditResponseBody extends Model
{
    /**
     * @description The error code returned if the call failed. For more information, see the "Error codes" section of the topic.
     *
     * @example 200
     *
     * @var string
     */
    public $code;

    /**
     * @description The message returned.
     *
     * @example Successful！
     *
     * @var string
     */
    public $message;

    /**
     * @description The ID of the request.
     *
     * @example 9EEAE43F-1E4D-4734-AE93-5049878AC103
     *
     * @var string
     */
    public $requestId;

    /**
     * @description Indicates whether the call is successful. A value of true indicates that the call is successful. A value of false indicates that call failed.
     *
     * @example true
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
     * @return SaveUserCreditResponseBody
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
