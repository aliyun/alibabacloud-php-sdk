<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AirticketOpen\V20230117\Models\GlobalHotelQueryOrderResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AirticketOpen\V20230117\Models\GlobalHotelQueryOrderResponseBody\data\roomStays\guests;

class roomStays extends Model
{
    /**
     * @var string
     */
    public $confirmationId;

    /**
     * @var guests[]
     */
    public $guests;

    /**
     * @var int
     */
    public $roomIndex;

    /**
     * @var string
     */
    public $roomName;
    protected $_name = [
        'confirmationId' => 'ConfirmationId',
        'guests' => 'Guests',
        'roomIndex' => 'RoomIndex',
        'roomName' => 'RoomName',
    ];

    public function validate()
    {
        if (\is_array($this->guests)) {
            Model::validateArray($this->guests);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->confirmationId) {
            $res['ConfirmationId'] = $this->confirmationId;
        }

        if (null !== $this->guests) {
            if (\is_array($this->guests)) {
                $res['Guests'] = [];
                $n1 = 0;
                foreach ($this->guests as $item1) {
                    $res['Guests'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->roomIndex) {
            $res['RoomIndex'] = $this->roomIndex;
        }

        if (null !== $this->roomName) {
            $res['RoomName'] = $this->roomName;
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
        if (isset($map['ConfirmationId'])) {
            $model->confirmationId = $map['ConfirmationId'];
        }

        if (isset($map['Guests'])) {
            if (!empty($map['Guests'])) {
                $model->guests = [];
                $n1 = 0;
                foreach ($map['Guests'] as $item1) {
                    $model->guests[$n1] = guests::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['RoomIndex'])) {
            $model->roomIndex = $map['RoomIndex'];
        }

        if (isset($map['RoomName'])) {
            $model->roomName = $map['RoomName'];
        }

        return $model;
    }
}
