<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Tea\Model;

class AddAITemplateRequest extends Model
{
    /**
     * @description The detailed configurations of the AI template. The value must be a JSON string. For more information, see [AITemplateConfig](~~89863#title-vd3-499-o36~~).
     *
     * @example {"AuditItem":["terrorism","porn"],"AuditRange":["image-cover","text-title","video"],"AuditContent":["screen"],"AuditAutoBlock":"yes"}
     *
     * @var string
     */
    public $templateConfig;

    /**
     * @description The name of the AI template. The name can be up to 128 bytes in length.
     *
     * @example AI-media-test
     *
     * @var string
     */
    public $templateName;

    /**
     * @description The type of the AI template. Valid values:
     *
     *   **AIMediaAudit**: automated review
     *   **AIImage**: smart thumbnail
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
