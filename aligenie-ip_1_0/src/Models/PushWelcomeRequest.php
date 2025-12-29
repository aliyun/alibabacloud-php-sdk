<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vip_1_0\Models;

use AlibabaCloud\Dara\Model;

class PushWelcomeRequest extends Model
{
    /**
     * @var string
     */
    public $hotelId;

    /**
     * @var string
     */
    public $roomName;

    /**
     * @var string
     */
    public $roomNo;

    /**
     * @var string
     */
    public $welcomeMusicUrl;

    /**
     * @var string
     */
    public $welcomeText;
    protected $_name = [
        'hotelId' => 'HotelId',
        'roomName' => 'RoomName',
        'roomNo' => 'RoomNo',
        'welcomeMusicUrl' => 'WelcomeMusicUrl',
        'welcomeText' => 'WelcomeText',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->hotelId) {
            $res['HotelId'] = $this->hotelId;
        }

        if (null !== $this->roomName) {
            $res['RoomName'] = $this->roomName;
        }

        if (null !== $this->roomNo) {
            $res['RoomNo'] = $this->roomNo;
        }

        if (null !== $this->welcomeMusicUrl) {
            $res['WelcomeMusicUrl'] = $this->welcomeMusicUrl;
        }

        if (null !== $this->welcomeText) {
            $res['WelcomeText'] = $this->welcomeText;
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
        if (isset($map['HotelId'])) {
            $model->hotelId = $map['HotelId'];
        }

        if (isset($map['RoomName'])) {
            $model->roomName = $map['RoomName'];
        }

        if (isset($map['RoomNo'])) {
            $model->roomNo = $map['RoomNo'];
        }

        if (isset($map['WelcomeMusicUrl'])) {
            $model->welcomeMusicUrl = $map['WelcomeMusicUrl'];
        }

        if (isset($map['WelcomeText'])) {
            $model->welcomeText = $map['WelcomeText'];
        }

        return $model;
    }
}
