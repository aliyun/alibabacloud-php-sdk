<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Domain\V20180208\Models\ChangeAuctionRequest;

use AlibabaCloud\SDK\Domain\V20180208\Models\ChangeAuctionRequest\auctionList\bidRecords;
use AlibabaCloud\Tea\Model;

class auctionList extends Model
{
    /**
     * @var bidRecords[]
     */
    public $bidRecords;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $domainName;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $endTime;

    /**
     * @var int
     */
    public $isReserve;

    /**
     * @var float
     */
    public $reservePrice;

    /**
     * @var string
     */
    public $reserveRange;

    /**
     * @var string
     */
    public $status;

    /**
     * @var int
     */
    public $timeLeft;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $winner;

    /**
     * @description This parameter is required.
     *
     * @var float
     */
    public $winnerPrice;
    protected $_name = [
        'bidRecords'   => 'BidRecords',
        'domainName'   => 'DomainName',
        'endTime'      => 'EndTime',
        'isReserve'    => 'IsReserve',
        'reservePrice' => 'ReservePrice',
        'reserveRange' => 'ReserveRange',
        'status'       => 'Status',
        'timeLeft'     => 'TimeLeft',
        'winner'       => 'Winner',
        'winnerPrice'  => 'WinnerPrice',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bidRecords) {
            $res['BidRecords'] = [];
            if (null !== $this->bidRecords && \is_array($this->bidRecords)) {
                $n = 0;
                foreach ($this->bidRecords as $item) {
                    $res['BidRecords'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->isReserve) {
            $res['IsReserve'] = $this->isReserve;
        }
        if (null !== $this->reservePrice) {
            $res['ReservePrice'] = $this->reservePrice;
        }
        if (null !== $this->reserveRange) {
            $res['ReserveRange'] = $this->reserveRange;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->timeLeft) {
            $res['TimeLeft'] = $this->timeLeft;
        }
        if (null !== $this->winner) {
            $res['Winner'] = $this->winner;
        }
        if (null !== $this->winnerPrice) {
            $res['WinnerPrice'] = $this->winnerPrice;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return auctionList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BidRecords'])) {
            if (!empty($map['BidRecords'])) {
                $model->bidRecords = [];
                $n                 = 0;
                foreach ($map['BidRecords'] as $item) {
                    $model->bidRecords[$n++] = null !== $item ? bidRecords::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['IsReserve'])) {
            $model->isReserve = $map['IsReserve'];
        }
        if (isset($map['ReservePrice'])) {
            $model->reservePrice = $map['ReservePrice'];
        }
        if (isset($map['ReserveRange'])) {
            $model->reserveRange = $map['ReserveRange'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['TimeLeft'])) {
            $model->timeLeft = $map['TimeLeft'];
        }
        if (isset($map['Winner'])) {
            $model->winner = $map['Winner'];
        }
        if (isset($map['WinnerPrice'])) {
            $model->winnerPrice = $map['WinnerPrice'];
        }

        return $model;
    }
}
