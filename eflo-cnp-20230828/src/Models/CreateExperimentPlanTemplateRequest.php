<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflocnp\V20230828\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Eflocnp\V20230828\Models\CreateExperimentPlanTemplateRequest\templatePipeline;

class CreateExperimentPlanTemplateRequest extends Model
{
    /**
     * @var string
     */
    public $privacyLevel;

    /**
     * @var string
     */
    public $templateDescription;

    /**
     * @var int
     */
    public $templateId;

    /**
     * @var string
     */
    public $templateName;

    /**
     * @var templatePipeline[]
     */
    public $templatePipeline;
    protected $_name = [
        'privacyLevel' => 'PrivacyLevel',
        'templateDescription' => 'TemplateDescription',
        'templateId' => 'TemplateId',
        'templateName' => 'TemplateName',
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
        if (null !== $this->privacyLevel) {
            $res['PrivacyLevel'] = $this->privacyLevel;
        }

        if (null !== $this->templateDescription) {
            $res['TemplateDescription'] = $this->templateDescription;
        }

        if (null !== $this->templateId) {
            $res['TemplateId'] = $this->templateId;
        }

        if (null !== $this->templateName) {
            $res['TemplateName'] = $this->templateName;
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
        if (isset($map['PrivacyLevel'])) {
            $model->privacyLevel = $map['PrivacyLevel'];
        }

        if (isset($map['TemplateDescription'])) {
            $model->templateDescription = $map['TemplateDescription'];
        }

        if (isset($map['TemplateId'])) {
            $model->templateId = $map['TemplateId'];
        }

        if (isset($map['TemplateName'])) {
            $model->templateName = $map['TemplateName'];
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
