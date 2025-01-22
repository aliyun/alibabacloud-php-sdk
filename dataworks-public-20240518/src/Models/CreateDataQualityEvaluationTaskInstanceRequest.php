<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\CreateDataQualityEvaluationTaskInstanceRequest\runtimeResource;

class CreateDataQualityEvaluationTaskInstanceRequest extends Model
{
    /**
     * @var int
     */
    public $dataQualityEvaluationTaskId;
    /**
     * @var string
     */
    public $parameters;
    /**
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
        if (null !== $this->runtimeResource) {
            $this->runtimeResource->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            $res['RuntimeResource'] = null !== $this->runtimeResource ? $this->runtimeResource->toArray($noStream) : $this->runtimeResource;
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
