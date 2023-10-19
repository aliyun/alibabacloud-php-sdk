<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\HotelIndexInfoResponseBody\module;

use AlibabaCloud\Tea\Model;

class items extends Model
{
    /**
     * @var string
     */
    public $hotelId;

    /**
     * @var string
     */
    public $hotelStatus;
    protected $_name = [
        'hotelId'     => 'hotel_id',
        'hotelStatus' => 'hotel_status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->hotelId) {
            $res['hotel_id'] = $this->hotelId;
        }
        if (null !== $this->hotelStatus) {
            $res['hotel_status'] = $this->hotelStatus;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return items
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['hotel_id'])) {
            $model->hotelId = $map['hotel_id'];
        }
        if (isset($map['hotel_status'])) {
            $model->hotelStatus = $map['hotel_status'];
        }

        return $model;
    }
}
