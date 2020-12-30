<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Tea\Model;

class AddAITemplateRequest extends Model
{
    /**
     * @var string
     */
    public $templateName;

    /**
     * @var string
     */
    public $templateType;

    /**
     * @var string
     */
    public $templateConfig;
    protected $_name = [
        'templateName'   => 'TemplateName',
        'templateType'   => 'TemplateType',
        'templateConfig' => 'TemplateConfig',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->templateName) {
            $res['TemplateName'] = $this->templateName;
        }
        if (null !== $this->templateType) {
            $res['TemplateType'] = $this->templateType;
        }
        if (null !== $this->templateConfig) {
            $res['TemplateConfig'] = $this->templateConfig;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AddAITemplateRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TemplateName'])) {
            $model->templateName = $map['TemplateName'];
        }
        if (isset($map['TemplateType'])) {
            $model->templateType = $map['TemplateType'];
        }
        if (isset($map['TemplateConfig'])) {
            $model->templateConfig = $map['TemplateConfig'];
        }

        return $model;
    }
}
