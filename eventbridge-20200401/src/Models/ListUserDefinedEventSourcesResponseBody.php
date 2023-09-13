<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eventbridge\V20200401\Models;

use AlibabaCloud\SDK\Eventbridge\V20200401\Models\ListUserDefinedEventSourcesResponseBody\data;
use AlibabaCloud\Tea\Model;

class ListUserDefinedEventSourcesResponseBody extends Model
{
    /**
     * @description The returned response code. The value Success indicates that the request is successful.
     *
     * @example Success
     *
     * @var string
     */
    public $code;

    /**
     * @description The returned data.
     *
     * @var data
     */
    public $data;

    /**
     * @description The returned error message.
     *
     * @example InvalidArgument
     *
     * @var string
     */
    public $message;

    /**
     * @description The request ID.
     *
     * @example 5169654A-7059-57E3-BFD9-33C7E012EA1B
     *
     * @var string
     */
    public $requestId;

    /**
     * @description Indicates whether the operation is successful. Valid values: true and false.
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
     * @return ListUserDefinedEventSourcesResponseBody
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
