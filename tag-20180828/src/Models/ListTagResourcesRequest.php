<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Tag\V20180828\Models;

use AlibabaCloud\Tea\Model;

class ListTagResourcesRequest extends Model
{
    /**
     * @description The type of the tag. Valid values:
     *
     *   Custom
     *   System
     *   All
     *
     * Default value: All.
     * @example Custom
     *
     * @var string
     */
    public $category;

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
     * @description The number of entries to return on each page.
     *
     * Maximum value: 1000. Default value: 50.
     * @example 50
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The region ID.
     *
     *   If the resources belong to a service that is centrally deployed, set the value to the region ID of the resources by referring to [Regions supported by tag-related operations on resources of centrally deployed Alibaba Cloud services](~~2579691~~).
     *   If the resources belong to a service that is not centrally deployed, set the value to the region ID of the resources.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The Alibaba Cloud Resource Name (ARN) of a resource.
     *
     * @example arn:acs:ecs:cn-hangzhou:123456789****:instance/i-bp15hr53jws84akg****
     *
     * @var string[]
     */
    public $resourceARN;

    /**
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @description The key-value pairs of tags. You can specify 1 to 10 key-value pairs.
     *
     * Limits:
     *
     *   A tag key must be 1 to 128 characters in length.
     *   A tag value must be 1 to 128 characters in length.
     *   Tag keys and tag values are case-sensitive.
     *   Each tag key on a resource can have only one tag value. If you create a tag that has the same key as an existing tag, the value of the existing tag is overwritten.
     *
     * @example {"k1":"v1","k2":"v2"}
     *
     * @var string
     */
    public $tags;
    protected $_name = [
        'category'             => 'Category',
        'nextToken'            => 'NextToken',
        'ownerAccount'         => 'OwnerAccount',
        'ownerId'              => 'OwnerId',
        'pageSize'             => 'PageSize',
        'regionId'             => 'RegionId',
        'resourceARN'          => 'ResourceARN',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'tags'                 => 'Tags',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->category) {
            $res['Category'] = $this->category;
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
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resourceARN) {
            $res['ResourceARN'] = $this->resourceARN;
        }
        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }
        if (null !== $this->tags) {
            $res['Tags'] = $this->tags;
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
        if (isset($map['Category'])) {
            $model->category = $map['Category'];
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
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResourceARN'])) {
            if (!empty($map['ResourceARN'])) {
                $model->resourceARN = $map['ResourceARN'];
            }
        }
        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if (isset($map['Tags'])) {
            $model->tags = $map['Tags'];
        }

        return $model;
    }
}
