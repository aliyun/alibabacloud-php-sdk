<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vip_1_0\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\ImportHotelConfigRequest\importHotelConfig;

class ImportHotelConfigRequest extends Model
{
    /**
     * @var string
     */
    public $hotelId;

    /**
     * @var importHotelConfig
     */
    public $importHotelConfig;
    protected $_name = [
        'hotelId' => 'HotelId',
        'importHotelConfig' => 'ImportHotelConfig',
    ];

    public function validate()
    {
        if (null !== $this->importHotelConfig) {
            $this->importHotelConfig->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->hotelId) {
            $res['HotelId'] = $this->hotelId;
        }

        if (null !== $this->importHotelConfig) {
            $res['ImportHotelConfig'] = null !== $this->importHotelConfig ? $this->importHotelConfig->toArray($noStream) : $this->importHotelConfig;
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
            $model->importHotelConfig = importHotelConfig::fromMap($map['ImportHotelConfig']);
        }

        return $model;
    }
}
