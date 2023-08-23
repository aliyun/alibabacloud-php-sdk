<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vip_1_0\Models;

use AlibabaCloud\Tea\Model;

class PushWelcomeTextAndMusicShrinkRequest extends Model
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
     * @var string
     */
    public $templateVariableShrink;
    protected $_name = [
        'hotelId'                => 'HotelId',
        'roomNo'                 => 'RoomNo',
        'templateVariableShrink' => 'TemplateVariable',
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
        if (null !== $this->templateVariableShrink) {
            $res['TemplateVariable'] = $this->templateVariableShrink;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return PushWelcomeTextAndMusicShrinkRequest
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
            $model->templateVariableShrink = $map['TemplateVariable'];
        }

        return $model;
    }
}
