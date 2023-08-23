<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vip_1_0\Models;

use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\AddOrUpdateScreenSaverRequest\hotelScreenSaver;
use AlibabaCloud\Tea\Model;

class AddOrUpdateScreenSaverRequest extends Model
{
    /**
     * @example a7a3***013
     *
     * @var string
     */
    public $hotelId;

    /**
     * @var hotelScreenSaver
     */
    public $hotelScreenSaver;
    protected $_name = [
        'hotelId'          => 'HotelId',
        'hotelScreenSaver' => 'HotelScreenSaver',
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
        if (null !== $this->hotelScreenSaver) {
            $res['HotelScreenSaver'] = null !== $this->hotelScreenSaver ? $this->hotelScreenSaver->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AddOrUpdateScreenSaverRequest
     */
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
