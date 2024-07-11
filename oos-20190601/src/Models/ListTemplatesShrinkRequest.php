<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oos\V20190601\Models;

use AlibabaCloud\Tea\Model;

class ListTemplatesShrinkRequest extends Model
{
    /**
     * @description The type of the template. Valid values include TimerTrigger, EventTrigger, AlarmTrigger, and Other.
     *
     * @example TimerTrigger
     *
     * @var string
     */
    public $category;

    /**
     * @description The creator of the template.
     *
     *   To query the template provided by Alibaba Cloud, set this parameter to **ACS**.
     *   To query the template created by a user, set this parameter to the **ID** of the template or the **name of the user** who creates the template.
     *
     * @example ACS
     *
     * @var string
     */
    public $createdBy;

    /**
     * @description Specifies to query the template that is created at or later than the specified time.
     *
     * The value must be in the YYYY-MM-DDThh:mm:ssZ format.
     * @example 2019-05-16T10:26:14Z
     *
     * @var string
     */
    public $createdDateAfter;

    /**
     * @description Specifies to query the template that is created at or before the specified time.
     *
     * The value must be in the YYYY-MM-DDThh:mm::ssZ format.
     * @example 2019-05-16T10:26:14Z
     *
     * @var string
     */
    public $createdDateBefore;

    /**
     * @description Specifies whether to query the template that is configured with a trigger.
     *
     * @example true
     *
     * @var bool
     */
    public $hasTrigger;

    /**
     * @var bool
     */
    public $isExample;

    /**
     * @description The template is favorite or not.
     *
     * @example true
     *
     * @var bool
     */
    public $isFavorite;

    /**
     * @description The number of entries to return on each page. Valid values: 10 to 100. Default value: 50.
     *
     * @example 50
     *
     * @var int
     */
    public $maxResults;

    /**
     * @description The token that is used to retrieve the next page of results.
     *
     * @example xxx
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description The ID of the region in which you want to query templates.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The ID of the resource group.
     *
     * @example rg-acfmxsn4m4******
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description The share type of the template. Valid values:
     *
     *   **Public**
     *   **Private**
     *
     * @example Private
     *
     * @var string
     */
    public $shareType;

    /**
     * @description The field that is used to sort the templates to be queried. Valid values:
     *
     *   **TotalExecutionCount** (default): The system sorts the returned templates based on the total number of times that the templates are used.
     *   **Popularity**: The system sorts the returned templates based on the popularity of the templates.
     *   **TemplateName**: The system sorts the returned templates based on the names of the templates.
     *   **CreatedDate**: The system sorts the returned templates based on the points in time when the templates are created.
     *   **UpdatedDate**: The system sorts the returned templates based on the points in time when the templates are updated.
     *
     * @example Popularity
     *
     * @var string
     */
    public $sortField;

    /**
     * @description The order in which you want to sort the results. Valid values:
     *
     *   **Ascending**: ascending order.
     *   **Descending**: descending order. This is the default value.
     *
     * @example Descending
     *
     * @var string
     */
    public $sortOrder;

    /**
     * @description The tag keys and values. The number of key-value pairs ranges from 1 to 20.
     *
     * @example {"k1":"k2","k2":"v2"}
     *
     * @var string
     */
    public $tagsShrink;

    /**
     * @description The format of the template. Valid values:
     *
     *   **JSON**
     *   **YAML**
     *
     * @example YAML
     *
     * @var string
     */
    public $templateFormat;

    /**
     * @description The name of the template. All templates whose names contain the specified template name are to be returned.
     *
     * @example MyTemplate
     *
     * @var string
     */
    public $templateName;

    /**
     * @description The type of the template. Valid values:
     *
     *   Automation: the template for automated tasks.
     *   State: the template for configuration inventories.
     *   Package: the template for software packages.
     *
     * @example private
     *
     * @var string
     */
    public $templateType;
    protected $_name = [
        'category'          => 'Category',
        'createdBy'         => 'CreatedBy',
        'createdDateAfter'  => 'CreatedDateAfter',
        'createdDateBefore' => 'CreatedDateBefore',
        'hasTrigger'        => 'HasTrigger',
        'isExample'         => 'IsExample',
        'isFavorite'        => 'IsFavorite',
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
        if (null !== $this->isExample) {
            $res['IsExample'] = $this->isExample;
        }
        if (null !== $this->isFavorite) {
            $res['IsFavorite'] = $this->isFavorite;
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
        if (isset($map['IsExample'])) {
            $model->isExample = $map['IsExample'];
        }
        if (isset($map['IsFavorite'])) {
            $model->isFavorite = $map['IsFavorite'];
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
