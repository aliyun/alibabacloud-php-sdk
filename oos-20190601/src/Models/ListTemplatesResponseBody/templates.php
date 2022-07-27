<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oos\V20190601\Models\ListTemplatesResponseBody;

use AlibabaCloud\Tea\Model;

class templates extends Model
{
    /**
     * @var string
     */
    public $category;

    /**
     * @var string
     */
    public $createdBy;

    /**
     * @var string
     */
    public $createdDate;

    /**
     * @var string
     */
    public $description;

    /**
     * @var bool
     */
    public $hasTrigger;

    /**
     * @var string
     */
    public $hash;

    /**
     * @var int
     */
    public $popularity;

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var string
     */
    public $shareType;

    /**
     * @var mixed[]
     */
    public $tags;

    /**
     * @var string
     */
    public $templateFormat;

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
    public $templateType;

    /**
     * @var string
     */
    public $templateVersion;

    /**
     * @var int
     */
    public $totalExecutionCount;

    /**
     * @var string
     */
    public $updatedBy;

    /**
     * @var string
     */
    public $updatedDate;
    protected $_name = [
        'category'            => 'Category',
        'createdBy'           => 'CreatedBy',
        'createdDate'         => 'CreatedDate',
        'description'         => 'Description',
        'hasTrigger'          => 'HasTrigger',
        'hash'                => 'Hash',
        'popularity'          => 'Popularity',
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
        if (null !== $this->popularity) {
            $res['Popularity'] = $this->popularity;
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
        if (isset($map['Popularity'])) {
            $model->popularity = $map['Popularity'];
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

        return $model;
    }
}
