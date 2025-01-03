<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflocnp\V20230828\Models;

use AlibabaCloud\SDK\Eflocnp\V20230828\Models\CreateExperimentPlanTemplateRequest\templatePipeline;
use AlibabaCloud\Tea\Model;

class CreateExperimentPlanTemplateRequest extends Model
{
    /**
     * @example private
     *
     * @var string
     */
    public $privacyLevel;

    /**
     * @example The template installs jdk and tomcat on a new ECS instance.
     *
     * @var string
     */
    public $templateDescription;

    /**
     * @example 4724
     *
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
        'privacyLevel'        => 'PrivacyLevel',
        'templateDescription' => 'TemplateDescription',
        'templateId'          => 'TemplateId',
        'templateName'        => 'TemplateName',
        'templatePipeline'    => 'TemplatePipeline',
    ];

    public function validate()
    {
    }

    public function toMap()
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
            $res['TemplatePipeline'] = [];
            if (null !== $this->templatePipeline && \is_array($this->templatePipeline)) {
                $n = 0;
                foreach ($this->templatePipeline as $item) {
                    $res['TemplatePipeline'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateExperimentPlanTemplateRequest
     */
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
                $n                       = 0;
                foreach ($map['TemplatePipeline'] as $item) {
                    $model->templatePipeline[$n++] = null !== $item ? templatePipeline::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
