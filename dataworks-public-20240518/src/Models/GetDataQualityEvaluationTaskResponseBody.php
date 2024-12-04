<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models;

use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\GetDataQualityEvaluationTaskResponseBody\dataQualityEvaluationTask;
use AlibabaCloud\Tea\Model;

class GetDataQualityEvaluationTaskResponseBody extends Model
{
    /**
     * @var dataQualityEvaluationTask
     */
    public $dataQualityEvaluationTask;

    /**
     * @description Id of the request
     *
     * @example SDFSDFSDF-SDFSDF-SDFDSF-SDFSDF
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'dataQualityEvaluationTask' => 'DataQualityEvaluationTask',
        'requestId'                 => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dataQualityEvaluationTask) {
            $res['DataQualityEvaluationTask'] = null !== $this->dataQualityEvaluationTask ? $this->dataQualityEvaluationTask->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetDataQualityEvaluationTaskResponseBody
     */
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
