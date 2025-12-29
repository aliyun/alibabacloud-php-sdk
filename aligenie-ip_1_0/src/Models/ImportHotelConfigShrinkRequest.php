<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vip_1_0\Models;

use AlibabaCloud\Dara\Model;

class ImportHotelConfigShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $hotelId;

    /**
     * @var string
     */
    public $importHotelConfigShrink;
    protected $_name = [
        'hotelId' => 'HotelId',
        'importHotelConfigShrink' => 'ImportHotelConfig',
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

        if (null !== $this->importHotelConfigShrink) {
            $res['ImportHotelConfig'] = $this->importHotelConfigShrink;
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

        if (isset($map['ImportHotelConfig'])) {
            $model->importHotelConfigShrink = $map['ImportHotelConfig'];
        }

        return $model;
    }
}
