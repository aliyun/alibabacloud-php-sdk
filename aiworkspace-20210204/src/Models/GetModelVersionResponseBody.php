<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AIWorkSpace\V20210204\Models;

use AlibabaCloud\Dara\Model;

class GetModelVersionResponseBody extends Model
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
    public $distillationSpec;

    /**
     * @var mixed[]
     */
    public $evaluationSpec;

    /**
     * @var mixed[]
     */
    public $extraInfo;

    /**
     * @var string
     */
    public $formatType;

    /**
     * @var string
     */
    public $frameworkType;

    /**
     * @var string
     */
    public $gmtCreateTime;

    /**
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
     * @var string
     */
    public $ownerId;

    /**
     * @var string
     */
    public $requestId;

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
     * @var string
     */
    public $uri;

    /**
     * @var string
     */
    public $userId;

    /**
     * @var string
     */
    public $versionDescription;

    /**
     * @var string
     */
    public $versionName;
    protected $_name = [
        'approvalStatus' => 'ApprovalStatus',
        'compressionSpec' => 'CompressionSpec',
        'distillationSpec' => 'DistillationSpec',
        'evaluationSpec' => 'EvaluationSpec',
        'extraInfo' => 'ExtraInfo',
        'formatType' => 'FormatType',
        'frameworkType' => 'FrameworkType',
        'gmtCreateTime' => 'GmtCreateTime',
        'gmtModifiedTime' => 'GmtModifiedTime',
        'inferenceSpec' => 'InferenceSpec',
        'labels' => 'Labels',
        'metrics' => 'Metrics',
        'options' => 'Options',
        'ownerId' => 'OwnerId',
        'requestId' => 'RequestId',
        'sourceId' => 'SourceId',
        'sourceType' => 'SourceType',
        'trainingSpec' => 'TrainingSpec',
        'uri' => 'Uri',
        'userId' => 'UserId',
        'versionDescription' => 'VersionDescription',
        'versionName' => 'VersionName',
    ];

    public function validate()
    {
        if (\is_array($this->compressionSpec)) {
            Model::validateArray($this->compressionSpec);
        }
        if (\is_array($this->distillationSpec)) {
            Model::validateArray($this->distillationSpec);
        }
        if (\is_array($this->evaluationSpec)) {
            Model::validateArray($this->evaluationSpec);
        }
        if (\is_array($this->extraInfo)) {
            Model::validateArray($this->extraInfo);
        }
        if (\is_array($this->inferenceSpec)) {
            Model::validateArray($this->inferenceSpec);
        }
        if (\is_array($this->labels)) {
            Model::validateArray($this->labels);
        }
        if (\is_array($this->metrics)) {
            Model::validateArray($this->metrics);
        }
        if (\is_array($this->trainingSpec)) {
            Model::validateArray($this->trainingSpec);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->approvalStatus) {
            $res['ApprovalStatus'] = $this->approvalStatus;
        }

        if (null !== $this->compressionSpec) {
            if (\is_array($this->compressionSpec)) {
                $res['CompressionSpec'] = [];
                foreach ($this->compressionSpec as $key1 => $value1) {
                    $res['CompressionSpec'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->distillationSpec) {
            if (\is_array($this->distillationSpec)) {
                $res['DistillationSpec'] = [];
                foreach ($this->distillationSpec as $key1 => $value1) {
                    $res['DistillationSpec'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->evaluationSpec) {
            if (\is_array($this->evaluationSpec)) {
                $res['EvaluationSpec'] = [];
                foreach ($this->evaluationSpec as $key1 => $value1) {
                    $res['EvaluationSpec'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->extraInfo) {
            if (\is_array($this->extraInfo)) {
                $res['ExtraInfo'] = [];
                foreach ($this->extraInfo as $key1 => $value1) {
                    $res['ExtraInfo'][$key1] = $value1;
                }
            }
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
            if (\is_array($this->inferenceSpec)) {
                $res['InferenceSpec'] = [];
                foreach ($this->inferenceSpec as $key1 => $value1) {
                    $res['InferenceSpec'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->labels) {
            if (\is_array($this->labels)) {
                $res['Labels'] = [];
                $n1 = 0;
                foreach ($this->labels as $item1) {
                    $res['Labels'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->metrics) {
            if (\is_array($this->metrics)) {
                $res['Metrics'] = [];
                foreach ($this->metrics as $key1 => $value1) {
                    $res['Metrics'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->options) {
            $res['Options'] = $this->options;
        }

        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->sourceId) {
            $res['SourceId'] = $this->sourceId;
        }

        if (null !== $this->sourceType) {
            $res['SourceType'] = $this->sourceType;
        }

        if (null !== $this->trainingSpec) {
            if (\is_array($this->trainingSpec)) {
                $res['TrainingSpec'] = [];
                foreach ($this->trainingSpec as $key1 => $value1) {
                    $res['TrainingSpec'][$key1] = $value1;
                }
            }
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApprovalStatus'])) {
            $model->approvalStatus = $map['ApprovalStatus'];
        }

        if (isset($map['CompressionSpec'])) {
            if (!empty($map['CompressionSpec'])) {
                $model->compressionSpec = [];
                foreach ($map['CompressionSpec'] as $key1 => $value1) {
                    $model->compressionSpec[$key1] = $value1;
                }
            }
        }

        if (isset($map['DistillationSpec'])) {
            if (!empty($map['DistillationSpec'])) {
                $model->distillationSpec = [];
                foreach ($map['DistillationSpec'] as $key1 => $value1) {
                    $model->distillationSpec[$key1] = $value1;
                }
            }
        }

        if (isset($map['EvaluationSpec'])) {
            if (!empty($map['EvaluationSpec'])) {
                $model->evaluationSpec = [];
                foreach ($map['EvaluationSpec'] as $key1 => $value1) {
                    $model->evaluationSpec[$key1] = $value1;
                }
            }
        }

        if (isset($map['ExtraInfo'])) {
            if (!empty($map['ExtraInfo'])) {
                $model->extraInfo = [];
                foreach ($map['ExtraInfo'] as $key1 => $value1) {
                    $model->extraInfo[$key1] = $value1;
                }
            }
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
            if (!empty($map['InferenceSpec'])) {
                $model->inferenceSpec = [];
                foreach ($map['InferenceSpec'] as $key1 => $value1) {
                    $model->inferenceSpec[$key1] = $value1;
                }
            }
        }

        if (isset($map['Labels'])) {
            if (!empty($map['Labels'])) {
                $model->labels = [];
                $n1 = 0;
                foreach ($map['Labels'] as $item1) {
                    $model->labels[$n1] = Label::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Metrics'])) {
            if (!empty($map['Metrics'])) {
                $model->metrics = [];
                foreach ($map['Metrics'] as $key1 => $value1) {
                    $model->metrics[$key1] = $value1;
                }
            }
        }

        if (isset($map['Options'])) {
            $model->options = $map['Options'];
        }

        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['SourceId'])) {
            $model->sourceId = $map['SourceId'];
        }

        if (isset($map['SourceType'])) {
            $model->sourceType = $map['SourceType'];
        }

        if (isset($map['TrainingSpec'])) {
            if (!empty($map['TrainingSpec'])) {
                $model->trainingSpec = [];
                foreach ($map['TrainingSpec'] as $key1 => $value1) {
                    $model->trainingSpec[$key1] = $value1;
                }
            }
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
