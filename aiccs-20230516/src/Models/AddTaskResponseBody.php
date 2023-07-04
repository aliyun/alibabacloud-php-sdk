<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aiccs\V20230516\Models;

use AlibabaCloud\SDK\Aiccs\V20230516\Models\AddTaskResponseBody\model_;
use AlibabaCloud\Tea\Model;

class AddTaskResponseBody extends Model
{
    /**
     * @example 0
     *
     * @var int
     */
    public $code;

    /**
     * @example 示例值
     *
     * @var string
     */
    public $message;

    /**
     * @var model_
     */
    public $model;

    /**
     * @example 5453cc9b-02bc-4dbb-9527-f28a9100b912
     *
     * @var string
     */
    public $requestId;

    /**
     * @example false
     *
     * @var bool
     */
    public $success;

    /**
     * @example 1686225227338
     *
     * @var int
     */
    public $timestamp;
    protected $_name = [
        'code'      => 'Code',
        'message'   => 'Message',
        'model'     => 'Model',
        'requestId' => 'RequestId',
        'success'   => 'Success',
        'timestamp' => 'Timestamp',
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
        if (null !== $this->model) {
            $res['Model'] = null !== $this->model ? $this->model->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }
        if (null !== $this->timestamp) {
            $res['Timestamp'] = $this->timestamp;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AddTaskResponseBody
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
        if (isset($map['Model'])) {
            $model->model = model_::fromMap($map['Model']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }
        if (isset($map['Timestamp'])) {
            $model->timestamp = $map['Timestamp'];
        }

        return $model;
    }
}
