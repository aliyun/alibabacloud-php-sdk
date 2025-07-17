<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models;

use AlibabaCloud\Tea\Model;

class ListMetaCollectionsRequest extends Model
{
    /**
     * @example 12345
     *
     * @var string
     */
    public $administrator;

    /**
     * @example 123456
     *
     * @var string
     */
    public $createUser;

    /**
     * @var string
     */
    public $description;

    /**
     * @example test
     *
     * @var string
     */
    public $name;

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
     * @description The ID of the collection of an ancestor node.
     *
     * @example category.123
     *
     * @var string
     */
    public $parentId;

    /**
     * @example Name
     *
     * @var string
     */
    public $sortBy;

    /**
     * @description The type of the collection. Valid values:
     *
     *   Category
     *   Album
     *   AlbumCategory
     *
     * This parameter is required.
     *
     * @example Category
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'administrator' => 'Administrator',
        'createUser' => 'CreateUser',
        'description' => 'Description',
        'name' => 'Name',
        'order' => 'Order',
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
        'parentId' => 'ParentId',
        'sortBy' => 'SortBy',
        'type' => 'Type',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->administrator) {
            $res['Administrator'] = $this->administrator;
        }
        if (null !== $this->createUser) {
            $res['CreateUser'] = $this->createUser;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
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
        if (null !== $this->parentId) {
            $res['ParentId'] = $this->parentId;
        }
        if (null !== $this->sortBy) {
            $res['SortBy'] = $this->sortBy;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListMetaCollectionsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Administrator'])) {
            $model->administrator = $map['Administrator'];
        }
        if (isset($map['CreateUser'])) {
            $model->createUser = $map['CreateUser'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
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
        if (isset($map['ParentId'])) {
            $model->parentId = $map['ParentId'];
        }
        if (isset($map['SortBy'])) {
            $model->sortBy = $map['SortBy'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
