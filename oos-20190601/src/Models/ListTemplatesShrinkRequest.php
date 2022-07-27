<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oos\V20190601\Models;

use AlibabaCloud\Tea\Model;

class ListTemplatesShrinkRequest extends Model
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
    public $createdDateAfter;

    /**
     * @var string
     */
    public $createdDateBefore;

    /**
     * @var bool
     */
    public $hasTrigger;

    /**
     * @var int
     */
    public $maxResults;

    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var string
     */
    public $shareType;

    /**
     * @var string
     */
    public $sortField;

    /**
     * @var string
     */
    public $sortOrder;

    /**
     * @var string
     */
    public $tagsShrink;

    /**
     * @var string
     */
    public $templateFormat;

    /**
     * @var string
     */
    public $templateName;

    /**
     * @var string
     */
    public $templateType;
    protected $_name = [
        'category'          => 'Category',
        'createdBy'         => 'CreatedBy',
        'createdDateAfter'  => 'CreatedDateAfter',
        'createdDateBefore' => 'CreatedDateBefore',
        'hasTrigger'        => 'HasTrigger',
        'maxResults'        => 'MaxResults',
        'nextToken'         => 'NextToken',
        'regionId'          => 'RegionId',
        'resourceGroupId'   => 'ResourceGroupId',
        'shareType'         => 'ShareType',
        'sortField'         => 'SortField',
        'sortOrder'         => 'SortOrder',
        'tagsShrink'        => 'Tags',
        'templateFormat'    => 'TemplateFormat',
        'templateName'      => 'TemplateName',
        'templateType'      => 'TemplateType',
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
        if (null !== $this->createdDateAfter) {
            $res['CreatedDateAfter'] = $this->createdDateAfter;
        }
        if (null !== $this->createdDateBefore) {
            $res['CreatedDateBefore'] = $this->createdDateBefore;
        }
        if (null !== $this->hasTrigger) {
            $res['HasTrigger'] = $this->hasTrigger;
        }
        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->shareType) {
            $res['ShareType'] = $this->shareType;
        }
        if (null !== $this->sortField) {
            $res['SortField'] = $this->sortField;
        }
        if (null !== $this->sortOrder) {
            $res['SortOrder'] = $this->sortOrder;
        }
        if (null !== $this->tagsShrink) {
            $res['Tags'] = $this->tagsShrink;
        }
        if (null !== $this->templateFormat) {
            $res['TemplateFormat'] = $this->templateFormat;
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
     * @return ListTemplatesShrinkRequest
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
        if (isset($map['CreatedDateAfter'])) {
            $model->createdDateAfter = $map['CreatedDateAfter'];
        }
        if (isset($map['CreatedDateBefore'])) {
            $model->createdDateBefore = $map['CreatedDateBefore'];
        }
        if (isset($map['HasTrigger'])) {
            $model->hasTrigger = $map['HasTrigger'];
        }
        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['ShareType'])) {
            $model->shareType = $map['ShareType'];
        }
        if (isset($map['SortField'])) {
            $model->sortField = $map['SortField'];
        }
        if (isset($map['SortOrder'])) {
            $model->sortOrder = $map['SortOrder'];
        }
        if (isset($map['Tags'])) {
            $model->tagsShrink = $map['Tags'];
        }
        if (isset($map['TemplateFormat'])) {
            $model->templateFormat = $map['TemplateFormat'];
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
