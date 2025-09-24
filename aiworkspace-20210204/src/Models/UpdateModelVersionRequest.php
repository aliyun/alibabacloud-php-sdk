<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AIWorkSpace\V20210204\Models;

use AlibabaCloud\Dara\Model;

class UpdateModelVersionRequest extends Model
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
     * @var mixed[]
     */
    public $inferenceSpec;

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
    public $versionDescription;
    protected $_name = [
        'approvalStatus' => 'ApprovalStatus',
        'compressionSpec' => 'CompressionSpec',
        'distillationSpec' => 'DistillationSpec',
        'evaluationSpec' => 'EvaluationSpec',
        'extraInfo' => 'ExtraInfo',
        'inferenceSpec' => 'InferenceSpec',
        'metrics' => 'Metrics',
        'options' => 'Options',
        'sourceId' => 'SourceId',
        'sourceType' => 'SourceType',
        'trainingSpec' => 'TrainingSpec',
        'versionDescription' => 'VersionDescription',
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

        if (null !== $this->inferenceSpec) {
            if (\is_array($this->inferenceSpec)) {
                $res['InferenceSpec'] = [];
                foreach ($this->inferenceSpec as $key1 => $value1) {
                    $res['InferenceSpec'][$key1] = $value1;
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

        if (null !== $this->versionDescription) {
            $res['VersionDescription'] = $this->versionDescription;
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

        if (isset($map['InferenceSpec'])) {
            if (!empty($map['InferenceSpec'])) {
                $model->inferenceSpec = [];
                foreach ($map['InferenceSpec'] as $key1 => $value1) {
                    $model->inferenceSpec[$key1] = $value1;
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

        if (isset($map['VersionDescription'])) {
            $model->versionDescription = $map['VersionDescription'];
        }

        return $model;
    }
}
