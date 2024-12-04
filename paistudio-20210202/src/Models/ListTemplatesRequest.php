<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiStudio\V20210202\Models;

use AlibabaCloud\Tea\Model;

class ListTemplatesRequest extends Model
{
    /**
     * @var string
     */
    public $label;

    /**
     * @example types
     *
     * @var string
     */
    public $list;

    /**
     * @var string
     */
    public $name;

    /**
     * @example DESC
     *
     * @var string
     */
    public $order;

    /**
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @example 20
     *
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $sortBy;

    /**
     * @example PaiStudio
     *
     * @var string
     */
    public $source;

    /**
     * @example template-tag-12345
     *
     * @var string
     */
    public $tagId;

    /**
     * @var string
     */
    public $templateType;

    /**
     * @example template-type-12345
     *
     * @var string
     */
    public $typeId;

    /**
     * @var bool
     */
    public $verbose;

    /**
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'label'        => 'Label',
        'list'         => 'List',
        'name'         => 'Name',
        'order'        => 'Order',
        'pageNumber'   => 'PageNumber',
        'pageSize'     => 'PageSize',
        'sortBy'       => 'SortBy',
        'source'       => 'Source',
        'tagId'        => 'TagId',
        'templateType' => 'TemplateType',
        'typeId'       => 'TypeId',
        'verbose'      => 'Verbose',
        'workspaceId'  => 'WorkspaceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->label) {
            $res['Label'] = $this->label;
        }
        if (null !== $this->list) {
            $res['List'] = $this->list;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->order) {
            $res['Order'] = $this->order;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->sortBy) {
            $res['SortBy'] = $this->sortBy;
        }
        if (null !== $this->source) {
            $res['Source'] = $this->source;
        }
        if (null !== $this->tagId) {
            $res['TagId'] = $this->tagId;
        }
        if (null !== $this->templateType) {
            $res['TemplateType'] = $this->templateType;
        }
        if (null !== $this->typeId) {
            $res['TypeId'] = $this->typeId;
        }
        if (null !== $this->verbose) {
            $res['Verbose'] = $this->verbose;
        }
        if (null !== $this->workspaceId) {
            $res['WorkspaceId'] = $this->workspaceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListTemplatesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Label'])) {
            $model->label = $map['Label'];
        }
        if (isset($map['List'])) {
            $model->list = $map['List'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Order'])) {
            $model->order = $map['Order'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['SortBy'])) {
            $model->sortBy = $map['SortBy'];
        }
        if (isset($map['Source'])) {
            $model->source = $map['Source'];
        }
        if (isset($map['TagId'])) {
            $model->tagId = $map['TagId'];
        }
        if (isset($map['TemplateType'])) {
            $model->templateType = $map['TemplateType'];
        }
        if (isset($map['TypeId'])) {
            $model->typeId = $map['TypeId'];
        }
        if (isset($map['Verbose'])) {
            $model->verbose = $map['Verbose'];
        }
        if (isset($map['WorkspaceId'])) {
            $model->workspaceId = $map['WorkspaceId'];
        }

        return $model;
    }
}
