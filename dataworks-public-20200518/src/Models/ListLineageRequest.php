<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Tea\Model;

class ListLineageRequest extends Model
{
    /**
     * @description The lineage type. Valid values:
     *
     *   up: ancestor lineage
     *   down: descendant lineage
     *
     * This parameter is required.
     * @example up
     *
     * @var string
     */
    public $direction;

    /**
     * @description The unique identifier of the entity.
     *
     * This parameter is required.
     * @example maxcompute-table.project.table
     *
     * @var string
     */
    public $entityQualifiedName;

    /**
     * @description The keyword of the entity name.
     *
     * @example name-keyword
     *
     * @var string
     */
    public $keyword;

    /**
     * @description The pagination token that is used in the next request to retrieve a new page of results. You do not need to specify this parameter for the first request. You must specify the token that is obtained from the previous query as the value of NextToken.
     *
     * @example next-token-from-previous-request
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description The number of entries per page. Maximum value: 100.
     *
     * @example 10
     *
     * @var int
     */
    public $pageSize;
    protected $_name = [
        'direction'           => 'Direction',
        'entityQualifiedName' => 'EntityQualifiedName',
        'keyword'             => 'Keyword',
        'nextToken'           => 'NextToken',
        'pageSize'            => 'PageSize',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->direction) {
            $res['Direction'] = $this->direction;
        }
        if (null !== $this->entityQualifiedName) {
            $res['EntityQualifiedName'] = $this->entityQualifiedName;
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
     * @return ListLineageRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Direction'])) {
            $model->direction = $map['Direction'];
        }
        if (isset($map['EntityQualifiedName'])) {
            $model->entityQualifiedName = $map['EntityQualifiedName'];
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
