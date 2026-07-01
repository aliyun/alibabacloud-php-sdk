<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dysmsapi\V20170525\Models;

use AlibabaCloud\Dara\Model;

class CreateRCSTemplateRequest extends Model
{
    /**
     * @var string
     */
    public $relatedSignNames;

    /**
     * @var string
     */
    public $templateContent;

    /**
     * @var string
     */
    public $templateFormat;

    /**
     * @var string
     */
    public $templateMenu;

    /**
     * @var string
     */
    public $templateName;

    /**
     * @var string
     */
    public $templateRule;

    /**
     * @var int
     */
    public $templateType;
    protected $_name = [
        'relatedSignNames' => 'RelatedSignNames',
        'templateContent' => 'TemplateContent',
        'templateFormat' => 'TemplateFormat',
        'templateMenu' => 'TemplateMenu',
        'templateName' => 'TemplateName',
        'templateRule' => 'TemplateRule',
        'templateType' => 'TemplateType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->relatedSignNames) {
            $res['RelatedSignNames'] = $this->relatedSignNames;
        }

        if (null !== $this->templateContent) {
            $res['TemplateContent'] = $this->templateContent;
        }

        if (null !== $this->templateFormat) {
            $res['TemplateFormat'] = $this->templateFormat;
        }

        if (null !== $this->templateMenu) {
            $res['TemplateMenu'] = $this->templateMenu;
        }

        if (null !== $this->templateName) {
            $res['TemplateName'] = $this->templateName;
        }

        if (null !== $this->templateRule) {
            $res['TemplateRule'] = $this->templateRule;
        }

        if (null !== $this->templateType) {
            $res['TemplateType'] = $this->templateType;
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
        if (isset($map['RelatedSignNames'])) {
            $model->relatedSignNames = $map['RelatedSignNames'];
        }

        if (isset($map['TemplateContent'])) {
            $model->templateContent = $map['TemplateContent'];
        }

        if (isset($map['TemplateFormat'])) {
            $model->templateFormat = $map['TemplateFormat'];
        }

        if (isset($map['TemplateMenu'])) {
            $model->templateMenu = $map['TemplateMenu'];
        }

        if (isset($map['TemplateName'])) {
            $model->templateName = $map['TemplateName'];
        }

        if (isset($map['TemplateRule'])) {
            $model->templateRule = $map['TemplateRule'];
        }

        if (isset($map['TemplateType'])) {
            $model->templateType = $map['TemplateType'];
        }

        return $model;
    }
}
