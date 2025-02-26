<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeDefenseTemplatesResponseBody;

use AlibabaCloud\Dara\Model;

class templates extends Model
{
    /**
     * @var string
     */
    public $defenseScene;
    /**
     * @var string
     */
    public $defenseSubScene;
    /**
     * @var string
     */
    public $description;
    /**
     * @var int
     */
    public $gmtModified;
    /**
     * @var int
     */
    public $templateId;
    /**
     * @var string
     */
    public $templateName;
    /**
     * @var string
     */
    public $templateOrigin;
    /**
     * @var int
     */
    public $templateStatus;
    /**
     * @var string
     */
    public $templateType;
    protected $_name = [
        'defenseScene'    => 'DefenseScene',
        'defenseSubScene' => 'DefenseSubScene',
        'description'     => 'Description',
        'gmtModified'     => 'GmtModified',
        'templateId'      => 'TemplateId',
        'templateName'    => 'TemplateName',
        'templateOrigin'  => 'TemplateOrigin',
        'templateStatus'  => 'TemplateStatus',
        'templateType'    => 'TemplateType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->defenseScene) {
            $res['DefenseScene'] = $this->defenseScene;
        }

        if (null !== $this->defenseSubScene) {
            $res['DefenseSubScene'] = $this->defenseSubScene;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }

        if (null !== $this->templateId) {
            $res['TemplateId'] = $this->templateId;
        }

        if (null !== $this->templateName) {
            $res['TemplateName'] = $this->templateName;
        }

        if (null !== $this->templateOrigin) {
            $res['TemplateOrigin'] = $this->templateOrigin;
        }

        if (null !== $this->templateStatus) {
            $res['TemplateStatus'] = $this->templateStatus;
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
        if (isset($map['DefenseScene'])) {
            $model->defenseScene = $map['DefenseScene'];
        }

        if (isset($map['DefenseSubScene'])) {
            $model->defenseSubScene = $map['DefenseSubScene'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }

        if (isset($map['TemplateId'])) {
            $model->templateId = $map['TemplateId'];
        }

        if (isset($map['TemplateName'])) {
            $model->templateName = $map['TemplateName'];
        }

        if (isset($map['TemplateOrigin'])) {
            $model->templateOrigin = $map['TemplateOrigin'];
        }

        if (isset($map['TemplateStatus'])) {
            $model->templateStatus = $map['TemplateStatus'];
        }

        if (isset($map['TemplateType'])) {
            $model->templateType = $map['TemplateType'];
        }

        return $model;
    }
}
