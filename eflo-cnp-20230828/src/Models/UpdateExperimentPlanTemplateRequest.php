<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflocnp\V20230828\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Eflocnp\V20230828\Models\UpdateExperimentPlanTemplateRequest\templatePipeline;

class UpdateExperimentPlanTemplateRequest extends Model
{
    /**
     * @var int
     */
    public $templateId;

    /**
     * @var templatePipeline[]
     */
    public $templatePipeline;
    protected $_name = [
        'templateId' => 'TemplateId',
        'templatePipeline' => 'TemplatePipeline',
    ];

    public function validate()
    {
        if (\is_array($this->templatePipeline)) {
            Model::validateArray($this->templatePipeline);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->templateId) {
            $res['TemplateId'] = $this->templateId;
        }

        if (null !== $this->templatePipeline) {
            if (\is_array($this->templatePipeline)) {
                $res['TemplatePipeline'] = [];
                $n1 = 0;
                foreach ($this->templatePipeline as $item1) {
                    $res['TemplatePipeline'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['TemplateId'])) {
            $model->templateId = $map['TemplateId'];
        }

        if (isset($map['TemplatePipeline'])) {
            if (!empty($map['TemplatePipeline'])) {
                $model->templatePipeline = [];
                $n1 = 0;
                foreach ($map['TemplatePipeline'] as $item1) {
                    $model->templatePipeline[$n1++] = templatePipeline::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
