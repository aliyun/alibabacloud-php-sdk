<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20160314\Models;

use AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeResourceRecommendFiltersRequest\templateTag;
use AlibabaCloud\Tea\Model;

class DescribeResourceRecommendFiltersRequest extends Model
{
    /**
     * @var string
     */
    public $attributeName;

    /**
     * @var string
     */
    public $attributeValue;

    /**
     * @var string
     */
    public $global;

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
     * @var templateTag[]
     */
    public $templateTag;
    protected $_name = [
        'attributeName'        => 'AttributeName',
        'attributeValue'       => 'AttributeValue',
        'global'               => 'Global',
        'maxItems'             => 'MaxItems',
        'ownerAccount'         => 'OwnerAccount',
        'ownerId'              => 'OwnerId',
        'product'              => 'Product',
        'regionId'             => 'RegionId',
        'regionNo'             => 'RegionNo',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
        'resourceType'         => 'ResourceType',
        'templateTag'          => 'TemplateTag',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->attributeName) {
            $res['AttributeName'] = $this->attributeName;
        }
        if (null !== $this->attributeValue) {
            $res['AttributeValue'] = $this->attributeValue;
        }
        if (null !== $this->global) {
            $res['Global'] = $this->global;
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
        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
        }
        if (null !== $this->templateTag) {
            $res['TemplateTag'] = [];
            if (null !== $this->templateTag && \is_array($this->templateTag)) {
                $n = 0;
                foreach ($this->templateTag as $item) {
                    $res['TemplateTag'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeResourceRecommendFiltersRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AttributeName'])) {
            $model->attributeName = $map['AttributeName'];
        }
        if (isset($map['AttributeValue'])) {
            $model->attributeValue = $map['AttributeValue'];
        }
        if (isset($map['Global'])) {
            $model->global = $map['Global'];
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
        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
        }
        if (isset($map['TemplateTag'])) {
            if (!empty($map['TemplateTag'])) {
                $model->templateTag = [];
                $n                  = 0;
                foreach ($map['TemplateTag'] as $item) {
                    $model->templateTag[$n++] = null !== $item ? templateTag::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
