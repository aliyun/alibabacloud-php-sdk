<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ModelStudio\V20260210\Models\GetSubscriptionStatsResponseBody\data;

use AlibabaCloud\Dara\Model;

class items extends Model
{
    /**
     * @var int
     */
    public $assignedSeats;

    /**
     * @var float
     */
    public $seatCredits;

    /**
     * @var int
     */
    public $seatRefreshTime;

    /**
     * @var float
     */
    public $seatRemainingCredits;

    /**
     * @var string
     */
    public $seatType;

    /**
     * @var int
     */
    public $totalSeats;
    protected $_name = [
        'assignedSeats' => 'AssignedSeats',
        'seatCredits' => 'SeatCredits',
        'seatRefreshTime' => 'SeatRefreshTime',
        'seatRemainingCredits' => 'SeatRemainingCredits',
        'seatType' => 'SeatType',
        'totalSeats' => 'TotalSeats',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->assignedSeats) {
            $res['AssignedSeats'] = $this->assignedSeats;
        }

        if (null !== $this->seatCredits) {
            $res['SeatCredits'] = $this->seatCredits;
        }

        if (null !== $this->seatRefreshTime) {
            $res['SeatRefreshTime'] = $this->seatRefreshTime;
        }

        if (null !== $this->seatRemainingCredits) {
            $res['SeatRemainingCredits'] = $this->seatRemainingCredits;
        }

        if (null !== $this->seatType) {
            $res['SeatType'] = $this->seatType;
        }

        if (null !== $this->totalSeats) {
            $res['TotalSeats'] = $this->totalSeats;
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
        if (isset($map['AssignedSeats'])) {
            $model->assignedSeats = $map['AssignedSeats'];
        }

        if (isset($map['SeatCredits'])) {
            $model->seatCredits = $map['SeatCredits'];
        }

        if (isset($map['SeatRefreshTime'])) {
            $model->seatRefreshTime = $map['SeatRefreshTime'];
        }

        if (isset($map['SeatRemainingCredits'])) {
            $model->seatRemainingCredits = $map['SeatRemainingCredits'];
        }

        if (isset($map['SeatType'])) {
            $model->seatType = $map['SeatType'];
        }

        if (isset($map['TotalSeats'])) {
            $model->totalSeats = $map['TotalSeats'];
        }

        return $model;
    }
}
