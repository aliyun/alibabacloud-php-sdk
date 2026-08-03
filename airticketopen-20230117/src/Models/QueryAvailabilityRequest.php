<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AirticketOpen\V20230117\Models;

use AlibabaCloud\Dara\Model;

class QueryAvailabilityRequest extends Model
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
    public $checkInDate;

    /**
     * @var string
     */
    public $checkOutDate;

    /**
     * @var int
     */
    public $childCount;

    /**
     * @var int[]
     */
    public $childrenAges;

    /**
     * @var int
     */
    public $roomCount;

    /**
     * @var string[]
     */
    public $standardHotelIds;

    /**
     * @var string
     */
    public $tracerId;
    protected $_name = [
        'accountNo' => 'AccountNo',
        'adultCount' => 'AdultCount',
        'checkInDate' => 'CheckInDate',
        'checkOutDate' => 'CheckOutDate',
        'childCount' => 'ChildCount',
        'childrenAges' => 'ChildrenAges',
        'roomCount' => 'RoomCount',
        'standardHotelIds' => 'StandardHotelIds',
        'tracerId' => 'TracerId',
    ];

    public function validate()
    {
        if (\is_array($this->childrenAges)) {
            Model::validateArray($this->childrenAges);
        }
        if (\is_array($this->standardHotelIds)) {
            Model::validateArray($this->standardHotelIds);
        }
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

        if (null !== $this->checkInDate) {
            $res['CheckInDate'] = $this->checkInDate;
        }

        if (null !== $this->checkOutDate) {
            $res['CheckOutDate'] = $this->checkOutDate;
        }

        if (null !== $this->childCount) {
            $res['ChildCount'] = $this->childCount;
        }

        if (null !== $this->childrenAges) {
            if (\is_array($this->childrenAges)) {
                $res['ChildrenAges'] = [];
                $n1 = 0;
                foreach ($this->childrenAges as $item1) {
                    $res['ChildrenAges'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->roomCount) {
            $res['RoomCount'] = $this->roomCount;
        }

        if (null !== $this->standardHotelIds) {
            if (\is_array($this->standardHotelIds)) {
                $res['StandardHotelIds'] = [];
                $n1 = 0;
                foreach ($this->standardHotelIds as $item1) {
                    $res['StandardHotelIds'][$n1] = $item1;
                    ++$n1;
                }
            }
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

        if (isset($map['CheckInDate'])) {
            $model->checkInDate = $map['CheckInDate'];
        }

        if (isset($map['CheckOutDate'])) {
            $model->checkOutDate = $map['CheckOutDate'];
        }

        if (isset($map['ChildCount'])) {
            $model->childCount = $map['ChildCount'];
        }

        if (isset($map['ChildrenAges'])) {
            if (!empty($map['ChildrenAges'])) {
                $model->childrenAges = [];
                $n1 = 0;
                foreach ($map['ChildrenAges'] as $item1) {
                    $model->childrenAges[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['RoomCount'])) {
            $model->roomCount = $map['RoomCount'];
        }

        if (isset($map['StandardHotelIds'])) {
            if (!empty($map['StandardHotelIds'])) {
                $model->standardHotelIds = [];
                $n1 = 0;
                foreach ($map['StandardHotelIds'] as $item1) {
                    $model->standardHotelIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['TracerId'])) {
            $model->tracerId = $map['TracerId'];
        }

        return $model;
    }
}
