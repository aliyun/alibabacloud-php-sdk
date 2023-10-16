<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Trademark\V20180724\Models;

use AlibabaCloud\Tea\Model;

class SearchTmOnsalesRequest extends Model
{
    /**
     * @var string
     */
    public $classification;

    /**
     * @var string
     */
    public $keyword;

    /**
     * @var int
     */
    public $orderPriceLeft;

    /**
     * @var int
     */
    public $orderPriceRight;

    /**
     * @var int
     */
    public $pageNum;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $productCode;

    /**
     * @var bool
     */
    public $queryAll;

    /**
     * @var int
     */
    public $regLeft;

    /**
     * @var int
     */
    public $regRight;

    /**
     * @var string
     */
    public $registerNumber;

    /**
     * @var string
     */
    public $sortName;

    /**
     * @var string
     */
    public $sortOrder;

    /**
     * @var string
     */
    public $tag;

    /**
     * @var string
     */
    public $tmName;

    /**
     * @var string
     */
    public $topSearch;
    protected $_name = [
        'classification'  => 'Classification',
        'keyword'         => 'Keyword',
        'orderPriceLeft'  => 'OrderPriceLeft',
        'orderPriceRight' => 'OrderPriceRight',
        'pageNum'         => 'PageNum',
        'pageSize'        => 'PageSize',
        'productCode'     => 'ProductCode',
        'queryAll'        => 'QueryAll',
        'regLeft'         => 'RegLeft',
        'regRight'        => 'RegRight',
        'registerNumber'  => 'RegisterNumber',
        'sortName'        => 'SortName',
        'sortOrder'       => 'SortOrder',
        'tag'             => 'Tag',
        'tmName'          => 'TmName',
        'topSearch'       => 'TopSearch',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->classification) {
            $res['Classification'] = $this->classification;
        }
        if (null !== $this->keyword) {
            $res['Keyword'] = $this->keyword;
        }
        if (null !== $this->orderPriceLeft) {
            $res['OrderPriceLeft'] = $this->orderPriceLeft;
        }
        if (null !== $this->orderPriceRight) {
            $res['OrderPriceRight'] = $this->orderPriceRight;
        }
        if (null !== $this->pageNum) {
            $res['PageNum'] = $this->pageNum;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->productCode) {
            $res['ProductCode'] = $this->productCode;
        }
        if (null !== $this->queryAll) {
            $res['QueryAll'] = $this->queryAll;
        }
        if (null !== $this->regLeft) {
            $res['RegLeft'] = $this->regLeft;
        }
        if (null !== $this->regRight) {
            $res['RegRight'] = $this->regRight;
        }
        if (null !== $this->registerNumber) {
            $res['RegisterNumber'] = $this->registerNumber;
        }
        if (null !== $this->sortName) {
            $res['SortName'] = $this->sortName;
        }
        if (null !== $this->sortOrder) {
            $res['SortOrder'] = $this->sortOrder;
        }
        if (null !== $this->tag) {
            $res['Tag'] = $this->tag;
        }
        if (null !== $this->tmName) {
            $res['TmName'] = $this->tmName;
        }
        if (null !== $this->topSearch) {
            $res['TopSearch'] = $this->topSearch;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SearchTmOnsalesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Classification'])) {
            $model->classification = $map['Classification'];
        }
        if (isset($map['Keyword'])) {
            $model->keyword = $map['Keyword'];
        }
        if (isset($map['OrderPriceLeft'])) {
            $model->orderPriceLeft = $map['OrderPriceLeft'];
        }
        if (isset($map['OrderPriceRight'])) {
            $model->orderPriceRight = $map['OrderPriceRight'];
        }
        if (isset($map['PageNum'])) {
            $model->pageNum = $map['PageNum'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['ProductCode'])) {
            $model->productCode = $map['ProductCode'];
        }
        if (isset($map['QueryAll'])) {
            $model->queryAll = $map['QueryAll'];
        }
        if (isset($map['RegLeft'])) {
            $model->regLeft = $map['RegLeft'];
        }
        if (isset($map['RegRight'])) {
            $model->regRight = $map['RegRight'];
        }
        if (isset($map['RegisterNumber'])) {
            $model->registerNumber = $map['RegisterNumber'];
        }
        if (isset($map['SortName'])) {
            $model->sortName = $map['SortName'];
        }
        if (isset($map['SortOrder'])) {
            $model->sortOrder = $map['SortOrder'];
        }
        if (isset($map['Tag'])) {
            $model->tag = $map['Tag'];
        }
        if (isset($map['TmName'])) {
            $model->tmName = $map['TmName'];
        }
        if (isset($map['TopSearch'])) {
            $model->topSearch = $map['TopSearch'];
        }

        return $model;
    }
}
