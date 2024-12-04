<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models;

use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\CreateDataQualityEvaluationTaskInstanceRequest\runtimeResource;
use AlibabaCloud\Tea\Model;

class CreateDataQualityEvaluationTaskInstanceRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example 200001
     *
     * @var int
     */
    public $dataQualityEvaluationTaskId;

    /**
     * @description This parameter is required.
     *
     * @example { "triggerTime": 1733284062000 }
     *
     * @var string
     */
    public $parameters;

    /**
     * @description This parameter is required.
     *
     * @example 10000
     *
     * @var int
     */
    public $projectId;

    /**
     * @var runtimeResource
     */
    public $runtimeResource;
    protected $_name = [
        'dataQualityEvaluationTaskId' => 'DataQualityEvaluationTaskId',
        'parameters'                  => 'Parameters',
        'projectId'                   => 'ProjectId',
        'runtimeResource'             => 'RuntimeResource',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dataQualityEvaluationTaskId) {
            $res['DataQualityEvaluationTaskId'] = $this->dataQualityEvaluationTaskId;
        }
        if (null !== $this->parameters) {
            $res['Parameters'] = $this->parameters;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->runtimeResource) {
            $res['RuntimeResource'] = null !== $this->runtimeResource ? $this->runtimeResource->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateDataQualityEvaluationTaskInstanceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DataQualityEvaluationTaskId'])) {
            $model->dataQualityEvaluationTaskId = $map['DataQualityEvaluationTaskId'];
        }
        if (isset($map['Parameters'])) {
            $model->parameters = $map['Parameters'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['RuntimeResource'])) {
            $model->runtimeResource = runtimeResource::fromMap($map['RuntimeResource']);
        }

        return $model;
    }
}
