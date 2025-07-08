<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiLLMTrace\V20240311\Models;

use AlibabaCloud\Dara\Model;

class ListOnlineEvalTaskResultsResponseBody extends Model
{
    /**
     * @var string
     */
    public $code;

    /**
     * @var string[]
     */
    public $evaluationResults;

    /**
     * @var string
     */
    public $message;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'code' => 'Code',
        'evaluationResults' => 'EvaluationResults',
        'message' => 'Message',
        'requestId' => 'RequestId',
        'totalCount' => 'TotalCount',
    ];

    public function validate()
    {
        if (\is_array($this->evaluationResults)) {
            Model::validateArray($this->evaluationResults);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }

        if (null !== $this->evaluationResults) {
            if (\is_array($this->evaluationResults)) {
                $res['EvaluationResults'] = [];
                $n1 = 0;
                foreach ($this->evaluationResults as $item1) {
                    $res['EvaluationResults'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
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

        if (isset($map['EvaluationResults'])) {
            if (!empty($map['EvaluationResults'])) {
                $model->evaluationResults = [];
                $n1 = 0;
                foreach ($map['EvaluationResults'] as $item1) {
                    $model->evaluationResults[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
