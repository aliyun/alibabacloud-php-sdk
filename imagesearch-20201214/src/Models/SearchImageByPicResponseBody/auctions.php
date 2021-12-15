<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ImageSearch\V20201214\Models\SearchImageByPicResponseBody;

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
    public $customContent;

    /**
     * @var int
     */
    public $intAttr;

    /**
     * @var string
     */
    public $picName;

    /**
     * @var string
     */
    public $productId;

    /**
     * @var float
     */
    public $score;

    /**
     * @var string
     */
    public $sortExprValues;

    /**
     * @var string
     */
    public $strAttr;
    protected $_name = [
        'categoryId'     => 'CategoryId',
        'customContent'  => 'CustomContent',
        'intAttr'        => 'IntAttr',
        'picName'        => 'PicName',
        'productId'      => 'ProductId',
        'score'          => 'Score',
        'sortExprValues' => 'SortExprValues',
        'strAttr'        => 'StrAttr',
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

        return $model;
    }
}
