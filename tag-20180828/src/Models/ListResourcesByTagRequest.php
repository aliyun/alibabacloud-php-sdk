<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Tag\V20180828\Models;

use AlibabaCloud\SDK\Tag\V20180828\Models\ListResourcesByTagRequest\tagFilter;
use AlibabaCloud\Tea\Model;

class ListResourcesByTagRequest extends Model
{
    /**
     * @var tagFilter
     */
    public $tagFilter;

    /**
     * @description The type of the query. Valid values:
     *
     *   EQUAL: exact match for resources to which the specified tag is added. This is the default value.
     *   NOT: exact match for resources to which the specified tag is not added.
     *
     * @example EQUAL
     *
     * @var string
     */
    public $fuzzyType;

    /**
     * @description Specifies whether to return the information of tags added to the resources. Valid values:
     *
     *   False: does not return the information of tags added to the resources. This is the default value.
     *   True: returns the information of all tags added to the resources.
     *
     * @example False
     *
     * @var bool
     */
    public $includeAllTags;

    /**
     * @description The number of entries to return on each page.
     *
     * Default value: 50. Maximum value: 1000.
     * @example 50
     *
     * @var int
     */
    public $maxResult;

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
     * @description The region ID.
     *
     * For more information about region IDs, see [Endpoints](~~2330902~~).
     * @example cn-shenzhen
     *
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @description The resource type. This parameter specifies a filter condition for the query.
     *
     *   If you set the FuzzyType parameter to EQUAL, you can set this parameter to a value obtained from the response of the [ListSupportResourceTypes](~~2330915~~) operation.
     *   If you set the FuzzyType parameter to NOT, you can set this parameter to a resource type provided in **Types of resources that support queries based on the NOT operator**.
     *
     * @example ALIYUN::VPC::VPC
     *
     * @var string
     */
    public $resourceType;
    protected $_name = [
        'tagFilter'            => 'TagFilter',
        'fuzzyType'            => 'FuzzyType',
        'includeAllTags'       => 'IncludeAllTags',
        'maxResult'            => 'MaxResult',
        'nextToken'            => 'NextToken',
        'ownerAccount'         => 'OwnerAccount',
        'ownerId'              => 'OwnerId',
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
        if (null !== $this->includeAllTags) {
            $res['IncludeAllTags'] = $this->includeAllTags;
        }
        if (null !== $this->maxResult) {
            $res['MaxResult'] = $this->maxResult;
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
     * @return ListResourcesByTagRequest
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
        if (isset($map['IncludeAllTags'])) {
            $model->includeAllTags = $map['IncludeAllTags'];
        }
        if (isset($map['MaxResult'])) {
            $model->maxResult = $map['MaxResult'];
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
