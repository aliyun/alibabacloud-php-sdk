<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AirticketOpen\V20230117\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AirticketOpen\V20230117\Models\DataHotelsValue\offers;
use AlibabaCloud\SDK\AirticketOpen\V20230117\Models\DataHotelsValue\rooms;

class DataHotelsValue extends Model
{
    /**
     * @var string
     */
    public $checkInDate;

    /**
     * @var string
     */
    public $checkOutDate;

    /**
     * @var rooms[]
     */
    public $rooms;

    /**
     * @var string
     */
    public $standardRoomId;

    /**
     * @var offers[]
     */
    public $offers;
    protected $_name = [
        'checkInDate' => 'CheckInDate',
        'checkOutDate' => 'CheckOutDate',
        'rooms' => 'Rooms',
        'standardRoomId' => 'StandardRoomId',
        'offers' => 'Offers',
    ];

    public function validate()
    {
        if (\is_array($this->rooms)) {
            Model::validateArray($this->rooms);
        }
        if (\is_array($this->offers)) {
            Model::validateArray($this->offers);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->checkInDate) {
            $res['CheckInDate'] = $this->checkInDate;
        }

        if (null !== $this->checkOutDate) {
            $res['CheckOutDate'] = $this->checkOutDate;
        }

        if (null !== $this->rooms) {
            if (\is_array($this->rooms)) {
                $res['Rooms'] = [];
                $n1 = 0;
                foreach ($this->rooms as $item1) {
                    $res['Rooms'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->standardRoomId) {
            $res['StandardRoomId'] = $this->standardRoomId;
        }

        if (null !== $this->offers) {
            if (\is_array($this->offers)) {
                $res['Offers'] = [];
                $n1 = 0;
                foreach ($this->offers as $item1) {
                    $res['Offers'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['CheckInDate'])) {
            $model->checkInDate = $map['CheckInDate'];
        }

        if (isset($map['CheckOutDate'])) {
            $model->checkOutDate = $map['CheckOutDate'];
        }

        if (isset($map['Rooms'])) {
            if (!empty($map['Rooms'])) {
                $model->rooms = [];
                $n1 = 0;
                foreach ($map['Rooms'] as $item1) {
                    $model->rooms[$n1] = rooms::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['StandardRoomId'])) {
            $model->standardRoomId = $map['StandardRoomId'];
        }

        if (isset($map['Offers'])) {
            if (!empty($map['Offers'])) {
                $model->offers = [];
                $n1 = 0;
                foreach ($map['Offers'] as $item1) {
                    $model->offers[$n1] = offers::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
