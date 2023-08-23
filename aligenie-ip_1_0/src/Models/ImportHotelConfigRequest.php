<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vip_1_0\Models;

use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\ImportHotelConfigRequest\importHotelConfig;
use AlibabaCloud\Tea\Model;

class ImportHotelConfigRequest extends Model
{
    /**
     * @example a7***83
     *
     * @var string
     */
    public $hotelId;

    /**
     * @var importHotelConfig
     */
    public $importHotelConfig;
    protected $_name = [
        'hotelId'           => 'HotelId',
        'importHotelConfig' => 'ImportHotelConfig',
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
        if (null !== $this->importHotelConfig) {
            $res['ImportHotelConfig'] = null !== $this->importHotelConfig ? $this->importHotelConfig->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ImportHotelConfigRequest
     */
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
