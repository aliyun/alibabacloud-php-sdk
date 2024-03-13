<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models;

use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\ReleaseInstanceResponseBody\data;
use AlibabaCloud\Tea\Model;

class ReleaseInstanceResponseBody extends Model
{
    /**
     * @description The HTTP status code.
     *
     * @example Invalid_Product_Code
     *
     * @var string
     */
    public $code;

    /**
     * @description data
     *
     * @var data
     */
    public $data;

    /**
     * @description The description of the execution result.
     *
     * @example successful
     *
     * @var string
     */
    public $message;

    /**
     * @description The ID of the request, which can be used for troubleshooting.
     *
     * @example UUID
     *
     * @var string
     */
    public $requestId;

    /**
     * @description A value of true indicates that the execution is complete.
     *
     * A value of false indicates that an error occurs during the execution.
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
            $res['Data'] = null !== $this->data ? $this->data->toMap() : null;
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
     * @return ReleaseInstanceResponseBody
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
