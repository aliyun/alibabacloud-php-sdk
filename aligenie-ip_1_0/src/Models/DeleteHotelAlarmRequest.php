<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vip_1_0\Models;

use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\DeleteHotelAlarmRequest\alarms;
use AlibabaCloud\Tea\Model;

class DeleteHotelAlarmRequest extends Model
{
    /**
     * @var alarms[]
     */
    public $alarms;

    /**
     * @example a7***83
     *
     * @var string
     */
    public $hotelId;
    protected $_name = [
        'alarms'  => 'Alarms',
        'hotelId' => 'HotelId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->alarms) {
            $res['Alarms'] = [];
            if (null !== $this->alarms && \is_array($this->alarms)) {
                $n = 0;
                foreach ($this->alarms as $item) {
                    $res['Alarms'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->hotelId) {
            $res['HotelId'] = $this->hotelId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteHotelAlarmRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Alarms'])) {
            if (!empty($map['Alarms'])) {
                $model->alarms = [];
                $n             = 0;
                foreach ($map['Alarms'] as $item) {
                    $model->alarms[$n++] = null !== $item ? alarms::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['HotelId'])) {
            $model->hotelId = $map['HotelId'];
        }

        return $model;
    }
}
