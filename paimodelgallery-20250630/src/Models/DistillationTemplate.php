<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PAIModelGallery\V20250630\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\PAIModelGallery\V20250630\Models\DistillationTemplate\modelSlots;
use AlibabaCloud\SDK\PAIModelGallery\V20250630\Models\DistillationTemplate\pipelineStages;
use AlibabaCloud\SDK\PAIModelGallery\V20250630\Models\DistillationTemplate\presetConfig;
use AlibabaCloud\SDK\PAIModelGallery\V20250630\Models\DistillationTemplate\trainingOptions;

class DistillationTemplate extends Model
{
    /**
     * @var string
     */
    public $algorithmName;

    /**
     * @var string
     */
    public $algorithmProvider;

    /**
     * @var string
     */
    public $algorithmVersion;

    /**
     * @var string[]
     */
    public $capabilityTags;

    /**
     * @var string
     */
    public $category;

    /**
     * @var string
     */
    public $defaultConfig;

    /**
     * @var string
     */
    public $description;

    /**
     * @var bool
     */
    public $inputDatasetMustBeDirectory;

    /**
     * @var string
     */
    public $inputExampleUri;

    /**
     * @var string
     */
    public $jobType;

    /**
     * @var modelSlots[]
     */
    public $modelSlots;

    /**
     * @var int
     */
    public $orderNumber;

    /**
     * @var pipelineStages[]
     */
    public $pipelineStages;

    /**
     * @var presetConfig[]
     */
    public $presetConfig;

    /**
     * @var string
     */
    public $templateId;

    /**
     * @var string
     */
    public $templateName;

    /**
     * @var trainingOptions[]
     */
    public $trainingOptions;
    protected $_name = [
        'algorithmName' => 'AlgorithmName',
        'algorithmProvider' => 'AlgorithmProvider',
        'algorithmVersion' => 'AlgorithmVersion',
        'capabilityTags' => 'CapabilityTags',
        'category' => 'Category',
        'defaultConfig' => 'DefaultConfig',
        'description' => 'Description',
        'inputDatasetMustBeDirectory' => 'InputDatasetMustBeDirectory',
        'inputExampleUri' => 'InputExampleUri',
        'jobType' => 'JobType',
        'modelSlots' => 'ModelSlots',
        'orderNumber' => 'OrderNumber',
        'pipelineStages' => 'PipelineStages',
        'presetConfig' => 'PresetConfig',
        'templateId' => 'TemplateId',
        'templateName' => 'TemplateName',
        'trainingOptions' => 'TrainingOptions',
    ];

