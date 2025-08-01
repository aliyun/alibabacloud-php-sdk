<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiLLMTrace\V20240311\Models;

use AlibabaCloud\Tea\Model;

class GetEvaluationTemplatesResponseBody extends Model
{
    /**
     * @description Internal error code. Set only when the response has an error.
     *
     * @example ExecutionFailure
     *
     * @var string
     */
    public $code;

    /**
     * @description A series of templates used internally by the evaluation system to construct LLM interaction information.
     *
     * @var mixed[]
     */
    public $evaluationTemplates;

    /**
     * @description Response error message. Set only when the response has an error.
     *
     * @example cannot get data back.
     *
     * @var string
     */
    public $message;

    /**
     * @description ID of the request
     *
     * @example 6A87228C-969A-1381-98CF-AE07AE630FA5
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'code' => 'Code',
        'evaluationTemplates' => 'EvaluationTemplates',
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
        if (null !== $this->evaluationTemplates) {
            $res['EvaluationTemplates'] = $this->evaluationTemplates;
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
     * @return GetEvaluationTemplatesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['EvaluationTemplates'])) {
            if (!empty($map['EvaluationTemplates'])) {
                $model->evaluationTemplates = $map['EvaluationTemplates'];
            }
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
