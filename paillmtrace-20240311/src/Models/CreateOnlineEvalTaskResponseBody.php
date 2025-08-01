<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiLLMTrace\V20240311\Models;

use AlibabaCloud\Tea\Model;

class CreateOnlineEvalTaskResponseBody extends Model
{
    /**
     * @description The internal error code. This parameter is returned only when an error occurs.
     *
     * @example InvalidInputParams
     *
     * @var string
     */
    public $code;

    /**
     * @description The error message. This parameter is returned only when an error occurs.
     *
     * @example EvaluationConfig.Answer.SpanName is required.
     *
     * @var string
     */
    public $message;

    /**
     * @description Id of the request
     *
     * @example 6A87228C-969A-1381-98CF-AE07AE630FA5
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The ID of the created trace evaluation task.
     *
     * @example 711ef9112343286810abbfce04e161ee
     *
     * @var string
     */
    public $taskId;
    protected $_name = [
        'code' => 'Code',
        'message' => 'Message',
        'requestId' => 'RequestId',
        'taskId' => 'TaskId',
    ];

    public function validate() {}

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
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateOnlineEvalTaskResponseBody
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
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }

        return $model;
    }
}
