<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\GetDataQualityEvaluationTaskInstanceResponseBody\dataQualityEvaluationTaskInstance;

class GetDataQualityEvaluationTaskInstanceResponseBody extends Model
{
    /**
     * @var dataQualityEvaluationTaskInstance
     */
    public $dataQualityEvaluationTaskInstance;
    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'dataQualityEvaluationTaskInstance' => 'DataQualityEvaluationTaskInstance',
        'requestId'                         => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->dataQualityEvaluationTaskInstance) {
            $this->dataQualityEvaluationTaskInstance->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dataQualityEvaluationTaskInstance) {
            $res['DataQualityEvaluationTaskInstance'] = null !== $this->dataQualityEvaluationTaskInstance ? $this->dataQualityEvaluationTaskInstance->toArray($noStream) : $this->dataQualityEvaluationTaskInstance;
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
        if (isset($map['DataQualityEvaluationTaskInstance'])) {
            $model->dataQualityEvaluationTaskInstance = dataQualityEvaluationTaskInstance::fromMap($map['DataQualityEvaluationTaskInstance']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
