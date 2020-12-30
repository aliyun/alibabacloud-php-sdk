<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\GetAITemplateResponseBody;

use AlibabaCloud\Tea\Model;

class templateInfo extends Model
{
    /**
     * @var string
     */
    public $creationTime;

    /**
     * @var string
     */
    public $isDefault;

    /**
     * @var string
     */
    public $templateType;

    /**
     * @var string
     */
    public $templateConfig;

    /**
     * @var string
     */
    public $templateName;

    /**
     * @var string
     */
    public $source;

    /**
     * @var string
     */
    public $templateId;

    /**
     * @var string
     */
    public $modifyTime;
    protected $_name = [
        'creationTime'   => 'CreationTime',
        'isDefault'      => 'IsDefault',
        'templateType'   => 'TemplateType',
        'templateConfig' => 'TemplateConfig',
        'templateName'   => 'TemplateName',
        'source'         => 'Source',
        'templateId'     => 'TemplateId',
        'modifyTime'     => 'ModifyTime',
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
        if (null !== $this->templateType) {
            $res['TemplateType'] = $this->templateType;
        }
        if (null !== $this->templateConfig) {
            $res['TemplateConfig'] = $this->templateConfig;
        }
        if (null !== $this->templateName) {
            $res['TemplateName'] = $this->templateName;
        }
        if (null !== $this->source) {
            $res['Source'] = $this->source;
        }
        if (null !== $this->templateId) {
            $res['TemplateId'] = $this->templateId;
        }
        if (null !== $this->modifyTime) {
            $res['ModifyTime'] = $this->modifyTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return templateInfo
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
        if (isset($map['TemplateType'])) {
            $model->templateType = $map['TemplateType'];
        }
        if (isset($map['TemplateConfig'])) {
            $model->templateConfig = $map['TemplateConfig'];
        }
        if (isset($map['TemplateName'])) {
            $model->templateName = $map['TemplateName'];
        }
        if (isset($map['Source'])) {
            $model->source = $map['Source'];
        }
        if (isset($map['TemplateId'])) {
            $model->templateId = $map['TemplateId'];
        }
        if (isset($map['ModifyTime'])) {
            $model->modifyTime = $map['ModifyTime'];
        }

        return $model;
    }
}
