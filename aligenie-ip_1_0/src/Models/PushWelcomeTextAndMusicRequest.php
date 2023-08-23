<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vip_1_0\Models;

use AlibabaCloud\Tea\Model;

class PushWelcomeTextAndMusicRequest extends Model
{
    /**
     * @example af7***536
     *
     * @var string
     */
    public $hotelId;

    /**
     * @example 1211
     *
     * @var string
     */
    public $roomNo;

    /**
     * @var string[]
     */
    public $templateVariable;
    protected $_name = [
        'hotelId'          => 'HotelId',
        'roomNo'           => 'RoomNo',
        'templateVariable' => 'TemplateVariable',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->hotelId) {
            $res['HotelId'] = $this->hotelId;
        }
        if (null !== $this->roomNo) {
            $res['RoomNo'] = $this->roomNo;
        }
        if (null !== $this->templateVariable) {
            $res['TemplateVariable'] = $this->templateVariable;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return PushWelcomeTextAndMusicRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['HotelId'])) {
            $model->hotelId = $map['HotelId'];
        }
        if (isset($map['RoomNo'])) {
            $model->roomNo = $map['RoomNo'];
        }
        if (isset($map['TemplateVariable'])) {
            $model->templateVariable = $map['TemplateVariable'];
        }

        return $model;
    }
}
