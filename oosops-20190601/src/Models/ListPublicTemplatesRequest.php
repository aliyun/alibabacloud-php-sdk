<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oosops\V20190601\Models;

use AlibabaCloud\Tea\Model;

class ListPublicTemplatesRequest extends Model
{
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
    public $isExample;

    /**
     * @var int
     */
    public $maxResults;

    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var int
     */
    public $popularity;

    /**
     * @var string
     */
    public $regionId;

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
    public $templateFormat;

    /**
     * @var string
     */
    public $templateName;
    protected $_name = [
        'createdBy'         => 'CreatedBy',
        'createdDateAfter'  => 'CreatedDateAfter',
        'createdDateBefore' => 'CreatedDateBefore',
        'isExample'         => 'IsExample',
        'maxResults'        => 'MaxResults',
        'nextToken'         => 'NextToken',
        'popularity'        => 'Popularity',
        'regionId'          => 'RegionId',
        'shareType'         => 'ShareType',
        'sortField'         => 'SortField',
        'sortOrder'         => 'SortOrder',
        'templateFormat'    => 'TemplateFormat',
        'templateName'      => 'TemplateName',
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
        if (null !== $this->createdDateAfter) {
            $res['CreatedDateAfter'] = $this->createdDateAfter;
        }
        if (null !== $this->createdDateBefore) {
            $res['CreatedDateBefore'] = $this->createdDateBefore;
        }
        if (null !== $this->isExample) {
            $res['IsExample'] = $this->isExample;
        }
        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->popularity) {
            $res['Popularity'] = $this->popularity;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
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
        if (null !== $this->templateFormat) {
            $res['TemplateFormat'] = $this->templateFormat;
        }
        if (null !== $this->templateName) {
            $res['TemplateName'] = $this->templateName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListPublicTemplatesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreatedBy'])) {
            $model->createdBy = $map['CreatedBy'];
        }
        if (isset($map['CreatedDateAfter'])) {
            $model->createdDateAfter = $map['CreatedDateAfter'];
        }
        if (isset($map['CreatedDateBefore'])) {
            $model->createdDateBefore = $map['CreatedDateBefore'];
        }
        if (isset($map['IsExample'])) {
            $model->isExample = $map['IsExample'];
        }
        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['Popularity'])) {
            $model->popularity = $map['Popularity'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
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
        if (isset($map['TemplateFormat'])) {
            $model->templateFormat = $map['TemplateFormat'];
        }
        if (isset($map['TemplateName'])) {
            $model->templateName = $map['TemplateName'];
        }

        return $model;
    }
}
