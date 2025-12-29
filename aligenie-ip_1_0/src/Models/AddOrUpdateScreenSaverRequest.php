<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vip_1_0\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\AddOrUpdateScreenSaverRequest\hotelScreenSaver;

class AddOrUpdateScreenSaverRequest extends Model
{
    /**
     * @var string
     */
    public $hotelId;

    /**
     * @var hotelScreenSaver
     */
    public $hotelScreenSaver;
    protected $_name = [
        'hotelId' => 'HotelId',
        'hotelScreenSaver' => 'HotelScreenSaver',
    ];

    public function validate()
    {
        if (null !== $this->hotelScreenSaver) {
            $this->hotelScreenSaver->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->hotelId) {
            $res['HotelId'] = $this->hotelId;
        }

        if (null !== $this->hotelScreenSaver) {
            $res['HotelScreenSaver'] = null !== $this->hotelScreenSaver ? $this->hotelScreenSaver->toArray($noStream) : $this->hotelScreenSaver;
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

        if (isset($map['HotelScreenSaver'])) {
            $model->hotelScreenSaver = hotelScreenSaver::fromMap($map['HotelScreenSaver']);
        }

        return $model;
    }
}
