<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20230930\Models;

use AlibabaCloud\Dara\Model;

class ProductSaleInfo extends Model
{
    /**
     * @var bool
     */
    public $canSell;

    /**
     * @var string
     */
    public $divisionCode;

    /**
     * @var string
     */
    public $fuzzyQuantity;

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
    public $productId;

    /**
     * @var string
     */
    public $productStatus;

    /**
     * @var int
     */
    public $quantity;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $shopId;

    /**
     * @var SkuSaleInfo[]
     */
    public $skus;

    /**
     * @var string
     */
    public $title;
    protected $_name = [
        'canSell' => 'canSell',
        'divisionCode' => 'divisionCode',
        'fuzzyQuantity' => 'fuzzyQuantity',
        'limitRules' => 'limitRules',
        'lmItemId' => 'lmItemId',
        'productId' => 'productId',
        'productStatus' => 'productStatus',
        'quantity' => 'quantity',
        'requestId' => 'requestId',
        'shopId' => 'shopId',
        'skus' => 'skus',
        'title' => 'title',
    ];

    public function validate()
    {
        if (\is_array($this->limitRules)) {
            Model::validateArray($this->limitRules);
        }
        if (\is_array($this->skus)) {
            Model::validateArray($this->skus);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->canSell) {
            $res['canSell'] = $this->canSell;
        }

        if (null !== $this->divisionCode) {
            $res['divisionCode'] = $this->divisionCode;
        }

        if (null !== $this->fuzzyQuantity) {
            $res['fuzzyQuantity'] = $this->fuzzyQuantity;
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

        if (null !== $this->productId) {
            $res['productId'] = $this->productId;
        }

        if (null !== $this->productStatus) {
            $res['productStatus'] = $this->productStatus;
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
            if (\is_array($this->skus)) {
                $res['skus'] = [];
                $n1 = 0;
                foreach ($this->skus as $item1) {
                    $res['skus'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
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
        if (isset($map['canSell'])) {
            $model->canSell = $map['canSell'];
        }

        if (isset($map['divisionCode'])) {
            $model->divisionCode = $map['divisionCode'];
        }

        if (isset($map['fuzzyQuantity'])) {
            $model->fuzzyQuantity = $map['fuzzyQuantity'];
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

        if (isset($map['productId'])) {
            $model->productId = $map['productId'];
        }

        if (isset($map['productStatus'])) {
            $model->productStatus = $map['productStatus'];
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
                $n1 = 0;
                foreach ($map['skus'] as $item1) {
                    $model->skus[$n1++] = SkuSaleInfo::fromMap($item1);
                }
            }
        }

        if (isset($map['title'])) {
            $model->title = $map['title'];
        }

        return $model;
    }
}
