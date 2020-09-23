<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ImageSearch\V20200212\ImageSearch\SearchImageByNameResponse;

use AlibabaCloud\Tea\Model;

class auctions extends Model
{
    /**
     * @var int
     */
    public $categoryId;

    /**
     * @var string
     */
    public $productId;

    /**
     * @var string
     */
    public $picName;

    /**
     * @var string
     */
    public $customContent;

    /**
     * @var string
     */
    public $sortExprValues;

    /**
     * @var int
     */
    public $intAttr;

    /**
     * @var string
     */
    public $strAttr;
    protected $_name = [
        'categoryId'     => 'CategoryId',
        'productId'      => 'ProductId',
        'picName'        => 'PicName',
        'customContent'  => 'CustomContent',
        'sortExprValues' => 'SortExprValues',
        'intAttr'        => 'IntAttr',
        'strAttr'        => 'StrAttr',
    ];

    public function validate()
    {
        Model::validateRequired('categoryId', $this->categoryId, true);
        Model::validateRequired('productId', $this->productId, true);
        Model::validateRequired('picName', $this->picName, true);
        Model::validateRequired('customContent', $this->customContent, true);
        Model::validateRequired('sortExprValues', $this->sortExprValues, true);
        Model::validateRequired('intAttr', $this->intAttr, true);
        Model::validateRequired('strAttr', $this->strAttr, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->categoryId) {
            $res['CategoryId'] = $this->categoryId;
        }
        if (null !== $this->productId) {
            $res['ProductId'] = $this->productId;
        }
        if (null !== $this->picName) {
            $res['PicName'] = $this->picName;
        }
        if (null !== $this->customContent) {
            $res['CustomContent'] = $this->customContent;
        }
        if (null !== $this->sortExprValues) {
            $res['SortExprValues'] = $this->sortExprValues;
        }
        if (null !== $this->intAttr) {
            $res['IntAttr'] = $this->intAttr;
        }
        if (null !== $this->strAttr) {
            $res['StrAttr'] = $this->strAttr;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return auctions
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CategoryId'])) {
            $model->categoryId = $map['CategoryId'];
        }
        if (isset($map['ProductId'])) {
            $model->productId = $map['ProductId'];
        }
        if (isset($map['PicName'])) {
            $model->picName = $map['PicName'];
        }
        if (isset($map['CustomContent'])) {
            $model->customContent = $map['CustomContent'];
        }
        if (isset($map['SortExprValues'])) {
            $model->sortExprValues = $map['SortExprValues'];
        }
        if (isset($map['IntAttr'])) {
            $model->intAttr = $map['IntAttr'];
        }
        if (isset($map['StrAttr'])) {
            $model->strAttr = $map['StrAttr'];
        }

        return $model;
    }
}
