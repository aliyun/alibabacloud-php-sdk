<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vip_1_0\Models;

use AlibabaCloud\Dara\Model;

class PushWelcomeTextAndMusicShrinkRequest extends Model
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
    public $templateVariableShrink;
    protected $_name = [
        'hotelId' => 'HotelId',
        'roomName' => 'RoomName',
        'roomNo' => 'RoomNo',
        'templateVariableShrink' => 'TemplateVariable',
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

        if (null !== $this->templateVariableShrink) {
            $res['TemplateVariable'] = $this->templateVariableShrink;
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

        if (isset($map['TemplateVariable'])) {
            $model->templateVariableShrink = $map['TemplateVariable'];
        }

        return $model;
    }
}
