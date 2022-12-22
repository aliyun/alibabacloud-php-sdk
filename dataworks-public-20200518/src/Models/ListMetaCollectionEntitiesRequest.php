<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Tea\Model;

class ListMetaCollectionEntitiesRequest extends Model
{
    /**
     * @example album.12345
     *
     * @var string
     */
    public $collectionQualifiedName;

    /**
     * @example maxcompute-table
     *
     * @var string
     */
    public $entityType;

    /**
     * @example test
     *
     * @var string
     */
    public $keyword;

    /**
     * @example 12222
     *
     * @var string
     */
    public $nextToken;

    /**
     * @example 10
     *
     * @var int
     */
    public $pageSize;
    protected $_name = [
        'collectionQualifiedName' => 'CollectionQualifiedName',
        'entityType'              => 'EntityType',
        'keyword'                 => 'Keyword',
        'nextToken'               => 'NextToken',
        'pageSize'                => 'PageSize',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->collectionQualifiedName) {
            $res['CollectionQualifiedName'] = $this->collectionQualifiedName;
        }
        if (null !== $this->entityType) {
            $res['EntityType'] = $this->entityType;
        }
        if (null !== $this->keyword) {
            $res['Keyword'] = $this->keyword;
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListMetaCollectionEntitiesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CollectionQualifiedName'])) {
            $model->collectionQualifiedName = $map['CollectionQualifiedName'];
        }
        if (isset($map['EntityType'])) {
            $model->entityType = $map['EntityType'];
        }
        if (isset($map['Keyword'])) {
            $model->keyword = $map['Keyword'];
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        return $model;
    }
}
