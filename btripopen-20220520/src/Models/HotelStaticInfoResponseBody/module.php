<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\HotelStaticInfoResponseBody;

use AlibabaCloud\SDK\BtripOpen\V20220520\Models\HotelStaticInfoResponseBody\module\hotelStaticInfos;
use AlibabaCloud\Tea\Model;

class module extends Model
{
    /**
     * @var hotelStaticInfos[]
     */
    public $hotelStaticInfos;
    protected $_name = [
        'hotelStaticInfos' => 'hotel_static_infos',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->hotelStaticInfos) {
            $res['hotel_static_infos'] = [];
            if (null !== $this->hotelStaticInfos && \is_array($this->hotelStaticInfos)) {
                $n = 0;
                foreach ($this->hotelStaticInfos as $item) {
                    $res['hotel_static_infos'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return module
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['hotel_static_infos'])) {
            if (!empty($map['hotel_static_infos'])) {
                $model->hotelStaticInfos = [];
                $n                       = 0;
                foreach ($map['hotel_static_infos'] as $item) {
                    $model->hotelStaticInfos[$n++] = null !== $item ? hotelStaticInfos::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
