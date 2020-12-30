<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Tea\Model;

class UpdateAITemplateRequest extends Model
{
    /**
     * @var string
     */
    public $templateId;

    /**
     * @var string
     */
    public $templateName;

    /**
     * @var string
     */
    public $templateConfig;
    protected $_name = [
        'templateId'     => 'TemplateId',
        'templateName'   => 'TemplateName',
        'templateConfig' => 'TemplateConfig',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->templateId) {
            $res['TemplateId'] = $this->templateId;
        }
        if (null !== $this->templateName) {
            $res['TemplateName'] = $this->templateName;
        }
        if (null !== $this->templateConfig) {
            $res['TemplateConfig'] = $this->templateConfig;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateAITemplateRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TemplateId'])) {
            $model->templateId = $map['TemplateId'];
        }
        if (isset($map['TemplateName'])) {
            $model->templateName = $map['TemplateName'];
        }
        if (isset($map['TemplateConfig'])) {
            $model->templateConfig = $map['TemplateConfig'];
        }

        return $model;
    }
}
