<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Schedulerx2\V20190430\Models;

use AlibabaCloud\SDK\Schedulerx2\V20190430\Models\ListJobScriptHistoryResponseBody\data;
use AlibabaCloud\Tea\Model;

class ListJobScriptHistoryResponseBody extends Model
{
    /**
     * @example 200
     *
     * @var int
     */
    public $code;

    /**
     * @description -
     *
     * @var data
     */
    public $data;

    /**
     * @example job is not existed, jobId=302
     *
     * @var string
     */
    public $message;

    /**
     * @example 4F68ABED-AC31-4412-9297-D9A8F0401108
     *
     * @var string
     */
    public $requestId;

    /**
     * @example true
     *
     * @var bool
     */
    public $success;
    protected $_name = [
        'code' => 'Code',
        'data' => 'Data',
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
     * @return ListJobScriptHistoryResponseBody
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
