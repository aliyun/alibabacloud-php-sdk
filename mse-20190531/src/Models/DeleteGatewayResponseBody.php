<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models;

use AlibabaCloud\SDK\Mse\V20190531\Models\DeleteGatewayResponseBody\data;
use AlibabaCloud\Tea\Model;

class DeleteGatewayResponseBody extends Model
{
    /**
     * @description The request is processed successfully.
     *
     * @example 200
     *
     * @var int
     */
    public $code;

    /**
     * @description Indicates whether the request is successful. Valid values:
     *
     * - `false`: The request fails.
     * @var data
     */
    public $data;

    /**
     * @description The ID of the request.
     *
     * @example 200
     *
     * @var int
     */
    public $httpStatusCode;

    /**
     * @description The HTTP status code returned.
     *
     * @example The message returned.
     *
     * - If the request fails, an error message is returned, such as the "TaskId not found" message.
     * @var string
     */
    public $message;

    /**
     * @description The data structure.
     *
     * @example 2FFEA345-BE30-5FE0-8885-42E2DEFD5FE6
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The status code returned. A value of 200 indicates that the request is successful. Other values indicate that the request fails.
     *
     * @example true
     *
     * @var bool
     */
    public $success;
    protected $_name = [
        'code'           => 'Code',
        'data'           => 'Data',
        'httpStatusCode' => 'HttpStatusCode',
        'message'        => 'Message',
        'requestId'      => 'RequestId',
        'success'        => 'Success',
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
        if (null !== $this->httpStatusCode) {
            $res['HttpStatusCode'] = $this->httpStatusCode;
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
     * @return DeleteGatewayResponseBody
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
        if (isset($map['HttpStatusCode'])) {
            $model->httpStatusCode = $map['HttpStatusCode'];
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
