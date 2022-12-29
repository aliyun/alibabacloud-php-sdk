<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qssj\V20220112\Models\GetStyleOnlineResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $attributeContent;

    /**
     * @var string
     */
    public $brandName;

    /**
     * @var string
     */
    public $buyerTags;

    /**
     * @var string
     */
    public $cateName;

    /**
     * @var string
     */
    public $color;

    /**
     * @example 1379
     *
     * @var int
     */
    public $exposureValue;

    /**
     * @var string[]
     */
    public $images;

    /**
     * @var string
     */
    public $material;

    /**
     * @example 464
     *
     * @var float
     */
    public $price;

    /**
     * @example "https://item.taobao.com/auction/noitem.htm?itemid=643170318769"
     *
     * @var string
     */
    public $productLink;

    /**
     * @example 736
     *
     * @var float
     */
    public $salesVolume;

    /**
     * @example 13263
     *
     * @var float
     */
    public $searchVolume;

    /**
     * @example 5367123
     *
     * @var int
     */
    public $shopId;

    /**
     * @var string
     */
    public $shopName;

    /**
     * @var string
     */
    public $style;

    /**
     * @var string
     */
    public $title;
    protected $_name = [
        'attributeContent' => 'AttributeContent',
        'brandName'        => 'BrandName',
        'buyerTags'        => 'BuyerTags',
        'cateName'         => 'CateName',
        'color'            => 'Color',
        'exposureValue'    => 'ExposureValue',
        'images'           => 'Images',
        'material'         => 'Material',
        'price'            => 'Price',
        'productLink'      => 'ProductLink',
        'salesVolume'      => 'SalesVolume',
        'searchVolume'     => 'SearchVolume',
        'shopId'           => 'ShopId',
        'shopName'         => 'ShopName',
        'style'            => 'Style',
        'title'            => 'Title',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->attributeContent) {
            $res['AttributeContent'] = $this->attributeContent;
        }
        if (null !== $this->brandName) {
            $res['BrandName'] = $this->brandName;
        }
        if (null !== $this->buyerTags) {
            $res['BuyerTags'] = $this->buyerTags;
        }
        if (null !== $this->cateName) {
            $res['CateName'] = $this->cateName;
        }
        if (null !== $this->color) {
            $res['Color'] = $this->color;
        }
        if (null !== $this->exposureValue) {
            $res['ExposureValue'] = $this->exposureValue;
        }
        if (null !== $this->images) {
            $res['Images'] = $this->images;
        }
        if (null !== $this->material) {
            $res['Material'] = $this->material;
        }
        if (null !== $this->price) {
            $res['Price'] = $this->price;
        }
        if (null !== $this->productLink) {
            $res['ProductLink'] = $this->productLink;
        }
        if (null !== $this->salesVolume) {
            $res['SalesVolume'] = $this->salesVolume;
        }
        if (null !== $this->searchVolume) {
            $res['SearchVolume'] = $this->searchVolume;
        }
        if (null !== $this->shopId) {
            $res['ShopId'] = $this->shopId;
        }
        if (null !== $this->shopName) {
            $res['ShopName'] = $this->shopName;
        }
        if (null !== $this->style) {
            $res['Style'] = $this->style;
        }
        if (null !== $this->title) {
            $res['Title'] = $this->title;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AttributeContent'])) {
            $model->attributeContent = $map['AttributeContent'];
        }
        if (isset($map['BrandName'])) {
            $model->brandName = $map['BrandName'];
        }
        if (isset($map['BuyerTags'])) {
            $model->buyerTags = $map['BuyerTags'];
        }
        if (isset($map['CateName'])) {
            $model->cateName = $map['CateName'];
        }
        if (isset($map['Color'])) {
            $model->color = $map['Color'];
        }
        if (isset($map['ExposureValue'])) {
            $model->exposureValue = $map['ExposureValue'];
        }
        if (isset($map['Images'])) {
            if (!empty($map['Images'])) {
                $model->images = $map['Images'];
            }
        }
        if (isset($map['Material'])) {
            $model->material = $map['Material'];
        }
        if (isset($map['Price'])) {
            $model->price = $map['Price'];
        }
        if (isset($map['ProductLink'])) {
            $model->productLink = $map['ProductLink'];
        }
        if (isset($map['SalesVolume'])) {
            $model->salesVolume = $map['SalesVolume'];
        }
        if (isset($map['SearchVolume'])) {
            $model->searchVolume = $map['SearchVolume'];
        }
        if (isset($map['ShopId'])) {
            $model->shopId = $map['ShopId'];
        }
        if (isset($map['ShopName'])) {
            $model->shopName = $map['ShopName'];
        }
        if (isset($map['Style'])) {
            $model->style = $map['Style'];
        }
        if (isset($map['Title'])) {
            $model->title = $map['Title'];
        }

        return $model;
    }
}
