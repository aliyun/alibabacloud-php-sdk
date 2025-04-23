<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiLLMTrace\V20240311\Models;

use AlibabaCloud\Dara\Model;

class GetEvaluationTemplatesResponseBody extends Model
{
    /**
     * @var string
     */
    public $code;

    /**
     * @var mixed[]
     */
    public $evaluationTemplates;

    /**
     * @var string
     */
    public $message;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'code' => 'Code',
        'evaluationTemplates' => 'EvaluationTemplates',
        'message' => 'Message',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->evaluationTemplates)) {
            Model::validateArray($this->evaluationTemplates);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }

        if (null !== $this->evaluationTemplates) {
            if (\is_array($this->evaluationTemplates)) {
                $res['EvaluationTemplates'] = [];
                $n1 = 0;
                foreach ($this->evaluationTemplates as $item1) {
                    $res['EvaluationTemplates'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }

        if (isset($map['EvaluationTemplates'])) {
            if (!empty($map['EvaluationTemplates'])) {
                $model->evaluationTemplates = [];
                $n1 = 0;
                foreach ($map['EvaluationTemplates'] as $item1) {
                    $model->evaluationTemplates[$n1++] = $item1;
                }
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
