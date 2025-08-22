<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IaCService\V20210806\Models\ListProductsResponseBody;

use AlibabaCloud\Dara\Model;

class products extends Model
{
    /**
     * @var string
     */
    public $firstCategoryName;

    /**
     * @var string
     */
    public $firstCategoryNameEn;

    /**
     * @var string
     */
    public $product;

    /**
     * @var string
     */
    public $productName;

    /**
     * @var string
     */
    public $productNameEn;

    /**
     * @var string
     */
    public $secondCategoryName;

    /**
     * @var string
     */
    public $secondCategoryNameEn;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $subcategory;

    /**
     * @var bool
     */
    public $supportTerraformer;

    /**
     * @var string
     */
    public $terraformProviderVersion;
    protected $_name = [
        'firstCategoryName' => 'firstCategoryName',
        'firstCategoryNameEn' => 'firstCategoryNameEn',
        'product' => 'product',
        'productName' => 'productName',
        'productNameEn' => 'productNameEn',
        'secondCategoryName' => 'secondCategoryName',
        'secondCategoryNameEn' => 'secondCategoryNameEn',
        'status' => 'status',
        'subcategory' => 'subcategory',
        'supportTerraformer' => 'supportTerraformer',
        'terraformProviderVersion' => 'terraformProviderVersion',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->firstCategoryName) {
            $res['firstCategoryName'] = $this->firstCategoryName;
        }

        if (null !== $this->firstCategoryNameEn) {
            $res['firstCategoryNameEn'] = $this->firstCategoryNameEn;
        }

        if (null !== $this->product) {
            $res['product'] = $this->product;
        }

        if (null !== $this->productName) {
            $res['productName'] = $this->productName;
        }

        if (null !== $this->productNameEn) {
            $res['productNameEn'] = $this->productNameEn;
        }

        if (null !== $this->secondCategoryName) {
            $res['secondCategoryName'] = $this->secondCategoryName;
        }

        if (null !== $this->secondCategoryNameEn) {
            $res['secondCategoryNameEn'] = $this->secondCategoryNameEn;
        }

        if (null !== $this->status) {
            $res['status'] = $this->status;
        }

        if (null !== $this->subcategory) {
            $res['subcategory'] = $this->subcategory;
        }

        if (null !== $this->supportTerraformer) {
            $res['supportTerraformer'] = $this->supportTerraformer;
        }

        if (null !== $this->terraformProviderVersion) {
            $res['terraformProviderVersion'] = $this->terraformProviderVersion;
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
        if (isset($map['firstCategoryName'])) {
            $model->firstCategoryName = $map['firstCategoryName'];
        }

        if (isset($map['firstCategoryNameEn'])) {
            $model->firstCategoryNameEn = $map['firstCategoryNameEn'];
        }

        if (isset($map['product'])) {
            $model->product = $map['product'];
        }

        if (isset($map['productName'])) {
            $model->productName = $map['productName'];
        }

        if (isset($map['productNameEn'])) {
            $model->productNameEn = $map['productNameEn'];
        }

        if (isset($map['secondCategoryName'])) {
            $model->secondCategoryName = $map['secondCategoryName'];
        }

        if (isset($map['secondCategoryNameEn'])) {
            $model->secondCategoryNameEn = $map['secondCategoryNameEn'];
        }

        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        if (isset($map['subcategory'])) {
            $model->subcategory = $map['subcategory'];
        }

        if (isset($map['supportTerraformer'])) {
            $model->supportTerraformer = $map['supportTerraformer'];
        }

        if (isset($map['terraformProviderVersion'])) {
            $model->terraformProviderVersion = $map['terraformProviderVersion'];
        }

        return $model;
    }
}
