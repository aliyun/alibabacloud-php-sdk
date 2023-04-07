<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models;

use AlibabaCloud\Tea\Model;

class HotelStaticInfoShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $hotelIdsShrink;
    protected $_name = [
        'hotelIdsShrink' => 'hotel_ids',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->hotelIdsShrink) {
            $res['hotel_ids'] = $this->hotelIdsShrink;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return HotelStaticInfoShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['hotel_ids'])) {
            $model->hotelIdsShrink = $map['hotel_ids'];
        }

        return $model;
    }
}
