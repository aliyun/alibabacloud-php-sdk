<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ImageSearch\V20201214\Models\SearchImageByNameResponseBody;

use AlibabaCloud\Tea\Model;

class auctions extends Model
{
    /**
     * @description The category of the image.
     *
     * @example 20
     *
     * @var int
     */
    public $categoryId;

    /**
     * @description The user-defined content.
     *
     * @example zidingyi
     *
     * @var string
     */
    public $customContent;

    /**
     * @description The attribute, which is an integer.
     *
     * @example 2
     *
     * @var int
     */
    public $intAttr;

    /**
     * @example 20
     *
     * @var int
     */
    public $intAttr2;

    /**
     * @description The name of the image.
     *
     * @example 2092061_1.jpg
     *
     * @var string
     */
    public $picName;

    /**
     * @description The ID of the product.
     *
     * @example 2092061_1
     *
     * @var string
     */
    public $productId;

    /**
     * @description The similarity score of the returned image. Valid values: 0 to 1.
     *
     * >  To use this feature, you must upgrade the SDK to version 3.1.1.
     * @example 1
     *
     * @var float
     */
    public $score;

    /**
     * @description The score information about the image.
     *
     * > *   This parameter is not supported. We recommend that you use the Score parameter.
     * >*   The SortExprValues parameter indicates a 2-tuple in which values are separated by a semicolon (;). The first value indicates the correlation score of the returned image. A greater value indicates a higher correlation with the sample image. Different algorithms are used.
     * >*   If the value of CategoryId is within the value range from 0 to 2, the value range of SortExprValues is from 0 to 7.33136443711219e+24.
     * >*   If the value of CategoryId is not within the value range from 0 to 2, the value range of SortExprValues is from 0 to 5.37633353624177e+24. If the returned image is identical with the sample image, the highest correlation score is generated.
     * @example 5.37633353624177e+24;0
     *
     * @var string
     */
    public $sortExprValues;

    /**
     * @description The attribute, which is a string.
     *
     * @example ss
     *
     * @var string
     */
    public $strAttr;

    /**
     * @example test
     *
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
