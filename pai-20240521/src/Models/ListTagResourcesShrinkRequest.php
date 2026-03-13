<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pai\V20240521\Models;

use AlibabaCloud\Dara\Model;

class ListTagResourcesShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $category;

    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $resourceIdShrink;

    /**
     * @var string
     */
    public $resourceType;

    /**
     * @var string
     */
    public $scope;

    /**
     * @var string
     */
    public $tagShrink;

    /**
     * @var int
     */
    public $tagOwnerUid;
    protected $_name = [
        'category' => 'Category',
        'nextToken' => 'NextToken',
        'regionId' => 'RegionId',
        'resourceIdShrink' => 'ResourceId',
        'resourceType' => 'ResourceType',
        'scope' => 'Scope',
        'tagShrink' => 'Tag',
        'tagOwnerUid' => 'TagOwnerUid',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->category) {
            $res['Category'] = $this->category;
        }

        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->resourceIdShrink) {
            $res['ResourceId'] = $this->resourceIdShrink;
        }

        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
        }

        if (null !== $this->scope) {
            $res['Scope'] = $this->scope;
        }

        if (null !== $this->tagShrink) {
            $res['Tag'] = $this->tagShrink;
        }

        if (null !== $this->tagOwnerUid) {
            $res['TagOwnerUid'] = $this->tagOwnerUid;
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
        if (isset($map['Category'])) {
            $model->category = $map['Category'];
        }

        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['ResourceId'])) {
            $model->resourceIdShrink = $map['ResourceId'];
        }

        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
        }

        if (isset($map['Scope'])) {
            $model->scope = $map['Scope'];
        }

        if (isset($map['Tag'])) {
            $model->tagShrink = $map['Tag'];
        }

        if (isset($map['TagOwnerUid'])) {
            $model->tagOwnerUid = $map['TagOwnerUid'];
        }

        return $model;
    }
}
