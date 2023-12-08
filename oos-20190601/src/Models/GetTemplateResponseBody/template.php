<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oos\V20190601\Models\GetTemplateResponseBody;

use AlibabaCloud\Tea\Model;

class template extends Model
{
    /**
     * @description The creator of the template.
     *
     * @example ACS
     *
     * @var string
     */
    public $createdBy;

    /**
     * @description The time when the template was created.
     *
     * @example 2019-05-16T10:26:14Z
     *
     * @var string
     */
    public $createdDate;

    /**
     * @description The description of the template.
     *
     * @example "{\"en\": \"Creates an ECS image\", \"zh-cn\": \"创建一个ECS镜像\", \"name-en\": \"Create Image\", \"name-zh-cn\": \"创建镜像\", \"categories\": [\"image_manage\", \"application_manage\"]}"
     *
     * @var string
     */
    public $description;

    /**
     * @description Indicates whether the template was configured with a trigger.
     *
     * @example false
     *
     * @var bool
     */
    public $hasTrigger;

    /**
     * @description The SHA-256 value of the template content.
     *
     * @example 40fb5e3e08ef6c8a499ff7cd8441194f518028ad08338a84cb70c023a64576f1
     *
     * @var string
     */
    public $hash;

    /**
     * @description The ID of the resource group.
     *
     * @example rg-acfmxsn4m4******
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description The share type of the template. The share type of a user-created template is **Private**.
     *
     * @example Public
     *
     * @var string
     */
    public $shareType;

    /**
     * @description The tag keys and values. The number of key-value pairs ranges from 1 to 20.
     *
     * @example {"k1":"k2","k2":"v2"}
     *
     * @var mixed[]
     */
    public $tags;

    /**
     * @description The format of the template. The system automatically determines whether the format is JSON or YAML.
     *
     * @example YAML
     *
     * @var string
     */
    public $templateFormat;

    /**
     * @description The ID of the template.
     *
     * @example t-4bdb1745c171401883a2
     *
     * @var string
     */
    public $templateId;

    /**
     * @description The name of the template.
     *
     * @example ACS-ECS-CreateImage
     *
     * @var string
     */
    public $templateName;

    /**
     * @description The type of the template.
     *
     * @example Automation
     *
     * @var string
     */
    public $templateType;

    /**
     * @description The version of the template. The name of the version consists of the letter v and a number. The number starts from 1.
     *
     * @example v15
     *
     * @var string
     */
    public $templateVersion;

    /**
     * @description The user who last updated the template.
     *
     * @example ACS
     *
     * @var string
     */
    public $updatedBy;

    /**
     * @description The time when the template was last updated.
     *
     * @example 2022-04-26T08:37:07Z
     *
     * @var string
     */
    public $updatedDate;

    /**
     * @description The name of the version of the template.
     *
     * @example version15
     *
     * @var string
     */
    public $versionName;
    protected $_name = [
        'createdBy'       => 'CreatedBy',
        'createdDate'     => 'CreatedDate',
        'description'     => 'Description',
        'hasTrigger'      => 'HasTrigger',
        'hash'            => 'Hash',
        'resourceGroupId' => 'ResourceGroupId',
        'shareType'       => 'ShareType',
        'tags'            => 'Tags',
        'templateFormat'  => 'TemplateFormat',
        'templateId'      => 'TemplateId',
        'templateName'    => 'TemplateName',
        'templateType'    => 'TemplateType',
        'templateVersion' => 'TemplateVersion',
        'updatedBy'       => 'UpdatedBy',
        'updatedDate'     => 'UpdatedDate',
        'versionName'     => 'VersionName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->createdBy) {
            $res['CreatedBy'] = $this->createdBy;
        }
        if (null !== $this->createdDate) {
            $res['CreatedDate'] = $this->createdDate;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->hasTrigger) {
            $res['HasTrigger'] = $this->hasTrigger;
        }
        if (null !== $this->hash) {
            $res['Hash'] = $this->hash;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->shareType) {
            $res['ShareType'] = $this->shareType;
        }
        if (null !== $this->tags) {
            $res['Tags'] = $this->tags;
        }
        if (null !== $this->templateFormat) {
            $res['TemplateFormat'] = $this->templateFormat;
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
        if (null !== $this->templateVersion) {
            $res['TemplateVersion'] = $this->templateVersion;
        }
        if (null !== $this->updatedBy) {
            $res['UpdatedBy'] = $this->updatedBy;
        }
        if (null !== $this->updatedDate) {
            $res['UpdatedDate'] = $this->updatedDate;
        }
        if (null !== $this->versionName) {
            $res['VersionName'] = $this->versionName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return template
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreatedBy'])) {
            $model->createdBy = $map['CreatedBy'];
        }
        if (isset($map['CreatedDate'])) {
            $model->createdDate = $map['CreatedDate'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['HasTrigger'])) {
            $model->hasTrigger = $map['HasTrigger'];
        }
        if (isset($map['Hash'])) {
            $model->hash = $map['Hash'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['ShareType'])) {
            $model->shareType = $map['ShareType'];
        }
        if (isset($map['Tags'])) {
            $model->tags = $map['Tags'];
        }
        if (isset($map['TemplateFormat'])) {
            $model->templateFormat = $map['TemplateFormat'];
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
        if (isset($map['TemplateVersion'])) {
            $model->templateVersion = $map['TemplateVersion'];
        }
        if (isset($map['UpdatedBy'])) {
            $model->updatedBy = $map['UpdatedBy'];
        }
        if (isset($map['UpdatedDate'])) {
            $model->updatedDate = $map['UpdatedDate'];
        }
        if (isset($map['VersionName'])) {
            $model->versionName = $map['VersionName'];
        }

        return $model;
    }
}
