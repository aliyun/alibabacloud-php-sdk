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
     * @var string
     */
    public $tipMessage;

    /**
     * @var int
     */
    public $maxRow;

    /**
     * @var int
     */
    public $minColumn;

    /**
     * @var int
     */
    public $minTopPx;

    /**
     * @var string
     */
    public $notice;

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

    /**
     * @var seats
     */
    public $seats;
    protected $_name = [
        'maxCanBuy'  => 'MaxCanBuy',
        'tipMessage' => 'TipMessage',
        'maxRow'     => 'MaxRow',
        'minColumn'  => 'MinColumn',
        'minTopPx'   => 'MinTopPx',
        'notice'     => 'Notice',
        'maxColumn'  => 'MaxColumn',
        'regular'    => 'Regular',
        'maxTopPx'   => 'MaxTopPx',
        'maxLeftPx'  => 'MaxLeftPx',
        'soldCount'  => 'SoldCount',
        'minRow'     => 'MinRow',
        'seatCount'  => 'SeatCount',
        'minLeftPx'  => 'MinLeftPx',
        'seats'      => 'Seats',
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
        if (null !== $this->tipMessage) {
            $res['TipMessage'] = $this->tipMessage;
        }
        if (null !== $this->maxRow) {
            $res['MaxRow'] = $this->maxRow;
        }
        if (null !== $this->minColumn) {
            $res['MinColumn'] = $this->minColumn;
        }
        if (null !== $this->minTopPx) {
            $res['MinTopPx'] = $this->minTopPx;
        }
        if (null !== $this->notice) {
            $res['Notice'] = $this->notice;
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
        if (null !== $this->seats) {
            $res['Seats'] = null !== $this->seats ? $this->seats->toMap() : null;
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
        if (isset($map['TipMessage'])) {
            $model->tipMessage = $map['TipMessage'];
        }
        if (isset($map['MaxRow'])) {
            $model->maxRow = $map['MaxRow'];
        }
        if (isset($map['MinColumn'])) {
            $model->minColumn = $map['MinColumn'];
        }
        if (isset($map['MinTopPx'])) {
            $model->minTopPx = $map['MinTopPx'];
        }
        if (isset($map['Notice'])) {
            $model->notice = $map['Notice'];
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
        if (isset($map['Seats'])) {
            $model->seats = seats::fromMap($map['Seats']);
        }

        return $model;
    }
}
