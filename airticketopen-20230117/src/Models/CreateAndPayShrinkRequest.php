<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AirticketOpen\V20230117\Models;

use AlibabaCloud\Dara\Model;

class CreateAndPayShrinkRequest extends Model
{
    /**
     * @var int
     */
    public $accountNo;

    /**
     * @var string
     */
    public $contactShrink;

    /**
     * @var string
     */
    public $externalOrderNo;

    /**
     * @var string
     */
    public $guestsShrink;

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
        'contactShrink' => 'Contact',
        'externalOrderNo' => 'ExternalOrderNo',
        'guestsShrink' => 'Guests',
        'itemOfferId' => 'ItemOfferId',
        'roomCount' => 'RoomCount',
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

        if (null !== $this->contactShrink) {
            $res['Contact'] = $this->contactShrink;
        }

        if (null !== $this->externalOrderNo) {
            $res['ExternalOrderNo'] = $this->externalOrderNo;
        }

        if (null !== $this->guestsShrink) {
            $res['Guests'] = $this->guestsShrink;
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
            $model->contactShrink = $map['Contact'];
        }

        if (isset($map['ExternalOrderNo'])) {
            $model->externalOrderNo = $map['ExternalOrderNo'];
        }

        if (isset($map['Guests'])) {
            $model->guestsShrink = $map['Guests'];
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
