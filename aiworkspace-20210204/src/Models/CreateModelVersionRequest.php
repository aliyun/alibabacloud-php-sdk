<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AIWorkSpace\V20210204\Models;

use AlibabaCloud\Tea\Model;

class CreateModelVersionRequest extends Model
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
     * @example SavedModel
     *
     * @var string
     */
    public $formatType;

    /**
     * @example TensorFlow
     *
     * @var string
     */
    public $frameworkType;

    /**
     * @example {
     * }
     * @var mixed[]
     */
    public $inferenceSpec;

    /**
     * @var Label[]
     */
    public $labels;

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
     * @example oss://mybucket.oss-cn-beijing.aliyuncs.com/mypath/
     *
     * @var string
     */
    public $uri;

    /**
     * @var string
     */
    public $versionDescription;

    /**
     * @example 0.1.0
     *
     * @var string
     */
    public $versionName;
    protected $_name = [
        'approvalStatus'     => 'ApprovalStatus',
        'evaluationSpec'     => 'EvaluationSpec',
        'extraInfo'          => 'ExtraInfo',
        'formatType'         => 'FormatType',
        'frameworkType'      => 'FrameworkType',
        'inferenceSpec'      => 'InferenceSpec',
        'labels'             => 'Labels',
        'metrics'            => 'Metrics',
        'options'            => 'Options',
        'sourceId'           => 'SourceId',
        'sourceType'         => 'SourceType',
        'trainingSpec'       => 'TrainingSpec',
        'uri'                => 'Uri',
        'versionDescription' => 'VersionDescription',
        'versionName'        => 'VersionName',
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
        if (null !== $this->formatType) {
            $res['FormatType'] = $this->formatType;
        }
        if (null !== $this->frameworkType) {
            $res['FrameworkType'] = $this->frameworkType;
        }
        if (null !== $this->inferenceSpec) {
            $res['InferenceSpec'] = $this->inferenceSpec;
        }
        if (null !== $this->labels) {
            $res['Labels'] = [];
            if (null !== $this->labels && \is_array($this->labels)) {
                $n = 0;
                foreach ($this->labels as $item) {
                    $res['Labels'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
        if (null !== $this->uri) {
            $res['Uri'] = $this->uri;
        }
        if (null !== $this->versionDescription) {
            $res['VersionDescription'] = $this->versionDescription;
        }
        if (null !== $this->versionName) {
            $res['VersionName'] = $this->versionName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateModelVersionRequest
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
        if (isset($map['FormatType'])) {
            $model->formatType = $map['FormatType'];
        }
        if (isset($map['FrameworkType'])) {
            $model->frameworkType = $map['FrameworkType'];
        }
        if (isset($map['InferenceSpec'])) {
            $model->inferenceSpec = $map['InferenceSpec'];
        }
        if (isset($map['Labels'])) {
            if (!empty($map['Labels'])) {
                $model->labels = [];
                $n             = 0;
                foreach ($map['Labels'] as $item) {
                    $model->labels[$n++] = null !== $item ? Label::fromMap($item) : $item;
                }
            }
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
        if (isset($map['Uri'])) {
            $model->uri = $map['Uri'];
        }
        if (isset($map['VersionDescription'])) {
            $model->versionDescription = $map['VersionDescription'];
        }
        if (isset($map['VersionName'])) {
            $model->versionName = $map['VersionName'];
        }

        return $model;
    }
}
