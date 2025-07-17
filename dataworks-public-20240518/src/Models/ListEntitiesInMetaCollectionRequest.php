<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models;

use AlibabaCloud\Tea\Model;

class ListEntitiesInMetaCollectionRequest extends Model
{
    /**
     * @var string
     */
    public $entityDescription;

    /**
     * @example test1
     *
     * @var string
     */
    public $entityName;

    /**
     * @example dlf-table
     *
     * @var string
     */
    public $entityType;

    /**
     * @description The collection ID.
     *
     * This parameter is required.
     *
     * @example category.123
     *
     * @var string
     */
    public $id;

    /**
     * @example Asc
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
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @example Name
     *
     * @var string
     */
    public $sortBy;
    protected $_name = [
        'entityDescription' => 'EntityDescription',
        'entityName' => 'EntityName',
        'entityType' => 'EntityType',
        'id' => 'Id',
        'order' => 'Order',
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
        'sortBy' => 'SortBy',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->entityDescription) {
            $res['EntityDescription'] = $this->entityDescription;
        }
        if (null !== $this->entityName) {
            $res['EntityName'] = $this->entityName;
        }
        if (null !== $this->entityType) {
            $res['EntityType'] = $this->entityType;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListEntitiesInMetaCollectionRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EntityDescription'])) {
            $model->entityDescription = $map['EntityDescription'];
        }
        if (isset($map['EntityName'])) {
            $model->entityName = $map['EntityName'];
        }
        if (isset($map['EntityType'])) {
            $model->entityType = $map['EntityType'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
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

        return $model;
    }
}
