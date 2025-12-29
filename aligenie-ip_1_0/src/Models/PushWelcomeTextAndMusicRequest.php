<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vip_1_0\Models;

use AlibabaCloud\Dara\Model;

class PushWelcomeTextAndMusicRequest extends Model
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
     * @var string[]
     */
    public $templateVariable;
    protected $_name = [
        'hotelId' => 'HotelId',
        'roomName' => 'RoomName',
        'roomNo' => 'RoomNo',
        'templateVariable' => 'TemplateVariable',
    ];

    public function validate()
    {
        if (\is_array($this->templateVariable)) {
            Model::validateArray($this->templateVariable);
        }
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

        if (null !== $this->templateVariable) {
            if (\is_array($this->templateVariable)) {
                $res['TemplateVariable'] = [];
                foreach ($this->templateVariable as $key1 => $value1) {
                    $res['TemplateVariable'][$key1] = $value1;
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
            if (!empty($map['TemplateVariable'])) {
                $model->templateVariable = [];
                foreach ($map['TemplateVariable'] as $key1 => $value1) {
                    $model->templateVariable[$key1] = $value1;
                }
            }
        }

        return $model;
    }
}
