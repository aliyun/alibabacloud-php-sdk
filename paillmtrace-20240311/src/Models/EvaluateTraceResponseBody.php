<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiLLMTrace\V20240311\Models;

use AlibabaCloud\Tea\Model;

class EvaluateTraceResponseBody extends Model
{
    /**
     * @description The internal error code. This parameter is returned if an exception occurred.
     *
     * @example InvalidInputParams
     *
     * @var string
     */
    public $code;

    /**
     * @description the task ID of the evaluation task to which the trace belongs.
     *
     * @example 6000043e103011f0922edec44617e03c
     *
     * @var string
     */
    public $evaluationId;

    /**
     * @description The error message. This parameter is returned if an exception occurred.
     *
     * @example eval_request missing dataset id or times
     *
     * @var string
     */
    public $message;

    /**
     * @description Id of the request
     *
     * @example F1AB295E-0D1F-5ECE-9FFA-98ABB4CB5DF5
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'code' => 'Code',
        'evaluationId' => 'EvaluationId',
        'message' => 'Message',
        'requestId' => 'RequestId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->evaluationId) {
            $res['EvaluationId'] = $this->evaluationId;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return EvaluateTraceResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['EvaluationId'])) {
            $model->evaluationId = $map['EvaluationId'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
