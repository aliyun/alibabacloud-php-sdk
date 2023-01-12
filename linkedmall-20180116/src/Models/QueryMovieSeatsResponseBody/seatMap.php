<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryMovieSeatsResponseBody;

use AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryMovieSeatsResponseBody\seatMap\seats;
use AlibabaCloud\Tea\Model;

class seatMap extends Model
{
    /**
     * @example 2
     *
     * @var int
     */
    public $maxCanBuy;

    /**
     * @example 20
     *
     * @var int
     */
    public $maxColumn;

    /**
     * @example 30
     *
     * @var int
     */
    public $maxLeftPx;

    /**
     * @example 20
     *
     * @var int
     */
    public $maxRow;

    /**
     * @example 30
     *
     * @var int
     */
    public $maxTopPx;

    /**
     * @example 15
     *
     * @var int
     */
    public $minColumn;

    /**
     * @example 30
     *
     * @var int
     */
    public $minLeftPx;

    /**
     * @example 15
     *
     * @var int
     */
    public $minRow;

    /**
     * @example 30
     *
     * @var int
     */
    public $minTopPx;

    /**
     * @example ""
     *
     * @var string
     */
    public $notice;

    /**
     * @example true
     *
     * @var bool
     */
    public $regular;

    /**
     * @example 150
     *
     * @var int
     */
    public $seatCount;

    /**
     * @var seats
     */
    public $seats;

    /**
     * @example 50
     *
     * @var int
     */
    public $soldCount;

    /**
     * @var string
     */
    public $tipMessage;
    protected $_name = [
        'maxCanBuy'  => 'MaxCanBuy',
        'maxColumn'  => 'MaxColumn',
        'maxLeftPx'  => 'MaxLeftPx',
        'maxRow'     => 'MaxRow',
        'maxTopPx'   => 'MaxTopPx',
        'minColumn'  => 'MinColumn',
        'minLeftPx'  => 'MinLeftPx',
        'minRow'     => 'MinRow',
        'minTopPx'   => 'MinTopPx',
        'notice'     => 'Notice',
        'regular'    => 'Regular',
        'seatCount'  => 'SeatCount',
        'seats'      => 'Seats',
        'soldCount'  => 'SoldCount',
        'tipMessage' => 'TipMessage',
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
        if (null !== $this->maxColumn) {
            $res['MaxColumn'] = $this->maxColumn;
        }
        if (null !== $this->maxLeftPx) {
            $res['MaxLeftPx'] = $this->maxLeftPx;
        }
        if (null !== $this->maxRow) {
            $res['MaxRow'] = $this->maxRow;
        }
        if (null !== $this->maxTopPx) {
            $res['MaxTopPx'] = $this->maxTopPx;
        }
        if (null !== $this->minColumn) {
            $res['MinColumn'] = $this->minColumn;
        }
        if (null !== $this->minLeftPx) {
            $res['MinLeftPx'] = $this->minLeftPx;
        }
        if (null !== $this->minRow) {
            $res['MinRow'] = $this->minRow;
        }
        if (null !== $this->minTopPx) {
            $res['MinTopPx'] = $this->minTopPx;
        }
        if (null !== $this->notice) {
            $res['Notice'] = $this->notice;
        }
        if (null !== $this->regular) {
            $res['Regular'] = $this->regular;
        }
        if (null !== $this->seatCount) {
            $res['SeatCount'] = $this->seatCount;
        }
        if (null !== $this->seats) {
            $res['Seats'] = null !== $this->seats ? $this->seats->toMap() : null;
        }
        if (null !== $this->soldCount) {
            $res['SoldCount'] = $this->soldCount;
        }
        if (null !== $this->tipMessage) {
            $res['TipMessage'] = $this->tipMessage;
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
        if (isset($map['MaxColumn'])) {
            $model->maxColumn = $map['MaxColumn'];
        }
        if (isset($map['MaxLeftPx'])) {
            $model->maxLeftPx = $map['MaxLeftPx'];
        }
        if (isset($map['MaxRow'])) {
            $model->maxRow = $map['MaxRow'];
        }
        if (isset($map['MaxTopPx'])) {
            $model->maxTopPx = $map['MaxTopPx'];
        }
        if (isset($map['MinColumn'])) {
            $model->minColumn = $map['MinColumn'];
        }
        if (isset($map['MinLeftPx'])) {
            $model->minLeftPx = $map['MinLeftPx'];
        }
        if (isset($map['MinRow'])) {
            $model->minRow = $map['MinRow'];
        }
        if (isset($map['MinTopPx'])) {
            $model->minTopPx = $map['MinTopPx'];
        }
        if (isset($map['Notice'])) {
            $model->notice = $map['Notice'];
        }
        if (isset($map['Regular'])) {
            $model->regular = $map['Regular'];
        }
        if (isset($map['SeatCount'])) {
            $model->seatCount = $map['SeatCount'];
        }
        if (isset($map['Seats'])) {
            $model->seats = seats::fromMap($map['Seats']);
        }
        if (isset($map['SoldCount'])) {
            $model->soldCount = $map['SoldCount'];
        }
        if (isset($map['TipMessage'])) {
            $model->tipMessage = $map['TipMessage'];
        }

        return $model;
    }
}