    public function validate()
    {
        if (\is_array($this->capabilityTags)) {
            Model::validateArray($this->capabilityTags);
        }
        if (\is_array($this->modelSlots)) {
            Model::validateArray($this->modelSlots);
        }
        if (\is_array($this->pipelineStages)) {
            Model::validateArray($this->pipelineStages);
        }
        if (\is_array($this->presetConfig)) {
            Model::validateArray($this->presetConfig);
        }
        if (\is_array($this->trainingOptions)) {
            Model::validateArray($this->trainingOptions);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->algorithmName) {
            $res['AlgorithmName'] = $this->algorithmName;
        }

        if (null !== $this->algorithmProvider) {
            $res['AlgorithmProvider'] = $this->algorithmProvider;
        }

        if (null !== $this->algorithmVersion) {
            $res['AlgorithmVersion'] = $this->algorithmVersion;
        }

        if (null !== $this->capabilityTags) {
            if (\is_array($this->capabilityTags)) {
                $res['CapabilityTags'] = [];
                $n1 = 0;
                foreach ($this->capabilityTags as $item1) {
                    $res['CapabilityTags'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->category) {
            $res['Category'] = $this->category;
        }

        if (null !== $this->defaultConfig) {
            $res['DefaultConfig'] = $this->defaultConfig;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->inputDatasetMustBeDirectory) {
            $res['InputDatasetMustBeDirectory'] = $this->inputDatasetMustBeDirectory;
        }

        if (null !== $this->inputExampleUri) {
            $res['InputExampleUri'] = $this->inputExampleUri;
        }

        if (null !== $this->jobType) {
            $res['JobType'] = $this->jobType;
        }

        if (null !== $this->modelSlots) {
            if (\is_array($this->modelSlots)) {
                $res['ModelSlots'] = [];
                $n1 = 0;
                foreach ($this->modelSlots as $item1) {
                    $res['ModelSlots'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->orderNumber) {
            $res['OrderNumber'] = $this->orderNumber;
        }

        if (null !== $this->pipelineStages) {
            if (\is_array($this->pipelineStages)) {
                $res['PipelineStages'] = [];
                $n1 = 0;
                foreach ($this->pipelineStages as $item1) {
                    $res['PipelineStages'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->presetConfig) {
            if (\is_array($this->presetConfig)) {
                $res['PresetConfig'] = [];
                $n1 = 0;
                foreach ($this->presetConfig as $item1) {
                    $res['PresetConfig'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->templateId) {
            $res['TemplateId'] = $this->templateId;
        }

        if (null !== $this->templateName) {
            $res['TemplateName'] = $this->templateName;
        }

        if (null !== $this->trainingOptions) {
            if (\is_array($this->trainingOptions)) {
                $res['TrainingOptions'] = [];
                $n1 = 0;
                foreach ($this->trainingOptions as $item1) {
                    $res['TrainingOptions'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['AlgorithmName'])) {
            $model->algorithmName = $map['AlgorithmName'];
        }

        if (isset($map['AlgorithmProvider'])) {
            $model->algorithmProvider = $map['AlgorithmProvider'];
        }

        if (isset($map['AlgorithmVersion'])) {
            $model->algorithmVersion = $map['AlgorithmVersion'];
        }

        if (isset($map['CapabilityTags'])) {
            if (!empty($map['CapabilityTags'])) {
                $model->capabilityTags = [];
                $n1 = 0;
                foreach ($map['CapabilityTags'] as $item1) {
                    $model->capabilityTags[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Category'])) {
            $model->category = $map['Category'];
        }

        if (isset($map['DefaultConfig'])) {
            $model->defaultConfig = $map['DefaultConfig'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['InputDatasetMustBeDirectory'])) {
            $model->inputDatasetMustBeDirectory = $map['InputDatasetMustBeDirectory'];
        }

        if (isset($map['InputExampleUri'])) {
            $model->inputExampleUri = $map['InputExampleUri'];
        }

        if (isset($map['JobType'])) {
            $model->jobType = $map['JobType'];
        }

        if (isset($map['ModelSlots'])) {
            if (!empty($map['ModelSlots'])) {
                $model->modelSlots = [];
                $n1 = 0;
                foreach ($map['ModelSlots'] as $item1) {
                    $model->modelSlots[$n1] = modelSlots::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['OrderNumber'])) {
            $model->orderNumber = $map['OrderNumber'];
        }

        if (isset($map['PipelineStages'])) {
            if (!empty($map['PipelineStages'])) {
                $model->pipelineStages = [];
                $n1 = 0;
                foreach ($map['PipelineStages'] as $item1) {
                    $model->pipelineStages[$n1] = pipelineStages::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['PresetConfig'])) {
            if (!empty($map['PresetConfig'])) {
                $model->presetConfig = [];
                $n1 = 0;
                foreach ($map['PresetConfig'] as $item1) {
                    $model->presetConfig[$n1] = presetConfig::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['TemplateId'])) {
            $model->templateId = $map['TemplateId'];
        }

        if (isset($map['TemplateName'])) {
            $model->templateName = $map['TemplateName'];
        }

        if (isset($map['TrainingOptions'])) {
            if (!empty($map['TrainingOptions'])) {
                $model->trainingOptions = [];
                $n1 = 0;
                foreach ($map['TrainingOptions'] as $item1) {
                    $model->trainingOptions[$n1] = trainingOptions::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
