<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\Tea\Model;

class ListDentriesShrinkRequest extends Model
{
    /**
     * @example 50
     *
     * @var int
     */
    public $maxResults;

    /**
     * @example next_token
     *
     * @var string
     */
    public $nextToken;

    /**
     * @example ASC
     *
     * @var string
     */
    public $order;

    /**
     * @example MODIFIED_TIME
     *
     * @var string
     */
    public $orderBy;

    /**
     * @description This parameter is required.
     *
     * @example 0
     *
     * @var string
     */
    public $parentId;

    /**
     * @description This parameter is required.
     *
     * @example 854xxxxx
     *
     * @var string
     */
    public $spaceId;

    /**
     * @var string
     */
    public $tenantContextShrink;

    /**
     * @example true
     *
     * @var bool
     */
    public $withThumbnail;
    protected $_name = [
        'maxResults'          => 'MaxResults',
        'nextToken'           => 'NextToken',
        'order'               => 'Order',
        'orderBy'             => 'OrderBy',
        'parentId'            => 'ParentId',
        'spaceId'             => 'SpaceId',
        'tenantContextShrink' => 'TenantContext',
        'withThumbnail'       => 'WithThumbnail',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->order) {
            $res['Order'] = $this->order;
        }
        if (null !== $this->orderBy) {
            $res['OrderBy'] = $this->orderBy;
        }
        if (null !== $this->parentId) {
            $res['ParentId'] = $this->parentId;
        }
        if (null !== $this->spaceId) {
            $res['SpaceId'] = $this->spaceId;
        }
        if (null !== $this->tenantContextShrink) {
            $res['TenantContext'] = $this->tenantContextShrink;
        }
        if (null !== $this->withThumbnail) {
            $res['WithThumbnail'] = $this->withThumbnail;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListDentriesShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['Order'])) {
            $model->order = $map['Order'];
        }
        if (isset($map['OrderBy'])) {
            $model->orderBy = $map['OrderBy'];
        }
        if (isset($map['ParentId'])) {
            $model->parentId = $map['ParentId'];
        }
        if (isset($map['SpaceId'])) {
            $model->spaceId = $map['SpaceId'];
        }
        if (isset($map['TenantContext'])) {
            $model->tenantContextShrink = $map['TenantContext'];
        }
        if (isset($map['WithThumbnail'])) {
            $model->withThumbnail = $map['WithThumbnail'];
        }

        return $model;
    }
}
