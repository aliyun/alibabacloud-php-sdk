<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oos\V20190601\Models\ListInstancePackageStatesResponseBody;

use AlibabaCloud\Tea\Model;

class packageStates extends Model
{
    /**
     * @description Description
     *
     * @example template description
     *
     * @var string
     */
    public $description;

    /**
     * @description Parameters
     *
     * @example {}
     *
     * @var string
     */
    public $parameters;

    /**
     * @description Publisher
     *
     * @example Alibaba Cloud
     *
     * @var string
     */
    public $publisher;

    /**
     * @description Template type
     *
     * @example Package
     *
     * @var string
     */
    public $templateCategory;

    /**
     * @description Template ID
     *
     * @example 087b1e11072a40259f6fxxxxxxxxx
     *
     * @var string
     */
    public $templateId;

    /**
     * @description Template name.
     *
     * @example ACS-ECS-Docker
     *
     * @var string
     */
    public $templateName;

    /**
     * @description Template version number
     *
     * @example v3
     *
     * @var string
     */
    public $templateVersion;

    /**
     * @description Template version name
     *
     * @example fix bug
     *
     * @var string
     */
    public $templateVersionName;

    /**
     * @description Update time.
     *
     * @example 2024-05-04T11:17:28
     *
     * @var string
     */
    public $updateTime;
    protected $_name = [
        'description'         => 'Description',
        'parameters'          => 'Parameters',
        'publisher'           => 'Publisher',
        'templateCategory'    => 'TemplateCategory',
        'templateId'          => 'TemplateId',
        'templateName'        => 'TemplateName',
        'templateVersion'     => 'TemplateVersion',
        'templateVersionName' => 'TemplateVersionName',
        'updateTime'          => 'UpdateTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
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

    /**
     * @param array $map
     *
     * @return packageStates
     */
    public static function fromMap($map = [])
    {
        $model = new self();
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
