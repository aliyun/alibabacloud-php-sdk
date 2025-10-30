<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Governance\V20210120\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Governance\V20210120\Models\ListEvaluationMetadataResponseBody\evaluationMetadata;

class ListEvaluationMetadataResponseBody extends Model
{
    /**
     * @var evaluationMetadata[]
     */
    public $evaluationMetadata;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'evaluationMetadata' => 'EvaluationMetadata',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->evaluationMetadata)) {
            Model::validateArray($this->evaluationMetadata);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->evaluationMetadata) {
            if (\is_array($this->evaluationMetadata)) {
                $res['EvaluationMetadata'] = [];
                $n1 = 0;
                foreach ($this->evaluationMetadata as $item1) {
                    $res['EvaluationMetadata'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['EvaluationMetadata'])) {
            if (!empty($map['EvaluationMetadata'])) {
                $model->evaluationMetadata = [];
                $n1 = 0;
                foreach ($map['EvaluationMetadata'] as $item1) {
                    $model->evaluationMetadata[$n1] = evaluationMetadata::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
