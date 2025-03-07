<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\CreateCustomTemplateResponseBody;

use AlibabaCloud\Tea\Model;

class customTemplate extends Model
{
    /**
     * @description The time when the template was created.
     *
     * @example 2022-04-19T02:04:31Z
     *
     * @var string
     */
    public $createTime;

    /**
     * @description Indicates whether the template is the default template.
     *
     * @example true
     *
     * @var bool
     */
    public $isDefault;

    /**
     * @description The time when the template was last modified.
     *
     * @example 2022-04-19T02:04:31Z
     *
     * @var string
     */
    public $modifiedTime;

    /**
     * @description The template state.
     *
     * @example Normal
     *
     * @var string
     */
    public $status;

    /**
     * @description The subtype name of the template.
     *
     * @example Remux
     *
     * @var string
     */
    public $subtype;

    /**
     * @description The template configurations.
     *
     * @example {"Container":{"Format":"flv"},"Video":{},"Audio":{}}
     *
     * @var string
     */
    public $templateConfig;

    /**
     * @description The template ID.
     *
     * @example ****20b48fb04483915d4f2cd8ac****
     *
     * @var string
     */
    public $templateId;

    /**
     * @description The template name.
     *
     * @example test-template
     *
     * @var string
     */
    public $templateName;

    /**
     * @description The type ID of the template.
     *
     * @example 1
     *
     * @var int
     */
    public $type;

    /**
     * @description The type name of the template.
     *
     * @example TranscodeTemplate
     *
     * @var string
     */
    public $typeName;
    protected $_name = [
        'createTime'     => 'CreateTime',
        'isDefault'      => 'IsDefault',
        'modifiedTime'   => 'ModifiedTime',
        'status'         => 'Status',
        'subtype'        => 'Subtype',
        'templateConfig' => 'TemplateConfig',
        'templateId'     => 'TemplateId',
        'templateName'   => 'TemplateName',
        'type'           => 'Type',
        'typeName'       => 'TypeName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->isDefault) {
            $res['IsDefault'] = $this->isDefault;
        }
        if (null !== $this->modifiedTime) {
            $res['ModifiedTime'] = $this->modifiedTime;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->subtype) {
            $res['Subtype'] = $this->subtype;
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
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->typeName) {
            $res['TypeName'] = $this->typeName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return customTemplate
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['IsDefault'])) {
            $model->isDefault = $map['IsDefault'];
        }
        if (isset($map['ModifiedTime'])) {
            $model->modifiedTime = $map['ModifiedTime'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Subtype'])) {
            $model->subtype = $map['Subtype'];
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
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['TypeName'])) {
            $model->typeName = $map['TypeName'];
        }

        return $model;
    }
}
