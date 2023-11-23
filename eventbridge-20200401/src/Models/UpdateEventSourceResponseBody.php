<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eventbridge\V20200401\Models;

use AlibabaCloud\Tea\Model;

class UpdateEventSourceResponseBody extends Model
{
    /**
     * @description The returned response code. Valid values:
     *
     *   Success: The request is successful.
     *   Other codes: The request failed. For more information about error codes, see Error codes.
     *
     * @example 200
     *
     * @var string
     */
    public $code;

    /**
     * @description The result of the operation.
     *
     * @example true
     *
     * @var bool
     */
    public $data;

    /**
     * @description The returned error message.
     *
     * @example Remote error. requestId: [xxxx-9D10-65DFDFA3A75D], error code: [EventSourceNotExist], message: [The event source in request is not exist! ]
     *
     * @var string
     */
    public $message;

    /**
     * @description The request ID.
     *
     * @example c057d379-ea65-41ec-a8a8-90627a968204
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
     * @return UpdateEventSourceResponseBody
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
