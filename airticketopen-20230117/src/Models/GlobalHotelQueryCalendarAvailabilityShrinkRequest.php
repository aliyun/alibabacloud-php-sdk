<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AirticketOpen\V20230117\Models;

use AlibabaCloud\Dara\Model;

class GlobalHotelQueryCalendarAvailabilityShrinkRequest extends Model
{
    /**
     * @var int
     */
    public $accountNo;

    /**
     * @var int
     */
    public $adultCount;

    /**
     * @var string
     */
    public $checkInDateEnd;

    /**
     * @var string
     */
    public $checkInDateStart;

    /**
     * @var int
     */
    public $childCount;

    /**
     * @var string
     */
    public $childrenAgesShrink;

    /**
     * @var int
     */
    public $roomCount;

    /**
     * @var string
     */
    public $standardHotelIdsShrink;

    /**
     * @var string
     */
    public $tracerId;
    protected $_name = [
        'accountNo' => 'AccountNo',
        'adultCount' => 'AdultCount',
        'checkInDateEnd' => 'CheckInDateEnd',
        'checkInDateStart' => 'CheckInDateStart',
        'childCount' => 'ChildCount',
        'childrenAgesShrink' => 'ChildrenAges',
        'roomCount' => 'RoomCount',
        'standardHotelIdsShrink' => 'StandardHotelIds',
        'tracerId' => 'TracerId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accountNo) {
            $res['AccountNo'] = $this->accountNo;
        }

        if (null !== $this->adultCount) {
            $res['AdultCount'] = $this->adultCount;
        }

        if (null !== $this->checkInDateEnd) {
            $res['CheckInDateEnd'] = $this->checkInDateEnd;
        }

        if (null !== $this->checkInDateStart) {
            $res['CheckInDateStart'] = $this->checkInDateStart;
        }

        if (null !== $this->childCount) {
            $res['ChildCount'] = $this->childCount;
        }

        if (null !== $this->childrenAgesShrink) {
            $res['ChildrenAges'] = $this->childrenAgesShrink;
        }

        if (null !== $this->roomCount) {
            $res['RoomCount'] = $this->roomCount;
        }

        if (null !== $this->standardHotelIdsShrink) {
            $res['StandardHotelIds'] = $this->standardHotelIdsShrink;
        }

        if (null !== $this->tracerId) {
            $res['TracerId'] = $this->tracerId;
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
        if (isset($map['AccountNo'])) {
            $model->accountNo = $map['AccountNo'];
        }

        if (isset($map['AdultCount'])) {
            $model->adultCount = $map['AdultCount'];
        }

        if (isset($map['CheckInDateEnd'])) {
            $model->checkInDateEnd = $map['CheckInDateEnd'];
        }

        if (isset($map['CheckInDateStart'])) {
            $model->checkInDateStart = $map['CheckInDateStart'];
        }

        if (isset($map['ChildCount'])) {
            $model->childCount = $map['ChildCount'];
        }

        if (isset($map['ChildrenAges'])) {
            $model->childrenAgesShrink = $map['ChildrenAges'];
        }

        if (isset($map['RoomCount'])) {
            $model->roomCount = $map['RoomCount'];
        }

        if (isset($map['StandardHotelIds'])) {
            $model->standardHotelIdsShrink = $map['StandardHotelIds'];
        }

        if (isset($map['TracerId'])) {
            $model->tracerId = $map['TracerId'];
        }

        return $model;
    }
}
