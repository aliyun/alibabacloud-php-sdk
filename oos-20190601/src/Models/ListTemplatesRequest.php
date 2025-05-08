<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oos\V20190601\Models;

use AlibabaCloud\Dara\Model;

class ListTemplatesRequest extends Model
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
     * @var bool
     */
    public $isExample;

    /**
     * @var bool
     */
    public $isFavorite;

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
    public $templateName;

    /**
     * @var string
     */
    public $templateType;
    protected $_name = [
        'category' => 'Category',
        'createdBy' => 'CreatedBy',
        'createdDateAfter' => 'CreatedDateAfter',
        'createdDateBefore' => 'CreatedDateBefore',
        'hasTrigger' => 'HasTrigger',
        'isExample' => 'IsExample',
        'isFavorite' => 'IsFavorite',
        'maxResults' => 'MaxResults',
        'nextToken' => 'NextToken',
        'regionId' => 'RegionId',
        'resourceGroupId' => 'ResourceGroupId',
        'shareType' => 'ShareType',
        'sortField' => 'SortField',
        'sortOrder' => 'SortOrder',
        'tags' => 'Tags',
        'templateFormat' => 'TemplateFormat',
        'templateName' => 'TemplateName',
        'templateType' => 'TemplateType',
    ];

    public function validate()
    {
        if (\is_array($this->tags)) {
            Model::validateArray($this->tags);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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

        if (null !== $this->tags) {
            if (\is_array($this->tags)) {
                $res['Tags'] = [];
                foreach ($this->tags as $key1 => $value1) {
                    $res['Tags'][$key1] = $value1;
                }
            }
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
            if (!empty($map['Tags'])) {
                $model->tags = [];
                foreach ($map['Tags'] as $key1 => $value1) {
                    $model->tags[$key1] = $value1;
                }
            }
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
