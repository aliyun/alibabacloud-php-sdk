<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ImageSearch\V20201214\Models\SearchImageByPicResponseBody;

use AlibabaCloud\Tea\Model;

class auctions extends Model
{
    /**
     * @var string
     */
    public $picName;

    /**
     * @var int
     */
    public $intAttr;

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
    public $strAttr;

    /**
     * @var string
     */
    public $sortExprValues;

    /**
     * @var string
     */
    public $customContent;

    /**
     * @var float
     */
    public $score;
    protected $_name = [
        'picName'        => 'PicName',
        'intAttr'        => 'IntAttr',
        'categoryId'     => 'CategoryId',
        'productId'      => 'ProductId',
        'strAttr'        => 'StrAttr',
        'sortExprValues' => 'SortExprValues',
        'customContent'  => 'CustomContent',
        'score'          => 'Score',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->picName) {
            $res['PicName'] = $this->picName;
        }
        if (null !== $this->intAttr) {
            $res['IntAttr'] = $this->intAttr;
        }
        if (null !== $this->categoryId) {
            $res['CategoryId'] = $this->categoryId;
        }
        if (null !== $this->productId) {
            $res['ProductId'] = $this->productId;
        }
        if (null !== $this->strAttr) {
            $res['StrAttr'] = $this->strAttr;
        }
        if (null !== $this->sortExprValues) {
            $res['SortExprValues'] = $this->sortExprValues;
        }
        if (null !== $this->customContent) {
            $res['CustomContent'] = $this->customContent;
        }
        if (null !== $this->score) {
            $res['Score'] = $this->score;
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
        if (isset($map['PicName'])) {
            $model->picName = $map['PicName'];
        }
        if (isset($map['IntAttr'])) {
            $model->intAttr = $map['IntAttr'];
        }
        if (isset($map['CategoryId'])) {
            $model->categoryId = $map['CategoryId'];
        }
        if (isset($map['ProductId'])) {
            $model->productId = $map['ProductId'];
        }
        if (isset($map['StrAttr'])) {
            $model->strAttr = $map['StrAttr'];
        }
        if (isset($map['SortExprValues'])) {
            $model->sortExprValues = $map['SortExprValues'];
        }
        if (isset($map['CustomContent'])) {
            $model->customContent = $map['CustomContent'];
        }
        if (isset($map['Score'])) {
            $model->score = $map['Score'];
        }

        return $model;
    }
}
