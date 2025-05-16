<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Domain\V20180208\Models\ChangeAuctionRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Domain\V20180208\Models\ChangeAuctionRequest\auctionList\bidRecords;

class auctionList extends Model
{
    /**
     * @var bidRecords[]
     */
    public $bidRecords;

    /**
     * @var string
     */
    public $domainName;

    /**
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
     * @var string
     */
    public $winner;

    /**
     * @var float
     */
    public $winnerPrice;
    protected $_name = [
        'bidRecords' => 'BidRecords',
        'domainName' => 'DomainName',
        'endTime' => 'EndTime',
        'isReserve' => 'IsReserve',
        'reservePrice' => 'ReservePrice',
        'reserveRange' => 'ReserveRange',
        'status' => 'Status',
        'timeLeft' => 'TimeLeft',
        'winner' => 'Winner',
        'winnerPrice' => 'WinnerPrice',
    ];

    public function validate()
    {
        if (\is_array($this->bidRecords)) {
            Model::validateArray($this->bidRecords);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bidRecords) {
            if (\is_array($this->bidRecords)) {
                $res['BidRecords'] = [];
                $n1 = 0;
                foreach ($this->bidRecords as $item1) {
                    $res['BidRecords'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BidRecords'])) {
            if (!empty($map['BidRecords'])) {
                $model->bidRecords = [];
                $n1 = 0;
                foreach ($map['BidRecords'] as $item1) {
                    $model->bidRecords[$n1++] = bidRecords::fromMap($item1);
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
