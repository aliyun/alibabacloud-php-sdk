<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BDRC\V20230808\Models;

use AlibabaCloud\Dara\Model;

class DescribeProductsShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $productType;

    /**
     * @var string
     */
    public $resourceCategoryId;

    /**
     * @var string
     */
    public $resourceOwnerIdsShrink;

    /**
     * @var string
     */
    public $resourceRegionId;
    protected $_name = [
        'productType' => 'ProductType',
        'resourceCategoryId' => 'ResourceCategoryId',
        'resourceOwnerIdsShrink' => 'ResourceOwnerIds',
        'resourceRegionId' => 'ResourceRegionId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->productType) {
            $res['ProductType'] = $this->productType;
        }

        if (null !== $this->resourceCategoryId) {
            $res['ResourceCategoryId'] = $this->resourceCategoryId;
        }

        if (null !== $this->resourceOwnerIdsShrink) {
            $res['ResourceOwnerIds'] = $this->resourceOwnerIdsShrink;
        }

        if (null !== $this->resourceRegionId) {
            $res['ResourceRegionId'] = $this->resourceRegionId;
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
        if (isset($map['ProductType'])) {
            $model->productType = $map['ProductType'];
        }

        if (isset($map['ResourceCategoryId'])) {
            $model->resourceCategoryId = $map['ResourceCategoryId'];
        }

        if (isset($map['ResourceOwnerIds'])) {
            $model->resourceOwnerIdsShrink = $map['ResourceOwnerIds'];
        }

        if (isset($map['ResourceRegionId'])) {
            $model->resourceRegionId = $map['ResourceRegionId'];
        }

        return $model;
    }
}
