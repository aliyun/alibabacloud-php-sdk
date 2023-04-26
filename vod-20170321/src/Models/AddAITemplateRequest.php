<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Tea\Model;

class AddAITemplateRequest extends Model
{
    /**
     * @description Adds an AI template for automated review and smart thumbnail tasks.
     *
     * @example {"AuditItem":["terrorism","porn"],"AuditRange":["image-cover","text-title","video"],"AuditContent":["screen"],"AuditAutoBlock":"yes"}
     *
     * @var string
     */
    public $templateConfig;

    /**
     * @description The ID of the request.
     *
     * @example AI-media-test
     *
     * @var string
     */
    public $templateName;

    /**
     * @description The operation that you want to perform. Set the value to **AddAITemplate**.
     *
     * @example AIMediaAudit
     *
     * @var string
     */
    public $templateType;
    protected $_name = [
        'templateConfig' => 'TemplateConfig',
        'templateName'   => 'TemplateName',
        'templateType'   => 'TemplateType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->templateConfig) {
            $res['TemplateConfig'] = $this->templateConfig;
        }
        if (null !== $this->templateName) {
            $res['TemplateName'] = $this->templateName;
        }
        if (null !== $this->templateType) {
            $res['TemplateType'] = $this->templateType;
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
        if (isset($map['TemplateConfig'])) {
            $model->templateConfig = $map['TemplateConfig'];
        }
        if (isset($map['TemplateName'])) {
            $model->templateName = $map['TemplateName'];
        }
        if (isset($map['TemplateType'])) {
            $model->templateType = $map['TemplateType'];
        }

        return $model;
    }
}
