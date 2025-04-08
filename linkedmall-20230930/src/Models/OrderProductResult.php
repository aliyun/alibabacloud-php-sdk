<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20230930\Models;

use AlibabaCloud\Dara\Model;

class OrderProductResult extends Model
{
    /**
     * @var bool
     */
    public $canSell;

    /**
     * @var mixed[]
     */
    public $features;

    /**
     * @var string
     */
    public $message;

    /**
     * @var int
     */
    public $price;

    /**
     * @var string
     */
    public $productId;

    /**
     * @var string
     */
    public $productPicUrl;

    /**
     * @var string
     */
    public $productTitle;

    /**
     * @var string
     */
    public $purchaserId;

    /**
     * @var int
     */
    public $quantity;

    /**
     * @var string
     */
    public $skuId;

    /**
     * @var string
     */
    public $skuTitle;
    protected $_name = [
        'canSell' => 'canSell',
        'features' => 'features',
        'message' => 'message',
        'price' => 'price',
        'productId' => 'productId',
        'productPicUrl' => 'productPicUrl',
        'productTitle' => 'productTitle',
        'purchaserId' => 'purchaserId',
        'quantity' => 'quantity',
        'skuId' => 'skuId',
        'skuTitle' => 'skuTitle',
    ];

    public function validate()
    {
        if (\is_array($this->features)) {
            Model::validateArray($this->features);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->canSell) {
            $res['canSell'] = $this->canSell;
        }

        if (null !== $this->features) {
            if (\is_array($this->features)) {
                $res['features'] = [];
                foreach ($this->features as $key1 => $value1) {
                    $res['features'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->message) {
            $res['message'] = $this->message;
        }

        if (null !== $this->price) {
            $res['price'] = $this->price;
        }

        if (null !== $this->productId) {
            $res['productId'] = $this->productId;
        }

        if (null !== $this->productPicUrl) {
            $res['productPicUrl'] = $this->productPicUrl;
        }

        if (null !== $this->productTitle) {
            $res['productTitle'] = $this->productTitle;
        }

        if (null !== $this->purchaserId) {
            $res['purchaserId'] = $this->purchaserId;
        }

        if (null !== $this->quantity) {
            $res['quantity'] = $this->quantity;
        }

        if (null !== $this->skuId) {
            $res['skuId'] = $this->skuId;
        }

        if (null !== $this->skuTitle) {
            $res['skuTitle'] = $this->skuTitle;
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
        if (isset($map['canSell'])) {
            $model->canSell = $map['canSell'];
        }

        if (isset($map['features'])) {
            if (!empty($map['features'])) {
                $model->features = [];
                foreach ($map['features'] as $key1 => $value1) {
                    $model->features[$key1] = $value1;
                }
            }
        }

        if (isset($map['message'])) {
            $model->message = $map['message'];
        }

        if (isset($map['price'])) {
            $model->price = $map['price'];
        }

        if (isset($map['productId'])) {
            $model->productId = $map['productId'];
        }

        if (isset($map['productPicUrl'])) {
            $model->productPicUrl = $map['productPicUrl'];
        }

        if (isset($map['productTitle'])) {
            $model->productTitle = $map['productTitle'];
        }

        if (isset($map['purchaserId'])) {
            $model->purchaserId = $map['purchaserId'];
        }

        if (isset($map['quantity'])) {
            $model->quantity = $map['quantity'];
        }

        if (isset($map['skuId'])) {
            $model->skuId = $map['skuId'];
        }

        if (isset($map['skuTitle'])) {
            $model->skuTitle = $map['skuTitle'];
        }

        return $model;
    }
}
