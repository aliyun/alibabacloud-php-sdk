<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\HotelStaticInfoResponseBody\module\hotelStaticInfos\roomInfos;

use AlibabaCloud\SDK\BtripOpen\V20220520\Models\HotelStaticInfoResponseBody\module\hotelStaticInfos\roomInfos\bedInfoGroupList\bedInfos;
use AlibabaCloud\Tea\Model;

class bedInfoGroupList extends Model
{
    /**
     * @var bedInfos[]
     */
    public $bedInfos;
    protected $_name = [
        'bedInfos' => 'bed_Infos',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bedInfos) {
            $res['bed_Infos'] = [];
            if (null !== $this->bedInfos && \is_array($this->bedInfos)) {
                $n = 0;
                foreach ($this->bedInfos as $item) {
                    $res['bed_Infos'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return bedInfoGroupList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['bed_Infos'])) {
            if (!empty($map['bed_Infos'])) {
                $model->bedInfos = [];
                $n               = 0;
                foreach ($map['bed_Infos'] as $item) {
                    $model->bedInfos[$n++] = null !== $item ? bedInfos::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
