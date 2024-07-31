<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Tea\Model;

class ListMetaCollectionsRequest extends Model
{
    /**
     * @description The ID of the collection administrator.
     *
     * @example 1200759642363000
     *
     * @var string
     */
    public $administrator;

    /**
     * @description - ALBUM: data album
     * This parameter is required.
     * @example ALBUM
     *
     * @var string
     */
    public $collectionType;

    /**
     * @description The ID of the collection creator.
     *
     * @example 1200759642363000
     *
     * @var string
     */
    public $creator;

    /**
     * @description The ID of the collection follower.
     *
     * @example 1200759642363000
     *
     * @var string
     */
    public $follower;

    /**
     * @description The keyword.
     *
     * @example test
     *
     * @var string
     */
    public $keyword;

    /**
     * @description The pagination token that is used in the next request to retrieve a new page of results.
     *
     * @example 12345
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description The name of the sorting field.
     *
     * @example test
     *
     * @var string
     */
    public $orderBy;

    /**
     * @description The number of entries per page. Default value: 10. Maximum value: 100.
     *
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The unique identifier of the parent collection.
     *
     * @example Album.1234
     *
     * @var string
     */
    public $parentQualifiedName;
    protected $_name = [
        'administrator'       => 'Administrator',
        'collectionType'      => 'CollectionType',
        'creator'             => 'Creator',
        'follower'            => 'Follower',
        'keyword'             => 'Keyword',
        'nextToken'           => 'NextToken',
        'orderBy'             => 'OrderBy',
        'pageSize'            => 'PageSize',
        'parentQualifiedName' => 'ParentQualifiedName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->administrator) {
            $res['Administrator'] = $this->administrator;
        }
        if (null !== $this->collectionType) {
            $res['CollectionType'] = $this->collectionType;
        }
        if (null !== $this->creator) {
            $res['Creator'] = $this->creator;
        }
        if (null !== $this->follower) {
            $res['Follower'] = $this->follower;
        }
        if (null !== $this->keyword) {
            $res['Keyword'] = $this->keyword;
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->orderBy) {
            $res['OrderBy'] = $this->orderBy;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->parentQualifiedName) {
            $res['ParentQualifiedName'] = $this->parentQualifiedName;
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
        if (isset($map['CollectionType'])) {
            $model->collectionType = $map['CollectionType'];
        }
        if (isset($map['Creator'])) {
            $model->creator = $map['Creator'];
        }
        if (isset($map['Follower'])) {
            $model->follower = $map['Follower'];
        }
        if (isset($map['Keyword'])) {
            $model->keyword = $map['Keyword'];
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['OrderBy'])) {
            $model->orderBy = $map['OrderBy'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['ParentQualifiedName'])) {
            $model->parentQualifiedName = $map['ParentQualifiedName'];
        }

        return $model;
    }
}
