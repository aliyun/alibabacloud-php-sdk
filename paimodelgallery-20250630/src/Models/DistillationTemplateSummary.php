<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PAIModelGallery\V20250630\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\PAIModelGallery\V20250630\Models\DistillationTemplateSummary\pipelineStages;
use AlibabaCloud\SDK\PAIModelGallery\V20250630\Models\DistillationTemplateSummary\trainingOptions;

class DistillationTemplateSummary extends Model
{
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
    public $description;

    /**
     * @var string
     */
    public $jobType;

    /**
     * @var int
     */
    public $orderNumber;

    /**
     * @var pipelineStages[]
     */
    public $pipelineStages;

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
        'capabilityTags' => 'CapabilityTags',
        'category' => 'Category',
        'description' => 'Description',
        'jobType' => 'JobType',
        'orderNumber' => 'OrderNumber',
        'pipelineStages' => 'PipelineStages',
        'templateId' => 'TemplateId',
        'templateName' => 'TemplateName',
        'trainingOptions' => 'TrainingOptions',
    ];

    public function validate()
    {
        if (\is_array($this->capabilityTags)) {
            Model::validateArray($this->capabilityTags);
        }
        if (\is_array($this->pipelineStages)) {
            Model::validateArray($this->pipelineStages);
        }
        if (\is_array($this->trainingOptions)) {
            Model::validateArray($this->trainingOptions);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
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

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->jobType) {
            $res['JobType'] = $this->jobType;
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

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['JobType'])) {
            $model->jobType = $map['JobType'];
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
