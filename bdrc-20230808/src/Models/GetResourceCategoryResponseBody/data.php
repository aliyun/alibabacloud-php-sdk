<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BDRC\V20230808\Models\GetResourceCategoryResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\BDRC\V20230808\Models\GetResourceCategoryResponseBody\data\resourceCount;

class data extends Model
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
    public $resourceCategoryName;

    /**
     * @var string
     */
    public $resourceCategoryType;

    /**
     * @var resourceCount[]
     */
    public $resourceCount;

    /**
     * @var string
     */
    public $resourceMatcher;

    /**
     * @var string
     */
    public $resourceType;
    protected $_name = [
        'productType' => 'ProductType',
        'resourceCategoryId' => 'ResourceCategoryId',
        'resourceCategoryName' => 'ResourceCategoryName',
        'resourceCategoryType' => 'ResourceCategoryType',
        'resourceCount' => 'ResourceCount',
        'resourceMatcher' => 'ResourceMatcher',
        'resourceType' => 'ResourceType',
    ];

    public function validate()
    {
        if (\is_array($this->resourceCount)) {
            Model::validateArray($this->resourceCount);
        }
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

        if (null !== $this->resourceCategoryName) {
            $res['ResourceCategoryName'] = $this->resourceCategoryName;
        }

        if (null !== $this->resourceCategoryType) {
            $res['ResourceCategoryType'] = $this->resourceCategoryType;
        }

        if (null !== $this->resourceCount) {
            if (\is_array($this->resourceCount)) {
                $res['ResourceCount'] = [];
                $n1 = 0;
                foreach ($this->resourceCount as $item1) {
                    $res['ResourceCount'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->resourceMatcher) {
            $res['ResourceMatcher'] = $this->resourceMatcher;
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
        if (isset($map['ProductType'])) {
            $model->productType = $map['ProductType'];
        }

        if (isset($map['ResourceCategoryId'])) {
            $model->resourceCategoryId = $map['ResourceCategoryId'];
        }

        if (isset($map['ResourceCategoryName'])) {
            $model->resourceCategoryName = $map['ResourceCategoryName'];
        }

        if (isset($map['ResourceCategoryType'])) {
            $model->resourceCategoryType = $map['ResourceCategoryType'];
        }

        if (isset($map['ResourceCount'])) {
            if (!empty($map['ResourceCount'])) {
                $model->resourceCount = [];
                $n1 = 0;
                foreach ($map['ResourceCount'] as $item1) {
                    $model->resourceCount[$n1] = resourceCount::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['ResourceMatcher'])) {
            $model->resourceMatcher = $map['ResourceMatcher'];
        }

        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
        }

        return $model;
    }
}
