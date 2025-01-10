<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\SDK\ESA\V20240910\Models\ListTagResourcesRequest\tag;
use AlibabaCloud\Tea\Model;

class ListTagResourcesRequest extends Model
{
    /**
     * @description The maximum number of tags to return.
     *
     * @example 20
     *
     * @var int
     */
    public $maxItem;

    /**
     * @description The pagination token that is used in the next request to retrieve a new page of results.
     *
     * >  This parameter is not required for the first request. If not all results are returned in one query, you can specify the token that is obtained from the previous query as the value of **NextToken**.
     * @example AAAAAZjtYxxxxxxxx
     *
     * @var string
     */
    public $nextToken;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description The ID of the region where the resources reside.
     *
     * This parameter is required.
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The website ID.
     *
     * @var string[]
     */
    public $resourceId;

    /**
     * @description The resource type.
     *
     * This parameter is required.
     * @example site
     *
     * @var string
     */
    public $resourceType;

    /**
     * @var string
     */
    public $securityToken;

    /**
     * @description A list of tags. You can enter up to 20 tags.
     *
     * @var tag[]
     */
    public $tag;
    protected $_name = [
        'maxItem'       => 'MaxItem',
        'nextToken'     => 'NextToken',
        'ownerId'       => 'OwnerId',
        'regionId'      => 'RegionId',
        'resourceId'    => 'ResourceId',
        'resourceType'  => 'ResourceType',
        'securityToken' => 'SecurityToken',
        'tag'           => 'Tag',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->maxItem) {
            $res['MaxItem'] = $this->maxItem;
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resourceId) {
            $res['ResourceId'] = $this->resourceId;
        }
        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
        }
        if (null !== $this->securityToken) {
            $res['SecurityToken'] = $this->securityToken;
        }
        if (null !== $this->tag) {
            $res['Tag'] = [];
            if (null !== $this->tag && \is_array($this->tag)) {
                $n = 0;
                foreach ($this->tag as $item) {
                    $res['Tag'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListTagResourcesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MaxItem'])) {
            $model->maxItem = $map['MaxItem'];
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResourceId'])) {
            if (!empty($map['ResourceId'])) {
                $model->resourceId = $map['ResourceId'];
            }
        }
        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
        }
        if (isset($map['SecurityToken'])) {
            $model->securityToken = $map['SecurityToken'];
        }
        if (isset($map['Tag'])) {
            if (!empty($map['Tag'])) {
                $model->tag = [];
                $n          = 0;
                foreach ($map['Tag'] as $item) {
                    $model->tag[$n++] = null !== $item ? tag::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
