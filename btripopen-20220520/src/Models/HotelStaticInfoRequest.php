<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models;

use AlibabaCloud\Tea\Model;

class HotelStaticInfoRequest extends Model
{
    /**
     * @var string[]
     */
    public $hotelIds;
    protected $_name = [
        'hotelIds' => 'hotel_ids',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->hotelIds) {
            $res['hotel_ids'] = $this->hotelIds;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return HotelStaticInfoRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['hotel_ids'])) {
            if (!empty($map['hotel_ids'])) {
                $model->hotelIds = $map['hotel_ids'];
            }
        }

        return $model;
    }
}
