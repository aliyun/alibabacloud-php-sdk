<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Market\V20151101\Models\DescribeProductsResponseBody\productItems;

use AlibabaCloud\Tea\Model;

class productItem extends Model
{
    /**
     * @var int
     */
    public $categoryId;

    /**
     * @var string
     */
    public $code;

    /**
     * @var string
     */
    public $deliveryDate;

    /**
     * @var string
     */
    public $deliveryWay;

    /**
     * @var string
     */
    public $imageUrl;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $operationSystem;

    /**
     * @var string
     */
    public $priceInfo;

    /**
     * @var string
     */
    public $score;

    /**
     * @var string
     */
    public $shortDescription;

    /**
     * @var string
     */
    public $suggestedPrice;

    /**
     * @var int
     */
    public $supplierId;

    /**
     * @var string
     */
    public $supplierName;

    /**
     * @var string
     */
    public $tags;

    /**
     * @var string
     */
    public $targetUrl;

    /**
     * @var string
     */
    public $warrantyDate;
    protected $_name = [
        'categoryId'       => 'CategoryId',
        'code'             => 'Code',
        'deliveryDate'     => 'DeliveryDate',
        'deliveryWay'      => 'DeliveryWay',
        'imageUrl'         => 'ImageUrl',
        'name'             => 'Name',
        'operationSystem'  => 'OperationSystem',
        'priceInfo'        => 'PriceInfo',
        'score'            => 'Score',
        'shortDescription' => 'ShortDescription',
        'suggestedPrice'   => 'SuggestedPrice',
        'supplierId'       => 'SupplierId',
        'supplierName'     => 'SupplierName',
        'tags'             => 'Tags',
        'targetUrl'        => 'TargetUrl',
        'warrantyDate'     => 'WarrantyDate',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->categoryId) {
            $res['CategoryId'] = $this->categoryId;
        }
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->deliveryDate) {
            $res['DeliveryDate'] = $this->deliveryDate;
        }
        if (null !== $this->deliveryWay) {
            $res['DeliveryWay'] = $this->deliveryWay;
        }
        if (null !== $this->imageUrl) {
            $res['ImageUrl'] = $this->imageUrl;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->operationSystem) {
            $res['OperationSystem'] = $this->operationSystem;
        }
        if (null !== $this->priceInfo) {
            $res['PriceInfo'] = $this->priceInfo;
        }
        if (null !== $this->score) {
            $res['Score'] = $this->score;
        }
        if (null !== $this->shortDescription) {
            $res['ShortDescription'] = $this->shortDescription;
        }
        if (null !== $this->suggestedPrice) {
            $res['SuggestedPrice'] = $this->suggestedPrice;
        }
        if (null !== $this->supplierId) {
            $res['SupplierId'] = $this->supplierId;
        }
        if (null !== $this->supplierName) {
            $res['SupplierName'] = $this->supplierName;
        }
        if (null !== $this->tags) {
            $res['Tags'] = $this->tags;
        }
        if (null !== $this->targetUrl) {
            $res['TargetUrl'] = $this->targetUrl;
        }
        if (null !== $this->warrantyDate) {
            $res['WarrantyDate'] = $this->warrantyDate;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return productItem
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CategoryId'])) {
            $model->categoryId = $map['CategoryId'];
        }
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['DeliveryDate'])) {
            $model->deliveryDate = $map['DeliveryDate'];
        }
        if (isset($map['DeliveryWay'])) {
            $model->deliveryWay = $map['DeliveryWay'];
        }
        if (isset($map['ImageUrl'])) {
            $model->imageUrl = $map['ImageUrl'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['OperationSystem'])) {
            $model->operationSystem = $map['OperationSystem'];
        }
        if (isset($map['PriceInfo'])) {
            $model->priceInfo = $map['PriceInfo'];
        }
        if (isset($map['Score'])) {
            $model->score = $map['Score'];
        }
        if (isset($map['ShortDescription'])) {
            $model->shortDescription = $map['ShortDescription'];
        }
        if (isset($map['SuggestedPrice'])) {
            $model->suggestedPrice = $map['SuggestedPrice'];
        }
        if (isset($map['SupplierId'])) {
            $model->supplierId = $map['SupplierId'];
        }
        if (isset($map['SupplierName'])) {
            $model->supplierName = $map['SupplierName'];
        }
        if (isset($map['Tags'])) {
            $model->tags = $map['Tags'];
        }
        if (isset($map['TargetUrl'])) {
            $model->targetUrl = $map['TargetUrl'];
        }
        if (isset($map['WarrantyDate'])) {
            $model->warrantyDate = $map['WarrantyDate'];
        }

        return $model;
    }
}
