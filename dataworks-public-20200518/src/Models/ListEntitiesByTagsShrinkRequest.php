<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Tea\Model;

class ListEntitiesByTagsShrinkRequest extends Model
{
    /**
     * @description The type of the entity.
     *
     * This parameter is required.
     * @example maxcompute-table
     *
     * @var string
     */
    public $entityType;

    /**
     * @description The pagination token that is used in the next request to retrieve a new page of results.
     *
     * @example 12345
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description The number of entries per page. Default value: 10. Valid values: 1 to 100.
     *
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The tags.
     *
     * This parameter is required.
     * @var string
     */
    public $tagsShrink;
    protected $_name = [
        'entityType' => 'EntityType',
        'nextToken'  => 'NextToken',
        'pageSize'   => 'PageSize',
        'tagsShrink' => 'Tags',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->entityType) {
            $res['EntityType'] = $this->entityType;
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->tagsShrink) {
            $res['Tags'] = $this->tagsShrink;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListEntitiesByTagsShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EntityType'])) {
            $model->entityType = $map['EntityType'];
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['Tags'])) {
            $model->tagsShrink = $map['Tags'];
        }

        return $model;
    }
}
