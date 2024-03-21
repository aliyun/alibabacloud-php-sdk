<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Trademark\V20190902\Models;

use AlibabaCloud\Tea\Model;

class SearchItemsRequest extends Model
{
    /**
     * @var string
     */
    public $excludedTags;

    /**
     * @var string
     */
    public $excludedUids;

    /**
     * @var bool
     */
    public $feedsType;

    /**
     * @var string
     */
    public $intCls;

    /**
     * @var string
     */
    public $keywords;

    /**
     * @var bool
     */
    public $mock;

    /**
     * @var int
     */
    public $pageIndex;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $priceLeft;

    /**
     * @var string
     */
    public $priceRight;

    /**
     * @var string
     */
    public $products;

    /**
     * @var string
     */
    public $registerNumber;

    /**
     * @var string
     */
    public $sort;

    /**
     * @var int
     */
    public $sortType;

    /**
     * @var string
     */
    public $tags;

    /**
     * @var int
     */
    public $trademarkNameLength;

    /**
     * @var string
     */
    public $trademarkNameType;

    /**
     * @var string
     */
    public $umId;
    protected $_name = [
        'excludedTags'        => 'ExcludedTags',
        'excludedUids'        => 'ExcludedUids',
        'feedsType'           => 'FeedsType',
        'intCls'              => 'IntCls',
        'keywords'            => 'Keywords',
        'mock'                => 'Mock',
        'pageIndex'           => 'PageIndex',
        'pageSize'            => 'PageSize',
        'priceLeft'           => 'PriceLeft',
        'priceRight'          => 'PriceRight',
        'products'            => 'Products',
        'registerNumber'      => 'RegisterNumber',
        'sort'                => 'Sort',
        'sortType'            => 'SortType',
        'tags'                => 'Tags',
        'trademarkNameLength' => 'TrademarkNameLength',
        'trademarkNameType'   => 'TrademarkNameType',
        'umId'                => 'UmId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->excludedTags) {
            $res['ExcludedTags'] = $this->excludedTags;
        }
        if (null !== $this->excludedUids) {
            $res['ExcludedUids'] = $this->excludedUids;
        }
        if (null !== $this->feedsType) {
            $res['FeedsType'] = $this->feedsType;
        }
        if (null !== $this->intCls) {
            $res['IntCls'] = $this->intCls;
        }
        if (null !== $this->keywords) {
            $res['Keywords'] = $this->keywords;
        }
        if (null !== $this->mock) {
            $res['Mock'] = $this->mock;
        }
        if (null !== $this->pageIndex) {
            $res['PageIndex'] = $this->pageIndex;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->priceLeft) {
            $res['PriceLeft'] = $this->priceLeft;
        }
        if (null !== $this->priceRight) {
            $res['PriceRight'] = $this->priceRight;
        }
        if (null !== $this->products) {
            $res['Products'] = $this->products;
        }
        if (null !== $this->registerNumber) {
            $res['RegisterNumber'] = $this->registerNumber;
        }
        if (null !== $this->sort) {
            $res['Sort'] = $this->sort;
        }
        if (null !== $this->sortType) {
            $res['SortType'] = $this->sortType;
        }
        if (null !== $this->tags) {
            $res['Tags'] = $this->tags;
        }
        if (null !== $this->trademarkNameLength) {
            $res['TrademarkNameLength'] = $this->trademarkNameLength;
        }
        if (null !== $this->trademarkNameType) {
            $res['TrademarkNameType'] = $this->trademarkNameType;
        }
        if (null !== $this->umId) {
            $res['UmId'] = $this->umId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SearchItemsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ExcludedTags'])) {
            $model->excludedTags = $map['ExcludedTags'];
        }
        if (isset($map['ExcludedUids'])) {
            $model->excludedUids = $map['ExcludedUids'];
        }
        if (isset($map['FeedsType'])) {
            $model->feedsType = $map['FeedsType'];
        }
        if (isset($map['IntCls'])) {
            $model->intCls = $map['IntCls'];
        }
        if (isset($map['Keywords'])) {
            $model->keywords = $map['Keywords'];
        }
        if (isset($map['Mock'])) {
            $model->mock = $map['Mock'];
        }
        if (isset($map['PageIndex'])) {
            $model->pageIndex = $map['PageIndex'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['PriceLeft'])) {
            $model->priceLeft = $map['PriceLeft'];
        }
        if (isset($map['PriceRight'])) {
            $model->priceRight = $map['PriceRight'];
        }
        if (isset($map['Products'])) {
            $model->products = $map['Products'];
        }
        if (isset($map['RegisterNumber'])) {
            $model->registerNumber = $map['RegisterNumber'];
        }
        if (isset($map['Sort'])) {
            $model->sort = $map['Sort'];
        }
        if (isset($map['SortType'])) {
            $model->sortType = $map['SortType'];
        }
        if (isset($map['Tags'])) {
            $model->tags = $map['Tags'];
        }
        if (isset($map['TrademarkNameLength'])) {
            $model->trademarkNameLength = $map['TrademarkNameLength'];
        }
        if (isset($map['TrademarkNameType'])) {
            $model->trademarkNameType = $map['TrademarkNameType'];
        }
        if (isset($map['UmId'])) {
            $model->umId = $map['UmId'];
        }

        return $model;
    }
}
