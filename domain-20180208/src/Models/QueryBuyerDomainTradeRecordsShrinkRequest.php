<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Domain\V20180208\Models;

use AlibabaCloud\Dara\Model;

class QueryBuyerDomainTradeRecordsShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $bizIdListShrink;

    /**
     * @var string
     */
    public $domainNameListShrink;

    /**
     * @var string
     */
    public $endDate;

    /**
     * @var float
     */
    public $endPrice;

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
    public $sorter;

    /**
     * @var string
     */
    public $startDate;

    /**
     * @var float
     */
    public $startPrice;

    /**
     * @var string
     */
    public $statusListShrink;

    /**
     * @var string
     */
    public $suffixListShrink;

    /**
     * @var string
     */
    public $tradeTypeListShrink;
    protected $_name = [
        'bizIdListShrink' => 'BizIdList',
        'domainNameListShrink' => 'DomainNameList',
        'endDate' => 'EndDate',
        'endPrice' => 'EndPrice',
        'pageNum' => 'PageNum',
        'pageSize' => 'PageSize',
        'sorter' => 'Sorter',
        'startDate' => 'StartDate',
        'startPrice' => 'StartPrice',
        'statusListShrink' => 'StatusList',
        'suffixListShrink' => 'SuffixList',
        'tradeTypeListShrink' => 'TradeTypeList',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bizIdListShrink) {
            $res['BizIdList'] = $this->bizIdListShrink;
        }

        if (null !== $this->domainNameListShrink) {
            $res['DomainNameList'] = $this->domainNameListShrink;
        }

        if (null !== $this->endDate) {
            $res['EndDate'] = $this->endDate;
        }

        if (null !== $this->endPrice) {
            $res['EndPrice'] = $this->endPrice;
        }

        if (null !== $this->pageNum) {
            $res['PageNum'] = $this->pageNum;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->sorter) {
            $res['Sorter'] = $this->sorter;
        }

        if (null !== $this->startDate) {
            $res['StartDate'] = $this->startDate;
        }

        if (null !== $this->startPrice) {
            $res['StartPrice'] = $this->startPrice;
        }

        if (null !== $this->statusListShrink) {
            $res['StatusList'] = $this->statusListShrink;
        }

        if (null !== $this->suffixListShrink) {
            $res['SuffixList'] = $this->suffixListShrink;
        }

        if (null !== $this->tradeTypeListShrink) {
            $res['TradeTypeList'] = $this->tradeTypeListShrink;
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
        if (isset($map['BizIdList'])) {
            $model->bizIdListShrink = $map['BizIdList'];
        }

        if (isset($map['DomainNameList'])) {
            $model->domainNameListShrink = $map['DomainNameList'];
        }

        if (isset($map['EndDate'])) {
            $model->endDate = $map['EndDate'];
        }

        if (isset($map['EndPrice'])) {
            $model->endPrice = $map['EndPrice'];
        }

        if (isset($map['PageNum'])) {
            $model->pageNum = $map['PageNum'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['Sorter'])) {
            $model->sorter = $map['Sorter'];
        }

        if (isset($map['StartDate'])) {
            $model->startDate = $map['StartDate'];
        }

        if (isset($map['StartPrice'])) {
            $model->startPrice = $map['StartPrice'];
        }

        if (isset($map['StatusList'])) {
            $model->statusListShrink = $map['StatusList'];
        }

        if (isset($map['SuffixList'])) {
            $model->suffixListShrink = $map['SuffixList'];
        }

        if (isset($map['TradeTypeList'])) {
            $model->tradeTypeListShrink = $map['TradeTypeList'];
        }

        return $model;
    }
}
