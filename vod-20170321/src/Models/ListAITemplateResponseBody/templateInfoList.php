<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\ListAITemplateResponseBody;

use AlibabaCloud\Tea\Model;

class templateInfoList extends Model
{
    /**
     * @description The time when the AI template was created. The time follows the ISO 8601 standard in the *yyyy-MM-dd*T*HH:mm:ss*Z format. The time is displayed in UTC.
     *
     * @example 2020-07-08T06:50:45Z
     *
     * @var string
     */
    public $creationTime;

    /**
     * @description Indicates whether the template is the default AI template. Valid values:
     *
     *   **Default**
     *   **NotDefault**
     *
     * @example NoDefault
     *
     * @var string
     */
    public $isDefault;

    /**
     * @description The time when the AI template was modified. The time follows the ISO 8601 standard in the *yyyy-MM-dd*T*HH:mm:ss*Z format. The time is displayed in UTC.
     *
     * @example 2020-07-08T06:58:45Z
     *
     * @var string
     */
    public $modifyTime;

    /**
     * @description The source of the AI template. Valid values:
     *
     *   **System**
     *   **Custom**
     *
     * @example Custom
     *
     * @var string
     */
    public $source;

    /**
     * @description The detailed configurations of the AI template. The value is a JSON string.
     *
     * @example {"AuditRange":["text-title","video"],"AuditContent":["screen"],"AuditItem":["terrorism","porn"],"AuditAutoBlock":"yes"}
     *
     * @var string
     */
    public $templateConfig;

    /**
     * @description The ID of the AI template.
     *
     * @example 1706a0063dd733f6a823ef32e0a5****
     *
     * @var string
     */
    public $templateId;

    /**
     * @description The name of the AI template.
     *
     * @example DemoAITemplate
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
        'creationTime'   => 'CreationTime',
        'isDefault'      => 'IsDefault',
        'modifyTime'     => 'ModifyTime',
        'source'         => 'Source',
        'templateConfig' => 'TemplateConfig',
        'templateId'     => 'TemplateId',
        'templateName'   => 'TemplateName',
        'templateType'   => 'TemplateType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }
        if (null !== $this->isDefault) {
            $res['IsDefault'] = $this->isDefault;
        }
        if (null !== $this->modifyTime) {
            $res['ModifyTime'] = $this->modifyTime;
        }
        if (null !== $this->source) {
            $res['Source'] = $this->source;
        }
        if (null !== $this->templateConfig) {
            $res['TemplateConfig'] = $this->templateConfig;
        }
        if (null !== $this->templateId) {
            $res['TemplateId'] = $this->templateId;
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
     * @return templateInfoList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }
        if (isset($map['IsDefault'])) {
            $model->isDefault = $map['IsDefault'];
        }
        if (isset($map['ModifyTime'])) {
            $model->modifyTime = $map['ModifyTime'];
        }
        if (isset($map['Source'])) {
            $model->source = $map['Source'];
        }
        if (isset($map['TemplateConfig'])) {
            $model->templateConfig = $map['TemplateConfig'];
        }
        if (isset($map['TemplateId'])) {
            $model->templateId = $map['TemplateId'];
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
