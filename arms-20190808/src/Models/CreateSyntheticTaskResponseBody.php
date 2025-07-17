<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\SDK\ARMS\V20190808\Models\CreateSyntheticTaskResponseBody\data;
use AlibabaCloud\Tea\Model;

class CreateSyntheticTaskResponseBody extends Model
{
    /**
     * @description The status code returned.
     *
     *   1001: The request was successful.
     *   1002: The request failed.
     *   1003: Parameter errors occurred.
     *   1004: Authentication failed.
     *   1006: The task does not exist.
     *   1099: Internal errors occurred.
     *
     * @example 1001
     *
     * @var string
     */
    public $code;

    /**
     * @description The information about the synthetic monitoring task.
     *
     * @var data
     */
    public $data;

    /**
     * @description The message that is returned when the task failed to be created.
     *
     * @example null
     *
     * @var string
     */
    public $msg;

    /**
     * @description The ID of the request.
     *
     * @example A5EC8221-08F2-4C95-9AF1-49FD998C****
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'code' => 'Code',
        'data' => 'Data',
        'msg' => 'Msg',
        'requestId' => 'RequestId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->data) {
            $res['Data'] = null !== $this->data ? $this->data->toMap() : null;
        }
        if (null !== $this->msg) {
            $res['Msg'] = $this->msg;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateSyntheticTaskResponseBody
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
        if (isset($map['Msg'])) {
            $model->msg = $map['Msg'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
