<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20230930\Models;

use AlibabaCloud\Tea\Model;

class ProductSaleInfo extends Model
{
    /**
     * @example true
     *
     * @var bool
     */
    public $canSell;

    /**
     * @example 110000
     *
     * @var string
     */
    public $divisionCode;

    /**
     * @example 有货
     *
     * @var string
     */
    public $fuzzyQuantity;

    /**
     * @example 660460842235822080
     *
     * @var string
     */
    public $productId;

    /**
     * @example Online
     *
     * @var string
     */
    public $productStatus;

    /**
     * @example 10
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
     * @var SkuSaleInfo[]
     */
    public $skus;

    /**
     * @example 发财树
     *
     * @var string
     */
    public $title;
    protected $_name = [
        'canSell'       => 'canSell',
        'divisionCode'  => 'divisionCode',
        'fuzzyQuantity' => 'fuzzyQuantity',
        'productId'     => 'productId',
        'productStatus' => 'productStatus',
        'quantity'      => 'quantity',
        'requestId'     => 'requestId',
        'shopId'        => 'shopId',
        'skus'          => 'skus',
        'title'         => 'title',
    ];

    public function validate()
    {
    }

    public function toMap()
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
            $res['skus'] = [];
            if (null !== $this->skus && \is_array($this->skus)) {
                $n = 0;
                foreach ($this->skus as $item) {
                    $res['skus'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->title) {
            $res['title'] = $this->title;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ProductSaleInfo
     */
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
                $n           = 0;
                foreach ($map['skus'] as $item) {
                    $model->skus[$n++] = null !== $item ? SkuSaleInfo::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['title'])) {
            $model->title = $map['title'];
        }

        return $model;
    }
}
