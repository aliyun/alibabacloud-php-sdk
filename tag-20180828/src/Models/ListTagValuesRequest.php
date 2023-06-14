<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Tag\V20180828\Models;

use AlibabaCloud\SDK\Tag\V20180828\Models\ListTagValuesRequest\tagFilter;
use AlibabaCloud\Tea\Model;

class ListTagValuesRequest extends Model
{
    /**
     * @var tagFilter
     */
    public $tagFilter;

    /**
     * @description The type of the query. Valid values:
     *
     *   EQUAL: exact match. This is the default value.
     *   PREFIX: prefix-based fuzzy match.
     *
     * >  This parameter is available only in the China (Shenzhen) and China (Hong Kong) regions.
     * @example EQUAL
     *
     * @var string
     */
    public $fuzzyType;

    /**
     * @description The tag key. This parameter specifies a filter condition for the query.
     *
     * @example k1
     *
     * @var string
     */
    public $key;

    /**
     * @description The token that is used to start the next query.
     *
     * @example caeba0bbb2be03f84eb48b699f0a****
     *
     * @var string
     */
    public $nextToken;

    /**
     * @var string
     */
    public $ownerAccount;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description The number of tag values to return on each page.
     *
     * Maximum value: 1000. Default value: 50.
     * @example 50
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The category of the tags. This parameter specifies a filter condition for the query. Valid values:
     *
     *   ResourceTag: resource tags, including custom and system tags. This is the default value.
     *   MetaTag: preset tags.
     *
     * >  The value of this parameter is not case-sensitive.
     * @example ResourceTag
     *
     * @var string
     */
    public $queryType;

    /**
     * @description The region ID.
     *
     * For more information about the region ID, see [Endpoints](~~170112~~).
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @description The type of the resources. This parameter specifies a filter condition for the query.
     *
     * For more information about supported resource types, see [Types of resources that support Tag API operations](~~172061~~).
     * @example ALIYUN::ECS::INSTANCE
     *
     * @var string
     */
    public $resourceType;
    protected $_name = [
        'tagFilter'            => 'TagFilter',
        'fuzzyType'            => 'FuzzyType',
        'key'                  => 'Key',
        'nextToken'            => 'NextToken',
        'ownerAccount'         => 'OwnerAccount',
        'ownerId'              => 'OwnerId',
        'pageSize'             => 'PageSize',
        'queryType'            => 'QueryType',
        'regionId'             => 'RegionId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceType'         => 'ResourceType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->tagFilter) {
            $res['TagFilter'] = null !== $this->tagFilter ? $this->tagFilter->toMap() : null;
        }
        if (null !== $this->fuzzyType) {
            $res['FuzzyType'] = $this->fuzzyType;
        }
        if (null !== $this->key) {
            $res['Key'] = $this->key;
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->ownerAccount) {
            $res['OwnerAccount'] = $this->ownerAccount;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->queryType) {
            $res['QueryType'] = $this->queryType;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }
        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListTagValuesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TagFilter'])) {
            $model->tagFilter = tagFilter::fromMap($map['TagFilter']);
        }
        if (isset($map['FuzzyType'])) {
            $model->fuzzyType = $map['FuzzyType'];
        }
        if (isset($map['Key'])) {
            $model->key = $map['Key'];
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['OwnerAccount'])) {
            $model->ownerAccount = $map['OwnerAccount'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['QueryType'])) {
            $model->queryType = $map['QueryType'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
        }

        return $model;
    }
}
