<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflocnp\V20230828\Models;

use AlibabaCloud\Dara\Model;

class UpdateExperimentPlanTemplateShrinkRequest extends Model
{
    /**
     * @var int
     */
    public $templateId;

    /**
     * @var string
     */
    public $templatePipelineShrink;
    protected $_name = [
        'templateId' => 'TemplateId',
        'templatePipelineShrink' => 'TemplatePipeline',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->templateId) {
            $res['TemplateId'] = $this->templateId;
        }

        if (null !== $this->templatePipelineShrink) {
            $res['TemplatePipeline'] = $this->templatePipelineShrink;
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
            $model->templatePipelineShrink = $map['TemplatePipeline'];
        }

        return $model;
    }
}
