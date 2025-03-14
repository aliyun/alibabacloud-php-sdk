<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20230930\Models;

use AlibabaCloud\Tea\Model;

class Product extends Model
{
    /**
     * @example Apple/苹果
     *
     * @var string
     */
    public $brandName;

    /**
     * @example true
     *
     * @var bool
     */
    public $canSell;

    /**
     * @var Category[]
     */
    public $categoryChain;

    /**
     * @example 201856501
     *
     * @var int
     */
    public $categoryLeafId;

    /**
     * @example https://img.alicdn.com/descpath/O1CN01wciRDp22AEU14435dsf34
     *
     * @var string
     */
    public $descPath;

    /**
     * @example 110000
     *
     * @var string
     */
    public $divisionCode;

    /**
     * @var ProductExtendProperty[]
     */
    public $extendProperties;

    /**
     * @example 100+
     *
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
     * @example 21000017-4580902812
     *
     * @var string
     */
    public $lmItemId;

    /**
     * @example https://img.alicdn.com/imgextra/i3/2214281521988/O1CN01w4vomR1QYYEx6nyr5_!!2214281521988.jpg
     *
     * @var string
     */
    public $picUrl;

    /**
     * @example 660460842235822080
     *
     * @var string
     */
    public $productId;

    /**
     * @var ProductSpec[]
     */
    public $productSpecs;

    /**
     * @example Online
     *
     * @var string
     */
    public $productStatus;

    /**
     * @example Normal
     *
     * @var string
     */
    public $productType;

    /**
     * @var ProductProperty[]
     */
    public $properties;

    /**
     * @example -1
     *
     * @var int
     */
    public $quantity;

    /**
     * @example 3239281273464326823
     *
     * @var string
     */
    public $requestId;

    /**
     * @example 21000017
     *
     * @var string
     */
    public $shopId;

    /**
     * @var Sku[]
     */
    public $skus;

    /**
     * @example 100+
     *
     * @var string
     */
    public $soldQuantity;

    /**
     * @example 3040203000000000000
     *
     * @var string
     */
    public $taxCode;

    /**
     * @example 600
     *
     * @var int
     */
    public $taxRate;

    /**
     * @example 发财树
     *
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
        'shopId' => 'shopId',
        'skus' => 'skus',
        'soldQuantity' => 'soldQuantity',
        'taxCode' => 'taxCode',
        'taxRate' => 'taxRate',
        'title' => 'title',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->brandName) {
            $res['brandName'] = $this->brandName;
        }
        if (null !== $this->canSell) {
            $res['canSell'] = $this->canSell;
        }
        if (null !== $this->categoryChain) {
            $res['categoryChain'] = [];
            if (null !== $this->categoryChain && \is_array($this->categoryChain)) {
                $n = 0;
                foreach ($this->categoryChain as $item) {
                    $res['categoryChain'][$n++] = null !== $item ? $item->toMap() : $item;
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
            $res['extendProperties'] = [];
            if (null !== $this->extendProperties && \is_array($this->extendProperties)) {
                $n = 0;
                foreach ($this->extendProperties as $item) {
                    $res['extendProperties'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->fuzzyQuantity) {
            $res['fuzzyQuantity'] = $this->fuzzyQuantity;
        }
        if (null !== $this->images) {
            $res['images'] = $this->images;
        }
        if (null !== $this->inGroup) {
            $res['inGroup'] = $this->inGroup;
        }
        if (null !== $this->limitRules) {
            $res['limitRules'] = [];
            if (null !== $this->limitRules && \is_array($this->limitRules)) {
                $n = 0;
                foreach ($this->limitRules as $item) {
                    $res['limitRules'][$n++] = null !== $item ? $item->toMap() : $item;
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
            $res['productSpecs'] = [];
            if (null !== $this->productSpecs && \is_array($this->productSpecs)) {
                $n = 0;
                foreach ($this->productSpecs as $item) {
                    $res['productSpecs'][$n++] = null !== $item ? $item->toMap() : $item;
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
            $res['properties'] = [];
            if (null !== $this->properties && \is_array($this->properties)) {
                $n = 0;
                foreach ($this->properties as $item) {
                    $res['properties'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->quantity) {
            $res['quantity'] = $this->quantity;
        }
        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }
        if (null !== $this->shopId) {
            $res['shopId'] = $this->shopId;
        }
        if (null !== $this->skus) {
            $res['skus'] = [];
            if (null !== $this->skus && \is_array($this->skus)) {
                $n = 0;
                foreach ($this->skus as $item) {
                    $res['skus'][$n++] = null !== $item ? $item->toMap() : $item;
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

    /**
     * @param array $map
     *
     * @return Product
     */
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
                $n = 0;
                foreach ($map['categoryChain'] as $item) {
                    $model->categoryChain[$n++] = null !== $item ? Category::fromMap($item) : $item;
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
                $n = 0;
                foreach ($map['extendProperties'] as $item) {
                    $model->extendProperties[$n++] = null !== $item ? ProductExtendProperty::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['fuzzyQuantity'])) {
            $model->fuzzyQuantity = $map['fuzzyQuantity'];
        }
        if (isset($map['images'])) {
            if (!empty($map['images'])) {
                $model->images = $map['images'];
            }
        }
        if (isset($map['inGroup'])) {
            $model->inGroup = $map['inGroup'];
        }
        if (isset($map['limitRules'])) {
            if (!empty($map['limitRules'])) {
                $model->limitRules = [];
                $n = 0;
                foreach ($map['limitRules'] as $item) {
                    $model->limitRules[$n++] = null !== $item ? LimitRule::fromMap($item) : $item;
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
                $n = 0;
                foreach ($map['productSpecs'] as $item) {
                    $model->productSpecs[$n++] = null !== $item ? ProductSpec::fromMap($item) : $item;
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
                $n = 0;
                foreach ($map['properties'] as $item) {
                    $model->properties[$n++] = null !== $item ? ProductProperty::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['quantity'])) {
            $model->quantity = $map['quantity'];
        }
        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }
        if (isset($map['shopId'])) {
            $model->shopId = $map['shopId'];
        }
        if (isset($map['skus'])) {
            if (!empty($map['skus'])) {
                $model->skus = [];
                $n = 0;
                foreach ($map['skus'] as $item) {
                    $model->skus[$n++] = null !== $item ? Sku::fromMap($item) : $item;
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
