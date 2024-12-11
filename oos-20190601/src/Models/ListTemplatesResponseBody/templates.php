<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oos\V20190601\Models\ListTemplatesResponseBody;

use AlibabaCloud\Tea\Model;

class templates extends Model
{
    /**
     * @description The template type.
     *
     * @example TimerTrigger
     *
     * @var string
     */
    public $category;

    /**
     * @description The template constraints.
     *
     * @example {
     * }
     * @var string
     */
    public $constraints;

    /**
     * @description The user who created the template.
     *
     * @example root(1309200)
     *
     * @var string
     */
    public $createdBy;

    /**
     * @description The creation time of the template.
     *
     * @example 2019-05-16T10:26:14Z
     *
     * @var string
     */
    public $createdDate;

    /**
     * @description The template description.
     *
     * @example Describe instances of given status
     *
     * @var string
     */
    public $description;

    /**
     * @description Indicates whether the template was configured with a trigger.
     *
     * @example true
     *
     * @var bool
     */
    public $hasTrigger;

    /**
     * @description The SHA256 value of the template content.
     *
     * @example 4bc7d7a21b3e003434b9c223f6e6d2578b5ebfeb5be28c1fcf8a8a1b11907bb4
     *
     * @var string
     */
    public $hash;

    /**
     * @description Indicates whether the template is added to favorites.
     *
     * @example true
     *
     * @var bool
     */
    public $isFavorite;

    /**
     * @description The popularity of the public template. Valid values: **1-10**. A greater value indicates higher popularity. If **ShareType** is set to **Private**, the value of this parameter is `-1`.
     *
     * >  This parameter is valid only if **ShareType** is set to **Public**.
     * @example 8
     *
     * @var int
     */
    public $popularity;

    /**
     * @description The user who published the template.
     *
     * @example aliyun
     *
     * @var string
     */
    public $publisher;

    /**
     * @description The ID of the resource group.
     *
     * @example rg-acfmxsn4m4******
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description The share type of the template. The share type of a template created by a user is **Private**. Valid values:
     *
     *   **Public**
     *   **Private**
     *
     * @example Public
     *
     * @var string
     */
    public $shareType;

    /**
     * @description The tag keys and values. The number of key-value pairs ranges from 1 to 20.
     *
     * @example {"k1":"v1","k2":"v2"}
     *
     * @var mixed[]
     */
    public $tags;

    /**
     * @description The template format. The system automatically determines whether the format of the template is JSON or YAML.
     *
     * @example JSON
     *
     * @var string
     */
    public $templateFormat;

    /**
     * @description The template ID.
     *
     * @example t-94753deed38
     *
     * @var string
     */
    public $templateId;

    /**
     * @description The template name.
     *
     * @example MyTemplate
     *
     * @var string
     */
    public $templateName;

    /**
     * @description The template type.
     *
     * @example private
     *
     * @var string
     */
    public $templateType;

    /**
     * @description The template version. The version contains the letter v and a number. The number starts from 1.
     *
     * @example v1
     *
     * @var string
     */
    public $templateVersion;

    /**
     * @description The number of times for which the private template is executed. If **ShareType** is set to **Public**, the value of this parameter is `-1`.
     *
     * >  This parameter is valid only if **ShareType** is set to **Private**.
     * @example 5
     *
     * @var int
     */
    public $totalExecutionCount;

    /**
     * @description The user who last updated the template.
     *
     * @example root(13092000)
     *
     * @var string
     */
    public $updatedBy;

    /**
     * @description The time when the template was last updated.
     *
     * @example 2019-05-16T10:26:14Z
     *
     * @var string
     */
    public $updatedDate;

    /**
     * @description The version name.
     *
     * @example v2.1
     *
     * @var string
     */
    public $versionName;
    protected $_name = [
        'category'            => 'Category',
        'constraints'         => 'Constraints',
        'createdBy'           => 'CreatedBy',
        'createdDate'         => 'CreatedDate',
        'description'         => 'Description',
        'hasTrigger'          => 'HasTrigger',
        'hash'                => 'Hash',
        'isFavorite'          => 'IsFavorite',
        'popularity'          => 'Popularity',
        'publisher'           => 'Publisher',
        'resourceGroupId'     => 'ResourceGroupId',
        'shareType'           => 'ShareType',
        'tags'                => 'Tags',
        'templateFormat'      => 'TemplateFormat',
        'templateId'          => 'TemplateId',
        'templateName'        => 'TemplateName',
        'templateType'        => 'TemplateType',
        'templateVersion'     => 'TemplateVersion',
        'totalExecutionCount' => 'TotalExecutionCount',
        'updatedBy'           => 'UpdatedBy',
        'updatedDate'         => 'UpdatedDate',
        'versionName'         => 'VersionName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->category) {
            $res['Category'] = $this->category;
        }
        if (null !== $this->constraints) {
            $res['Constraints'] = $this->constraints;
        }
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
        if (null !== $this->isFavorite) {
            $res['IsFavorite'] = $this->isFavorite;
        }
        if (null !== $this->popularity) {
            $res['Popularity'] = $this->popularity;
        }
        if (null !== $this->publisher) {
            $res['Publisher'] = $this->publisher;
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
        if (null !== $this->totalExecutionCount) {
            $res['TotalExecutionCount'] = $this->totalExecutionCount;
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
     * @return templates
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Category'])) {
            $model->category = $map['Category'];
        }
        if (isset($map['Constraints'])) {
            $model->constraints = $map['Constraints'];
        }
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
        if (isset($map['IsFavorite'])) {
            $model->isFavorite = $map['IsFavorite'];
        }
        if (isset($map['Popularity'])) {
            $model->popularity = $map['Popularity'];
        }
        if (isset($map['Publisher'])) {
            $model->publisher = $map['Publisher'];
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
        if (isset($map['TotalExecutionCount'])) {
            $model->totalExecutionCount = $map['TotalExecutionCount'];
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
