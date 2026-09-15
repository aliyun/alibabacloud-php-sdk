<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aidge\V20260428\Models;

use AlibabaCloud\Dara\Model;

class SubmitProductMatchRequest extends Model
{
    /**
     * @var string
     */
    public $brandName;

    /**
     * @var string
     */
    public $category;

    /**
     * @var string
     */
    public $imageUrl;

    /**
     * @var string
     */
    public $itemId;

    /**
     * @var string
     */
    public $productUrl;

    /**
     * @var string
     */
    public $shopName;

    /**
     * @var string
     */
    public $title;
    protected $_name = [
        'brandName' => 'BrandName',
        'category' => 'Category',
        'imageUrl' => 'ImageUrl',
        'itemId' => 'ItemId',
        'productUrl' => 'ProductUrl',
        'shopName' => 'ShopName',
        'title' => 'Title',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->brandName) {
            $res['BrandName'] = $this->brandName;
        }

        if (null !== $this->category) {
            $res['Category'] = $this->category;
        }

        if (null !== $this->imageUrl) {
            $res['ImageUrl'] = $this->imageUrl;
        }

        if (null !== $this->itemId) {
            $res['ItemId'] = $this->itemId;
        }

        if (null !== $this->productUrl) {
            $res['ProductUrl'] = $this->productUrl;
        }

        if (null !== $this->shopName) {
            $res['ShopName'] = $this->shopName;
        }

        if (null !== $this->title) {
            $res['Title'] = $this->title;
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
        if (isset($map['BrandName'])) {
            $model->brandName = $map['BrandName'];
        }

        if (isset($map['Category'])) {
            $model->category = $map['Category'];
        }

        if (isset($map['ImageUrl'])) {
            $model->imageUrl = $map['ImageUrl'];
        }

        if (isset($map['ItemId'])) {
            $model->itemId = $map['ItemId'];
        }

        if (isset($map['ProductUrl'])) {
            $model->productUrl = $map['ProductUrl'];
        }

        if (isset($map['ShopName'])) {
            $model->shopName = $map['ShopName'];
        }

        if (isset($map['Title'])) {
            $model->title = $map['Title'];
        }

        return $model;
    }
}
