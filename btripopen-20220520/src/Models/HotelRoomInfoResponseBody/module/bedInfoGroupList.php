<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\HotelRoomInfoResponseBody\module;

use AlibabaCloud\SDK\BtripOpen\V20220520\Models\HotelRoomInfoResponseBody\module\bedInfoGroupList\bedInfos;
use AlibabaCloud\Tea\Model;

class bedInfoGroupList extends Model
{
    /**
     * @var bedInfos[]
     */
    public $bedInfos;
    protected $_name = [
        'bedInfos' => 'bed_infos',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bedInfos) {
            $res['bed_infos'] = [];
            if (null !== $this->bedInfos && \is_array($this->bedInfos)) {
                $n = 0;
                foreach ($this->bedInfos as $item) {
                    $res['bed_infos'][$n++] = null !== $item ? $item->toMap() : $item;
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
        if (isset($map['bed_infos'])) {
            if (!empty($map['bed_infos'])) {
                $model->bedInfos = [];
                $n               = 0;
                foreach ($map['bed_infos'] as $item) {
                    $model->bedInfos[$n++] = null !== $item ? bedInfos::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
