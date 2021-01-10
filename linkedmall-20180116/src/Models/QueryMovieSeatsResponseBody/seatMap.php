<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryMovieSeatsResponseBody;

use AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryMovieSeatsResponseBody\seatMap\seats;
use AlibabaCloud\Tea\Model;

class seatMap extends Model
{
    /**
     * @var int
     */
    public $maxCanBuy;

    /**
     * @var int
     */
    public $maxRow;

    /**
     * @var string
     */
    public $tipMessage;

    /**
     * @var string
     */
    public $notice;

    /**
     * @var int
     */
    public $minTopPx;

    /**
     * @var int
     */
    public $minColumn;

    /**
     * @var int
     */
    public $maxColumn;

    /**
     * @var bool
     */
    public $regular;

    /**
     * @var int
     */
    public $maxTopPx;

    /**
     * @var int
     */
    public $maxLeftPx;

    /**
     * @var seats
     */
    public $seats;

    /**
     * @var int
     */
    public $soldCount;

    /**
     * @var int
     */
    public $minRow;

    /**
     * @var int
     */
    public $seatCount;

    /**
     * @var int
     */
    public $minLeftPx;
    protected $_name = [
        'maxCanBuy'  => 'MaxCanBuy',
        'maxRow'     => 'MaxRow',
        'tipMessage' => 'TipMessage',
        'notice'     => 'Notice',
        'minTopPx'   => 'MinTopPx',
        'minColumn'  => 'MinColumn',
        'maxColumn'  => 'MaxColumn',
        'regular'    => 'Regular',
        'maxTopPx'   => 'MaxTopPx',
        'maxLeftPx'  => 'MaxLeftPx',
        'seats'      => 'Seats',
        'soldCount'  => 'SoldCount',
        'minRow'     => 'MinRow',
        'seatCount'  => 'SeatCount',
        'minLeftPx'  => 'MinLeftPx',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->maxCanBuy) {
            $res['MaxCanBuy'] = $this->maxCanBuy;
        }
        if (null !== $this->maxRow) {
            $res['MaxRow'] = $this->maxRow;
        }
        if (null !== $this->tipMessage) {
            $res['TipMessage'] = $this->tipMessage;
        }
        if (null !== $this->notice) {
            $res['Notice'] = $this->notice;
        }
        if (null !== $this->minTopPx) {
            $res['MinTopPx'] = $this->minTopPx;
        }
        if (null !== $this->minColumn) {
            $res['MinColumn'] = $this->minColumn;
        }
        if (null !== $this->maxColumn) {
            $res['MaxColumn'] = $this->maxColumn;
        }
        if (null !== $this->regular) {
            $res['Regular'] = $this->regular;
        }
        if (null !== $this->maxTopPx) {
            $res['MaxTopPx'] = $this->maxTopPx;
        }
        if (null !== $this->maxLeftPx) {
            $res['MaxLeftPx'] = $this->maxLeftPx;
        }
        if (null !== $this->seats) {
            $res['Seats'] = null !== $this->seats ? $this->seats->toMap() : null;
        }
        if (null !== $this->soldCount) {
            $res['SoldCount'] = $this->soldCount;
        }
        if (null !== $this->minRow) {
            $res['MinRow'] = $this->minRow;
        }
        if (null !== $this->seatCount) {
            $res['SeatCount'] = $this->seatCount;
        }
        if (null !== $this->minLeftPx) {
            $res['MinLeftPx'] = $this->minLeftPx;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return seatMap
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MaxCanBuy'])) {
            $model->maxCanBuy = $map['MaxCanBuy'];
        }
        if (isset($map['MaxRow'])) {
            $model->maxRow = $map['MaxRow'];
        }
        if (isset($map['TipMessage'])) {
            $model->tipMessage = $map['TipMessage'];
        }
        if (isset($map['Notice'])) {
            $model->notice = $map['Notice'];
        }
        if (isset($map['MinTopPx'])) {
            $model->minTopPx = $map['MinTopPx'];
        }
        if (isset($map['MinColumn'])) {
            $model->minColumn = $map['MinColumn'];
        }
        if (isset($map['MaxColumn'])) {
            $model->maxColumn = $map['MaxColumn'];
        }
        if (isset($map['Regular'])) {
            $model->regular = $map['Regular'];
        }
        if (isset($map['MaxTopPx'])) {
            $model->maxTopPx = $map['MaxTopPx'];
        }
        if (isset($map['MaxLeftPx'])) {
            $model->maxLeftPx = $map['MaxLeftPx'];
        }
        if (isset($map['Seats'])) {
            $model->seats = seats::fromMap($map['Seats']);
        }
        if (isset($map['SoldCount'])) {
            $model->soldCount = $map['SoldCount'];
        }
        if (isset($map['MinRow'])) {
            $model->minRow = $map['MinRow'];
        }
        if (isset($map['SeatCount'])) {
            $model->seatCount = $map['SeatCount'];
        }
        if (isset($map['MinLeftPx'])) {
            $model->minLeftPx = $map['MinLeftPx'];
        }

        return $model;
    }
}
