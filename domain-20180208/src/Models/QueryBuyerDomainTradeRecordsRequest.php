<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Domain\V20180208\Models;

use AlibabaCloud\Dara\Model;

class QueryBuyerDomainTradeRecordsRequest extends Model
{
    /**
     * @var string[]
     */
    public $bizIdList;

    /**
     * @var string[]
     */
    public $domainNameList;

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
     * @var string[]
     */
    public $statusList;

    /**
     * @var string[]
     */
    public $suffixList;

    /**
     * @var string[]
     */
    public $tradeTypeList;
    protected $_name = [
        'bizIdList' => 'BizIdList',
        'domainNameList' => 'DomainNameList',
        'endDate' => 'EndDate',
        'endPrice' => 'EndPrice',
        'pageNum' => 'PageNum',
        'pageSize' => 'PageSize',
        'sorter' => 'Sorter',
        'startDate' => 'StartDate',
        'startPrice' => 'StartPrice',
        'statusList' => 'StatusList',
        'suffixList' => 'SuffixList',
        'tradeTypeList' => 'TradeTypeList',
    ];

    public function validate()
    {
        if (\is_array($this->bizIdList)) {
            Model::validateArray($this->bizIdList);
        }
        if (\is_array($this->domainNameList)) {
            Model::validateArray($this->domainNameList);
        }
        if (\is_array($this->statusList)) {
            Model::validateArray($this->statusList);
        }
        if (\is_array($this->suffixList)) {
            Model::validateArray($this->suffixList);
        }
        if (\is_array($this->tradeTypeList)) {
            Model::validateArray($this->tradeTypeList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bizIdList) {
            if (\is_array($this->bizIdList)) {
                $res['BizIdList'] = [];
                $n1 = 0;
                foreach ($this->bizIdList as $item1) {
                    $res['BizIdList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->domainNameList) {
            if (\is_array($this->domainNameList)) {
                $res['DomainNameList'] = [];
                $n1 = 0;
                foreach ($this->domainNameList as $item1) {
                    $res['DomainNameList'][$n1] = $item1;
                    ++$n1;
                }
            }
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

        if (null !== $this->statusList) {
            if (\is_array($this->statusList)) {
                $res['StatusList'] = [];
                $n1 = 0;
                foreach ($this->statusList as $item1) {
                    $res['StatusList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->suffixList) {
            if (\is_array($this->suffixList)) {
                $res['SuffixList'] = [];
                $n1 = 0;
                foreach ($this->suffixList as $item1) {
                    $res['SuffixList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->tradeTypeList) {
            if (\is_array($this->tradeTypeList)) {
                $res['TradeTypeList'] = [];
                $n1 = 0;
                foreach ($this->tradeTypeList as $item1) {
                    $res['TradeTypeList'][$n1] = $item1;
                    ++$n1;
                }
            }
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
            if (!empty($map['BizIdList'])) {
                $model->bizIdList = [];
                $n1 = 0;
                foreach ($map['BizIdList'] as $item1) {
                    $model->bizIdList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['DomainNameList'])) {
            if (!empty($map['DomainNameList'])) {
                $model->domainNameList = [];
                $n1 = 0;
                foreach ($map['DomainNameList'] as $item1) {
                    $model->domainNameList[$n1] = $item1;
                    ++$n1;
                }
            }
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
            if (!empty($map['StatusList'])) {
                $model->statusList = [];
                $n1 = 0;
                foreach ($map['StatusList'] as $item1) {
                    $model->statusList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['SuffixList'])) {
            if (!empty($map['SuffixList'])) {
                $model->suffixList = [];
                $n1 = 0;
                foreach ($map['SuffixList'] as $item1) {
                    $model->suffixList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['TradeTypeList'])) {
            if (!empty($map['TradeTypeList'])) {
                $model->tradeTypeList = [];
                $n1 = 0;
                foreach ($map['TradeTypeList'] as $item1) {
                    $model->tradeTypeList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
