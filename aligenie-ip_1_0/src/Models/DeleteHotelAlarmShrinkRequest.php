<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vip_1_0\Models;

use AlibabaCloud\Tea\Model;

class DeleteHotelAlarmShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $alarmsShrink;

    /**
     * @example a7***83
     *
     * @var string
     */
    public $hotelId;
    protected $_name = [
        'alarmsShrink' => 'Alarms',
        'hotelId'      => 'HotelId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->alarmsShrink) {
            $res['Alarms'] = $this->alarmsShrink;
        }
        if (null !== $this->hotelId) {
            $res['HotelId'] = $this->hotelId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteHotelAlarmShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Alarms'])) {
            $model->alarmsShrink = $map['Alarms'];
        }
        if (isset($map['HotelId'])) {
            $model->hotelId = $map['HotelId'];
        }

        return $model;
    }
}
