<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Governance\V20210120\Models;

use AlibabaCloud\SDK\Governance\V20210120\Models\ListEvaluationMetadataResponseBody\evaluationMetadata;
use AlibabaCloud\Tea\Model;

class ListEvaluationMetadataResponseBody extends Model
{
    /**
     * @description The metadata of a governance maturity check.
     *
     * @var evaluationMetadata[]
     */
    public $evaluationMetadata;

    /**
     * @description The request ID.
     *
     * @example 16B208DD-86BD-5E7D-AC93-FFD44B6FBDF1
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'evaluationMetadata' => 'EvaluationMetadata',
        'requestId'          => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->evaluationMetadata) {
            $res['EvaluationMetadata'] = [];
            if (null !== $this->evaluationMetadata && \is_array($this->evaluationMetadata)) {
                $n = 0;
                foreach ($this->evaluationMetadata as $item) {
                    $res['EvaluationMetadata'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListEvaluationMetadataResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EvaluationMetadata'])) {
            if (!empty($map['EvaluationMetadata'])) {
                $model->evaluationMetadata = [];
                $n                         = 0;
                foreach ($map['EvaluationMetadata'] as $item) {
                    $model->evaluationMetadata[$n++] = null !== $item ? evaluationMetadata::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
