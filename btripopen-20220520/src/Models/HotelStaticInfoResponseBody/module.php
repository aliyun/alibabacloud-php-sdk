<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\HotelStaticInfoResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\HotelStaticInfoResponseBody\module\hotelStaticInfos;

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
        if (\is_array($this->hotelStaticInfos)) {
            Model::validateArray($this->hotelStaticInfos);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->hotelStaticInfos) {
            if (\is_array($this->hotelStaticInfos)) {
                $res['hotel_static_infos'] = [];
                $n1 = 0;
                foreach ($this->hotelStaticInfos as $item1) {
                    $res['hotel_static_infos'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['hotel_static_infos'])) {
            if (!empty($map['hotel_static_infos'])) {
                $model->hotelStaticInfos = [];
                $n1 = 0;
                foreach ($map['hotel_static_infos'] as $item1) {
                    $model->hotelStaticInfos[$n1] = hotelStaticInfos::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
