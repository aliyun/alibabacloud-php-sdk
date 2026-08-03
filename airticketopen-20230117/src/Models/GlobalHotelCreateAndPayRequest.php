<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AirticketOpen\V20230117\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AirticketOpen\V20230117\Models\GlobalHotelCreateAndPayRequest\contact;
use AlibabaCloud\SDK\AirticketOpen\V20230117\Models\GlobalHotelCreateAndPayRequest\guests;

class GlobalHotelCreateAndPayRequest extends Model
{
    /**
     * @var int
     */
    public $accountNo;

    /**
     * @var contact
     */
    public $contact;

    /**
     * @var string
     */
    public $externalOrderNo;

    /**
     * @var guests[][]
     */
    public $guests;

    /**
     * @var string
     */
    public $itemOfferId;

    /**
     * @var int
     */
    public $roomCount;

    /**
     * @var string
     */
    public $tracerId;
    protected $_name = [
        'accountNo' => 'AccountNo',
        'contact' => 'Contact',
        'externalOrderNo' => 'ExternalOrderNo',
        'guests' => 'Guests',
        'itemOfferId' => 'ItemOfferId',
        'roomCount' => 'RoomCount',
        'tracerId' => 'TracerId',
    ];

    public function validate()
    {
        if (null !== $this->contact) {
            $this->contact->validate();
        }
        if (\is_array($this->guests)) {
            Model::validateArray($this->guests);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accountNo) {
            $res['AccountNo'] = $this->accountNo;
        }

        if (null !== $this->contact) {
            $res['Contact'] = null !== $this->contact ? $this->contact->toArray($noStream) : $this->contact;
        }

        if (null !== $this->externalOrderNo) {
            $res['ExternalOrderNo'] = $this->externalOrderNo;
        }

        if (null !== $this->guests) {
            if (\is_array($this->guests)) {
                $res['Guests'] = [];
                $n1 = 0;
                foreach ($this->guests as $item1) {
                    if (\is_array($item1)) {
                        $res['Guests'][$n1] = [];
                        $n2 = 0;
                        foreach ($item1 as $item2) {
                            $res['Guests'][$n1][$n2] = null !== $item2 ? $item2->toArray($noStream) : $item2;
                            ++$n2;
                        }
                    }
                    ++$n1;
                }
            }
        }

        if (null !== $this->itemOfferId) {
            $res['ItemOfferId'] = $this->itemOfferId;
        }

        if (null !== $this->roomCount) {
            $res['RoomCount'] = $this->roomCount;
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

        if (isset($map['Contact'])) {
            $model->contact = contact::fromMap($map['Contact']);
        }

        if (isset($map['ExternalOrderNo'])) {
            $model->externalOrderNo = $map['ExternalOrderNo'];
        }

        if (isset($map['Guests'])) {
            if (!empty($map['Guests'])) {
                $model->guests = [];
                $n1 = 0;
                foreach ($map['Guests'] as $item1) {
                    if (!empty($item1)) {
                        $model->guests[$n1] = [];
                        $n2 = 0;
                        foreach ($item1 as $item2) {
                            $model->guests[$n1][$n2] = guests::fromMap($item2);
                            ++$n2;
                        }
                    }
                    ++$n1;
                }
            }
        }

        if (isset($map['ItemOfferId'])) {
            $model->itemOfferId = $map['ItemOfferId'];
        }

        if (isset($map['RoomCount'])) {
            $model->roomCount = $map['RoomCount'];
        }

        if (isset($map['TracerId'])) {
            $model->tracerId = $map['TracerId'];
        }

        return $model;
    }
}
