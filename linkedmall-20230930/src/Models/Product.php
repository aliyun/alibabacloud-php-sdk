<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20230930\Models;

use AlibabaCloud\Dara\Model;

class Product extends Model
{
    /**
     * @var string
     */
    public $brandName;

    /**
     * @var bool
     */
    public $canSell;

    /**
     * @var Category[]
     */
    public $categoryChain;

    /**
     * @var int
     */
    public $categoryLeafId;

    /**
     * @var string
     */
    public $descPath;

    /**
     * @var string
     */
    public $divisionCode;

    /**
     * @var ProductExtendProperty[]
     */
    public $extendProperties;

    /**
     * @var string
     */
    public $fuzzyQuantity;

    /**
     * @var string[]
     */
    public $images;

    /**
     * @var bool
     */
    public $inGroup;

    /**
     * @var LimitRule[]
     */
    public $limitRules;

    /**
     * @var string
     */
    public $lmItemId;

    /**
     * @var string
     */
    public $picUrl;

    /**
     * @var string
     */
    public $productId;

    /**
     * @var ProductSpec[]
     */
    public $productSpecs;

    /**
     * @var string
     */
    public $productStatus;

    /**
     * @var string
     */
    public $productType;

    /**
     * @var ProductProperty[]
     */
    public $properties;

    /**
     * @var int
     */
    public $quantity;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string[]
     */
    public $servicePromises;

    /**
     * @var string
     */
    public $shopId;

    /**
     * @var Sku[]
     */
    public $skus;

    /**
     * @var string
     */
    public $soldQuantity;

    /**
     * @var string
     */
    public $taxCode;

    /**
     * @var int
     */
    public $taxRate;

    /**
     * @var string
     */
    public $title;
    protected $_name = [
        'brandName' => 'brandName',
        'canSell' => 'canSell',
        'categoryChain' => 'categoryChain',
        'categoryLeafId' => 'categoryLeafId',
        'descPath' => 'descPath',
        'divisionCode' => 'divisionCode',
        'extendProperties' => 'extendProperties',
        'fuzzyQuantity' => 'fuzzyQuantity',
        'images' => 'images',
        'inGroup' => 'inGroup',
        'limitRules' => 'limitRules',
        'lmItemId' => 'lmItemId',
        'picUrl' => 'picUrl',
        'productId' => 'productId',
        'productSpecs' => 'productSpecs',
        'productStatus' => 'productStatus',
        'productType' => 'productType',
        'properties' => 'properties',
        'quantity' => 'quantity',
        'requestId' => 'requestId',
        'servicePromises' => 'servicePromises',
        'shopId' => 'shopId',
        'skus' => 'skus',
        'soldQuantity' => 'soldQuantity',
        'taxCode' => 'taxCode',
        'taxRate' => 'taxRate',
        'title' => 'title',
    ];

