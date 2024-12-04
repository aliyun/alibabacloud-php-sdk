<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models;

use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\GetDataQualityEvaluationTaskInstanceResponseBody\dataQualityEvaluationTaskInstance;
use AlibabaCloud\Tea\Model;

class GetDataQualityEvaluationTaskInstanceResponseBody extends Model
{
    /**
     * @var dataQualityEvaluationTaskInstance
     */
    public $dataQualityEvaluationTaskInstance;

    /**
     * @example 8abcb91f-d266-4073-b907-2ed670378ed1
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'dataQualityEvaluationTaskInstance' => 'DataQualityEvaluationTaskInstance',
        'requestId'                         => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dataQualityEvaluationTaskInstance) {
            $res['DataQualityEvaluationTaskInstance'] = null !== $this->dataQualityEvaluationTaskInstance ? $this->dataQualityEvaluationTaskInstance->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetDataQualityEvaluationTaskInstanceResponseBody
     */
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
