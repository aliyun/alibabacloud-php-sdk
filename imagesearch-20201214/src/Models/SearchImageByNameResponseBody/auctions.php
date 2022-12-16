<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ImageSearch\V20201214\Models\SearchImageByNameResponseBody;

use AlibabaCloud\Tea\Model;

class auctions extends Model
{
    /**
     * @example 20
     *
     * @var int
     */
    public $categoryId;

    /**
     * @example zidingyi
     *
     * @var string
     */
    public $customContent;

    /**
     * @example 2
     *
     * @var int
     */
    public $intAttr;

    /**
     * @var int
     */
    public $intAttr2;

    /**
     * @example 2092061_1.jpg
     *
     * @var string
     */
    public $picName;

    /**
     * @example 2092061_1
     *
     * @var string
     */
    public $productId;

    /**
     * @example 1
     *
     * @var float
     */
    public $score;

    /**
     * @example 5.37633353624177e+24;0
     *
     * @var string
     */
    public $sortExprValues;

    /**
     * @example ss
     *
     * @var string
     */
    public $strAttr;

    /**
     * @var string
     */
    public $strAttr2;
    protected $_name = [
        'categoryId'     => 'CategoryId',
        'customContent'  => 'CustomContent',
        'intAttr'        => 'IntAttr',
        'intAttr2'       => 'IntAttr2',
        'picName'        => 'PicName',
        'productId'      => 'ProductId',
        'score'          => 'Score',
        'sortExprValues' => 'SortExprValues',
        'strAttr'        => 'StrAttr',
        'strAttr2'       => 'StrAttr2',
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
        if (null !== $this->customContent) {
            $res['CustomContent'] = $this->customContent;
        }
        if (null !== $this->intAttr) {
            $res['IntAttr'] = $this->intAttr;
        }
        if (null !== $this->intAttr2) {
            $res['IntAttr2'] = $this->intAttr2;
        }
        if (null !== $this->picName) {
            $res['PicName'] = $this->picName;
        }
        if (null !== $this->productId) {
            $res['ProductId'] = $this->productId;
        }
        if (null !== $this->score) {
            $res['Score'] = $this->score;
        }
        if (null !== $this->sortExprValues) {
            $res['SortExprValues'] = $this->sortExprValues;
        }
        if (null !== $this->strAttr) {
            $res['StrAttr'] = $this->strAttr;
        }
        if (null !== $this->strAttr2) {
            $res['StrAttr2'] = $this->strAttr2;
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
        if (isset($map['CustomContent'])) {
            $model->customContent = $map['CustomContent'];
        }
        if (isset($map['IntAttr'])) {
            $model->intAttr = $map['IntAttr'];
        }
        if (isset($map['IntAttr2'])) {
            $model->intAttr2 = $map['IntAttr2'];
        }
        if (isset($map['PicName'])) {
            $model->picName = $map['PicName'];
        }
        if (isset($map['ProductId'])) {
            $model->productId = $map['ProductId'];
        }
        if (isset($map['Score'])) {
            $model->score = $map['Score'];
        }
        if (isset($map['SortExprValues'])) {
            $model->sortExprValues = $map['SortExprValues'];
        }
        if (isset($map['StrAttr'])) {
            $model->strAttr = $map['StrAttr'];
        }
        if (isset($map['StrAttr2'])) {
            $model->strAttr2 = $map['StrAttr2'];
        }

        return $model;
    }
}