    public function validate()
    {
        if (\is_array($this->categoryChain)) {
            Model::validateArray($this->categoryChain);
        }
        if (\is_array($this->extendProperties)) {
            Model::validateArray($this->extendProperties);
        }
        if (\is_array($this->images)) {
            Model::validateArray($this->images);
        }
        if (\is_array($this->limitRules)) {
            Model::validateArray($this->limitRules);
        }
        if (\is_array($this->productSpecs)) {
            Model::validateArray($this->productSpecs);
        }
        if (\is_array($this->properties)) {
            Model::validateArray($this->properties);
        }
        if (\is_array($this->servicePromises)) {
            Model::validateArray($this->servicePromises);
        }
        if (\is_array($this->skus)) {
            Model::validateArray($this->skus);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->brandName) {
            $res['brandName'] = $this->brandName;
        }

        if (null !== $this->canSell) {
            $res['canSell'] = $this->canSell;
        }

        if (null !== $this->categoryChain) {
            if (\is_array($this->categoryChain)) {
                $res['categoryChain'] = [];
                $n1 = 0;
                foreach ($this->categoryChain as $item1) {
                    $res['categoryChain'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->categoryLeafId) {
            $res['categoryLeafId'] = $this->categoryLeafId;
        }

        if (null !== $this->descPath) {
            $res['descPath'] = $this->descPath;
        }

        if (null !== $this->divisionCode) {
            $res['divisionCode'] = $this->divisionCode;
        }

        if (null !== $this->extendProperties) {
            if (\is_array($this->extendProperties)) {
                $res['extendProperties'] = [];
                $n1 = 0;
                foreach ($this->extendProperties as $item1) {
                    $res['extendProperties'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->fuzzyQuantity) {
            $res['fuzzyQuantity'] = $this->fuzzyQuantity;
        }

        if (null !== $this->images) {
            if (\is_array($this->images)) {
                $res['images'] = [];
                $n1 = 0;
                foreach ($this->images as $item1) {
                    $res['images'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->inGroup) {
            $res['inGroup'] = $this->inGroup;
        }

        if (null !== $this->limitRules) {
            if (\is_array($this->limitRules)) {
                $res['limitRules'] = [];
                $n1 = 0;
                foreach ($this->limitRules as $item1) {
                    $res['limitRules'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->lmItemId) {
            $res['lmItemId'] = $this->lmItemId;
        }

        if (null !== $this->picUrl) {
            $res['picUrl'] = $this->picUrl;
        }

        if (null !== $this->productId) {
            $res['productId'] = $this->productId;
        }

        if (null !== $this->productSpecs) {
            if (\is_array($this->productSpecs)) {
                $res['productSpecs'] = [];
                $n1 = 0;
                foreach ($this->productSpecs as $item1) {
                    $res['productSpecs'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->productStatus) {
            $res['productStatus'] = $this->productStatus;
        }

        if (null !== $this->productType) {
            $res['productType'] = $this->productType;
        }

        if (null !== $this->properties) {
            if (\is_array($this->properties)) {
                $res['properties'] = [];
                $n1 = 0;
                foreach ($this->properties as $item1) {
                    $res['properties'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->quantity) {
            $res['quantity'] = $this->quantity;
        }

        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }

        if (null !== $this->servicePromises) {
            if (\is_array($this->servicePromises)) {
                $res['servicePromises'] = [];
                $n1 = 0;
                foreach ($this->servicePromises as $item1) {
                    $res['servicePromises'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->shopId) {
            $res['shopId'] = $this->shopId;
        }

        if (null !== $this->skus) {
            if (\is_array($this->skus)) {
                $res['skus'] = [];
                $n1 = 0;
                foreach ($this->skus as $item1) {
                    $res['skus'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->soldQuantity) {
            $res['soldQuantity'] = $this->soldQuantity;
        }

        if (null !== $this->taxCode) {
            $res['taxCode'] = $this->taxCode;
        }

        if (null !== $this->taxRate) {
            $res['taxRate'] = $this->taxRate;
        }

        if (null !== $this->title) {
            $res['title'] = $this->title;
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
        if (isset($map['brandName'])) {
            $model->brandName = $map['brandName'];
        }

        if (isset($map['canSell'])) {
            $model->canSell = $map['canSell'];
        }

        if (isset($map['categoryChain'])) {
            if (!empty($map['categoryChain'])) {
                $model->categoryChain = [];
                $n1 = 0;
                foreach ($map['categoryChain'] as $item1) {
                    $model->categoryChain[$n1++] = Category::fromMap($item1);
                }
            }
        }

        if (isset($map['categoryLeafId'])) {
            $model->categoryLeafId = $map['categoryLeafId'];
        }

        if (isset($map['descPath'])) {
            $model->descPath = $map['descPath'];
        }

        if (isset($map['divisionCode'])) {
            $model->divisionCode = $map['divisionCode'];
        }

        if (isset($map['extendProperties'])) {
            if (!empty($map['extendProperties'])) {
                $model->extendProperties = [];
                $n1 = 0;
                foreach ($map['extendProperties'] as $item1) {
                    $model->extendProperties[$n1++] = ProductExtendProperty::fromMap($item1);
                }
            }
        }

        if (isset($map['fuzzyQuantity'])) {
            $model->fuzzyQuantity = $map['fuzzyQuantity'];
        }

        if (isset($map['images'])) {
            if (!empty($map['images'])) {
                $model->images = [];
                $n1 = 0;
                foreach ($map['images'] as $item1) {
                    $model->images[$n1++] = $item1;
                }
            }
        }

        if (isset($map['inGroup'])) {
            $model->inGroup = $map['inGroup'];
        }

        if (isset($map['limitRules'])) {
            if (!empty($map['limitRules'])) {
                $model->limitRules = [];
                $n1 = 0;
                foreach ($map['limitRules'] as $item1) {
                    $model->limitRules[$n1++] = LimitRule::fromMap($item1);
                }
            }
        }

        if (isset($map['lmItemId'])) {
            $model->lmItemId = $map['lmItemId'];
        }

        if (isset($map['picUrl'])) {
            $model->picUrl = $map['picUrl'];
        }

        if (isset($map['productId'])) {
            $model->productId = $map['productId'];
        }

        if (isset($map['productSpecs'])) {
            if (!empty($map['productSpecs'])) {
                $model->productSpecs = [];
                $n1 = 0;
                foreach ($map['productSpecs'] as $item1) {
                    $model->productSpecs[$n1++] = ProductSpec::fromMap($item1);
                }
            }
        }

        if (isset($map['productStatus'])) {
            $model->productStatus = $map['productStatus'];
        }

        if (isset($map['productType'])) {
            $model->productType = $map['productType'];
        }

        if (isset($map['properties'])) {
            if (!empty($map['properties'])) {
                $model->properties = [];
                $n1 = 0;
                foreach ($map['properties'] as $item1) {
                    $model->properties[$n1++] = ProductProperty::fromMap($item1);
                }
            }
        }

        if (isset($map['quantity'])) {
            $model->quantity = $map['quantity'];
        }

        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        if (isset($map['servicePromises'])) {
            if (!empty($map['servicePromises'])) {
                $model->servicePromises = [];
                $n1 = 0;
                foreach ($map['servicePromises'] as $item1) {
                    $model->servicePromises[$n1++] = $item1;
                }
            }
        }

        if (isset($map['shopId'])) {
            $model->shopId = $map['shopId'];
        }

        if (isset($map['skus'])) {
            if (!empty($map['skus'])) {
                $model->skus = [];
                $n1 = 0;
                foreach ($map['skus'] as $item1) {
                    $model->skus[$n1++] = Sku::fromMap($item1);
                }
            }
        }

        if (isset($map['soldQuantity'])) {
            $model->soldQuantity = $map['soldQuantity'];
        }

        if (isset($map['taxCode'])) {
            $model->taxCode = $map['taxCode'];
        }

        if (isset($map['taxRate'])) {
            $model->taxRate = $map['taxRate'];
        }

        if (isset($map['title'])) {
            $model->title = $map['title'];
        }

        return $model;
    }
}
