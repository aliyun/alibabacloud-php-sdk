<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oos\V20190601\Models\ListInstancePackageStatesResponseBody;

use AlibabaCloud\Dara\Model;

class packageStates extends Model
{
    /**
     * @var string
     */
    public $configurationInfo;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $parameters;

    /**
     * @var string
     */
    public $publisher;

    /**
     * @var string
     */
    public $templateCategory;

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
    public $templateVersion;

    /**
     * @var string
     */
    public $templateVersionName;

    /**
     * @var string
     */
    public $updateTime;
    protected $_name = [
        'configurationInfo' => 'ConfigurationInfo',
        'description' => 'Description',
        'parameters' => 'Parameters',
        'publisher' => 'Publisher',
        'templateCategory' => 'TemplateCategory',
        'templateId' => 'TemplateId',
        'templateName' => 'TemplateName',
        'templateVersion' => 'TemplateVersion',
        'templateVersionName' => 'TemplateVersionName',
        'updateTime' => 'UpdateTime',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->configurationInfo) {
            $res['ConfigurationInfo'] = $this->configurationInfo;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->parameters) {
            $res['Parameters'] = $this->parameters;
        }

        if (null !== $this->publisher) {
            $res['Publisher'] = $this->publisher;
        }

        if (null !== $this->templateCategory) {
            $res['TemplateCategory'] = $this->templateCategory;
        }

        if (null !== $this->templateId) {
            $res['TemplateId'] = $this->templateId;
        }

        if (null !== $this->templateName) {
            $res['TemplateName'] = $this->templateName;
        }

        if (null !== $this->templateVersion) {
            $res['TemplateVersion'] = $this->templateVersion;
        }

        if (null !== $this->templateVersionName) {
            $res['TemplateVersionName'] = $this->templateVersionName;
        }

        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
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
        if (isset($map['ConfigurationInfo'])) {
            $model->configurationInfo = $map['ConfigurationInfo'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['Parameters'])) {
            $model->parameters = $map['Parameters'];
        }

        if (isset($map['Publisher'])) {
            $model->publisher = $map['Publisher'];
        }

        if (isset($map['TemplateCategory'])) {
            $model->templateCategory = $map['TemplateCategory'];
        }

        if (isset($map['TemplateId'])) {
            $model->templateId = $map['TemplateId'];
        }

        if (isset($map['TemplateName'])) {
            $model->templateName = $map['TemplateName'];
        }

        if (isset($map['TemplateVersion'])) {
            $model->templateVersion = $map['TemplateVersion'];
        }

        if (isset($map['TemplateVersionName'])) {
            $model->templateVersionName = $map['TemplateVersionName'];
        }

        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }

        return $model;
    }
}
