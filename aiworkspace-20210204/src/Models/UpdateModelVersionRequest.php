<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AIWorkSpace\V20210204\Models;

use AlibabaCloud\Tea\Model;

class UpdateModelVersionRequest extends Model
{
    /**
     * @example Approved
     *
     * @var string
     */
    public $approvalStatus;

    /**
     * @example {}
     *
     * @var mixed[]
     */
    public $evaluationSpec;

    /**
     * @example {}
     *
     * @var mixed[]
     */
    public $extraInfo;

    /**
     * @example {     "processor": "tensorflow_gpu_1.12" }
     *
     * @var mixed[]
     */
    public $inferenceSpec;

    /**
     * @example {}
     *
     * @var mixed[]
     */
    public $metrics;

    /**
     * @example {}
     *
     * @var string
     */
    public $options;

    /**
     * @example region=cn-shanghai,workspaceId=13**,kind=PipelineRun,id=run-sakdb****jdf
     *
     * @var string
     */
    public $sourceId;

    /**
     * @example PAIFlow
     *
     * @var string
     */
    public $sourceType;

    /**
     * @example {}
     *
     * @var mixed[]
     */
    public $trainingSpec;

    /**
     * @var string
     */
    public $versionDescription;
    protected $_name = [
        'approvalStatus'     => 'ApprovalStatus',
        'evaluationSpec'     => 'EvaluationSpec',
        'extraInfo'          => 'ExtraInfo',
        'inferenceSpec'      => 'InferenceSpec',
        'metrics'            => 'Metrics',
        'options'            => 'Options',
        'sourceId'           => 'SourceId',
        'sourceType'         => 'SourceType',
        'trainingSpec'       => 'TrainingSpec',
        'versionDescription' => 'VersionDescription',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->approvalStatus) {
            $res['ApprovalStatus'] = $this->approvalStatus;
        }
        if (null !== $this->evaluationSpec) {
            $res['EvaluationSpec'] = $this->evaluationSpec;
        }
        if (null !== $this->extraInfo) {
            $res['ExtraInfo'] = $this->extraInfo;
        }
        if (null !== $this->inferenceSpec) {
            $res['InferenceSpec'] = $this->inferenceSpec;
        }
        if (null !== $this->metrics) {
            $res['Metrics'] = $this->metrics;
        }
        if (null !== $this->options) {
            $res['Options'] = $this->options;
        }
        if (null !== $this->sourceId) {
            $res['SourceId'] = $this->sourceId;
        }
        if (null !== $this->sourceType) {
            $res['SourceType'] = $this->sourceType;
        }
        if (null !== $this->trainingSpec) {
            $res['TrainingSpec'] = $this->trainingSpec;
        }
        if (null !== $this->versionDescription) {
            $res['VersionDescription'] = $this->versionDescription;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateModelVersionRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApprovalStatus'])) {
            $model->approvalStatus = $map['ApprovalStatus'];
        }
        if (isset($map['EvaluationSpec'])) {
            $model->evaluationSpec = $map['EvaluationSpec'];
        }
        if (isset($map['ExtraInfo'])) {
            $model->extraInfo = $map['ExtraInfo'];
        }
        if (isset($map['InferenceSpec'])) {
            $model->inferenceSpec = $map['InferenceSpec'];
        }
        if (isset($map['Metrics'])) {
            $model->metrics = $map['Metrics'];
        }
        if (isset($map['Options'])) {
            $model->options = $map['Options'];
        }
        if (isset($map['SourceId'])) {
            $model->sourceId = $map['SourceId'];
        }
        if (isset($map['SourceType'])) {
            $model->sourceType = $map['SourceType'];
        }
        if (isset($map['TrainingSpec'])) {
            $model->trainingSpec = $map['TrainingSpec'];
        }
        if (isset($map['VersionDescription'])) {
            $model->versionDescription = $map['VersionDescription'];
        }

        return $model;
    }
}
