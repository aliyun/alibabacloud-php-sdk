<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\GetDataQualityEvaluationTaskResponseBody\dataQualityEvaluationTask;

class GetDataQualityEvaluationTaskResponseBody extends Model
{
    /**
     * @var dataQualityEvaluationTask
     */
    public $dataQualityEvaluationTask;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'dataQualityEvaluationTask' => 'DataQualityEvaluationTask',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->dataQualityEvaluationTask) {
            $this->dataQualityEvaluationTask->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dataQualityEvaluationTask) {
            $res['DataQualityEvaluationTask'] = null !== $this->dataQualityEvaluationTask ? $this->dataQualityEvaluationTask->toArray($noStream) : $this->dataQualityEvaluationTask;
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
        if (isset($map['DataQualityEvaluationTask'])) {
            $model->dataQualityEvaluationTask = dataQualityEvaluationTask::fromMap($map['DataQualityEvaluationTask']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
