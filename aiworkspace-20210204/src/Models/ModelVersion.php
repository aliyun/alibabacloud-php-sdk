<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AIWorkSpace\V20210204\Models;

use AlibabaCloud\Tea\Model;

class ModelVersion extends Model
{
    /**
     * @var string
     */
    public $approvalStatus;

    /**
     * @var mixed[]
     */
    public $compressionSpec;

    /**
     * @var mixed[]
     */
    public $evaluationSpec;

    /**
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
     * @example 2021-01-21T17:12:35Z
     *
     * @var string
     */
    public $gmtCreateTime;

    /**
     * @example 2021-01-21T17:12:35Z
     *
     * @var string
     */
    public $gmtModifiedTime;

    /**
     * @var mixed[]
     */
    public $inferenceSpec;

    /**
     * @var Label[]
     */
    public $labels;

    /**
     * @var mixed[]
     */
    public $metrics;

    /**
     * @var string
     */
    public $options;

    /**
     * @example 155770209******
     *
     * @var string
     */
    public $ownerId;

    /**
     * @var string
     */
    public $sourceId;

    /**
     * @var string
     */
    public $sourceType;

    /**
     * @var mixed[]
     */
    public $trainingSpec;

    /**
     * @example oss://bucket/path-to-model
     *
     * @var string
     */
    public $uri;

    /**
     * @example 155770209******
     *
     * @var string
     */
    public $userId;

    /**
     * @var string
     */
    public $versionDescription;

    /**
     * @example 1.0.0
     *
     * @var string
     */
    public $versionName;
    protected $_name = [
        'approvalStatus'     => 'ApprovalStatus',
        'compressionSpec'    => 'CompressionSpec',
        'evaluationSpec'     => 'EvaluationSpec',
        'extraInfo'          => 'ExtraInfo',
        'formatType'         => 'FormatType',
        'frameworkType'      => 'FrameworkType',
        'gmtCreateTime'      => 'GmtCreateTime',
        'gmtModifiedTime'    => 'GmtModifiedTime',
        'inferenceSpec'      => 'InferenceSpec',
        'labels'             => 'Labels',
        'metrics'            => 'Metrics',
        'options'            => 'Options',
        'ownerId'            => 'OwnerId',
        'sourceId'           => 'SourceId',
        'sourceType'         => 'SourceType',
        'trainingSpec'       => 'TrainingSpec',
        'uri'                => 'Uri',
        'userId'             => 'UserId',
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
        if (null !== $this->compressionSpec) {
            $res['CompressionSpec'] = $this->compressionSpec;
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
        if (null !== $this->gmtCreateTime) {
            $res['GmtCreateTime'] = $this->gmtCreateTime;
        }
        if (null !== $this->gmtModifiedTime) {
            $res['GmtModifiedTime'] = $this->gmtModifiedTime;
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
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
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
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
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
     * @return ModelVersion
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApprovalStatus'])) {
            $model->approvalStatus = $map['ApprovalStatus'];
        }
        if (isset($map['CompressionSpec'])) {
            $model->compressionSpec = $map['CompressionSpec'];
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
        if (isset($map['GmtCreateTime'])) {
            $model->gmtCreateTime = $map['GmtCreateTime'];
        }
        if (isset($map['GmtModifiedTime'])) {
            $model->gmtModifiedTime = $map['GmtModifiedTime'];
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
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
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
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
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
