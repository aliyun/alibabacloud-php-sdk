<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Workorder\V20201210\Models;

use AlibabaCloud\Dara\Model;

class CategoryParam extends Model
{
    /**
     * @var int
     */
    public $categoryId;

    /**
     * @var string
     */
    public $categoryName;

    /**
     * @var bool
     */
    public $isSelectFromDialog;

    /**
     * @var int
     */
    public $productId;

    /**
     * @var string
     */
    public $productName;
    protected $_name = [
        'categoryId' => 'CategoryId',
        'categoryName' => 'CategoryName',
        'isSelectFromDialog' => 'IsSelectFromDialog',
        'productId' => 'ProductId',
        'productName' => 'ProductName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->categoryId) {
            $res['CategoryId'] = $this->categoryId;
        }

        if (null !== $this->categoryName) {
            $res['CategoryName'] = $this->categoryName;
        }

        if (null !== $this->isSelectFromDialog) {
            $res['IsSelectFromDialog'] = $this->isSelectFromDialog;
        }

        if (null !== $this->productId) {
            $res['ProductId'] = $this->productId;
        }

        if (null !== $this->productName) {
            $res['ProductName'] = $this->productName;
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
        if (isset($map['CategoryId'])) {
            $model->categoryId = $map['CategoryId'];
        }

        if (isset($map['CategoryName'])) {
            $model->categoryName = $map['CategoryName'];
        }

        if (isset($map['IsSelectFromDialog'])) {
            $model->isSelectFromDialog = $map['IsSelectFromDialog'];
        }

        if (isset($map['ProductId'])) {
            $model->productId = $map['ProductId'];
        }

        if (isset($map['ProductName'])) {
            $model->productName = $map['ProductName'];
        }

        return $model;
    }
}
