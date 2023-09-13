<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eventbridge\V20200401\Models;

use AlibabaCloud\SDK\Eventbridge\V20200401\Models\ListEventStreamingsResponseBody\data;
use AlibabaCloud\Tea\Model;

class ListEventStreamingsResponseBody extends Model
{
    /**
     * @description The response code. Valid values:
     *
     * Other codes: The request failed. For more information about error codes, see Error codes.
     * @example Success
     *
     * @var string
     */
    public $code;

    /**
     * @description The information about the event streams.
     *
     * @var data
     */
    public $data;

    /**
     * @description The returned error message.
     *
     * @example The event streaming [xxxx] not existed!
     *
     * @var string
     */
    public $message;

    /**
     * @description The request ID.
     *
     * @example 283FF852-C4B8-58C9-9777-F88A5A16A79F
     *
     * @var string
     */
    public $requestId;

    /**
     * @description Indicates whether the request is successful. The value true indicates that the request is successful.
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
     * @return ListEventStreamingsResponseBody
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
