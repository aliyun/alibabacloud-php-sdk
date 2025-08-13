<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Tag\V20180828\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Tag\V20180828\Models\ListResourcesByTagRequest\tagFilter;

class ListResourcesByTagRequest extends Model
{
    /**
     * @var tagFilter
     */
    public $tagFilter;

    /**
     * @var string
     */
    public $fuzzyType;

    /**
     * @var bool
     */
    public $includeAllTags;

    /**
     * @var int
     */
    public $maxResult;

    /**
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
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @var string
     */
    public $resourceType;
    protected $_name = [
        'tagFilter' => 'TagFilter',
        'fuzzyType' => 'FuzzyType',
        'includeAllTags' => 'IncludeAllTags',
        'maxResult' => 'MaxResult',
        'nextToken' => 'NextToken',
        'ownerAccount' => 'OwnerAccount',
        'ownerId' => 'OwnerId',
        'regionId' => 'RegionId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceType' => 'ResourceType',
    ];

    public function validate()
    {
        if (null !== $this->tagFilter) {
            $this->tagFilter->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->tagFilter) {
            $res['TagFilter'] = null !== $this->tagFilter ? $this->tagFilter->toArray($noStream) : $this->tagFilter;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
