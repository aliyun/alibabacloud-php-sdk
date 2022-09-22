<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20160314\Models;

use AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeResourceAggregationsRequest\filter;
use AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeResourceAggregationsRequest\tagFilter;
use AlibabaCloud\Tea\Model;

class DescribeResourceAggregationsRequest extends Model
{
    /**
     * @var string[]
     */
    public $aggregators;

    /**
     * @var filter[]
     */
    public $filter;

    /**
     * @var string
     */
    public $global;

    /**
     * @var string
     */
    public $keyword;

    /**
     * @var string
     */
    public $marker;

    /**
     * @var int
     */
    public $maxItems;

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
    public $product;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $regionNo;

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @var string
     */
    public $resourceType;

    /**
     * @var tagFilter[]
     */
    public $tagFilter;
    protected $_name = [
        'aggregators'          => 'Aggregators',
        'filter'               => 'Filter',
        'global'               => 'Global',
        'keyword'              => 'Keyword',
        'marker'               => 'Marker',
        'maxItems'             => 'MaxItems',
        'ownerAccount'         => 'OwnerAccount',
        'ownerId'              => 'OwnerId',
        'product'              => 'Product',
        'regionId'             => 'RegionId',
        'regionNo'             => 'RegionNo',
        'resourceGroupId'      => 'ResourceGroupId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
        'resourceType'         => 'ResourceType',
        'tagFilter'            => 'TagFilter',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->aggregators) {
            $res['Aggregators'] = $this->aggregators;
        }
        if (null !== $this->filter) {
            $res['Filter'] = [];
            if (null !== $this->filter && \is_array($this->filter)) {
                $n = 0;
                foreach ($this->filter as $item) {
                    $res['Filter'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->global) {
            $res['Global'] = $this->global;
        }
        if (null !== $this->keyword) {
            $res['Keyword'] = $this->keyword;
        }
        if (null !== $this->marker) {
            $res['Marker'] = $this->marker;
        }
        if (null !== $this->maxItems) {
            $res['MaxItems'] = $this->maxItems;
        }
        if (null !== $this->ownerAccount) {
            $res['OwnerAccount'] = $this->ownerAccount;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->product) {
            $res['Product'] = $this->product;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->regionNo) {
            $res['RegionNo'] = $this->regionNo;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
        }
        if (null !== $this->tagFilter) {
            $res['TagFilter'] = [];
            if (null !== $this->tagFilter && \is_array($this->tagFilter)) {
                $n = 0;
                foreach ($this->tagFilter as $item) {
                    $res['TagFilter'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeResourceAggregationsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Aggregators'])) {
            if (!empty($map['Aggregators'])) {
                $model->aggregators = $map['Aggregators'];
            }
        }
        if (isset($map['Filter'])) {
            if (!empty($map['Filter'])) {
                $model->filter = [];
                $n             = 0;
                foreach ($map['Filter'] as $item) {
                    $model->filter[$n++] = null !== $item ? filter::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Global'])) {
            $model->global = $map['Global'];
        }
        if (isset($map['Keyword'])) {
            $model->keyword = $map['Keyword'];
        }
        if (isset($map['Marker'])) {
            $model->marker = $map['Marker'];
        }
        if (isset($map['MaxItems'])) {
            $model->maxItems = $map['MaxItems'];
        }
        if (isset($map['OwnerAccount'])) {
            $model->ownerAccount = $map['OwnerAccount'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['Product'])) {
            $model->product = $map['Product'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['RegionNo'])) {
            $model->regionNo = $map['RegionNo'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
        }
        if (isset($map['TagFilter'])) {
            if (!empty($map['TagFilter'])) {
                $model->tagFilter = [];
                $n                = 0;
                foreach ($map['TagFilter'] as $item) {
                    $model->tagFilter[$n++] = null !== $item ? tagFilter::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
